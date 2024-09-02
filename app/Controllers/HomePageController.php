<?php

namespace App\Controllers;

class HomePageController extends BaseController
{
    public function index()
    {
        return view('homePage');
    }
}
