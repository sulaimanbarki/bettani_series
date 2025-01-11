@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.test.actions.index'))

@section('body')

    <div class="container-fluid">
        <form action="{{ route('admin.test.application.update', $test_taken->id) }}" id="filter_form" method="post">
            @csrf
            <div class="row">
                <input type="hidden" name="test_id" value="{{ $application->test_id }}">
                <input type="hidden" name="test_take_id" value="{{ $test_questions->first()->test_take_id }}">
                @foreach($test_questions as $question)


                    @php
                        $custome_question = \App\Models\Question::find($question->question_id);

                        // if no question found then skip
                        if(!$custome_question) {
                            continue;
                        }
                        
                    @endphp
                    <div class="col-md-12">
                        <h3>Question {{ $loop->iteration }}</h3>
                    </div>
                    <div class="col-md-12">
                        <p>{!! $custome_question->description !!}</p>
                    </div>

                    <div class="ans ml-2">
                        <label class="radio" for="{{ 'a' . $loop->iteration . 'a-' . $question->id }}"> <input {{ $question->result == 'a' ? 'checked' : '' }} type="radio" id="{{ 'a' . $loop->iteration . 'a-' . $question->id }}" name="{{ 'a' . $question->id }}" value="a"> <span>a</span>
                        </label>
                    </div>
                    <div class="ans ml-2">
                        <label class="radio" for="{{ 'a' . $loop->iteration . 'b-' . $question->id }}"> <input {{ $question->result == 'b' ? 'checked' : '' }} type="radio" id="{{ 'a' . $loop->iteration . 'b-' . $question->id }}" name="{{ 'a' . $question->id }}" value="b"> <span>b</span>
                        </label>
                    </div>
                    <div class="ans ml-2">
                        <label class="radio" for="{{ 'a' . $loop->iteration . 'c-' . $question->id }}"> <input {{ $question->result == 'c' ? 'checked' : '' }} type="radio" id="{{ 'a' . $loop->iteration . 'c-' . $question->id }}" name="{{ 'a' . $question->id }}" value="c"> <span>c</span>
                        </label>
                    </div>
                    <div class="ans ml-2">
                        <label class="radio" for="{{ 'a' . $loop->iteration . 'd-' . $question->id }}"> <input {{ $question->result == 'd' ? 'checked' : '' }} type="radio" id="{{ 'a' . $loop->iteration . 'd-' . $question->id }}" name="{{ 'a' . $question->id }}" value="d"> <span>d</span>
                        </label>
                    </div>

                @endforeach

            </div>
            
            <hr>
            
            <div class="col-md-12">
                <div class="form-group">
                    <label for="is_completed">Is Completed (by making this option 'No', the candidate will be able to take the test again)</label>
                    <select name="is_completed" id="is_completed" class="form-control">
                        <option value="1" {{ $test_taken->is_completed == 1 ? 'selected' : '' }}>Yes</option>
                        <option value="0" {{ $test_taken->is_completed == 0 ? 'selected' : '' }}>No</option>
                    </select>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {{-- apply filter --}}
                    <button type="submit" class="btn btn-primary mt-5 btn-block">Update</button>
                </div>
            </div>
        </form>

    </div>

@endsection
