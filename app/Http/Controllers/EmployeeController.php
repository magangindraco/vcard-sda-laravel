<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'vcf_file' => 'nullable|file|mimes:vcf|max:2048', // Tambahkan validasi untuk file VCF
        ]);
    
        // Menyimpan foto
        if ($request->hasFile('photo')) {
            $filenameWithExt = $request->file('photo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('photo')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('photo')->storeAs('public/photos', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
    
        // Menyimpan file VCF
        if ($request->hasFile('vcf_file')) {
            $vcfFilenameWithExt = $request->file('vcf_file')->getClientOriginalName();
            $vcfFilename = pathinfo($vcfFilenameWithExt, PATHINFO_FILENAME);
            $vcfExtension = $request->file('vcf_file')->getClientOriginalExtension();
            $vcfFileNameToStore = $vcfFilename . '_' . time() . '.' . $vcfExtension;
            $vcfPath = $request->file('vcf_file')->storeAs('public/vcf', $vcfFileNameToStore);
        } else {
            $vcfFileNameToStore = null; // Atau sesuaikan sesuai kebutuhan
        }
    
        // Menyimpan data karyawan ke database
        Employee::create([
            'name' => $request->name,
            'position' => $request->position,
            'phone' => $request->phone,
            'email' => $request->email,
            'photo' => $fileNameToStore,
            'vcf_file' => $vcfFileNameToStore, // Pastikan ini ada
        ]);
    
        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }
    

    public function show($username)
    {
        $employee = Employee::where('name', $username)->firstOrFail();

        return view('user_card', compact('employee'));
    }


}
