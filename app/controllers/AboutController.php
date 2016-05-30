<?php

class AboutController extends BaseController {

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
public function showAbout(){
 return View::make("adminaboutus");
}

public function handleAbout(){
  $about=new About;
  $filename=Input::file("file")->getClientOriginalName();
  $about->history=Input::get("history");
  $about->mission=Input::get("mission");
  $about->file=$filename;
  Image::make(Input::file('file'))->resize(470, 167)->save(base_path().'/app/storage/uploaded/'.$filename);
  $about->save();

  // Use url with redirect not the view file
  return Redirect::to('/adminaboutus')->with('success','Submitted Successfully');
}

public function showAllAbout(){
  $about=About::all();
  return View::make("allAbout")->with('about',$about);
}

public function viewAbout($id){
  $about=About::find($id);
  return View::make("aboutSingleView")->with('about',$about);
}

public function deleteAbout($id){
  About::destroy($id);
  return Redirect::to("adminaboutview");
}

public function editAbout($id){
  $about=About::find($id);
  return View::make("aboutSingleEdit")->with('about',$about);
}

public function editAboutData($id){
  $filename=Input::file("file")->getClientOriginalName();
  $history=Input::get("history");
  $mission=Input::get("mission");
  Image::make(Input::file('file'))->resize(470, 167)->save(base_path().'/app/storage/uploaded/'.$filename);
  About::where('id', '=', $id)
            ->update(array('history' => $history,'mission' => $mission,'file' => $filename));

   // Use url with redirect not the view file
  return Redirect::to('adminaboutview');
}

}
//========= End of controller ==================
?>
