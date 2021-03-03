<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Masyarakat;
use Validator;
use Hash;
use Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('masyarakat.login');
    }

    public function logout()
    {
        if (Auth::guard('masyarakat')->check()) {
            Auth::guard('masyarakat')->logout();
        } else {
            return view('masyarakat.dashboard');
        }
      
        return redirect('/');
    }

    public function register()
    {
        return view('masyarakat.register');
    }

    public function postlogin(Request $request)
    {
        if(Auth::guard('masyarakat')->attempt($request->only('username', 'password'))) {
            return redirect('/dashboard');
        }
        return redirect('login')->with('error','Username atau password salah'); 
    }

    public function postregister(Request $request)
    {
        $rules = [
            'nik'                   => 'required|min:16|max:16',
            'nama'                  => 'required|min:3',
            'username'              => 'required|unique:masyarakat',
            'telp'                  => 'required',
            'password'              => 'required'
        ];
 
        $messages = [
            'nik.min'               => 'NIK harus 16 karakter',
            'nik.max'               => 'NIK harus 16 karakter',
            'nama.required'         => 'Nama lengkap wajib diisi',
            'nama.min'              => 'Nama lengkap minimal 3 karakter',
            'username.required'     => 'Username wajib diisi',
            'username.username'     => 'Username tidak valid',
            'username.unique'       => 'Username sudah terdaftar',
            'telp.required'         => 'No telepon wajib diisi',
            'password.required'     => 'Password wajib diisi',
        ];
 
        $validator = Validator::make($request->all(), $rules, $messages);
 
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
 
        $masyarakat = new Masyarakat;
        $masyarakat->nik      = $request->nik;
        $masyarakat->nama     = $request->nama;
        $masyarakat->username = strtolower($request->username);
        $masyarakat->telp     = $request->telp;
        $masyarakat->password = Hash::make($request->password);
        $simpan = $masyarakat->save();
 
        if($simpan){
            Session::flash('success', 'Register berhasil! Silahkan login untuk mengakses data');
            return redirect('login');
        } else {
            Session::flash('error', ['' => 'Register gagal! Silahkan ulangi beberapa saat lagi']);
            return redirect('register');
        }
    }

    public function dashboard()
    {
        return view('masyarakat.dashboard');
    }
}
