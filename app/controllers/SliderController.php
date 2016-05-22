<?php

class SliderController extends BaseController {

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

  public function showAdminslider()
  {
 	 return View::make('adminSlider');
  }

  public function handleSliderData(){
 	 $slider=new Slider;
 	 $filename=Input::file("file")->getClientOriginalName();
   $slider->heading=Input::get("heading");
 	 $slider->content=Input::get("content");
 	 $slider->file=$filename;
 	 Input::file('file')->move('/opt/lampp/htdocs/ProjectFame/fame/app/uploaded',$filename);
 	 $slider->save();

    // Use url with redirect not the view file
    return Redirect::to('/adminslider');
  }

  public function showSlider(){
 	 $slider=Slider::all();
 	 return View::make("viewSlider")->with('slider',$slider);
  }

  public function viewSlider($id){
 	 $slider=Slider::find($id);
 	 return View::make("sliderSingleView")->with('slider',$slider);
  }

  public function deleteSlider($id){
 	 Slider::destroy($id);
  	 return Redirect::to("adminsliderview");
  }

  public function editSlider($id){
 	 $slider=Slider::find($id);
 	 return View::make("sliderSingleEdit")->with('slider',$slider);
  }

  public function editSliderData($id){
 	 $filename=Input::file("file")->getClientOriginalName();
    $heading=Input::get("heading");
 	 $content=Input::get("content");
 	 Input::file('file')->move('/opt/lampp/htdocs/ProjectFame/fame/app/uploaded',$filename);
 	 Slider::where('id', '=', $id)
             ->update(array('heading' => $heading,'content' => $content,'file' => $filename));

    // Use url with redirect not the view file
   return Redirect::to('adminsliderview');
  }






}
