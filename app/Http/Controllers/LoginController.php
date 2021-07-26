<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Login;

class LoginController extends Controller
{
    public function index(){

        $logins = Login::all();

        return view('index',['logins' => $logins]);
    }

}


