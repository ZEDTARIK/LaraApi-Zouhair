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
                <div class="card border-default mb-3">
                    <div class="card-header">Edit Student N° {{ $student->id }} </div>
                    <div class="card-body">

                        <form method="POST" action="{{route('student.update', ['student' => $student])}}" class="form-horizontal">

                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="studentCode" class="col-sm-2 control-label">Student Code</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="studentCode" id="studentCode" placeholder="Student Code" value="{{ old('studentCode', $student->studentCode) }}" readonly >
                                </div>
                                <div class="col-sm-4">
                                    @if($errors->any())
                                    @foreach($errors->get('studentCode') as $error)
                                    <span class="alert-danger">
                                        {{ $error }}
                                    </span>
                                    @endforeach
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="firstName" class="col-sm-2 control-label">First Name</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name" value="{{ old('firstName', $student->firstName)}}">
                                </div>
                                <div class="col-sm-4">
                                    @if($errors->any())
                                    @foreach($errors->get('firstName') as $error)
                                    <span class="alert-danger">
                                        {{ $error }}
                                    </span>
                                    @endforeach
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="lastName" class="col-sm-2 control-label">Last Name</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name" value="{{ old('lastName', $student->lastName)}}">
                                </div>
                                <div class="col-sm-4">
                                    @if($errors->any())
                                    @foreach($errors->get('lastName') as $error)
                                    <span class="alert-danger">
                                        {{ $error }}
                                    </span>
                                    @endforeach
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-warning">Update</button>
                                </div>
                            </div>

                        </form>

                    </div>
                  </div>
            </div>
        </div>

        <script src="{{ mix('/js/app.js')}}"></script>
    </body>
</html>
