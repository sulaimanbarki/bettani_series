<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\QuizQuestion;
use App\Models\Section;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{

    public function resultDetails($id)
    {
        $id = base64_decode($id);
        $quiz = Quiz::find($id);
        return view('front.pages.resultDetails', compact('quiz'));
    }

    // quiz_result
    // public function quiz_result(Request $request)
    // {
    //     $quiz = Quiz::find($request->quiz_id);
    //     $quiz_questions = QuizQuestion::where('quiz_id', $request->quiz_id)->get();
    //     $correct_answers = 0;
    //     foreach ($quiz_questions as $question) {
    //         $qstn = Question::find($question->question_id);
    //         if ($qstn->answer == $question->result) {
    //             $correct_answers++;
    //         }
    //     }
    //     $quiz->marks = $correct_answers;
    //     $quiz->save();

    //     return view('front.pages.quiz_result', compact('quiz'));
    // }

    public function quiz_result(Request $request)
{
    // Find the quiz
    $quiz = Quiz::find($request->quiz_id);
    if (!$quiz) {
        return redirect()->back()->with('error', 'Quiz not found');
    }

    // Fetch all quiz questions and their correct answers in a single query
    $quiz_questions = QuizQuestion::where('quiz_id', $request->quiz_id)
        ->join('questions', 'quiz_questions.question_id', '=', 'questions.id')
        ->select('quiz_questions.result', 'questions.answer')
        ->get();

    // Calculate correct answers
    $correct_answers = $quiz_questions->filter(function ($question) {
        return $question->result !== null && $question->result === $question->answer;
    })->count();

    // Update quiz marks
    $quiz->marks = $correct_answers;
    $quiz->save();

    // Return the result view
    return view('front.pages.quiz_result', compact('quiz'));
}


    public function switchQuestion(Request $request)
    {
        $question_id = $request->question_id;
        $quiz_id = $request->quiz_id;
        $question = QuizQuestion::where('quiz_id', $request->quiz_id)
            ->where('question_id', $request->question_id)
            ->first();
        $activeSwitcher = QuizQuestion::where('quiz_id', $request->quiz_id)
            ->where('question_id', $request->activeSwitcher)
            ->first()->result;
        $next_question = Question::where('id', $request->question_id)->first();
        if (!$next_question) {
            return response()->json(['status' => 'error', 'message' => 'No more questions']);
        }
        $data = [
            'question' => Question::find($question_id)->description,
            'quiz_id' => $quiz_id,
            'question_id' => $question_id,
            'quiz_question_id' => $question->id,
            'answer' => QuizQuestion::where('quiz_id', $quiz_id)->where('question_id', $question_id)->first()->result,
            'nth_question' => QuizQuestion::where('quiz_id', $quiz_id)->where('id', '<', $question->id)->count() + 1,
            'activeSwitcher' => $activeSwitcher,
        ];
        return response()->json($data);
    }
    public function createQuiz(Request $request)
    {
        $section_quiz = $request->section_quiz;
        $num_of_questions = $request->input('quiz_numbers');
        $unit_id = $request->input('unit_id');
        $section_id = $request->input('section_id');
        // random questions where unit_id = $unit_id
        if ($request->section_quiz) {
            $units = Unit::where('section_id', $section_id)->get();
            $questions = collect();

            for ($i = 1; $i <= $num_of_questions; $i++) {
                // select random unit from $units
                $random_unit = $units->random();
                $random_question = Question::where('unit_id', $random_unit->id)->where('type', 'mcqs')->inRandomOrder()->first();
                $questions[] = $random_question;
            }
            $unit_id = 0;
        } else {
            $questions = Question::where('unit_id', $unit_id)->where('type', 'mcqs')->inRandomOrder()->take($num_of_questions)->get();
        }
        $questions_count = $questions->count();
        date_default_timezone_set('Asia/Karachi');
        // dd($request->section_quiz);
        $quiz = Quiz::create([
            'title' => $request->section_quiz ? 'Quiz from whole Units' : Unit::find($unit_id)->title,
            'user_id' => Auth::user()->id,
            'marks' => 0,
            'startingtime' => date('Y-m-d H:i:s'),
            'endingtime' => date('Y-m-d H:i:s', strtotime('+' . $questions_count . ' minutes')),
            'type' => 2,
            'quiz_in_unit' => $unit_id,
            'quiz_in_section' => $section_quiz ? $section_id : 0,
            'district' => "Peshawar",
            'result' => 0,
        ]);

        foreach ($questions as $question) {
            QuizQuestion::create([
                'quiz_id' => $quiz->id,
                'question_id' => $question->id,
                'result' => null,
                'user_id' => Auth::User()->id
            ]);
        }
        $question = QuizQuestion::where('quiz_id', $quiz->id)->get();

        // Fetch all required data in one query
        $quiz = Quiz::with('questions')->find($quiz->id);
        $questionIds = $question->pluck('question_id');
        $questionsData = Question::whereIn('id', $questionIds)->pluck('description', 'id');
        $quizQuestionCounts = QuizQuestion::where('quiz_id', $quiz->id)
            ->selectRaw('quiz_id, COUNT(*) as count')
            ->groupBy('quiz_id')
            ->pluck('count', 'quiz_id');

        // Transform data efficiently
        $data = $question->map(function ($item) use ($quiz, $questionsData, $quizQuestionCounts) {
            return (object) [ // Convert to an object
                'quiz_title' => $quiz->title,
                'question_count' => $quizQuestionCounts[$item->quiz_id] ?? 0,
                'question' => $questionsData[$item->question_id] ?? 'Unknown',
                'startingtime' => $quiz->startingtime,
                'quiz_id' => $item->quiz_id,
                'question_id' => $item->question_id,
            ];
        });


        // dd($data);
        return view('front.pages.quiz', compact('data'));
    }

    // get_quiz
    public function get_quiz(Request $request)
    {
        $quiz_id = $request->input('quiz_id');
        $question_id = $request->input('question_id');
        $answer = $request->input('answer');
        $type = $request->input('type');

        // Update answer if provided
        if ($answer) {
            QuizQuestion::where('quiz_id', $quiz_id)
                ->where('question_id', $question_id)
                ->update(['result' => $answer]);
        }

        // Fetch the current quiz question only once
        $question = QuizQuestion::where('quiz_id', $quiz_id)
            ->where('question_id', $question_id)
            ->first();

        if (!$question) {
            return response()->json(['status' => 'error', 'message' => 'Invalid question']);
        }

        // Determine the next or previous question
        if ($type == 'next') {
            $question = QuizQuestion::where('quiz_id', $quiz_id)
                ->where('id', '>', $question->id)
                ->orderBy('id')
                ->first();
        } elseif ($type == 'prev') {
            $question = QuizQuestion::where('quiz_id', $quiz_id)
                ->where('id', '<', $question->id)
                ->orderBy('id', 'desc')
                ->first();
        }

        // If no next/prev question found, return error
        if (!$question) {
            return response()->json(['status' => 'error', 'message' => 'No more questions']);
        }

        $question_id = $question->question_id;
        $next_question = Question::find($question_id);

        if (!$next_question) {
            return response()->json(['status' => 'error', 'message' => 'No more questions']);
        }

        // Fetch answer and question count in a single query
        $quiz_question_data = QuizQuestion::select('result')
            ->where('quiz_id', $quiz_id)
            ->where('question_id', $question_id)
            ->first();

        $nth_question = QuizQuestion::where('quiz_id', $quiz_id)
            ->where('id', '<', $question->id)
            ->count() + 1;

        return response()->json([
            'question' => $next_question->description,
            'quiz_id' => $quiz_id,
            'question_id' => $question_id,
            'quiz_question_id' => $question->id,
            'answer' => $quiz_question_data->result ?? null,
            'nth_question' => $nth_question,
        ]);
    }

    public function bulk_update_quiz(Request $request)
    {
        $quiz_id = $request->input('quiz_id');
        $attempted_answers = $request->input('attempted_answers'); // Array of { question_id => answer }

        // Validate inputs
        if (!$quiz_id || !$attempted_answers) {
            return response()->json(['status' => 'error', 'message' => 'Invalid data']);
        }

        // Update all answers in the database
        foreach ($attempted_answers as $question_id => $answer) {
            QuizQuestion::where('quiz_id', $quiz_id)
                ->where('question_id', $question_id)
                ->update(['result' => $answer]);
        }

        return response()->json(['status' => 'success', 'message' => 'Quiz progress saved']);
    }


    // wrong_questions, a function that will return the wrong questions of the quiz
    public function wrong_questions(Request $request)
    {
        $quiz_id = $request->input('quiz_id');
        $questions = QuizQuestion::where('quiz_id', $quiz_id)->get();
        // for each questions, match the result in the question table and fetch only when the result is not equal to the result in the quiz question table
        $data = $questions->transform(function ($item, $key) {
            $item->question = Question::find($item->question_id)->description;
            $item->result = Question::find($item->question_id)->answer;
            $quiz_question_result = QuizQuestion::where('quiz_id', $item->quiz_id)->where('question_id', $item->question_id)->first()->result;
            if ($item->result != $quiz_question_result) {
                return $item;
            }
        });
        // dd($data);
        return view('front.pages.wrong_questions', compact('data'));
    }

    // get_mcqs
    public function get_mcqs(Request $request)
    {
        $unit_id = $request->input('unit_id');
        $mcqs = Unit::where('id', $unit_id)->first()->mcqs ?? 0;
        return response()->json(['mcqs' => $mcqs]);
    }
}
