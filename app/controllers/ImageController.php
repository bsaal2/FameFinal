<?php

class ImageController extends BaseController {

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

public function showImage(){
  $album=Gallary::orderBy('created_at','desc')->get(array('name'));
  return View::make("adminimage")->with(['album'=>$album]);
}

public function handleImage(){
  $image=new Image;
  $filename=Input::file("file")->getClientOriginalName();
  $image->caption=Input::get("caption");
  $image->album=Input::get("album");
	$image->file=$filename;
  Input::file('file')->move(base_path().'/app/storage/uploaded',$filename);
  $image->save();

  // Use url with redirect not the view file
  return Redirect::to('/adminimage')->with('success',"Successfully Submitted Data");
}

public function showAllImage(){
  $image=Image::all();
  return View::make("allImage")->with('image',$image);
}

public function viewImage($id){
  $image=Image::find($id);
  return View::make("imageSingleView")->with('image',$image);
}

public function deleteImage($id){
  Image::destroy($id);
  return Redirect::to("adminimageview");
}

public function editImage($id){
  $image=Image::find($id);
  $album=Gallary::orderBy('created_at','desc')->get(array('name'));
  return View::make("imageSingleEdit")->with(['image'=>$image,'album'=>$album]);
}

public function editImageData($id){
  $filename=Input::file("file")->getClientOriginalName();
  $caption=Input::get("caption");
	$album=Input::get("album");
  Input::file('file')->move(base_path().'/app/storage/uploaded',$filename);
  Image::where('id', '=', $id)
            ->update(array('caption' => $caption,'album'=>$album,'file' => $filename));

   // Use url with redirect not the view file
  return Redirect::to('adminimageview');
}

}
//========= End of controller ==================
?>
