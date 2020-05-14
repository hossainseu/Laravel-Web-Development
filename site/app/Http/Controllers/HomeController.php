<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitorModel;

class HomeController extends Controller
{
    function HomeIndex(){

        $UserIp=$_SERVER['REMOTE_ADDR'];
        date_default_timezone_set("Asia/Dhaka");
        $timeDate=date("y-m-d h:i:sa");
        VisitorModel::insert(['ip_address'=>$UserIp, 'visit_time'=>$timeDate]);
        return view('Home');
    }
}
