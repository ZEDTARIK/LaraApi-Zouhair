<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>School-Management</title>
        <link rel="stylesheet" href="{{ mix('/css/bootstrap.min.css') }}">
    </head>
    <body class="container">
        <div class="row mt-3">
            <div class="col-md-12">

                <div class="card border-primary mb-3">
                    <div class="card-header">List Students</div>
                    <div class="card-body">
                        <a href="{{ route('student.create')}}" class="btn btn-outline-primary my-2">Add New Student</a>
                        <table class="table table-hover table-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($students as $student)
                                <tr>
                                    <td>{{ $student->id}}</td>
                                    <td>{{ $student->firstName}}</td>
                                    <td>{{ $student->lastName}}</td>
                                </tr>
                                @empty
                                <tr>Data Not found</tr>
                                @endforelse
                            </tbody>
                        </table>

                    </div>
                  </div>
            </div>
        </div>

        <script src="{{ mix('/js/app.js')}}"></script>
    </body>
</html>
