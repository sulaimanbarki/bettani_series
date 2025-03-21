@extends('front/layout/layout')
@section('content')
    @section('title', $section->title ?? 'Quiz')

    @include('front.pages.components.styles')
    
    @php
        $first = $data->first();
    @endphp
    <div class="page-header border-bottom">
    </div>
    <div class="courses-details padding-area">
        <div class="container-fluid">
            <div class="row my-5">
                <div class="col-md-9 col-lg-9">
                    <form id="quiz_form" onsubmit="return false">
                        <div class="border">
                            <div class="question bg-white p-3 border-bottom">
                                <div class="d-flex flex-row justify-content-between align-items-center mcq">
                                    <h4 id="quiz_title">{{ $first->quiz_title }}</h4>
                                    <span>(<span id="nth-question">1</span> of {{ $first->question_count }})</span>
                                    <input type="hidden" id="quiz_id" name="quiz_id" value="{{ $first->quiz_id }}">
                                    <input type="hidden" id="question_id" name="question_id" value="{{ $first->question_id }}">
                                </div>
                            </div>

                            <div class="question bg-white p-3 border-bottom">
                                <div class="d-flex flex-row align-items-center question-title">
                                    <h3 class="text-danger">Q.</h3>
                                    <h5 class="mt-1 ml-2 pt-3" id="question_question">{!! $first->question !!}</h5>
                                </div>
                                <div class="ans ml-2" id="options_container">
                                    <!-- Options will be populated dynamically -->
                                </div>
                            </div>
                            <div class="d-flex flex-row justify-content-between align-items-center p-3 bg-white">
                                <button class="btn btn-primary btn-sm d-flex align-items-center btn-danger" type="button" onclick="previousQuestion()">
                                    <i class="fa fa-angle-left mt-1 mr-1"></i>&nbsp;Previous
                                </button>
                                <button class="btn btn-primary btn-sm d-flex align-items-center btn-danger" type="button" onclick="EndQuiz()">
                                    Finish<i class="fa fa-angle-right ml-2"></i>
                                </button>
                                <button class="btn btn-primary btn-sm border-success align-items-center btn-success" type="button" onclick="nextQuestion()">
                                    Next<i class="fa fa-angle-right ml-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-3 col-lg-3">
                    <!-- Question Switcher -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Question Switcher</h5>
                        </div>
                        <div class="card-body">
                            <div class="flex-container" id="question_switcher">
                                @foreach ($data as $item)
                                    <div class="{{ $loop->iteration == 1 ? 'switcher-active' : '' }}" data-value="{{ $item->question_id }}" onclick="switchQuestion({{ $loop->index }})">
                                        {{ $loop->iteration }}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Quiz Details -->
                    <div class="card mt-3">
                        <div class="card-header">
                            <h5 class="card-title">Quiz Details</h5>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>Quiz Title</th>
                                        <th>{{ $first->quiz_title }}</th>
                                    </tr>
                                    <tr>
                                        <th>Total Questions</th>
                                        <th>{{ $first->question_count }}</th>
                                    </tr>
                                    <tr>
                                        <th>Starting Time</th>
                                        <th>{{ date('h:i:s a', strtotime($first->startingtime)) }}</th>
                                    </tr>
                                    <tr>
                                        <th>Starting Date</th>
                                        <th>{{ date('d/m/Y', strtotime($first->startingtime)) }}</th>
                                    </tr>
                                    <tr>
                                        <th>Ends In</th>
                                        <th id="endingTime">{{ $first->question_count }} minutes</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Finish Quiz Modal -->
    <div class="modal fade" id="areYouSureToFinishTheQuiz" tabindex="-1" role="dialog" aria-labelledby="areYouSureToFinishTheQuizLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="quiz-result" id="finishQuiz" method="POST">
                @csrf
                <input type="hidden" id="quiz_id" name="quiz_id" value="{{ $first->quiz_id }}">
                <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}">
                <input type="hidden" id="total_question" name="total_question" value="{{ $first->question_count }}">
                <input type="hidden" id="attempted_answers" name="attempted_answers">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="areYouSureToFinishTheQuizLabel">Are you sure to finish the quiz?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Once you finish the quiz, you can't go back.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <button type="button" class="btn btn-primary" onclick="finishQuiz()">Yes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

