<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class PullController extends Controller
{
    public function getStudent(Request $request){

        if($request->submit == "filtered"){
            if($request->gender=="" && $request->age==""){
                $Students = Student::all();

            }else if($request->gender != "" && $request->age == "") {
                $Students = Student::where('Gender',$request->gender)->get();

            }else if ($request->age != "" && $request->gender == ""){
                $Students = Student::where('Age','>', 20)
                            ->orderBy('Age')
                            ->get();
            }else if ($request->gender != "" && $request->age != ""){
                $Students = Student::where([
                            ['Gender', $request->gender],
                            ['Age', '>', 20]])
                            ->orderBy('Age')
                            ->get();
            }
        }
        else if($request->submit == "cleared"){
            $Students = Student::all();
        }
        else{
            $Students = Student::all();
        }
        return view('main', compact('Students'));



     }
}
