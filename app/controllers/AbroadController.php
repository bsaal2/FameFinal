<?php

class AbroadController extends BaseController {

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
public function showAbroad(){
  $news=Information::orderBy('created_at','desc')->take(3)->get(array('heading','created_at'));
	$about=About::orderBy('created_at','desc')->take(1)->get(array('history'));
	$country=Country::orderBy('created_at','desc')->get();
	$test=Test::orderBy('created_at','desc')->get();
	return View::make('studyabroad')->with(['country'=>$country,'test'=>$test,'about'=>$about,'news'=>$news]);
}

public function showAbroad1(){
 return View::make("adminabroad");
}

public function handleAbroad(){
  $abroad=new Country;
  $filename=Input::file("file")->getClientOriginalName();
  $abroad->heading=Input::get("heading");
  $abroad->title=Input::get("title");
  $abroad->content1=Input::get("content1");
	$abroad->content2=Input::get("content2");
	$abroad->file=$filename;
  Input::file('file')->move(base_path().'/app/storage/uploaded',$filename);
  $abroad->save();

  // Use url with redirect not the view file
  return Redirect::to('/adminstudyabroad')->with('success',"Successfully Submitted Data");
}

public function showAllAbroad(){
  $country=Country::all();
  return View::make("allAbroad")->with('country',$country);
}

public function viewAbroad($id){
  $country=Country::find($id);
  return View::make("abroadSingleView")->with('country',$country);
}

public function deleteAbroad($id){
  Country::destroy($id);
  return Redirect::to("adminabroadview");
}

public function editAbroad($id){
  $country=Country::find($id);
  return View::make("abroadSingleEdit")->with('country',$country);
}

public function editAbroadData($id){
  $filename=Input::file("file")->getClientOriginalName();
  $heading=Input::get("heading");
	$title=Input::get("title");
  $content1=Input::get("content1");
	$content2=Input::get("content2");
  Input::file('file')->move(base_path().'/app/storage/uploaded',$filename);
  Country::where('id', '=', $id)
            ->update(array('heading' => $heading,'title'=>$title,'content1'=>$content1,'content2' => $content2,'file' => $filename));

   // Use url with redirect not the view file
  return Redirect::to('adminabroadview');
}

}
//========= End of controller ==================
?>
