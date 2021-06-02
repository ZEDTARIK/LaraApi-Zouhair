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
                    <div class="card-header">Create New Student</div>
                    <div class="card-body">

                        <form method="POST" action="{{route('store')}}" class="form-horizontal">

                            @csrf

                            <div class="form-group">
                                <label for="studentCode" class="col-sm-2 control-label">Student Code</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="studentCode" id="studentCode" placeholder="Student Code">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="firstName" class="col-sm-2 control-label">First Name</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="lastName" class="col-sm-2 control-label">Last Name</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-success">Submit</button>
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
