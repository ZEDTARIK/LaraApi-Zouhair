<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>School-Management</title>
        <link rel="stylesheet" href="{{ mix('/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    </head>
    <body class="container">
        <div class="row">
            <div class="col-md-12">
                @yield('content')
            </div>
        </div>
        <script src="{{ mix('/js/app.js')}}"></script>
    </body>
</html>
