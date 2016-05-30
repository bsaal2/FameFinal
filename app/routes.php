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
Route::get("/study-table",function(){
	Schema::create('images',function($table){
		$table->increments('id');
		$table->string('caption', 500);
		$table->string('album', 200);
		$table->string('file', 200);
		$table->timestamps();
	});
	return "Table created";
});
*/
//============Route for login ==============
Route::get('/check',"HomeController@showC");

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

Route::get("/news", "HomeController@showNews");

	Route::get("/events", "HomeController@showEvents");

//	Route::get("/blogsinglecol", "HomeController@showBlogsinglecol");

 Route::get("/gallery", "HomeController@showGallery");

Route::get("image/{id}","HomeController@showImages");

Route::get("/blogdetails", "HomeController@showBlogdetails");

Route::get("/portfolio2", "HomeController@showPortfolio2");

Route::get("/contactus", "HomeController@showContacts");

Route::get("/advisor", "HomeController@showAdvisor");

Route::get("/department","HomeController@showDepartment");

Route::get("/message","HomeController@showMessage");











/*=================admin routes======================*/

Route::get("/admin", "HomeController@showAdminhome");

Route::get("/adminaboutus", "HomeController@showAdminaboutus");

Route::get("/adminblogs", "HomeController@showAdminblogs");


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

//====================== Route for AbroadController ===============

Route::get("/studyabroad","AbroadController@showAbroad");

Route::get("/adminstudyabroad", "AbroadController@showAbroad1");

Route::post("/handleAbroad","AbroadController@handleAbroad");

Route::get("/adminabroadview","AbroadController@showAllAbroad");

Route::get("/adminabroadsingleview/{id}","AbroadController@viewAbroad");

Route::get("/adminabroadsingledelete/{id}","AbroadController@deleteAbroad");

Route::get("/adminabroadsingleedit/{id}","AbroadController@editAbroad");

Route::post("/editAbroad/{id}","AbroadController@editAbroadData");

//============== Route for TestController ===============

Route::get("/admintest", "TestController@showTest");

Route::post("/handleTest","TestController@handleTest");

Route::get("/admintestview","TestController@showAllTest");

Route::get("/admintestsingleview/{id}","TestController@viewTest");

Route::get("/admintestsingledelete/{id}","TestController@deleteTest");

Route::get("/admintestsingleedit/{id}","TestController@editTest");

Route::post("/editTest/{id}","TestController@editTestData");

//============== Route for InformationController =================

Route::get("/adminnew", "InformationController@showNew");

Route::post("/handleNew","InformationController@handleNew");

Route::get("/adminnewview","InformationController@showAllNew");

Route::get("/adminnewsingleview/{id}","InformationController@viewNew");

Route::get("/adminnewsingledelete/{id}","InformationController@deleteNew");

Route::get("/adminnewsingleedit/{id}","InformationController@editNew");

Route::post("/editNew/{id}","InformationController@editNewData");

//=============== Route for InfoController ==================

Route::get("/admininfo", "InfoController@showInfo");

Route::post("/handleInfo","InfoController@handleInfo");

Route::get("/admininfoview","InfoController@showAllInfo");

Route::get("/admininfosingleview/{id}","InfoController@viewInfo");

Route::get("/admininfosingledelete/{id}","InfoController@deleteInfo");

Route::get("/admininfosingleedit/{id}","InfoController@editInfo");

Route::post("/editInfo/{id}","InfoController@editInfoData");

//===========Route for MessageController =====================

Route::get("/adminmessage", "MessageController@showMessage");

Route::post("/handleMessage","MessageController@handleMessage");

Route::get("/adminmessageview","MessageController@showAllMessage");

Route::get("/adminmessagesingleview/{id}","MessageController@viewMessage");

Route::get("/adminmessagesingledelete/{id}","MessageController@deleteMessage");

Route::get("/adminmessagesingleedit/{id}","MessageController@editMessage");

Route::post("/editMessage/{id}","MessageController@editMessageData");

//============= Route For DepartmentController ======================

Route::get("/admindepartment", "DepartmentController@showDepartment");

Route::post("/handleDepartment","DepartmentController@handleDepartment");

Route::get("/admindepartmentview","DepartmentController@showAllDepartment");

Route::get("/admindepartmentsingleview/{id}","DepartmentController@viewDepartment");

Route::get("/admindepartmentsingledelete/{id}","DepartmentController@deleteDepartment");

Route::get("/admindepartmentsingleedit/{id}","DepartmentController@editDepartment");

Route::post("/editDepartment/{id}","DepartmentController@editDepartmentData");

//=================Route For GallaryController ===========================

Route::get("/admingallary", "GallaryController@showGallary");

Route::post("/handleGallary","GallaryController@handleGallary");

Route::get("/admingallaryview","GallaryController@showAllGallary");

Route::get("/admingallarysingleview/{id}","GallaryController@viewGallary");

Route::get("/admingallarysingledelete/{id}","GallaryController@deleteGallary");

Route::get("/admingallarysingleedit/{id}","GallaryController@editGallary");

Route::post("/editGallary/{id}","GallaryController@editGallaryData");

//===================== Route for ImageController ==============================

Route::get("/adminimage", "ImageController@showImage");

Route::post("/handleImage","ImageController@handleImage");

Route::get("/adminimageview","ImageController@showAllImage");

Route::get("/adminimagesingleview/{id}","ImageController@viewImage");

Route::get("/adminimagesingledelete/{id}","ImageController@deleteImage");

Route::get("/adminimagesingleedit/{id}","ImageController@editImage");

Route::post("/editImage/{id}","ImageController@editImageData");

?>
