<?php

namespace App\Http\Controllers;

use App\Student;

class StudentController extends Controller
{

	public function index()
	{
        $students=Student::all();
        //dd($students);
		return view('student.index', [
            'students' => $students
		]);
	}
}