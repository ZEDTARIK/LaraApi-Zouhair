@extends('shared.master')
@section('content')


<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Edir Student N° {{ $student->id }}</h3>
    </div>
    <div class="panel-body">

        <form method="POST" action="{{route('student.update', ['student' => $student])}}" class="form-horizontal">

            @csrf
            @method('PUT')
            @include('student.form')

            <div class="form-group">
                <div class="col-sm-4">
                    <div class="btn-toolbar">
                        <button type="submit" class="btn btn-warning">Update</button>
                        <a href="{{ route('student.index') }}" type="button" class="btn btn-danger">Cancel</a>
                    </div>
                </div>
            </div>

        </form>

    </div>
</div>


@endsection