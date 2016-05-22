<?php

class AdvisorController extends BaseController {

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
public function showAdvisor(){
 return View::make("adminadvisor");
}

public function handleAdvisor(){
  $advisor=new Advisor;
  $filename=Input::file("file")->getClientOriginalName();
  $advisor->name=Input::get("fullname");
  $advisor->work=Input::get("work");
  $advisor->overview=Input::get("overview");
	$advisor->file=$filename;
	$advisor->content=Input::get("content");
	$advisor->phone=Input::get("phone");
	$advisor->email=Input::get("email");
	$advisor->facebooklink=Input::get("facebook");
	$advisor->twitterlink=Input::get("twitter");
	$advisor->googlepluslink=Input::get("googleplus");
	$advisor->linkedinlink=Input::get("linkedin");
  Input::file('file')->move('/opt/lampp/htdocs/ProjectFame/fame/app/uploaded',$filename);
  $advisor->save();

  // Use url with redirect not the view file
  return Redirect::to('/adminadvisor');
}

public function showAllAdvisor(){
  $advisor=Advisor::all();
  return View::make("allAdvisor")->with('advisor',$advisor);
}

public function viewAdvisor($id){
  $advisor=Advisor::find($id);
  return View::make("advisorSingleView")->with('advisor',$advisor);
}

public function deleteAdvisor($id){
  Advisor::destroy($id);
  return Redirect::to("adminadvisorview");
}

public function editAdvisor($id){
  $advisor=Advisor::find($id);
  return View::make("advisorSingleEdit")->with('advisor',$advisor);
}

public function editAdvisorData($id){
  $filename=Input::file("file")->getClientOriginalName();
  $name=Input::get("fullname");
  $work=Input::get("work");
	$overview=Input::get("overview");
	$content=Input::get("content");
	$phone=Input::get("phone");
	$email=Input::get("email");
	$facebooklink=Input::get("facebook");
	$twitterlink=Input::get("twitter");
	$googlepluslink=Input::get("googleplus");
	$linkedinlink=Input::get("linkedin");
  Input::file('file')->move('/opt/lampp/htdocs/ProjectFame/fame/app/uploaded',$filename);
  Advisor::where('id', '=', $id)
            ->update(array('name' => $name,'work' => $work,'content' => $content,'overview' => $overview,'phone'=>$phone,'email'=>$email,'facebooklink' => $facebooklink,
						'twitterlink' => $twitterlink,'googlepluslink' => $googlepluslink,'linkedinlink' => $linkedinlink,'file' => $filename));

   // Use url with redirect not the view file
  return Redirect::to('adminadvisorview');
}

public function showAdvisorOne($id){
  $advisor=Advisor::find($id);
	return View::make("singleadvisor")->with('advisor',$advisor);
}

}
//========= End of controller ==================
?>
