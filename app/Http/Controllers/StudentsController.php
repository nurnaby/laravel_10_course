<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    public function AllStudent(){
    //    $student= DB::select('select * from students where id=?',[1]);
    // $student = DB::table('students')->selectRaw('name,age')->orderByRaw('name ,age DESC')->get();
    // $student = DB::select("select* from students where age>? and name like?",[22,"s%"]);
    $student = DB::table('students')->selectRaw('count(*) as student_count,age')->groupBy('age')->havingRaw('age>?',[22])->get();

       return $student;
    }
}