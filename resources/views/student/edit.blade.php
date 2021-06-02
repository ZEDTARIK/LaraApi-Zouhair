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

            <div class="form-group">
                <label for="studentCode" class="col-sm-2 control-label">Student Code</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="studentCode" id="studentCode"
                        placeholder="Student Code" value="{{ old('studentCode', $student->studentCode) }}" readonly>
                </div>
                @if($errors->any())
                <div class="col-sm-4 has-error">
                    @foreach($errors->get('studentCode') as $error)
                    <span class="help-block">
                        {{ $error }}
                    </span>
                    @endforeach
                </div>
                @endif
            </div>

            <div class="form-group">
                <label for="firstName" class="col-sm-2 control-label">First Name</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name"
                        value="{{ old('firstName', $student->firstName)}}">
                </div>
                @if($errors->any())
                <div class="col-sm-4 has-error">
                    @foreach($errors->get('firstName') as $error)
                    <span class="help-block">
                        {{ $error }}
                    </span>
                    @endforeach

                </div>
                @endif
            </div>

            <div class="form-group">
                <label for="lastName" class="col-sm-2 control-label">Last Name</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name"
                        value="{{ old('lastName', $student->lastName)}}">
                </div>
                @if($errors->any())
                <div class="col-sm-4 has-error">

                    @foreach($errors->get('lastName') as $error)
                    <span class="help-block">
                        {{ $error }}
                    </span>
                    @endforeach
                </div>
                @endif
            </div>

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