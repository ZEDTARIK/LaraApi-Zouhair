<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudent;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::cursor();
        return view('student.index', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudent $request)
    {
        $student = new Student();
        $student->studentCode = $request->input('studentCode');
        $student->firstName = $request->input('firstName');
        $student->lastName = $request->input('lastName');
        // save photo
        if ($request->hasFile('photo')) {
            
            $student->photo = $request->photo->store('images');
        }
        $student->save();
        session()->flash('success', 'SuccessFully Inserted');
        return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::findOrfail($id);
        return view('student.edit', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(StoreStudent $request, $id)
    {
        $student = Student::findOrfail($id);
        $student->firstName = $request->input('firstName');
        $student->lastName = $request->input('lastName');
        $student->save();
        session()->flash('success', 'Student SuccessFully Updated');
        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::findOrfail($id);
        $student->delete();
        session()->flash('success', 'SuccessFully Deleted');
        return redirect()->route('student.index');
    }
}
