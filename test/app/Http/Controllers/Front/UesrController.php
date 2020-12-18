<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;
use phpDocumentor\Reflection\Types\Compound;

class UesrController extends Controller
{
    public function showUserName()
    {
        return 'Zoubir chennifa';

    }

    public function getIndex()
    {
      // $data=['ahmed' ,'Zoubir','ali','hamza'];
        $data=[];
        return view('welcome',compact('data'));
    }
}
