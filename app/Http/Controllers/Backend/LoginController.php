<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }


    public function dologin(Request $request){
        try {
            $request->validate([
                'email' => 'required',
                'password' => 'required',
            ]);

            $creds = $request->except('_token');

//            dd( Auth::attempt($creds));
//            \auth()->attempt($creds);

            if (auth()->attempt($creds)){
                return redirect()->route('admin.dashboard');
            }
            return redirect()->back();


        } catch (\Exception $exception) {
            $errors = $exception->validator->getMessageBag();
            return redirect()->back()->withErrors($errors)->withInput();

        }
    }




    public function logout(){

        try {
            auth()->logout();
            return redirect()->route('login');
        } catch (\Exception $exception){
            return redirect()->back();
        }

    }




    public function profile()
    {
        return view('backend.users.profile');
    }








}
