<?php

class HomeController extends BaseController {

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


	// public function showWelcome()
	// {
	// 	return View::make('hello');
	// }


	public function showHome()
	{
		$partnerContent=Partner::orderBy('created_at','desc')->take(1)->get(array('content'));
		$partnerImage=Partner::orderBy('created_at','desc')->take(6)->get(array('file'));
		$testimonial=User::orderBy('created_at','desc')->take(4)->get();
    $slider=Slider::orderBy('created_at','desc')->take(6)->get();
		return View::make('home')->with(['slider'=>$slider,'testimonial'=>$testimonial,'partnerContent'=>$partnerContent,'partnerImage'=>$partnerImage]);
	}

	public function showAbout()
	{
		$advisor=Advisor::orderBy('created_at','desc')->take(4)->get();
		$about=About::orderBy('created_at','desc')->take(1)->get();
		return View::make('about')->with(['advisor'=>$advisor,'about'=>$about]);
	}

		public function showTestimonial()
		{
			return View::make('testimonial');
		}

	public function showService()
	{
		$service=Service::orderBy('created_at','desc')
		           ->take(10)->get();
		return View::make('service')->with('service',$service);
	}

		public function showService2()
		{
			return View::make('service2');
		}

	public function showBlog()
	{
		return View::make('blog');
	}

		public function showBlogrightbar()
		{
			return View::make('blogrightbar');
		}

		public function showBlogsinglecol()
		{
			return View::make('blogsinglecol');
		}

		public function showBlog2col()
		{
			return View::make('blog2col');
		}

		public function showBlogdetails()
		{
			return View::make('blogdetails');
		}

	public function showGallery()
	{
		return View::make('gallery');
	}

		public function showPortfolio2()
		{
			return View::make('portfolio2');
		}

	public function showContacts()
	{
		return View::make('contactus');
	}

	public function showAdvisor()
	{
		$advisor=Advisor::orderBy('created_at','desc')->take(4)->get();
		$content=Advisor::orderBy('created_at','desc')->take(1)->get(array('content'));
    return View::make('advisor')->with(['advisor'=>$advisor,'content'=>$content]);
	}






	/*===================admin controllers==================*/

	public function showAdminhome()
	{
		return View::make('adminhome');
	}

	public function showAdminaboutus()
	{
		return View::make('adminhome');
	}

	public function showAdminservices()
	{
		return View::make('adminhome');
	}

	public function showAdminstudyabroad()
	{
		return View::make('adminhome');
	}

	public function showAdminblogs()
	{
		return View::make('adminhome');
	}

	public function showAdmingallery()
	{
		return View::make('adminhome');
	}


}

?>
