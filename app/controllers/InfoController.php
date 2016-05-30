<?php

class InfoController extends BaseController {

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

public function showInfo(){
 return View::make("admininfo");
}

public function handleInfo(){
  $event=new Info;
  $filename=Input::file("file")->getClientOriginalName();
  $event->heading=Input::get("heading");
  $event->category=Input::get("category");
  $event->content=Input::get("content");
	$event->file=$filename;
  Input::file('file')->move(base_path().'/app/storage/uploaded',$filename);
  $event->save();

  // Use url with redirect not the view file
  return Redirect::to('/admininfo')->with('success',"Successfully Submitted Data");
}

public function showAllInfo(){
  $info=Info::all();
  return View::make("allInfo")->with('info',$info);
}

public function viewInfo($id){
  $info=Info::find($id);
  return View::make("infoSingleView")->with('info',$info);
}

public function deleteInfo($id){
  Info::destroy($id);
  return Redirect::to("admininfoview");
}

public function editInfo($id){
  $info=Info::find($id);
  return View::make("infoSingleEdit")->with('info',$info);
}

public function editInfoData($id){
  $filename=Input::file("file")->getClientOriginalName();
  $heading=Input::get("heading");
	$category=Input::get("category");
  $content=Input::get("content");
  Input::file('file')->move(base_path().'/app/storage/uploaded',$filename);
  Info::where('id', '=', $id)
            ->update(array('heading' => $heading,'category'=>$category,'content'=>$content,'file' => $filename));

   // Use url with redirect not the view file
  return Redirect::to('admininfoview');
}

}
//========= End of controller ==================
?>
