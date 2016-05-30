<?php

class DepartmentController extends BaseController {

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

public function showDepartment(){
 return View::make("admindepartment");
}

public function handleDepartment(){
  $depart=new Department;
  $filename=Input::file("file")->getClientOriginalName();
  $depart->name=Input::get("name");
  $depart->college=Input::get("college");
  $depart->phoneno=Input::get("phoneno");
  $depart->email=Input::get("email");
  $depart->department=Input::get("department");
	$depart->file=$filename;
  Input::file('file')->move(base_path().'/app/storage/uploaded',$filename);
  $depart->save();

  // Use url with redirect not the view file
  return Redirect::to('/admindepartment')->with('success',"Successfully Submitted Data");
}

public function showAllDepartment(){
  $depart=Department::all();
  return View::make("allDepartment")->with('depart',$depart);
}

public function viewDepartment($id){
  $depart=Department::find($id);
  return View::make("departmentSingleView")->with('depart',$depart);
}

public function deleteDepartment($id){
  Department::destroy($id);
  return Redirect::to("admindepartmentview");
}

public function editDepartment($id){
  $depart=Department::find($id);
  return View::make("departmentSingleEdit")->with('depart',$depart);
}

public function editDepartmentData($id){
  $filename=Input::file("file")->getClientOriginalName();
  $name=Input::get("name");
	$college=Input::get("college");
  $phoneno=Input::get("phoneno");
  $email=Input::get("email");
  $department=Input::get("department");
  Input::file('file')->move(base_path().'/app/storage/uploaded',$filename);
  Department::where('id', '=', $id)
            ->update(array('name' => $name,'college'=>$college,'phoneno'=>$phoneno,'email'=>$email,'department'=>$department,'file' => $filename));

   // Use url with redirect not the view file
  return Redirect::to('admindepartmentview');
}

}
//========= End of controller ==================
?>
