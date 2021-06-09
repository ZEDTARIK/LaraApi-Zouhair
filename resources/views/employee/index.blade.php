@extends('shared.master')
@section('content')
<div id="app">
    <!--display Form -->
    <button @click="openForm = !openForm" class="btn btn-primary btn-sm">NEW Employee</button>

    <div class="panel panel-info" v-if="openForm">
        <div class="panel-heading">
            <h3 class="panel-title">Create New Employee</h3>
        </div>
        <div class="panel-body">
            <form method="POST" class="form-horizontal">
                @csrf
                <div class="form-group">
                    <label for="FullName" class="col-sm-2 control-label"> FullName </label>
                    <div class="col-sm-4">
                        <input v-model="employee.FullName" type="text" class="form-control" name="FullName"
                            id="FullName" placeholder="FullName"
                            value="{{ old('FullName', $employee->FullName ?? null )}}">
                    </div>
                    @if($errors->get('FullName'))
                    <div class="col-sm-4 has-error">
                        @foreach($errors->get('FullName') as $error )
                        <span class="help-block">
                            {{ $error }}
                        </span>
                        @endforeach
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="Email" class="col-sm-2 control-label"> Email </label>
                    <div class="col-sm-4">
                        <input v-model="employee.Email" type="text" class="form-control" name="Email" id="Email"
                            placeholder="Email" value="{{ old('Email', $employee->Email ?? null )}}">
                    </div>
                    @if($errors->get('Email'))
                    <div class="col-sm-4 has-error">
                        @foreach($errors->get('Email') as $error )
                        <span class="help-block">
                            {{ $error }}
                        </span>
                        @endforeach
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="Adresse" class="col-sm-2 control-label"> Adresse </label>
                    <div class="col-sm-4">
                        <input v-model="employee.Adresse" type="text" class="form-control" name="Adresse" id="Adresse"
                            placeholder="Adresse" value="{{ old('Adresse' , $employee->Adresse ?? null )}}">
                    </div>
                    @if($errors->get('Adresse'))
                    <div class="col-sm-4 has-error">
                        @foreach($errors->get('Adresse') as $error )
                        <span class="help-block">
                            {{ $error }}
                        </span>
                        @endforeach
                    </div>
                    @endif
                </div>


                <div class="form-group">

                    <div class="col-sm-9">
                        <button v-if="!onEdit" type="button" @click="AddEmployee()" class="btn btn-success btn-sm">Submit</button>
                        <button v-if="onEdit" @click="UpdateEmployee()" type="button"  class="btn btn-warning btn-sm">Update</button>
                        <button type="reset" @click="openForm = !openForm" class="btn btn-danger btn-sm">Cancel</a>
                    </div>

                </div>
            </form>
        </div>
    </div>
    <!-- Fin display Form -->

    <div class="panel panel-info">
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


            <!-- List Employees-->
            <table class="table table-hover table-bordless table-responsive">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tbody>

                    <tr v-for="employee in employees">
                        <td scope="row">@{{ employee.id}}</td>
                        <td>@{{ employee.FullName}}</td>
                        <td>@{{ employee.Email}}</td>
                        <td class="btn-toolbar">
                            <button @click="onEditEmployee(employee)" class="btn btn-warning btn-sm">Edit</button>
                            <button @click="onDeleteEmployee(employee)" class="btn btn-danger btn-sm">Deleted</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!--Fin List Employee -->
        </div>
    </div>
</div>

@endsection

@section('javascript')
<script>
    var app = new Vue({
        el: '#app',
        data: {
            message: 'List Employees',
            employees: [],
            openForm: false,
            onEdit : false,
            employee: {
                FullName: '',
                Email: '',
                Adresse: ''
            }
        },
        methods: {
            getEmployees: function () {
                axios.get('http://localhost:8000/getEmployees')
                    .then(response => {
                        this.employees = response.data;
                    })
                    .catch(error => console.log(error))
            },
            AddEmployee: function () {
                axios.post('http://localhost:8000/addEmployee', this.employee)
                    .then(res => {
                        this.employees.unshift(res.data[0]);
                        this.openForm = false;
                        this.employee = {
                            FullName: '',
                            Email: '',
                            Adresse: ''
                        }
                    })
                    .catch(error => console.log(error))

            },
            onEditEmployee: function(employee) {
                this.onEdit  = true;
                this.openForm = true;
                this.employee = employee;
            },
            UpdateEmployee: function () {
                axios.put('http://localhost:8000/updateEmployee', this.employee)
                    .then(res => {
                        this.onEdit = false;
                        this.openForm = false;
                        this.employee = {
                            FullName: '',
                            Email: '',
                            Adresse: ''
                        }
                    })
                    .catch(error => console.log(error))
            },
            onDeleteEmployee: function(emp) {
               console.log(emp.id);
            }
        },
        created() {
            this.getEmployees();
        },
    })
</script>
@endsection
