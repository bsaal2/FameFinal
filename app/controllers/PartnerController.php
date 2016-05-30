<?php

class PartnerController extends BaseController {

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

  public function showPartner(){
  	return View::make("adminPartner");
  }

  public function handlePartner(){

     $partner=new Partner;
  	 $filename=Input::file("file")->getClientOriginalName();
  	 $partner->content=Input::get("content");
  	 $partner->file=$filename;
  	 Image::make(Input::file('file'))->resize(170, 125)->save(base_path().'/app/storage/uploaded/'.$filename);
  	 $partner->save();

     // Use url with redirect not the view file
    return Redirect::to('/adminpartner')->with('success','Submitted Successfully');
  }

  public function showAllPartner(){
    $partner=Partner::all();
    return View::make("allPartner")->with('partner',$partner);
  }

	public function viewPartner($id){
		$partner=Partner::find($id);
  	 return View::make("partnerSingleView")->with('partner',$partner);
	}

 public function deletePartner($id){
	 Partner::destroy($id);
   return Redirect::to("adminpartnerview");
 }

 public function editPartner($id){
	 $partner=Partner::find($id);
 	 return View::make("partnerSingleEdit")->with('partner',$partner);
 }

public function editPartnerData($id){
  $filename=Input::file("file")->getClientOriginalName();
	$content=Input::get("content");
	Image::make(Input::file('file'))->resize(170, 125)->save(base_path().'/app/storage/uploaded/'.$filename);
	Partner::where('id', '=', $id)
						->update(array('content' => $content,'file' => $filename));

	// Use url with redirect not the view file
	 return Redirect::to('adminpartnerview');					
}

}
