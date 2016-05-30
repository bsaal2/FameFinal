<?php

class InformationController extends BaseController {

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

public function showNew(){
 return View::make("adminnew");
}

public function handleNew(){
  $new=new Information;
  $filename=Input::file("file")->getClientOriginalName();
  $new->heading=Input::get("heading");
  $new->category=Input::get("category");
  $new->content=Input::get("content");
	$new->file=$filename;
  Image::make(Input::file('file'))->resize(750, 308)->save(base_path().'/app/storage/uploaded/'.$filename);
  $new->save();

  // Use url with redirect not the view file
  return Redirect::to('/adminnew')->with('success',"Successfully Submitted Data");
}

public function showAllNew(){
  $news=Information::all();
  return View::make("allNew")->with('news',$news);
}

public function viewNew($id){
  $news=Information::find($id);
  return View::make("newSingleView")->with('news',$news);
}

public function deleteNew($id){
  Information::destroy($id);
  return Redirect::to("adminnewview");
}

public function editNew($id){
  $news=Information::find($id);
  return View::make("newSingleEdit")->with('news',$news);
}

public function editNewData($id){
  $filename=Input::file("file")->getClientOriginalName();
  $heading=Input::get("heading");
	$category=Input::get("category");
  $content=Input::get("content");
  Image::make(Input::file('file'))->resize(750, 308)->save(base_path().'/app/storage/uploaded/'.$filename);
  Information::where('id', '=', $id)
            ->update(array('heading' => $heading,'category'=>$category,'content'=>$content,'file' => $filename));

   // Use url with redirect not the view file
  return Redirect::to('adminnewview');
}

}
//========= End of controller ==================
?>
