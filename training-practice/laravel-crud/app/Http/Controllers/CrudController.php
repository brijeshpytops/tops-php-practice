<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index(){
        $students = Student::all();
        return view('crud.index', ['students' => $students]);
    }

    public function store(Request $request){

        if ($request->isMethod('post')) {
            // Validate the incoming request data
            $validatedData = $request->validate([
                'fname' => 'required|string',
                'lname' => 'required|string',
                'email' => 'required|email|unique:students,email',
                'mobile' => 'required|string',
            ]);
            $student = new Student();
            $student->first_name = $validatedData['fname'];
            $student->last_name = $validatedData['lname'];
            $student->email = $validatedData['email'];
            $student->mobile = $validatedData['mobile'];
            $student->save();
        }   
        return redirect()->route('index');


    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('crud.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'fname' => 'required|string',
            'lname' => 'required|string',
            'email' => 'required|email|unique:students,email,'.$id,
            'mobile' => 'required|string',
        ]);

        // Find the student by ID
        $student = Student::findOrFail($id);
        
        // Update the student attributes
        $student->update([
            'first_name' => $validatedData['fname'],
            'last_name' => $validatedData['lname'],
            'email' => $validatedData['email'],
            'mobile' => $validatedData['mobile'],
        ]);

        // Redirect back to the edit form with a success message
        return redirect()->route('index')->with('success', 'Student updated successfully!');
    }

    public function destroy($id)
    {   
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('index')->with('success', 'Student deleted successfully!');
    }
}
