<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
	public function getIndex()
	{
		return view('home');
	}

	public function addMessage(Request $request){
		DB::table('messages')->insert(
			[
				'firstname' => $request['firstname'],
				'lastname' => $request['lastname'],
				'email' => $request['email'],
				'number' => $request['number'],
				'object' => $request['object'],
				'message' => $request['message']
			]
		);
	}
}