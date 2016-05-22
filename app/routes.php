<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

 //Route::get('/restapi', function()
// {
 	//$user=User::all();
	//return Response::json($user);
 //});
/*
Route::get("/service-table",function(){
	Schema::create('services',function($table){
		$table->increments('id');
		$table->string('heading', 200);
		$table->string('content', 500);
		$table->string('file',200);
		$table->timestamps();
	});
	return "Table created";
});
*/
//============Route for login ==============

Route::get("/loginpage","LoginController@showLogin");

Route::post("/handleLogin","LoginController@handleLoginData");

Route::get("/home", "HomeController@showLayout");

Route::get("/home", "HomeController@showHome");

	Route::get("/about", "HomeController@showAbout");

	//Route::get("/singleadvisor", "HomeController@showSingleAdvisor");

	Route::get("/testimonial", "HomeController@showTestimonial");

Route::get("/service", "HomeController@showService");

	Route::get("/service2", "HomeController@showService2");

Route::get("/404page", "HomeController@show404Page");

	Route::get("/nosearchresult", "HomeController@showNosearchresult");

	Route::get("/searchresult", "HomeController@showSearchresult");

	Route::get("/faq", "HomeController@showFaq");

Route::get("/blog", "HomeController@showBlog");

	Route::get("/blogrightbar", "HomeController@showBlogrightbar");

	Route::get("/blogsinglecol", "HomeController@showBlogsinglecol");

	Route::get("/blog2col", "HomeController@showBlog2col");

	Route::get("/blogdetails", "HomeController@showBlogdetails");

Route::get("/gallery", "HomeController@showGallery");

	Route::get("/portfolio2", "HomeController@showPortfolio2");

Route::get("/contactus", "HomeController@showContacts");

Route::get("/advisor", "HomeController@showAdvisor");













/*=================admin routes======================*/

Route::get("/admin", "HomeController@showAdminhome");

Route::get("/adminaboutus", "HomeController@showAdminaboutus");

Route::get("/adminstudyabroad", "HomeController@showAdminstudyabroad");

Route::get("/adminblogs", "HomeController@showAdminblogs");

Route::get("/admingallery", "HomeController@showAdmingallery");


//================== Route for UserController =============

Route::get("/admintestimonial","UserController@showAdmintestimonial");

Route::post("/handleTestimonial","UserController@handleTestimonialData");

Route::post("/editTestimonial/{id}","UserController@editTestimonialData");

Route::get("/admintestimonialview","UserController@showAdmintestimonialView");

Route::get("/admintestimonialsingleview/{id}","UserController@showAdmintestimonialSingleView");

Route::get("/admintestimonialsingledelete/{id}","UserController@showAdmintestimonialSingleDelete");

Route::get("/admintestimonialsingleedit/{id}","UserController@showAdmintestimonialSingleEdit");

//================== Route for SliderController =============
Route::get("/adminslider","SliderController@showAdminslider");

Route::post("/handleSliderData","SliderController@handleSliderData");

Route::get("/adminsliderview","SliderController@showSlider");

Route::get("/adminslidersingleview/{id}","SliderController@viewSlider");

Route::get("/adminslidersingledelete/{id}","SliderController@deleteSlider");

Route::get("/adminslidersingleedit/{id}","SliderController@editSlider");

Route::post("/editSlider/{id}","SliderController@editSliderData");

//================== Route for PartnerController =============

Route::get("/adminpartner","PartnerController@showPartner");

Route::post("/handlepartner","PartnerController@handlePartner");

Route::get("/adminpartnerview","PartnerController@showAllPartner");

Route::get("/adminpartnersingleview/{id}","PartnerController@viewPartner");

Route::get("/adminpartnersingledelete/{id}","PartnerController@deletePartner");

Route::get("/adminpartnersingleedit/{id}","PartnerController@editPartner");

Route::post("/editPartner/{id}","PartnerController@editPartnerData");

//================== Route for AboutController =========================

Route::get("/adminaboutus","AboutController@showAbout");

Route::post("/handleAboutUs","AboutController@handleAbout");

Route::get("/adminaboutview","AboutController@showAllAbout");

Route::get("/adminaboutsingleview/{id}","AboutController@viewAbout");

Route::get("/adminaboutsingledelete/{id}","AboutController@deleteAbout");

Route::get("/adminaboutsingleedit/{id}","AboutController@editAbout");

Route::post("/editAbout/{id}","AboutController@editAboutData");

//================== Route for AdvisorController =========================

Route::get("/adminadvisor","AdvisorController@showAdvisor");

Route::post("/handleAdvisor","AdvisorController@handleAdvisor");

Route::get("/adminadvisorview","AdvisorController@showAllAdvisor");

Route::get("/adminadvisorsingleview/{id}","AdvisorController@viewAdvisor");

Route::get("/adminadvisorsingledelete/{id}","AdvisorController@deleteAdvisor");

Route::get("/adminadvisorsingleedit/{id}","AdvisorController@editAdvisor");

Route::post("/editAdvisor/{id}","AdvisorController@editAdvisorData");

Route::get("/singleadvisor/{id}","AdvisorController@showAdvisorOne");

//====================== Route for ServiceController =================

Route::get("/adminservice","ServiceController@showService");

Route::post("/handleService","ServiceController@handleService");

Route::get("/adminserviceview","ServiceController@showAllService");

Route::get("/adminservicesingleview/{id}","ServiceController@viewService");

Route::get("/adminservicesingledelete/{id}","ServiceController@deleteService");

Route::get("/adminservicesingleedit/{id}","ServiceController@editService");

Route::post("/editService/{id}","ServiceController@editServiceData");


?>
