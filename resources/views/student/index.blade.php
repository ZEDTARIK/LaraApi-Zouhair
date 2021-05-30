<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="container">
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card border-primary mb-3">
                    <div class="card-header">List Students</div>
                    <div class="card-body">
                        
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
    </body>
</html>
