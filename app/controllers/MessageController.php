<?php

class MessageController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

public function showMessage(){
 return View::make("adminmessage");
}

public function handleMessage(){
  $msg=new Message;
  $filename=Input::file("file")->getClientOriginalName();
  $msg->heading=Input::get("heading");
  $msg->content=Input::get("content");
	$msg->file=$filename;
  Input::file('file')->move(base_path().'/app/storage/uploaded',$filename);
  $msg->save();

  // Use url with redirect not the view file
  return Redirect::to('/adminmessage')->with('success',"Successfully Submitted Data");
}

public function showAllMessage(){
  $msg=Message::all();
  return View::make("allMessage")->with('msg',$msg);
}

public function viewMessage($id){
  $msg=Message::find($id);
  return View::make("messageSingleView")->with('msg',$msg);
}

public function deleteMessage($id){
  Message::destroy($id);
  return Redirect::to("adminmessageview");
}

public function editMessage($id){
  $msg=Message::find($id);
  return View::make("messageSingleEdit")->with('msg',$msg);
}

public function editMessageData($id){
  $filename=Input::file("file")->getClientOriginalName();
  $heading=Input::get("heading");
  $content=Input::get("content");
  Input::file('file')->move(base_path().'/app/storage/uploaded',$filename);
  Message::where('id', '=', $id)
            ->update(array('heading' => $heading,'content'=>$content,'file' => $filename));

   // Use url with redirect not the view file
  return Redirect::to('adminmessageview');
}

}
//========= End of controller ==================
?>