<script>
    // Pass quiz data to JavaScript
    const quizData = @json($data);
    let currentQuestionIndex = 0;
    let attemptedAnswers = {}; // Store all user's answers
    let modifiedAnswers = {}; // Store only modified answers since the last save
    const quizId = {{ $first->quiz_id }}; // Quiz ID from the backend
    const autoSaveInterval = 30000; // Auto-save every 30 seconds
    const quizDuration = {{ $first->question_count }} * 60; // Quiz duration in seconds
    let timerInterval;

    // Load the first question on page load
    document.addEventListener("DOMContentLoaded", () => {
        loadQuestion(currentQuestionIndex);
        startAutoSave(); // Start the auto-save timer
        startTimer(quizDuration); // Start the countdown timer
    });

    // Function to load a question
    function loadQuestion(index) {
        const question = quizData[index];
        document.getElementById('question_question').innerHTML = question.question;
        document.getElementById('nth-question').innerText = index + 1;
        document.getElementById('question_id').value = question.question_id;

        // Populate options (static for now)
        const optionsContainer = document.getElementById('options_container');
        optionsContainer.innerHTML = `
            <div class="ans ml-2">
                <label class="radio">
                    <input type="radio" name="answer" value="a" ${attemptedAnswers[question.question_id] === 'a' ? 'checked' : ''}>
                    <span>a. Option A</span>
                </label>
            </div>
            <div class="ans ml-2">
                <label class="radio">
                    <input type="radio" name="answer" value="b" ${attemptedAnswers[question.question_id] === 'b' ? 'checked' : ''}>
                    <span>b. Option B</span>
                </label>
            </div>
            <div class="ans ml-2">
                <label class="radio">
                    <input type="radio" name="answer" value="c" ${attemptedAnswers[question.question_id] === 'c' ? 'checked' : ''}>
                    <span>c. Option C</span>
                </label>
            </div>
            <div class="ans ml-2">
                <label class="radio">
                    <input type="radio" name="answer" value="d" ${attemptedAnswers[question.question_id] === 'd' ? 'checked' : ''}>
                    <span>d. Option D</span>
                </label>
            </div>
        `;

        // Update question switcher
        updateQuestionSwitcher(index);
    }

    // Function to save the selected answer
    function saveAnswer() {
        const questionId = quizData[currentQuestionIndex].question_id;
        const selectedAnswer = document.querySelector('input[name="answer"]:checked')?.value;
        if (selectedAnswer) {
            // Check if the answer is different from the previously saved answer
            if (attemptedAnswers[questionId] !== selectedAnswer) {
                attemptedAnswers[questionId] = selectedAnswer;
                modifiedAnswers[questionId] = selectedAnswer; // Track modified answers
            }
        }
        // Update the Question Switcher UI
        updateQuestionSwitcher(currentQuestionIndex);
    }

    // Next question
    function nextQuestion() {
        saveAnswer();
        if (currentQuestionIndex < quizData.length - 1) {
            currentQuestionIndex++;
            loadQuestion(currentQuestionIndex);
        }
    }

    // Previous question
    function previousQuestion() {
        saveAnswer();
        if (currentQuestionIndex > 0) {
            currentQuestionIndex--;
            loadQuestion(currentQuestionIndex);
        }
    }

    // Switch to a specific question
    function switchQuestion(index) {
        saveAnswer();
        currentQuestionIndex = index;
        loadQuestion(currentQuestionIndex);
    }

    // Update question switcher UI
    function updateQuestionSwitcher(index) {
        const switchers = document.querySelectorAll('#question_switcher div');
        switchers.forEach((switcher, i) => {
            const questionId = quizData[i].question_id;
            if (i === index) {
                switcher.classList.add('switcher-active'); // Highlight current question
            } else {
                switcher.classList.remove('switcher-active');
            }
            // Add 'attempted' class if the question has been answered
            if (attemptedAnswers[questionId]) {
                switcher.classList.add('attempted');
            } else {
                switcher.classList.remove('attempted');
            }
        });
    }

    // Start auto-save timer
    function startAutoSave() {
        setInterval(() => {
            if (Object.keys(attemptedAnswers).length > 0) {
                saveQuizProgress();
            }
        }, autoSaveInterval);
    }

    // Save quiz progress to the backend
    function saveQuizProgress() {
        if (Object.keys(modifiedAnswers).length > 0) {
            $.ajax({
                url: '/bulk_update_quiz', // Endpoint for bulk update
                method: 'POST',
                data: {
                    quiz_id: quizId,
                    attempted_answers: modifiedAnswers, // Send only modified answers
                    _token: '{{ csrf_token() }}' // CSRF token for Laravel
                },
                success: function(response) {
                    console.log("Auto-save successful:", response);
                    modifiedAnswers = {}; // Clear modified answers after successful save
                },
                error: function(error) {
                    console.error("Auto-save failed:", error);
                }
            });
        }
    }

    // Start the countdown timer
    function startTimer(duration) {
        const timerDisplay = document.getElementById('endingTime');
        let timer = duration;
        timerInterval = setInterval(() => {
            const minutes = Math.floor(timer / 60);
            const seconds = timer % 60;
            timerDisplay.innerText = `${minutes} Minutes, ${seconds} Seconds`;

            if (--timer < 0) {
                clearInterval(timerInterval);
                timerDisplay.innerText = "EXPIRED";
                finishQuiz(); // Submit the quiz when time expires
            }
        }, 1000);
    }

    // Finish quiz
    function EndQuiz() {
        saveAnswer();
        $('#areYouSureToFinishTheQuiz').modal('show');
    }

    // Submit quiz
    function finishQuiz() {
        clearInterval(timerInterval); // Stop the timer

        // Save any remaining modified answers
        if (Object.keys(modifiedAnswers).length > 0) {
            saveQuizProgress();
        }

        // Add all attempted answers to the form
        document.getElementById('attempted_answers').value = JSON.stringify(attemptedAnswers);

        // Submit the form
        document.getElementById('finishQuiz').submit();
    }
</script>