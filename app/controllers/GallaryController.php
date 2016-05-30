<?php

class GallaryController extends BaseController {

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
  public function showGallary(){
    return View::make('admingallary');
  }

public function handleGallary(){
  $gallary=new Gallary;
  $filename=Input::file("file")->getClientOriginalName();
  $gallary->name=Input::get("name");
  $gallary->file=$filename;
  Input::file('file')->move(base_path().'/app/storage/uploaded',$filename);
  $gallary->save();

  // Use url with redirect not the view file
  return Redirect::to('/admingallary')->with('success','Successfully created album');
}

public function showAllGallary(){
  $gallary=Gallary::all();
  return View::make("allGallary")->with('gallary',$gallary);
}

public function viewGallary($id){
  $gallary=Gallary::find($id);
  return View::make("gallarySingleView")->with('gallary',$gallary);
}

public function deleteGallary($id){
  Gallary::destroy($id);
  return Redirect::to("admingallaryview");
}

public function editGallary($id){
  $gallary=Gallary::find($id);
  return View::make("gallarySingleEdit")->with('gallary',$gallary);
}

public function editGallaryData($id){
  $filename=Input::file("file")->getClientOriginalName();
  $name=Input::get("name");
  Input::file('file')->move(base_path().'/app/storage/uploaded',$filename);
  Gallary::where('id', '=', $id)
            ->update(array('name' => $name,'file' => $filename));

   // Use url with redirect not the view file
  return Redirect::to('admingallaryview');
}

}
//========= End of controller ==================
?>
