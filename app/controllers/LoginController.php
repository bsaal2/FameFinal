<?php

class LoginController extends BaseController {

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
public function showLogin(){
  return View::make("login");
}

public function handleLoginData(){
  $name=Input::get("username");
  $password=Input::get("password");

  $login=Login::where('username','=',$name)
         ->where('password','=',$password)
         ->get();
  if($login->isEmpty()){
    return "Login not success";
  }
  else{
    return "Login Success";
  }
}

}
?>
