<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployee;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::cursor();
        return view('employee.index', ['employees' => $employees]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployee $request)
    {
        $data = $request->all();
        Employee::create($data);
        session()->flash('success', 'Employee Successfully Inserted!');
        return redirect()->route('employee.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::findOrfail($id);
        return view('employee.edit', ['employee' => $employee]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(StoreEmployee $request, $id)
    {
        $employee = Employee::findOrfail($id);
        $employee->FullName = $request->input('FullName');
        $employee->Email = $request->input('Email');
        $employee->Adresse = $request->input('Adresse');

        $employee->save();
        session()->flash('success', 'Employee Successfully Updated');
        return redirect()->route('employee.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::findOrfail($id);
        $employee->delete();
        session()->flash('success', 'Employee Successfully Deleted');
        return redirect()->route('employee.index');
    }

    public function getEmployees()
    {
        $employees = Employee::latest()->get();
        return $employees;
    }

    public function addEmployee(StoreEmployee $request) {
        $employee = new Employee();
        $employee->FullName = $request->input('FullName');
        $employee->Email = $request->input('Email');
        $employee->Adresse = $request->input('Adresse');
        $employee->save();
        session()->flash('success', 'Employee Successfully Inserted!');
        return Response()->json([$employee]);
    }
}
