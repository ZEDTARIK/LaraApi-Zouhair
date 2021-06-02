@extends('shared.master')
@section('content')

    
    <div class="panel panel-info">
          <div class="panel-heading">
                <h3 class="panel-title">List Employees</h3>
          </div>
          <div class="panel-body">

            <a href="{{ route('employee.create')}}" class="btn btn-primary">NEW Employee</a>

                <table class="table table-hover table-boredred">
                    <thead>
                        <tr>
                            <th></th>
                            <th>#</th>
                            <th>Full Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($employees as $employee)
                        <tr>
                            <td>
                                <a href="{{ route('employee.edit', [$employee->id] )}}" class="btn btn-sm btn-warning">Edit</a>
                            </td>
                            <td scope="row">{{ $employee->id}}</td>
                            <td>{{ $employee->FullName}}</td>
                            <td>{{ $employee->Email}}</td>
                        </tr>
                        @empty 
                            <tr>No Data</tr>
                        @endforelse
                    </tbody>
                </table>
          </div>
    </div>
    

@endsection