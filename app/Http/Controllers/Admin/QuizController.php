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
    public function quiz_result(Request $request)
    {
        $quiz = Quiz::find($request->quiz_id);
        $quiz_questions = QuizQuestion::where('quiz_id', $request->quiz_id)->get();
        $correct_answers = 0;
        foreach ($quiz_questions as $question) {
            $qstn = Question::find($question->question_id);
            if ($qstn->answer == $question->result) {
                $correct_answers++;
            }
        }
        $quiz->marks = $correct_answers;
        $quiz->save();

        return view('front.pages.quiz_result', compact('quiz'));
    }


    public function switchQuestion(Request $request)
    {
        $quiz_id = $request->quiz_id;
        $question_id = $request->question_id;
        $active_switcher_id = $request->activeSwitcher;

        // Fetch the necessary QuizQuestion entries in one query
        $quiz_questions = QuizQuestion::where('quiz_id', $quiz_id)
            ->whereIn('question_id', [$question_id, $active_switcher_id])
            ->get()
            ->keyBy('question_id'); // Store by question_id for easy access

        // Get the requested question
        $question = $quiz_questions[$question_id] ?? null;
        $activeSwitcher = $quiz_questions[$active_switcher_id]->result ?? null;

        if (!$question) {
            return response()->json(['status' => 'error', 'message' => 'Question not found']);
        }

        // Fetch the next question
        $next_question = Question::find($question_id);
        if (!$next_question) {
            return response()->json(['status' => 'error', 'message' => 'No more questions']);
        }

        // Get question answer and nth question count
        $answer = $question->result;
        $nth_question = QuizQuestion::where('quiz_id', $quiz_id)->where('id', '<', $question->id)->count() + 1;

        return response()->json([
            'question' => $next_question->description,
            'quiz_id' => $quiz_id,
            'question_id' => $question_id,
            'quiz_question_id' => $question->id,
            'answer' => $answer,
            'nth_question' => $nth_question,
            'activeSwitcher' => $activeSwitcher,
        ]);
    }
    public function createQuiz(Request $request)
    {
        $section_quiz = $request->section_quiz;
        $num_of_questions = $request->input('quiz_numbers');
        $unit_id = $request->input('unit_id');
        $section_id = $request->input('section_id');
        $user_id = Auth::id(); // Store user_id to avoid multiple calls

        if ($section_quiz) {
            // Get all units for the given section
            $unit_ids = Unit::where('section_id', $section_id)->pluck('id');

            // Fetch random questions from these units at once
            $questions = Question::whereIn('unit_id', $unit_ids)
                ->where('type', 'mcqs')
                ->inRandomOrder()
                ->take($num_of_questions)
                ->get();

            $unit_id = 0;
        } else {
            // Fetch random questions from a specific unit
            $questions = Question::where('unit_id', $unit_id)
                ->where('type', 'mcqs')
                ->inRandomOrder()
                ->take($num_of_questions)
                ->get();
        }

        $questions_count = $questions->count();
        date_default_timezone_set('Asia/Karachi');

        // Create Quiz
        $quiz = Quiz::create([
            'title' => $section_quiz ? 'Quiz from whole Units' : Unit::find($unit_id)?->title,
            'user_id' => $user_id,
            'marks' => 0,
            'startingtime' => now(),
            'endingtime' => now()->addMinutes($questions_count),
            'type' => 2,
            'quiz_in_unit' => $unit_id,
            'quiz_in_section' => $section_quiz ? $section_id : 0,
            'district' => "Peshawar",
            'result' => 0,
        ]);

        // Bulk Insert Quiz Questions (Avoid Looping Insert)
        $quiz_questions = $questions->map(fn($q) => [
            'quiz_id' => $quiz->id,
            'question_id' => $q->id,
            'result' => null,
            'user_id' => $user_id,
            'created_at' => now(),
            'updated_at' => now(),
        ])->toArray();

        QuizQuestion::insert($quiz_questions);

        // Load related models in one go instead of querying multiple times
        $data = QuizQuestion::where('quiz_id', $quiz->id)
            ->with(['quiz:id,title,startingtime', 'question:id,description'])
            ->get()
            ->transform(fn($item) => [
                'quiz_title' => $item->quiz->title,
                'question_count' => count($quiz_questions),
                'question' => $item->question->description,
                'startingtime' => $item->quiz->startingtime,
            ]);

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
        $mcqs = Unit::where('id', $unit_id)->first()->mcqs;
        return response()->json(['mcqs' => $mcqs]);
    }
}
