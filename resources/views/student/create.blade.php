@extends('shared.master')
@section('content')


<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Create Student</h3>
    </div>
    <div class="panel-body">

        <form method="POST" action="{{route('student.store')}}" class="form-horizontal">

            @csrf

            @include('student.form')

            <div class="form-group">
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <a href="{{ route('student.index') }}" type="button" class="btn btn-danger">Cancel</a>
                </div>
            </div>

        </form>

    </div>
</div>


@endsection