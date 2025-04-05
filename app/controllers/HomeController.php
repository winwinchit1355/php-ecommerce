<?php

namespace App\Controllers;

use Illuminate\Database\Capsule\Manager as Capsule;

class HomeController extends BaseController
{
    public function index()
    {
        return view('home');
    }
}
