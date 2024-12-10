<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Certificate;
use Illuminate\Support\Facades\Storage;

class AdminCertificateController extends Controller
{
    
    public function index()
    {
        $certificate = Certificate::all();
        return view('admin.certificate.index', compact('certificate'));
    }

    
    public function create()
    {
        return view('admin.certificate.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'issued_by' => 'required|string',
            'issued_at' => 'required|date',
            'file' => 'nullable|file|mimes:pdf',
            'description' => 'nullable|string',
        ]);
        
        $data = $request->all();
       
        if ($file = $request->file('file')){
            $filename = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move(public_path('/storage/certificate'), $filename);
            $data['file'] = $filename;
        }
    
        Certificate::create($data);
    
        return redirect()->route('admin.certificate')->with('success', 'Certificate added successfully!');
    }
    

    public function show(string $id) {
        $certificate = Certificate::findOrFail($id);
        return view('admin.certificate.show', compact('certificate'));
    }

    
    public function edit(string $id)
    {
        $certificate = Certificate::findOrFail($id);
        return view('admin.certificate.edit', compact('certificate'));
    }

    
    public function update(Request $request, string $id)
    {
        $certificate = Certificate::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'issued_by' => 'required|string|max:255',
            'issued_at' => 'required|date',
            'file' => 'nullable|file|mimes:pdf',
            'description' => 'nullable|string',
        ]);

        // Ambil semua data request
        $data = $request->all();

        // Logika untuk file
        if ($file = $request->file('file')) {
            // Hapus file lama jika ada
            if ($certificate->file && file_exists(public_path('/storage/certificate/' . $certificate->file))) {
                unlink(public_path('/storage/certificate/' . $certificate->file));
            }

            // Simpan file baru
            $filename = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move(public_path('/storage/certificate'), $filename);
            $data['file'] = $filename;
        }

        // Perbarui data certificate
        $certificate->update($data);

        return redirect()->route('admin.certificate')->with('success', 'Certificate updated successfully!');
    }
 
    public function destroy(string $id)
    {
        $certificate = Certificate::findOrFail($id);

        if ($certificate->file) {
            Storage::disk('public')->delete($certificate->file);
        }

        $certificate->delete();

        return redirect()->route('admin.certificate')->with('success', 'Certificate deleted successfully!');
    }
}