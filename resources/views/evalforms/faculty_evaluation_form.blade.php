@extends('layouts.app', ['activePage' => 'Student Satisfaction Portal', 'titlePage' => __('Student Satisfaction Portal')])

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('store_faculty_evaluation_form') }}" autocomplete="on" class="form-horizontal">
                    @csrf
                    @method('post')
                    <div class="card">
                        <div class="card-header-danger card-header-primary">
                            <h4 class="card-title">{{ __('Faculty Evaluation Form') }}</h4>
                            <p class="card-category">{{ __('Fill up and Click Save at the end of the document') }}</p>
                        </div>
                        <div class="card-body ">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group label-floating has-success mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Faculty Name</span>
                                            </div>
                                            <h3>{{ $faculty_data['FacultyName'] }}</h3>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group label-floating has-success mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Subject</span>
                                            </div>
                                            <h3>{{ $faculty_data['SubjectTitle'] }}</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group label-floating has-success mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Course/Program</span>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{ $user_data->course }}" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group label-floating has-success mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Year Level</span>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group label-floating has-success mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">College</span>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{ $user_data->college }}" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group label-floating has-success mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text required" id="inputGroup-sizing-sm">Age</span>
                                            </div>
                                            <input type="number" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @for($i=1;$i<=$question_count;$i++) @foreach ($question_data as $questions) @if($questions->id==$i)
                                <div class="container">
                                    <h3 align="center"><strong>{{$questions->q_question}}</strong></h3>
                                </div>
                                @foreach ($choice_data as $choice)
                                @if($choice->question_id==$i)
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 col-md-8">
                                            <h4 align="left"><strong>{{ $choice->choice }}</strong></h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-check form-check-radio">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" id="choice_id_{{ $choice->id }}" name="choice_id_{{ $choice->id }}" required value="4">
                                                    4. Very Satisfied
                                                    <span class="circle">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check form-check-radio">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" id="choice_id_{{ $choice->id }}" name="choice_id_{{ $choice->id }}" required value="3">
                                                    3. Satisfied
                                                    <span class="circle">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check form-check-radio">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" id="choice_id_{{ $choice->id }}" name="choice_id_{{ $choice->id }}" required value="2">
                                                    2. Dissatisfied
                                                    <span class="circle">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check form-check-radio">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" id="choice_id_{{ $choice->id }}" name="choice_id_{{ $choice->id }}" required value="1">
                                                    1. Very Dissatisfied
                                                    <span class="circle">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                                @break
                                @endif
                                @endforeach
                                @endfor
                                <div class="container">
                                    <textarea name="comment" class="form-control" placeholder="Comments/Suggestion/Complaint We have spaces for that here"></textarea>
                                </div>
                                <div class="card-footer ml-auto mr-auto">
                                    <button type="submit" class="btn btn-success">{{ __('Save') }}</button>
                                </div>
                        </div>
                        {{ Form::hidden('faculty_data', json_encode($faculty_data)) }}
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('store_faculty_evaluation_form') }}" class="form-horizontal">
                    @csrf
                    @method('post')

                </form>
            </div>
        </div>
    </div>
</div>
@endsection

