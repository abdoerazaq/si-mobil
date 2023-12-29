<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index',[
            'title' => 'Daftar'
        ]);
    }
    public function store(Request $request){
      $validatedData = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email:dns|unique:users',
        'password' => 'required|max:10',
        'alamat' => 'required',
        'no_tel' => 'required',
        'no_sim' => 'required'
      ]);

    //   $validatedData = ['password'] = bcrypt($validatedData['password']);
    $validatedData ['password'] = Hash::make($validatedData['password']); 

      User::create($validatedData);
      session()->flash('success', 'Pendaftaran Berhasil !');
    return redirect('/login');
    }
}
