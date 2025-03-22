@extends('front/layout/layout')
@section('content')
@section('title', $section->title ?? 'Test')

@include('front.pages.components.test-styles')

<div class="page-header border-bottom">
</div>
<div class="courses-details padding-area">
    <div class="container-fluid">
        <div class="row my-5">
            <div class="col-md-9 col-lg-9">
                <form id="test_form" onsubmit="return false">
                    <div class="border">
                        <div class="question bg-white p-3 border-bottom">
                            <div class="d-flex flex-row justify-content-between align-items-center mcq">
                                <h4 id="test_title">{{ $test->title }}</h4>
                                <span>(<span id="nth-question">1</span> of {{ count($questions) }})</span>
                                <input type="hidden" id="test_id" name="test_id" value="{{ $test->id }}">
                                <input type="hidden" id="question_id" name="question_id" value="{{ $question->id }}">
                                <input type="hidden" id="test_take_id" name="test_take_id" value="{{ $test_take_id }}">
                            </div>
                        </div>
                        <div class="question bg-white p-3 border-bottom">
                            <div class="d-flex flex-row align-items-center question-title">
                                <h3 class="text-danger">Q.</h3>
                                <h5 class="mt-1 ml-2 pt-3" id="question_question">{!! $question->description !!}</h5>
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
                <style>
                    #test_form img {
                        width: 100% !important;
                    }
                </style>
            </div>
            <div class="col-md-3 col-lg-3">
                <!-- Question Switcher -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Question Switcher</h5>
                    </div>
                    <div class="card-body">
                        <div class="flex-container" id="question_switcher">
                            @php
                                // Fetch all attempted questions for the given test_take_id in a single query
                                $attemptedQuestions = App\Models\TestQuestion::where('test_take_id', $test_take_id)
                                    ->pluck('result', 'question_id')
                                    ->toArray();
                            @endphp

                            @foreach ($questions as $item)
                                <div class="{{ $loop->iteration == 1 ? 'switcher-active' : '' }} {{ isset($attemptedQuestions[$item->id]) ? 'attempted' : '' }}" data-value="{{ $item->id }}" onclick="switchQuestion({{ $loop->index }})">
                                    {{ $loop->iteration }}
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Test Details -->
                <div class="card mt-3">
                    <div class="card-header">
                        <h5 class="card-title">Test Details</h5>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>Test Title</th>
                                    <th>{{ $test->title }}</th>
                                </tr>
                                <tr>
                                    <th>Total Questions</th>
                                    <th>{{ count($questions) }}</th>
                                </tr>
                                <tr>
                                    <th>Starting Time</th>
                                    <th>{{ date('h:i:s a', strtotime($test_take->startingtime)) }}</th>
                                </tr>
                                <tr>
                                    <th>Starting Date</th>
                                    <th>{{ date('d/m/Y', strtotime($test_take->startingtime)) }}</th>
                                </tr>
                                <tr>
                                    <th>Ends In</th>
                                    <th id="endingTime">{{ $test->test_duration }} minutes</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Finish Test Modal -->
<div class="modal fade" id="areYouSureToFinishTheQuiz" tabindex="-1" role="dialog" aria-labelledby="areYouSureToFinishTheQuizLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="test-result" id="finishQuiz" method="POST">
            @csrf
            <input type="hidden" id="test_id" name="test_id" value="{{ $test->id }}">
            <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}">
            <input type="hidden" id="test_take_id" name="test_take_id" value="{{ $test_take->id }}">
            <input type="hidden" id="total_question" name="total_question" value="{{ count($questions) }}">
            <input type="hidden" id="attempted_answers" name="attempted_answers">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="areYouSureToFinishTheQuizLabel">Are you sure to finish the test?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Once you finish the test, you can't go back.</p>
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

