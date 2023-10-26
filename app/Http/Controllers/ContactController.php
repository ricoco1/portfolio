<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function message_process(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50|min:3',
            'email' => 'required|email|unique:contacts,email',
            'message' => 'required',
        ], [
            'name.required' => 'Kolom Nama harus diisi.',
            'name.min' => 'Minimal 3 huruf',
            'email.required' => 'Kolom Email harus diisi.',
            'email.email' => 'Email yang dimasukkan harus berupa alamat email yang valid.',
            'email.unique' => 'Email sudah digunakan sebelumnya.',
            'message.required' => 'Kolom Pesan harus diisi.',
        ]);
    
        // Periksa hasil validasi
        if ($validator->fails()) {
            return redirect('/#contact-me')->withErrors($validator)->withInput();
        }
    
        // Validasi sukses, simpan data ke dalam database
        Contact::create($request->all());
    
        $request->session()->flash('success', 'Data berhasil disimpan');
        return redirect('/#contact-me');
    }
    
}
