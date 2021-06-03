@extends('shared.master')
@section('content')

<div class="panel panel-primary">
    <div class="panel-heading"> List Student </div>
    <div class="panel-body">
        <a href="{{ route('student.create')}}" class="btn btn-primary pull-right">Add New Student</a>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse($students as $student)
                <tr>
                    <td>{{ $student->id}}</td>
                    <td>{{ $student->firstName}}</td>
                    <td>{{ $student->lastName}}</td>
                    <td>
                        <a href="{{ route('student.edit', ['student' => $student->id ])}}"
                            class="btn btn-sm btn-warning">Edit</a>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('student.destroy',[$student->id])}}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>Data Not found</tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
