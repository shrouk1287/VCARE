<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function index(){
        $majors = Major::orderBy('id', "DESC")->cursorPaginate(10);
        return view("front.majors.index", ['majors' => $majors]);
    }
}
