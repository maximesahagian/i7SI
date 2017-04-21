<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
	public function getIndex()
	{
		$texts = DB::table('texts')->get();
		$images = DB::table('images')->get();
		$data = [
			"texts" => $texts,
			"images" => $images
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
    public function addCall(Request $request){
        DB::table('calls')->insert(
            [
                'number' => $request['number'],
                'country' => $request['country']
            ]
        );
    }
}