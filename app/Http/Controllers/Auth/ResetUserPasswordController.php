<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Models\User;

class ResetUserPasswordController extends Controller
{
    function index(){
        return view('auth.passwords.reset_password');
    }
    function reset_password(Request $request){
        //dd($request);
        if (!Hash::check($request->current_password, $request->user()->password)) {


            return redirect()->back()->withErrors(['current_password' => 'Не верный текущий пароль']);

        }
        if($request->password != $request->password_confirmation) {
            return redirect()->back()->withErrors(['password_confirmation' => 'Пароли не совпадают']);
        }

        $request->user()->update([

            'password' => bcrypt($request->password),
        ]);
        return redirect()->back()->with(['status' => 'Пароль изменен']);

    }

//    function reset_password_by_email(Request $request){
//        $users = DB::table('users')->where('email', $request->input('email'))->first();
//          print_r($users);
//
//
//
//            if(!$users) {
//                return redirect()->back()->withErrors(['email' => 'Такого email не сущетствует']);
//            } else {
//                return redirect()->back()->withErrors(['email' => 'На вашу почту отправлено письмо для смены пароля']);
//            }
//
//
//
//
//    }

}
