<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

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

	public function getMessage($id){
		$message = DB::table('messages')->where('id',"=",$id)->first();
		
		$data = [
			'active' => 'messages',
			'message' => $message
		];

		return view('admin.message_view',$data);
	}

	public function getTexts(){
		$texts = DB::table('texts')->get();
		$data = [
			'active' => 'texts',
			'texts' => $texts
		];

		return view('admin.texts', $data);
	}

	public function editTexts(){
		$inputs = Input::all();
		foreach($inputs as $text){
			$id = array_search($text, $inputs);
			DB::table('texts')->where('id','=',$id)->update([
				'text' => $text
			]);
		}

		return redirect('/admin/texts');
	}
}