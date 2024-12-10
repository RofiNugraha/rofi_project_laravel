<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Skill;
use App\Models\Certificate;
use App\Models\Project;
use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $about = About::all();
        $skill = Skill::all();
        $certificate = Certificate::all();
        $project = Project::all();
        $contact = Contact::all();
        return view('dashboard', compact('about', 'skill', 'certificate', 'project', 'contact'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:contacts,email',
            'phone' => 'required|string|max:15',
            'sosial_media' => 'nullable|string|max:255',
        ]);        

        Contact::create($request->all());
        return redirect()->route('dashboard')->with('success', 'Contact created successfully!');
    }
}