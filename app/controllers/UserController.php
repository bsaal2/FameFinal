<?php

class UserController extends BaseController {

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

  public function showAdmintestimonial()
  {
   return View::make('adminhomeTestimonials');
  }

  public function handleTestimonialData(){
    $user=new User;

    $name=Input::file('file')->getClientOriginalName();
    $user->name=Input::get("fullname");
    $user->position=Input::get("position");
    $user->title=Input::get("title");
    $user->content=Input::get("content");
    $user->file=Input::file('file')->getClientOriginalName();
    Image::make(Input::file('file'))->resize(130, 130)->save(base_path().'/app/storage/uploaded/'.$filename);
    $user->save();

    return Redirect::to('admintestimonial')->with('success','Submitted Successfully');
  }

  public function editTestimonialData($id){
    $name=Input::file('file')->getClientOriginalName();
    $name=Input::get("fullname");
    $position=Input::get("position");
    $title=Input::get("title");
    $content=Input::get("content");
    $filename=User::find($id);
    $file=$filename->file;

    Image::make(Input::file('file'))->resize(130, 130)->save(base_path().'/app/storage/uploaded/'.$filename);
    User::where('id', '=', $id)
             ->update(array('name' => $name,'position' => $position,'title' => $title,'content' => $content,'file' => $name));
    return Redirect::to("admintestimonialview");
  }

  public function showAdmintestimonialView(){
    $users=User::all();
   return View::make("adminTestimonialView")->with('users',$users);
  }

  public function showAdmintestimonialSingleView($id){
     $users=User::find($id);
     return View::make("adminTestimonialSingleView")->with('users',$users);
  }

  public function showAdmintestimonialSingleDelete($id){
    User::destroy($id);
    return Redirect::to("admintestimonialview");
  }

  public function showAdmintestimonialSingleEdit($id){
    $users=User::find($id);
    return View::make("adminTestimonialSingleEdit")->with('users',$users);
  }






}
