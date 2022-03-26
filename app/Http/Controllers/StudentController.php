<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function index(){
        return view('index');
    }

    function  create(){
        return view('form');
    }

    function store(Request $request){
       $student = Student::create([
           'name'=>$request->name,
           'surname'=>$request->surname,
           'age'=>$request->age,
           'image'=>$request->file('image')->store('images')
       ]);

       return redirect('/');
    }


    function edit($id){
      $student = Student::where("id",$id)->get();

      $s = [];
      foreach ($student as $item){
          $s['id'] = $item->id;
          $s['name'] = $item->name;
          $s['surname'] = $item->surname;
          $s['age'] = $item->age;
      }
      return view('edit_student',['student'=>$s]);
    }

    function update(Request  $request){
        $id = $request->id;
        $s = Student::where('id',$id)
            ->update([
               'name'=>$request->name,
               'surname'=>$request->surname,
               'age'=>$request->age
            ]);
        return redirect('/');
    }

    function destroy($id){
        Student::where('id',$id)->delete();

      return  redirect('/');
    }
}
