@extends('layouts.app', ['activePage' => 'Student Satisfaction Portal', 'titlePage' => __('Student Satisfaction Portal')])

@section('content')
<div class="content">
@if(Session::has('msg'))
<body onload="showNotification('top','right')">

</body>
<script>
    function showNotification(from, align) {
        $.notify({
            title: '<b> Student Satisfaction Portal </b>'
            , message: Sessions::get('msg')
        }, {
            type: 'pastel-warning'
            , delay: 2000
            , template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
                '<span data-notify="title">{1}</span>' +
                '<span data-notify="message">{2}</span>' +
                '</div>'
        });
    }
    window.onload = showNotification('top', 'right');

</script>

@endif
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header-danger card-header-primary">
                        <h4 class="card-title">{{ __('Professors to be Evaluated') }}</h4>
                        <p class="card-category">{{ __('Click on a Faculty to Start Evaluating') }}</p>
                    </div>
                    <div class="card-body ">
                        <table class="table table-hover">
                            <caption>List of Professors to be Evaluated</caption>
                            <thead>
                                <tr>
                                    <th>Subject Code</th>
                                    <th>Subject Title</th>
                                    <th>Faculty Name</th>
                                    <th class="text-right">Status</th>
                                </tr>
                            </thead>

                            <tbody>
                                @if(count($result) > 0)

                                @foreach ($result as $item) <tr>
                                    <td>{{ $item->SubjectCode }}</td>
                                    <td>{{ $item->SubjectTitle }}</td>
                                    <td>{{ $item->FacultyName }}</td>
                                    <td class="td-actions text-right">
                                        <a class="btn btn-link">
                                            <form method="post" action="{{ route('faculty_eval_form') }}">
                                                @csrf
                                                @method('post')
                                                {{ Form::hidden('faculty_data', json_encode($item)) }}
                                                <button type="submit" class="btn btn-outline-success" rel="tooltip" title="Evaluate Faculty">
                                                    <i class="material-icons">assessment</i>
                                                </button>
                                            </form>
                                    </td>
                                </tr>
                                @endforeach
                                @elseif(count($result) == 0)
                                <body onload="showNotification('top','right')">

                                </body>
                                <script>
                                    function showNotification(from, align) {
                                        $.notify({
                                            title: '<b> Student Satisfaction Portal </b>'
                                            , message: 'You dont have any pending Faculty Evaluation Forms to be Filled'
                                        }, {
                                            type: 'pastel-warning'
                                            , delay: 2000
                                            , template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
                                                '<span data-notify="title">{1}</span>' +
                                                '<span data-notify="message">{2}</span>' +
                                                '</div>'
                                        });
                                    }
                                    window.onload = showNotification('top', 'right');

                                </script>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

{{--
                                @if(count($result)==null)
                                    <h3>None Left Here</h3>
                                    @elseif(count($result)==0)
                                        @foreach ($result as $item)
                                        <tr>
                                        <td>{{ $item['SubjectCode'] }}</td>
<td>{{ $item['SubjectTitle'] }}</td>
<td>{{ $item['FacultyName'] }}</td>
<td class="td-actions text-right">
    <a class="btn btn-link">
        <form method="post" action="{{ route('faculty_eval_form') }}">
            @csrf
            @method('post')
            {{ Form::hidden('faculty_data', json_encode($item)) }}
            <button type="submit" class="btn btn-outline-success" rel="tooltip" title="Evaluate Faculty">
                <i class="material-icons">assessment</i>
            </button>
        </form>
</td>
</tr>
@endforeach
@else
@foreach ($result as $item)
@for($i=0;$i<count($item);$i++) <tr>
    <td>{{ $item[$i]['SubjectCode'] }}</td>
    <td>{{ $item[$i]['SubjectTitle'] }}</td>
    <td>{{ $item[$i]['FacultyName'] }}</td>
    <td class="td-actions text-right">
        <a class="btn btn-link">
            <form method="post" action="{{ route('faculty_eval_form') }}">
                @csrf
                @method('post')
                {{ Form::hidden('faculty_data', json_encode($item[$i])) }}
                <button type="submit" class="btn btn-outline-success" rel="tooltip" title="Evaluate Faculty">
                    <i class="material-icons">assessment</i>
                </button>
            </form>
    </td>
    </tr>
    @endfor
    @endforeach
    @endif
    --}}
