<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SecondController extends Controller
{
    public function __construct()
    {
        //tout les mothodes -ShowString2
        $this->middleware('auth')->except('ShowString2');
    }

    public  function ShowString(){
        return 'static string';
    }
    public  function ShowString1(){
        return 'static string1';
    }
    public  function ShowString2(){
        return 'static string2';
    }
    public  function ShowString3(){
        return 'static string3';
    }
}
