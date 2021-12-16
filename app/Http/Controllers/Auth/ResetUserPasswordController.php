<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResetUserPasswordController extends Controller
{
    function index(){
        return view('auth.passwords.reset_password');
    }
    function reset_password(Request $request){
        dd($request);
    }

}
