<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function someAction()
    {
        $today = \Carbon\Carbon::now();
        return view('Calendar', ['date' => $today]);
    }
}
