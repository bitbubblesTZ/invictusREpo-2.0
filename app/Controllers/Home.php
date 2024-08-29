<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string {
        return view('homePage');
    }
    public function potfolio(): string {
        return view('potfolios');
    }
    public function innerPage(): string {
        return view('innerPage');
    }

}
