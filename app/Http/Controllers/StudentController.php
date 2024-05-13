<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class studentController extends Controller
{
    public function index(){
        // get all students
        $students = Student::all();
        
        return view('students.index', compact('students'));
    }

    public function create(){
        return view('students.create');
    }

    public function save(Request $request){

        $student = new Student();

        $student->name = $request->name;
        $student->phone = $request->phone;
        $student->email = $request->email;
        $student->save();

        return redirect('students')->with(['msg' => 'New recored added']);
    }

    public function edit($id){

        $student = Student::find($id);

        return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id){
        
        $student = Student::find($id);

        $student->name = $request->name;
        $student->phone = $request->phone;
        $student->email = $request->email;
        $student->save();

        return redirect('students');
    }
}
