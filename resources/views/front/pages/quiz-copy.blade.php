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
                                    <h4>{{ $first->quiz_title }}</h4><span>(<span id="nth-question">1</span> of
                                        {{ $first->question_count }})</span>
                                    {{-- input hidden with quiz_id --}}
                                    <input type="hidden" id="quiz_id" name="quiz_id" value="{{ $first->quiz_id }}">
                                    <input type="hidden" id="question_id" name="question_id"
                                        value="{{ $first->question_id }}">
                                </div>
                            </div>

                            <div id="loader" style="display: none; text-align: center; margin-top: 10px;">
                                <i class="fa fa-spinner fa-spin fa-2x"></i>
                            </div>
                            <div class="question bg-white p-3 border-bottom">
                                <div class="d-flex flex-row align-items-center question-title">
                                    <h3 class="text-danger">Q.</h3>
                                    <h5 class="mt-1 ml-2 pt-3" id="question_question">{!! $first->question !!}</h5>
                                </div>
                                <div class="ans ml-2">
                                    <label class="radio"> <input type="radio" name="answer" value="a">
                                        <span>a</span>
                                    </label>
                                </div>
                                <div class="ans ml-2">
                                    <label class="radio"> <input type="radio" name="answer" value="b">
                                        <span>b</span>
                                    </label>
                                </div>
                                <div class="ans ml-2">
                                    <label class="radio"> <input type="radio" name="answer" value="c">
                                        <span>c</span>
                                    </label>
                                </div>
                                <div class="ans ml-2">
                                    <label class="radio"> <input type="radio" name="answer" value="d">
                                        <span>d</span>
                                    </label>
                                </div>
                            </div>
                            <div class="d-flex flex-row justify-content-between align-items-center p-3 bg-white">
                                <button class="btn btn-primary d-flex align-items-center btn-danger" type="submit"
                                    data-type="prev"><i class="fa fa-angle-left mt-1 mr-1"></i>&nbsp;Previous</button>
                                <button class="btn btn-primary d-flex align-items-center btn-danger" onclick="EndQuiz()"
                                    type="submit">Finish<i class="fa fa-angle-right ml-2"></i></button>
                                <button class="btn btn-primary border-success align-items-center btn-success"
                                    data-type="next" type="submit">Next<i class="fa fa-angle-right ml-2"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-3 col-lg-3">
                    {{-- question switcher --}}
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Question Switcher</h5>
                        </div>
                        <div class="card-body">
                            <div class="flex-container">
                                @foreach ($data as $item)
                                    <div class="{{ $loop->iteration == 1 ? 'switcher-active' : '' }}"
                                        data-value="{{ $item->question_id }}"
                                        onclick="questionSwitcher({{ $item->question_id }})">
                                        {{ $loop->iteration }}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
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
                                        <th>Starting time</th>
                                        <th>{{ date('h:m:i a', strtotime($first->startingtime)) }}</th>
                                    </tr>
                                    <tr>
                                        <th>Starting Date</th>
                                        <th>{{ date('d/m/Y', strtotime($first->startingtime)) }}</th>
                                    </tr>
                                    <tr>
                                        <th>Ends in</th>
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
    {{-- are you shure to finish the quiz modal --}}
    <div class="modal fade" id="areYouSureToFinishTheQuiz" tabindex="-1" role="dialog"
        aria-labelledby="areYouSureToFinishTheQuizLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="quiz-result" id="finishQuiz" method="POST">
                @csrf
                <input type="hidden" id="quiz_id" name="quiz_id" value="{{ $first->quiz_id }}">
                <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}">
                <input type="hidden" id="total_question" name="total_question" value="{{ $first->question_count }}">

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="areYouSureToFinishTheQuizLabel">Are you sure to finish the quiz?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Once you finish the quiz you can't go back to the quiz.</p>
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
        // Span element that will hold the timer
        const clock = document.getElementById("endingTime");
        // Duration in minutes
        const duration = {{ $first->question_count }};
        var eventDuration;

        function resetStartTime() {
            const startTime = Date.now();
            const eventTime = duration * 60 * 1000;
            eventDuration = new Date(startTime + eventTime);
            console.log(startTime, );
            return eventDuration;
        }

        document.addEventListener("DOMContentLoaded", () => {
            const startTime = new Date(resetStartTime());
            timeInterval = setInterval(() => {
                const timer = startTime.getTime() - Date.now();
                const minutes = Math.floor((timer % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((timer % (1000 * 60)) / 1000);

                clock.innerText = minutes + " Minutes, " + seconds + " Seconds ";

                if (timer <= 0) {
                    clock.innerText = "EXPIRED";
                    clearInterval(timeInterval);
                    finishQuiz();
                }
            }, 1000);
        });
    </script>
    <script>
        // EndQuiz

        function EndQuiz() {
            $('#areYouSureToFinishTheQuiz').modal('show');
        }

        // finishQuiz
        function finishQuiz() {
            $('#areYouSureToFinishTheQuiz').modal('hide');
            $('#finishQuiz').submit();
        }

        function questionSwitcher(id) {
            var quiz_id = $('#quiz_id').val();
            // find the active switcher data-value
            var activeSwitcherValue = $('.switcher-active').attr('data-value');
            let activeSwitcher = $('.switcher-active');


            // Show Loader & Disable Navigation Buttons
            $('#loader').show();
            $('button[data-type="next"], button[data-type="prev"]').prop('disabled', true);

            $.ajax({
                url: "/switchQuestion",
                type: "json",
                method: "GET",
                data: {
                    "question_id": id,
                    "quiz_id": quiz_id,
                    "activeSwitcher": activeSwitcherValue
                },
                success: function(response) {
                    if (response.status == 'error') {
                        // open finish quiz modal
                        $('#areYouSureToFinishTheQuiz').modal('show');
                        return;
                    }
                    // if respose.activeSwitcher is not null
                    if (response.activeSwitcher) {
                        // remove active class from active switcher
                        activeSwitcher.removeClass('switcher-active');
                        // add active class to the switcher with data-value = response.activeSwitcher
                        activeSwitcher.addClass('attempted');
                    }
                    // add switcher-active class to the current element
                    $(`[data-value=${id}]`).addClass('switcher-active');
                    activeSwitcher.removeClass('switcher-active');
                    $('#question_question').html(response.question);
                    $('#question_id').val(response.question_id);
                    $('input[name="answer"]').prop('checked', false);
                    $('#nth-question').html(response.nth_question);
                    if (response.answer != null) {
                        $('input[name="answer"][value="' + response.answer + '"]').prop('checked', true);
                    }
                }
            });
        }
        // on quiz_form submit
        $('#quiz_form').on('submit', function(e) {
            e.preventDefault();
            var type = e.originalEvent.submitter.dataset.type;
            var form = $(this);
            let quiz_id = $('#quiz_id').val();
            let question_id = $('#question_id').val();
            let answer = $('input[name="answer"]:checked').val();
            $.ajax({
                url: '/get-quiz',
                method: 'GET',
                type: 'json',
                data: {
                    type: type,
                    quiz_id: quiz_id,
                    question_id: question_id,
                    answer: answer
                },
                success: function(response) {
                    if (response.status == 'error') {
                        if (type == 'prev')
                            return;
                        $('#areYouSureToFinishTheQuiz').modal('show');
                        return;
                    }
                    questionSwitcher(response.question_id);
                    $('#question_question').html(response.question);
                    $('#question_id').val(response.question_id);
                    $('input[name="answer"]').prop('checked', false);
                    $('#nth-question').html(response.nth_question);
                    if (response.answer != null) {
                        $('input[name="answer"][value="' + response.answer + '"]').prop('checked',
                            true);
                    }
                },
                error: function(error) {
                    console.log(error);
                },
                complete: function() {
                    // Hide Loader & Enable Navigation Buttons
                    $('#loader').hide();
                    $('button[data-type="next"], button[data-type="prev"]').prop('disabled', false);
                }
            });
        });

        function createQuiz(section_id) {
            // open modal
            $('#exampleModal').modal('show');
        }
        $(document).ready(function() {
            var appUrl = $("meta[name=base_url]").attr("content");
            $(".collapsebtn").click(function() {
                $(".collapse").removeClass("show");
            });

            $(".form").submit(function(event) {
                var question_id = $(this).attr('data-id');


                var formData = new FormData(this);
                var this_ = this;
                var comment = $("textarea[name='comment']", this).val();

                event.preventDefault();

                $.ajax({
                    url: appUrl + '/commentpost',
                    type: 'POST',
                    data: formData,
                    async: false,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        console.log(data);
                        if (data.response === "success") {

                            $("textarea[name='comment']", this_).val('');
                            var variable = '' +
                                '    <article class="comment">' +
                                '                                            <a class="comment-img" href="#non">' +
                                '                                                <img src="' +
                                appUrl + '/images/user.png" alt="" width="50" height="50">' +
                                '                                            </a>' +
                                '                                            <div class="comment-body">' +
                                '                                                <div class="text">' +
                                '                                                    <p>' +
                                comment + '</p>' +
                                '                                                </div>' +
                                '                                                <p class="attribution">by <a href="#">You</a> at {{ date('Y-m-d h:i:sa') }}</p>' +
                                '                                            </div>' +
                                '                                        </article>' +
                                '';
                            document.getElementById('comment_' + question_id).insertRow(-1)
                                .innerHTML = '<td>' + variable + ' </td>';
                        }

                    }
                });
            });


        });
    </script>
@stop
