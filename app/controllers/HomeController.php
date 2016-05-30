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
    $service1=Service::orderBy('created_at','desc')->take(1)->get();
		$service2=Service::orderBy('created_at','desc')->take(1)->skip(1)->get();
		$service3=Service::orderBy('created_at','desc')->take(1)->skip(2)->get();
		$service4=Service::orderBy('created_at','desc')->take(1)->skip(3)->get();


 		$partnerContent=Partner::orderBy('created_at','desc')->take(1)->get(array('content'));
		$partnerImage=Partner::orderBy('created_at','desc')->take(6)->get(array('file'));
		$testimonial=User::orderBy('created_at','desc')->take(4)->get();
    $slider=Slider::orderBy('created_at','desc')->take(6)->get();
		return View::make('home')->with(['slider'=>$slider,'testimonial'=>$testimonial,'partnerContent'=>$partnerContent,
		'partnerImage'=>$partnerImage,'service1'=>$service1,'service2'=>$service2,'service3'=>$service3,'service4'=>$service4]);
	}

	public function showAbout()
	{
		$advisor=Advisor::orderBy('created_at','desc')->take(4)->get();
		$about=About::orderBy('created_at','desc')->take(1)->get();
		return View::make('about')->with(['advisor'=>$advisor,'about'=>$about]);
	}

		public function showTestimonial()
		{
			$testiLeft=User::orderBy('created_at','desc')->take(1)->get();
			$testiRight=User::orderBy('created_at','desc')->take(1)->skip(1)->get();
			$testiBottomLeft=User::orderBy('created_at','desc')->take(1)->skip(2)->get();
			$testiBottomRight=User::orderBy('created_at','desc')->take(1)->skip(3)->get();
			return View::make('testimonial')->with(['left'=>$testiLeft,'right'=>$testiRight,'bottomLeft'=>$testiBottomLeft,'bottomRight'=>$testiBottomRight]);
		}

	public function showService()
	{
		$service=Service::orderBy('created_at','desc')
		           ->take(10)->get();
		return View::make('service')->with('service',$service);
	}

		public function showService2()
		{
			$service=Service::orderBy('created_at','desc')->get();
			$serviceHeading=Service::orderBy('created_at','desc')->get(array('id','heading'));
			return View::make('service2')->with(['heading'=>$serviceHeading,'service'=>$service]);
		}

	public function showNews()
	{
    $advisor=Advisor::orderBy('created_at','desc')->take(1)->get(array('id','name','overview','file'));
		$service=Service::orderBy('created_at','desc')->take(6)->get(array('id','heading'));
		$about=About::orderBy('created_at','desc')->take(1)->get(array('history'));
		$news=Information::orderBy('created_at','desc')->get();
		return View::make('blog')->with(['news'=>$news,'about'=>$about,'service'=>$service,'advisor'=>$advisor]);
	}

		public function showEvents()
		{
			$advisor=Advisor::orderBy('created_at','desc')->take(1)->get(array('id','name','overview','file'));
			$service=Service::orderBy('created_at','desc')->take(6)->get(array('id','heading'));
			$about=About::orderBy('created_at','desc')->take(1)->get(array('history'));
			$event=Info::orderBy('created_at','desc')->get();
			return View::make('blogrightbar')->with(['event'=>$event,'about'=>$about,'service'=>$service,'advisor'=>$advisor]);
		}

		public function showBlogsinglecol()
		{
			return View::make('blogsinglecol');
		}

		public function showGallery()
		{
           $gallary=Gallary::orderBy('created_at','desc')->get();
			return View::make('blog2col')->with(['gallary'=>$gallary]);
		}

       public function showImages($id){
			$image=Image::where('album','=',$id)->get();
			return View::make('gallaryImage')->with(['image'=>$image]);
		}

		public function showBlogdetails()
		{
			return View::make('blogdetails');
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

public function showDepartment(){
  $physics=Department::where('department','=','physics')->get();
  $chemistry=Department::where('department','=','chemistry')->get();
	$botany=Department::where('department','=','botany')->get();
	$zoology=Department::where('department','=','zoology')->get();
	$maths=Department::where('department','=','maths')->get();
	$english=Department::where('department','=','english')->get();
	$aptitute=Department::where('department','=','aptitute')->get();
	$medical=Department::where('department','=','medical')->get();
	$accountancy=Department::where('department','=','accountancy')->get();
	$economics=Department::where('department','=','economics')->get();
	$bussiness=Department::where('department','=','bussiness')->get();
	$bba=Department::where('department','=','bba')->get();

	return View::make('department')->with(['physics'=>$physics,'chemistry'=>$chemistry,'botany'=>$botany,
              'zoology'=>$zoology,'maths'=>$maths,'english'=>$english,'aptitute'=>$aptitute,'medical'=>$medical,
							'accountancy'=>$accountancy,'economics'=>$economics,'bussiness'=>$bussiness,'bba'=>$bba]);
}

public function showMessage(){
  $msg=Message::orderBy('created_at','desc')->take(1)->get();
	return View::make("message")->with(['msg'=>$msg]);
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

	public function showAdminblogs()
	{
		return View::make('adminhome');
	}



}

?>
