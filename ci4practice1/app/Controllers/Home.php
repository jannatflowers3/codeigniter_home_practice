<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function about(){
        return view("About");
    }
    public function contact(){
        return view("contact");
    }
    public function studentlist(){
        return view("StudentList");
    }
}
