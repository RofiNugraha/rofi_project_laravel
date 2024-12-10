<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Skill;
use App\Models\Certificate;
use App\Models\Project;
use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $about = About::all();
        $skill = Skill::all();
        $certificate = Certificate::all();
        $project = Project::all();
        $contact = Contact::all();
        return view('welcome', compact('about', 'skill', 'certificate', 'project', 'contact'));
    }
}