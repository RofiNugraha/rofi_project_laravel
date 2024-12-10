<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Request;

class Admincontroller extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    
    public function home()
    {
        return view('admin.home');
    }

    public function about()
    {
        return view('admin.about');
    }

    public function certificate()
    {
        return view('admin.certificate');
    }

    public function project()
    {
        return view('admin.project');
    }

    public function skill()
    {
        return view('admin.skill');
    }

    public function contact()
    {
        return view('admin.contact');
    }
}