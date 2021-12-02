<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index() {
        $students = Student::all();
        return view('students.index')->with('students', $students);
    }

    public function add() {
        return view('students.add');
    }

    public function store(Request $request) {
        Student::create($request->all());
        return redirect('/');
    }

    public function edit($id) {
        $student = Student::find($id);
        return view('students.edit')->with('student', $student);
    }

    public function update(Request $request, $id) {
        $student = Student::find($id);
        $student->update($request->all());
        return redirect('/');
    }

    public function delete($id) {
        Student::destroy($id);
        return redirect('/');
    }
}
