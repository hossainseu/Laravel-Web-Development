<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitorModel;

class VisitorController extends Controller
{
    function VisitorIndex(){

        $VisitorData=json_decode(VisitorModel::orderBy('id','DESC')->take(100)->get());
        return view('Visitor',['VisitorData'=>$VisitorData]);
    }
}
