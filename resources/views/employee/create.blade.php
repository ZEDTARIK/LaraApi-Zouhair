@extends('shared.master')
@section('content')


<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">Create New Employee</h3>
    </div>
    <div class="panel-body">
        <form method="POST" action="{{ route('employee.store')}}" class="form-horizontal">

            @csrf

            @include('employee.EmployeeForm')

            <div class="form-group">

                <div class="col-sm-9">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <a href="{{ route('employee.index')}}" class="btn btn-danger">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection