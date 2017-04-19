<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
	public function getIndex()
	{
		$texts = DB::table('texts')->get();
		$data = [
			"texts" => $texts
		];

		return view('home', $data);
	}

	public function addMessage(Request $request){
		DB::table('messages')->insert(
			[
				'firstname' => $request['firstname'],
				'lastname' => $request['lastname'],
				'email' => $request['email'],
				'object' => $request['object'],
				'message' => $request['message']
			]
		);
	}
}