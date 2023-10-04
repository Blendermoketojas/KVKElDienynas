<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Models\LoginInfo;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    function login(Request $req)
    {
        $data = $req->input('username');
        $pass = $req->input('password');
        $user = User::where('name', $data)->firstOrFail();


        if ($pass == $user->password) {

            // $req->session()->put('user', [
            //     'name' => $data,
            // ]);
            // return view('Main', [
            //     'user' => session('user')
            // ]);
            $req->session()->put('user', $user);
            return view('Main');
        } else {
            $error = "Prisijungimas nepavyko";
            return view('Login', compact('error'));
        }
    }


    public function logout()
    {
        session()->flush();
        return redirect('/Login');
       
    }
}
