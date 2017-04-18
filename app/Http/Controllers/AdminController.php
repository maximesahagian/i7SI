<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
	public function getIndex(){
		$data = [
			'active' => 'index'
		];
		return view('admin.admin',$data);
	}
	public function authLogout(){
		if(!Auth::guest()) {
			Auth::logout();
		}
		return redirect('/');
	}

	public function getMessages(){
		$messages = DB::table('messages')->get();

		$data = [
			'active' => 'messages',
			'messages' => $messages
		];

		return view('admin.messages',$data);
	}
}