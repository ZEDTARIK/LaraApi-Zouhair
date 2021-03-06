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
            <div class="col-md-12" style="margin-top: 25px;">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                      <!-- Brand and toggle get grouped for better mobile display -->
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/">Laravel</a>
                      </div>

                      <!-- Collect the nav links, forms, and other content for toggling -->
                      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                          <li class="">
                              <a href="/employee">Employee </a></li>
                          <li><a href="/student">Student</a></li>
                          <li><a href="/">CVTechque</a></li>
                        </ul>

                      </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                  </nav>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @yield('content')
            </div>
        </div>
        <script src="{{ mix('/js/app.js')}}"></script>
        <script src="{{ asset('js/vue.js')}}"></script>
        <script src="{{ asset('js/axios.js')}}"></script>

        @yield('javascript')

    </body>
</html>
