<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Models\UserCredentials;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    function login(Request $req)
    {
        $data = $req->input('username');
        $pass = $req->input('password');
        $user = User::where('name', $data)->firstOrFail();


        if ($pass === $user->password) {
            return response()->json(['message' => 'Login successful', 'user' => $user], 200);

        } else {
            $error = "Prisijungimas nepavyko";
            return response()->json(['error' => 'Invalid credentials'], 401);
        }
    }

    public function logout()
    {
        session()->flush();
        return redirect('/Login');

    }


}
