<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LibraryController extends Controller
{
    public function index(){
        $library = DB::table('libraries')
        ->select('libraries.*','students.name')
        ->join('students','libraries.stu_id','students.id')->get();
        return $library;
    }


    // return $library;
    // return $library;
}