<?php

class TestController extends BaseController {

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

public function showTest(){
 return View::make("admintest");
}

public function handleTest(){
  $test=new Test;
  $filename=Input::file("file")->getClientOriginalName();
  $test->heading=Input::get("heading");
  $test->title=Input::get("title");
  $test->content1=Input::get("contentup");
	$test->content2=Input::get("contentdown");
	$test->file=$filename;
  Image::make(Input::file('file'))->resize(143, 163)->save(base_path().'/app/storage/uploaded/'.$filename);
  $test->save();

  // Use url with redirect not the view file
  return Redirect::to('/admintest')->with('success',"Successfully Submitted Data");
}

public function showAllTest(){
  $test=Test::all();
  return View::make("allTest")->with('test',$test);
}

public function viewTest($id){
  $test=Test::find($id);
  return View::make("testSingleView")->with('test',$test);
}

public function deleteTest($id){
  Test::destroy($id);
  return Redirect::to("admintestview");
}

public function editTest($id){
  $test=Test::find($id);
  return View::make("testSingleEdit")->with('test',$test);
}

public function editTestData($id){
  $filename=Input::file("file")->getClientOriginalName();
  $heading=Input::get("heading");
	$title=Input::get("title");
  $content1=Input::get("contentup");
	$content2=Input::get("contentdown");
  Image::make(Input::file('file'))->resize(143, 163)->save(base_path().'/app/storage/uploaded/'.$filename);
  Test::where('id', '=', $id)
            ->update(array('heading' => $heading,'title'=>$title,'content1'=>$content1,'content2' => $content2,'file' => $filename));

   // Use url with redirect not the view file
  return Redirect::to('admintestview');
}

}
//========= End of controller ==================
?>
