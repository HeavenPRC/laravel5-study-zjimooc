<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

	public function index()
	{
		//数据分页
        $students=Student::paginate(7);
        //dd($students);
		return view('student.index', [
            'students' => $students
		]);
	}

	public function create(Request $request)
	{
      $sex = new Student;
		  if ($request->isMethod('POST')) {
          /*控制器验证--没通过验证会抛出异常,通过session分配到所有view中*/
/*            $this->validate($request, [
            'Student.name' =>'required|min:2|max:20',
            'Student.age' => 'required|integer',
            'Student.sex' => 'required|integer'
            ],[
            'required' =>':attribute为必填项',
            'min'=>':attribute 长度最短为两位',
            'integer'=>':attribute 必须为整数'
            ],[
            'Student.name' => '姓名',
             'Student.age' =>'年龄',
             'Student.sex' =>'性别'
            ]);*/
           /*validate类验证*/
           $validator = \Validator::make($request->input(),[
            'Student.name' =>'required|min:2|max:20',
            'Student.age' => 'required|integer',
            'Student.sex' => 'required|integer'
            ],[
            'required' =>':attribute为必填项',
            'min'=>':attribute 长度最短为两位',
            'integer'=>':attribute 必须为整数'
            ],[
            'Student.name' => '姓名',
             'Student.age' =>'年龄',
             'Student.sex' =>'性别'
            ]
           );

           if($validator->fails()) {
           	   /*数据保持*/
                return redirect()->back()->withErrors($validator)->withInput();
           }

            $datas = $request->input('Student');
            if (Student::create($datas) ) {
            return redirect('student/index')->with('success','添加成功');
	       }else{
	       	  return redirect()->back();
	       }

		  }
          return view('student.insert',['student' => $sex]);
	}

	public function save(Request $request)
	{
       $datas = $request->input('Student');
       $student = new Student();
       $student->name = $datas['name'];
       $student->age  = $datas['age'];
       $student->sex  = $datas['sex'];
        //var_dump($bool);
       if($bool = $student->save()){
          return redirect('student/index')->with('success','添加成功');
       }else{
       	  return redirect()->back();
       }
	}

  public function update(Request $request, $id)
  {
       $student = Student::find($id);
       if ($request->isMethod('POST')){
          $validator = \Validator::make($request->input(),[
            'Student.name' =>'required|min:2|max:20',
            'Student.age' => 'required|integer',
            'Student.sex' => 'required|integer'
            ],[
            'required' =>':attribute为必填项',
            'min'=>':attribute 长度最短为两位',
            'integer'=>':attribute 必须为整数'
            ],[
            'Student.name' => '姓名',
             'Student.age' =>'年龄',
             'Student.sex' =>'性别'
            ]
           );

           if($validator->fails()) {
               /*数据保持*/
                return redirect()->back()->withErrors($validator)->withInput();
           }
          $datas = $request->input('Student');
          $student->name = $datas['name'];
          $student->age = $datas['age'];
          $student->sex = $datas['sex'];
       if($bool = $student->save()){
          return redirect('student/index')->with('success','修改成功');
       }else{
          return redirect()->back();
       }
       }
       return view('student.update',[
        'student' => $student
     ]);
  }

  public function delete($id)
  {
      $student = Student::find($id);
      if ($bool = $student -> delete()) {
        return redirect('student/index')->with('success', $id.'删除成功');;
      } else {
        return redirect('student/index')->with('error', $id.'删除失败');
      }
  }
}