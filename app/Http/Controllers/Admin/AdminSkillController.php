<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;
use Yajra\DataTables\DataTables;

class AdminSkillController extends Controller
{
    public function index()
    {
        $skill = Skill::all();
        return view('admin.skill.index', compact('skill'));
    }

    public function create()
    {
        return view('admin.skill.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:50',
            'description' => 'nullable|string|max:255',
        ]);        

        Skill::create($request->all());
        return redirect()->route('admin.skill')->with('success', 'Data berhasil ditambahkan.');
    }

    public function show(string $id) {
        $skill = Skill::findOrFail($id);
        return view('admin.skill.show', compact('skill'));
    }

    public function edit($id)
    {
        $skill = Skill::findOrFail($id);
        return view('admin.skill.edit', compact('skill'));
    }

    public function update(Request $request, string $id)
    {
        $skill = Skill::findOrFail($id);
        
        $request->validate([
            'title' => 'required|string|max:50',
            'description' => 'nullable|string|max:255',
        ]);                

        $skill->update($request->all());
        return redirect()->route('admin.skill')->with('success', 'Data berhasil diupdate.');
    }

    public function destroy(string $id)
    {
        Skill::destroy($id);
        return redirect()->route('admin.skill')->with('success', 'Data berhasil dihapus.');
    }
}