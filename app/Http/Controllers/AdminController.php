<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
	public function getIndex(){
		$data = [
			'active' => 'index'
		];
		return view('admin',$data);
	}
	public function authLogout(){
		if(!Auth::guest()) {
			Auth::logout();
		}
		return redirect('/');
	}
}