@section('script')
<script>
    // Pass test data to JavaScript
    const testData = @json($questions);
    const attemptedQuestions = @json($attemptedQuestions); // Pass attempted questions from backend
    let currentQuestionIndex = 0;
    let attemptedAnswers = { ...attemptedQuestions }; // Initialize with attempted questions
    let modifiedAnswers = {}; // Store only modified answers since the last save
    const testId = {{ $test->id }}; // Test ID from the backend
    const testTakeId = {{ $test_take->id }}; // Test Take ID from the backend
    const autoSaveInterval = 30000; // Auto-save every 30 seconds
    const testDuration = {{ $test->test_duration }} * 60; // Test duration in seconds
    let timerInterval;

    // Load the first question on page load
    document.addEventListener("DOMContentLoaded", () => {
        loadQuestion(currentQuestionIndex);
        startAutoSave(); // Start the auto-save timer
        startTimer(testDuration); // Start the countdown timer
        updateQuestionSwitcher(currentQuestionIndex); // Initialize question switcher UI
    });

    // Function to load a question
    function loadQuestion(index) {
        const question = testData[index];
        document.getElementById('question_question').innerHTML = question.description;
        document.getElementById('nth-question').innerText = index + 1;
        document.getElementById('question_id').value = question.id;

        // Populate options (static for now)
        const optionsContainer = document.getElementById('options_container');
        optionsContainer.innerHTML = `
            <div class="ans ml-2">
                <label class="radio">
                    <input type="radio" name="answer" value="a" ${attemptedAnswers[question.id] === 'a' ? 'checked' : ''}>
                    <span>a</span>
                </label>
            </div>
            <div class="ans ml-2">
                <label class="radio">
                    <input type="radio" name="answer" value="b" ${attemptedAnswers[question.id] === 'b' ? 'checked' : ''}>
                    <span>b</span>
                </label>
            </div>
            <div class="ans ml-2">
                <label class="radio">
                    <input type="radio" name="answer" value="c" ${attemptedAnswers[question.id] === 'c' ? 'checked' : ''}>
                    <span>c</span>
                </label>
            </div>
            <div class="ans ml-2">
                <label class="radio">
                    <input type="radio" name="answer" value="d" ${attemptedAnswers[question.id] === 'd' ? 'checked' : ''}>
                    <span>d</span>
                </label>
            </div>
        `;

        // Update question switcher
        updateQuestionSwitcher(index);
    }

    // Function to save the selected answer
    function saveAnswer() {
        const questionId = testData[currentQuestionIndex].id;
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
        if (currentQuestionIndex < testData.length - 1) {
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
            const questionId = testData[i].id;
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
            if (Object.keys(modifiedAnswers).length > 0) {
                saveTestProgress();
            }
        }, autoSaveInterval);
    }

    // Save test progress to the backend
    function saveTestProgress() {
        if (Object.keys(modifiedAnswers).length > 0) {
            $.ajax({
                url: '/bulk_update_test', // Endpoint for bulk update
                method: 'POST',
                data: {
                    test_id: testId,
                    test_take_id: testTakeId,
                    attempted_answers: modifiedAnswers, // Send only modified answers
                    _token: '{{ csrf_token() }}' // CSRF token for Laravel
                },
                success: function(response) {
                    modifiedAnswers = {}; // Clear modified answers after successful save
                },
                error: function(error) {
                    console.error("Auto-save failed:", error);
                    alert("Auto-save failed. Please check your internet connection.");
                }
            });
        }
    }

    // Start the countdown timer
    function startTimer(duration) {
        const timerDisplay = document.getElementById('endingTime');
        if (!timerDisplay) {
            console.error("Timer display element not found!");
            return;
        }

        // Restore remaining time from localStorage (if available)
        let timer = localStorage.getItem('remainingTime') || duration;
        timer = parseInt(timer, 10);

        const updateTimer = () => {
            const minutes = Math.floor(timer / 60);
            const seconds = timer % 60;

            timerDisplay.innerText = `${minutes} Minutes, ${seconds} Seconds`;

            if (--timer < 0) {
                clearInterval(timerInterval);
                timerDisplay.innerText = "EXPIRED";
                console.log("Timer expired. Submitting test..."); // Debugging
                finishQuiz(); // Submit the test when time expires
            }

            // Save remaining time to localStorage
            localStorage.setItem('remainingTime', timer);
        };

        // Update the timer immediately and then every second
        updateTimer();
        timerInterval = setInterval(updateTimer, 1000);
    }

    // Finish test
    function EndQuiz() {
        saveAnswer();
        $('#areYouSureToFinishTheQuiz').modal('show');
    }

    // Submit test
    function finishQuiz() {
        clearInterval(timerInterval);
        localStorage.removeItem('remainingTime'); // Clear saved timer

        // Save any remaining modified answers
        if (Object.keys(modifiedAnswers).length > 0) {
            saveTestProgress();
        }

        // Add all attempted answers to the form
        document.getElementById('attempted_answers').value = JSON.stringify(attemptedAnswers);

        // Submit the form
        document.getElementById('finishQuiz').submit();
    }
</script>
@endsection