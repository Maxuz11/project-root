<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        //return view('portfolio');
        return redirect()->to(base_url('portfolio.html'));
    }
}
