<?php

class ServiceController extends BaseController {

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

  public function showService(){
  	return View::make("adminservices");
  }

  public function handleService(){

     $service=new Service;
  	 $filename=Input::file("file")->getClientOriginalName();
     $service->heading=Input::get("heading");
     $service->content=Input::get("content");
  	 $service->file=$filename;
  	 Input::file('file')->move(base_path().'/app/storage/uploaded',$filename);
  	 $service->save();

     // Use url with redirect not the view file
    return Redirect::to('/adminservice')->with('success','Submitted Successfully');
  }

  public function showAllService(){
    $service=Service::all();
    return View::make("allService")->with('service',$service);
  }

	public function viewService($id){
		$service=Service::find($id);
  	 return View::make("serviceSingleView")->with('service',$service);
	}

 public function deleteService($id){
	 Service::destroy($id);
   return Redirect::to("adminserviceview");
 }

 public function editService($id){
	 $service=Service::find($id);
 	 return View::make("serviceSingleEdit")->with('service',$service);
 }

public function editServiceData($id){
  $filename=Input::file("file")->getClientOriginalName();
  $heading=Input::get("heading");
  $content=Input::get("content");
	Input::file('file')->move(base_path().'/app/storage/uploaded',$filename);
	Service::where('id', '=', $id)
						->update(array('heading'=>$heading,'content' => $content,'file' => $filename));

	// Use url with redirect not the view file
	 return Redirect::to('adminserviceview');
}

}
