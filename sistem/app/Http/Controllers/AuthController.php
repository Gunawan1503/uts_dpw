<?php 

namespace App\Http\Controllers;

use Auth;
use App\User;


class AuthController extends Controller{
	function showLogin(){
		return view('login');
	}

	function loginProcess(){
		if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
			return redirect('Admin/Dashboard')->with('succes', 'Login berhasil');
		} else {
			return back()->with('danger', 'Login Gagal, Silahkan Cek Email dan Password Anda');
		}
	}

	function logout(){
		Auth::logout();

		return redirect('Login');
	}

	function showRegister(){
		return view('register');
	}

	function registerProcess(){
		$user = new User;
		$user->nama = request('nama');
		$user->username = request('username');
		$user->email = request('email');
		$user->password = bcrypt(request('password'));
		$user->save();

		return redirect('Login')->with('success', 'User Berhasil Ditambahkan');
	}
}