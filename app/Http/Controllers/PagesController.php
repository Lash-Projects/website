<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use Carbon\Carbon;

class PagesController extends Controller
{
    public function index() {
        return view('index');
    }

    public function contact() {
        return view('contact');
    }

    public function about() {
        $startDate = Carbon::createFromFormat('Y-m-d', "2015-04-11")->year;
        $currentDate = Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())->year;
        $interval = $currentDate - $startDate;
        return view('about',compact('interval'));
    }
}
