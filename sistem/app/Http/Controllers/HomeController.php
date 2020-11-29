<?php 

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Komen;

class HomeController extends Controller{
	function showHome(){
		$data['list_artikel'] = Artikel::all();
		return view('home', $data);
	}

	function showBlog(){
		$data['list_artikel'] = Artikel::all();
		return view('blog', $data);
	}

	function showDashboard(){
		return view('dashboard');
	}

	function show(Artikel $artikel){
		$data['list_komen'] = Komen::all();
		$data['list_artikel'] = Artikel::all();
		$data['artikel'] = $artikel;
		return view('single_blog', $data);
	}

	function createKomen(Artikel $artikel){
		$komen = new Komen;
		$komen->nama = request('nama');
		$komen->komentar = request('komen');
		$komen->save();

		return redirect(url('Client/Artikel', $artikel->id));
	}
}