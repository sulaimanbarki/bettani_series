@extends('front/layout/layout')
@section('content')
@section('title' ,$section->title ?? 'Test')

<style>
    #questionTab:before {
        content: '';
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: url("{{ $website->getMedia('settings')[0]->getUrl('header')}}");
        background-position: center;
        background-repeat: no-repeat;

        background-attachment: fixed;
        /* z-index: 1; */
        opacity: 0.1;
    }

    .collapsebtn {
        position: relative;
        z-index: 9999 !important;
    }

    .comment {
        overflow: hidden;
        padding: 0 0 1em;
        border-bottom: 1px solid #ddd;
        margin: 0 0 1em;
        *zoom: 1;
    }

    .comment-img {
        float: left;
        margin-right: 33px;
        border-radius: 5px;
        overflow: hidden;
    }

    .comment-img img {
        display: block;
    }

    .comment-body {
        overflow: hidden;
    }

    .comment .text {
        padding: 10px;
        border: 1px solid #e5e5e5;
        border-radius: 5px;
        background: #fff;
    }

    .comment .text p:last-child {
        margin: 0;
    }

    .comment .attribution {
        margin: 0.5em 0 0;
        font-size: 14px;
        color: #666;
    }

    /* Decoration */

    .comments,
    .comment {
        position: relative;
    }

    .comments:before,
    .comment:before,
    .comment .text:before {
        content: "";
        position: absolute;
        top: 0;
        left: 65px;
    }

    .comments:before {
        width: 3px;
        top: -20px;
        bottom: -20px;
        background: rgba(0, 0, 0, 0.1);
    }

    .comment:before {
        width: 9px;
        height: 9px;
        border: 3px solid #fff;
        border-radius: 100px;
        margin: 16px 0 0 -6px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.2), inset 0 1px 1px rgba(0, 0, 0, 0.1);
        background: #ccc;
    }

    .comment:hover:before {
        background: orange;
    }

    .comment .text:before {
        top: 18px;
        left: 78px;
        width: 9px;
        height: 9px;
        border-width: 0 0 1px 1px;
        border-style: solid;
        border-color: #e5e5e5;
        background: #fff;
        -webkit-transform: rotate(45deg);
        -moz-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        -o-transform: rotate(45deg);
    }

    .flex-container {
        display: flex;
        flex-wrap: wrap;
        /* background-color: DodgerBlue; */
        justify-content: center;
    }

    .flex-container>div {
        background-color: #f1f1f1;
        width: 30px;
        height: 30px;
        margin: 5px;
        text-align: center;
        line-height: 28px;
        font-size: 15px;
        border-radius: 50%;
        cursor: pointer;
        padding: 2px;
    }

    .attempted {
        background-color: #FF69B4 !important;
    }

    .switcher-active {
        background-color: green !important;
        color: white;
    }
