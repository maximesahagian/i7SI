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

	public function deleteMessage($id){
		DB::table('messages')->where('id', '=', $id)->delete();
	}


	public function getImages(){
		$images = DB::table('images')->get();
		$data = [
			'active' => 'images',
			'images' => $images
		];

		return view('admin.images', $data);
	}

	public function editImage($id){
		$image = $_FILES['image'];

		if(isset($image) && $image != null){
			$ext = pathinfo($image['name']);
			$ext = $ext['extension'];
			$image_name = uniqid().'.'.$ext;
			$target = public_path()."/images/".$image_name;
			move_uploaded_file($image['tmp_name'],$target);

			DB::table('images')->where('id','=',$id)->update([
				'link' => $image_name
			]);

		}

		return redirect('/admin/images');
	}

}