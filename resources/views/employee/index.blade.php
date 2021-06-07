@extends('shared.master')
@section('content')


<div class="panel panel-info" id="app">
    <div class="panel-heading">
        <h3 class="panel-title">List Employees</h3>
    </div>
    <div class="panel-body">

        <!-- Flash Message-->
        @if(session()->has('success'))
        <div class="alert alert-success text-center">
            <strong class="">
                {{ session()->get('success')}}
            </strong>
        </div>
        @endif
        <!--Fin Flash Message-->

        <a href="{{ route('employee.create')}}" class="btn btn-primary">NEW Employee</a>

        <table class="table table-hover table-boredred">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>

                <tr v-for="employee in employees">
                    <td scope="row">@{{ employee.id}}</td>
                    <td>@{{ employee.FullName}}</td>
                    <td>@{{ employee.Email}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


@endsection

@section('javascript')
<script>
    var app = new Vue({
        el: '#app',
        data: {
            message: 'List Employees',
            employees: []
        },
        methods: {
            getEmployees: function () {
                axios.get('http://localhost:8000/getEmployees')
                    .then(response => {
                        this.employees = response.data;
                    })
                    .catch(error => console.log(error))
            }
        },
        created() {
            this.getEmployees();
        },
    })
</script>
@endsection