</style>
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
                                <h4>{{$test->title}}</h4><span>(<span id="nth-question">1</span> of
                                    {{count($questions)}})</span>
                                {{-- input hidden with test_id --}}
                                <input type="hidden" id="test_id" name="test_id" value="{{$test->id}}">
                                <input type="hidden" id="question_id" name="question_id" value="{{$question->id}}">
                                <input type="hidden" id="test_take_id" name="test_take_id" value="{{$test_take_id}}">
                            </div>
                        </div>
                        <div class="question bg-white p-3 border-bottom">
                            <div class="d-flex flex-row align-items-center question-title">
                                <h3 class="text-danger">Q.</h3>
                                <h5 class="mt-1 ml-2 pt-3" id="question_question">{!!$question->description!!}</h5>
                            </div>
                            <div class="ans ml-2">
                                <label class="radio"> <input type="radio" name="answer" value="a"> <span>a</span>
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
                                <label class="radio"> <input type="radio" name="answer" value="d"> <span>d</span>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between align-items-center p-3 bg-white">
                            <button class="btn btn-primary d-flex align-items-center btn-danger" type="submit" data-type="prev"><i class="fa fa-angle-left mt-1 mr-1"></i>&nbsp;Previous</button>
                            <button class="btn btn-primary d-flex align-items-center btn-danger" onclick="EndQuiz()" type="submit">Finish<i class="fa fa-angle-right ml-2"></i></button>
                            <button class="btn btn-primary border-success align-items-center btn-success" data-type="next" type="submit">Next<i class="fa fa-angle-right ml-2"></i></button>
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
                {{-- question switcher --}}
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Question Switcher</h5>
                    </div>
                    <div class="card-body">
                        <div class="flex-container">
                            @php
                            // Fetch all attempted questions for the given test_take_id in a single query
                            $attemptedQuestions = App\Models\TestQuestion::where('test_take_id', $test_take_id)
                                ->pluck('result', 'question_id')
                                ->toArray();
                            @endphp

                            @foreach ($questions as $item)
                                @php
                                // Check if the question has been attempted by looking it up in the $attemptedQuestions array
                                $attempted_null_check = isset($attemptedQuestions[$item->id]) && !is_null($attemptedQuestions[$item->id]);
                                @endphp
                                <div class="{{ $loop->iteration == 1 ? 'switcher-active' : '' }} {{ $attempted_null_check ? 'attempted' : ''}}" data-value="{{$item->id}}" onclick="questionSwitcher({{$item->id}})">
                                    {{$loop->iteration}}
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header">
                        <h5 class="card-title">Test Details</h5>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>Test Title</th>
                                    <th>{{$test->title}}</th>
                                </tr>
                                <tr>
                                    <th>Total Questions</th>
                                    <th>{{ count($questions) }}</th>
                                </tr>
                                <tr>
                                    <th>Starting time</th>
                                    <th>{{ date('h:m:i a', strtotime($test_take->startingtime));}}</th>
                                </tr>
                                <tr>
                                    <th>Starting Date</th>
                                    <th>{{ date('d/m/Y', strtotime($test_take->startingtime));}}</th>
                                </tr>
                                <tr>
                                    <th>Ends in</th>
                                    <th id="endingTime"> minutes</th>
                                </tr>
                            </tbody>
                        </table>




                        {{-- <div class="d-flex flex-row justify-content-between align-items-center">
                                <h6 class="text-muted">Passing Marks</h6>
                                <h6 class="text-muted">{{$first->passing_marks}}</h6>
                    </div>
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <h6 class="text-muted">Time Limit</h6>
                        <h6 class="text-muted">{{$first->time_limit}}</h6>
                    </div>
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <h6 class="text-muted">Total Attempts</h6>
                        <h6 class="text-muted">{{$first->total_attempts}}</h6>
                    </div>
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <h6 class="text-muted">Passing Percentage</h6>
                        <h6 class="text-muted">{{$first->passing_percentage}}</h6>
                    </div>
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <h6 class="text-muted">Negative Marking</h6>
                        <h6 class="text-muted">{{$first->negative_marking}}</h6>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

</div>
</div>
{{-- are you shure to finish the quiz modal --}}
<div class="modal fade" id="areYouSureToFinishTheQuiz" tabindex="-1" role="dialog" aria-labelledby="areYouSureToFinishTheQuizLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="test-result" id="finishQuiz" method="POST">
            @csrf
            <input type="hidden" id="test_id" name="test_id" value="{{$test->id}}">
            <input type="hidden" id="user_id" name="user_id" value="">
            {{-- test_take_id --}}
            <input type="hidden" id="test_take_id" name="test_take_id" value="{{$test_take->id}}">
            <input type="hidden" id="total_question" name="total_question" value="">

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="areYouSureToFinishTheQuizLabel">Are you sure to finish the test?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Once you finish the test you can't go back to the test.</p>
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
    const clock = document.getElementById("endingTime");

    let duration = {{ $test->test_duration }};
    var eventDuration;

    function resetStartTime() {
        const startTime = Date.now();
        const eventTime = duration * 60 * 1000;
        eventDuration = new Date(startTime + eventTime);
        return eventDuration;
    }

    document.addEventListener("DOMContentLoaded", () => {
        const startTime = new Date(resetStartTime());
        timeInterval = setInterval(() => {
            const timer = startTime.getTime() - Date.now();
            const minutes = Math.floor((timer % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timer % (1000 * 60)) / 1000);
            const hours = Math.floor((timer % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            clock.innerHTML = `${hours}h ${minutes}m ${seconds}s`;

            // clock.innerText = minutes + " Minutes, " + seconds + " Seconds ";

            if (timer <= 0) {
                clock.innerText = "EXPIRED";
                clearInterval(timeInterval);
                finishQuiz();
            }
        }, 1000);
    });
</script>
<script>
    $("body").on("contextmenu", function(e) {
        return false;
    });
    $(document).keydown(function (event) {
        // if (event.keyCode == 123) { // Prevent F12
        //     return false;
        // } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I
        //     return false;
        // }
    });

    function EndQuiz() {
        $('#areYouSureToFinishTheQuiz').modal('show');
    }

    // finishQuiz
    function finishQuiz() {
        $('#areYouSureToFinishTheQuiz').modal('hide');
        $('#finishQuiz').submit();
    }

    function questionSwitcher(id) {
        var test_id = $('#test_id').val();
        var test_take_id = $('#test_take_id').val();
        // find the active switcher data-value
        var activeSwitcherValue = $('.switcher-active').attr('data-value');
        let activeSwitcher = $('.switcher-active');
        $.ajax({
            url: "/switchTestQuestion",
            type: "json",
            method: "GET",
            data: {
                "question_id": id,
                "test_id": test_id,
                "activeSwitcher": activeSwitcherValue,
                "test_take_id": test_take_id
            },
            success: function(response) {

                if (response.status == 'error') {
                    // open finish quiz modal
                    $('#areYouSureToFinishTheQuiz').modal('show');
                    return;
                }
                // if response.status is 'finished', submit the form
                if (response.status == 'success' && response.message == 'finished') {
                    // alert the user that test time is over
                    alert('Test time is over');
                    // submit the form
                    finishQuiz();
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
    // on test_form submit
    $('#test_form').on('submit', function(e) {
        e.preventDefault();
        var type = e.originalEvent.submitter.dataset.type;
        var form = $(this);
        let test_id = $('#test_id').val();
        let test_take_id = $('#test_take_id').val();
        let question_id = $('#question_id').val();
        let answer = $('input[name="answer"]:checked').val();
        $.ajax({
            url: '/get-question',
            method: 'GET',
            type: 'json',
            data: {
                type: type,
                test_id: test_id,
                question_id: question_id,
                answer: answer,
                test_take_id: test_take_id
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
                    $('input[name="answer"][value="' + response.answer + '"]').prop('checked', true);
                }
            },
            error: function(error) {
                console.log(error);
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
                            '                                                <img src="' + appUrl + '/images/user.png" alt="" width="50" height="50">' +
                            '                                            </a>' +
                            '                                            <div class="comment-body">' +
                            '                                                <div class="text">' +
                            '                                                    <p>' + comment + '</p>' +
                            '                                                </div>' +
                            '                                                <p class="attribution">by <a href="#">You</a> at {{date("Y-m-d h:i:sa")}}</p>' +
                            '                                            </div>' +
                            '                                        </article>' +
                            '';
                        document.getElementById('comment_' + question_id).insertRow(-1).innerHTML = '<td>' + variable + ' </td>';
                    }

                }
            });
        });


    });
</script>
@stop
