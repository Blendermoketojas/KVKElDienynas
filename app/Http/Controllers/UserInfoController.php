<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserInfoController extends Controller
{
    public function UserInfoRetriever()
    {
        if (Auth::check()) {
            $userName = Auth::user()->name;
            
        } else {
           
        }
    }
}
