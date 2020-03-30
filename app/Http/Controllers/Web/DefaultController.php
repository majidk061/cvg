<?php
/*
Project Name: IonicEcommerce
Project URI: http://ionicecommerce.com 
Author: VectorCoder Team
Author URI: http://vectorcoder.com/
*/
namespace App\Http\Controllers\Web;
//use Mail;
//validator is builtin class in laravel
use Validator;

use DB;
//for password encryption or hash protected
use Hash;

//for authenitcate login data
use Auth;
use Illuminate\Foundation\Auth\ThrottlesLogins;

//for requesting a value 
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Lang;
//for Carbon a value 
use Carbon;

//email
use Illuminate\Support\Facades\Mail;
use Session;

class DefaultController extends DataController
{
	
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
	
	//setStyle
	public function setStyle(Request $request){		
		session(['homeStyle' => $request->style]);		
		return redirect('/');
	}
	
	//
	public function settheme(Request $request){		
		session(['theme' => $request->theme]);		
		return redirect('/');
	}
	
	
	//index 
	public function index(Request $request){
		
		$title = array('pageTitle' => Lang::get("website.Home"));
		$result = array();			
		$result['commonContent'] = $this->commonContent();
 		
		//current time
		$currentDate = Carbon\Carbon::now();
		$currentDate = $currentDate->toDateTimeString();
		
		$slides = DB::table('sliders_images')
		   ->select('sliders_id as id', 'sliders_title as title', 'sliders_url as url', 'sliders_image as image', 'type', 'sliders_title as title')
		   ->where('status', '=', '1')
		   ->where('languages_id', '=', session('language_id'))
		   ->where('expires_date', '>', $currentDate)
		   ->get();
		
		$result['slides'] = $slides;
		
		$pages = DB::table('pages')
					->leftJoin('pages_description','pages_description.page_id','=','pages.page_id')
					->where([['pages.status','1'],['type',2],['pages_description.language_id',session('language_id')],['pages.slug','Home']])->get();
		
		$title = array('pageTitle' => $pages[0]->name);
		$result['pages'] = $pages;			
		 
		
		return view("cvg.home.index", $title)->with('result', $result); 
		
	}
	
	//our company
	public function OurCompany(Request $request){
		$title = array('pageTitle' => Lang::get("website.Contact Us"));
		$result = array();			
		$result['commonContent'] = $this->commonContent();
		
		return view("cvg.about-us.our-company.index", $title)->with('result', $result); 
	}

	//Franchise With CVG
	public function Franchise(Request $request){
		$title = array('pageTitle' => Lang::get("website.Contact Us"));
		$result = array();			
		$result['commonContent'] = $this->commonContent();
		
		return view("cvg.franchise.index", $title)->with('result', $result); 
	}

	//services
	public function Services(Request $request){
		$title = array('pageTitle' => Lang::get("website.Contact Us"));
		$result = array();			
		$result['commonContent'] = $this->commonContent();
		
		return view("cvg.service.index", $title)->with('result', $result); 
	}

	//myContactUs
	public function ContactUs(Request $request){
		$title = array('pageTitle' => Lang::get("website.Contact Us"));
		$result = array();			
		$result['commonContent'] = $this->commonContent();
		$pages = DB::table('pages')
				->leftJoin('pages_description','pages_description.page_id','=','pages.page_id')
				->where([['pages.status','1'],['type',2],['pages_description.language_id',session('language_id')],['pages.slug','CONTACT-US']])->get();
		$title = array('pageTitle' => $pages[0]->name);
			$result['commonContent'] = $this->commonContent();
			$result['pages'] = $pages;			
		
		return view("cvg.contact-us.index", $title)->with('result', $result); 
	}

	//myContactUs
	public function testimonials(Request $request){
		$title = array('pageTitle' => Lang::get("website.Contact Us"));
		$result = array();			
		$result['commonContent'] = $this->commonContent();
		
		return view("cvg.testimonials.index", $title)->with('result', $result); 
	}
	
	
	//processContactUs
	public function processContactUs(Request $request){
		$name 		=  $request->name;
		$email 		=  $request->email;
		$subject 	=  $request->subject;
		$message 	=  $request->message;
		
		$result['commonContent'] = $this->commonContent();
		
		$data = array('name'=>$name, 'email'=>$email, 'subject'=>$subject, 'message'=>$message, 'adminEmail'=>$result['commonContent']['setting'][3]->value);
		
		// Mail::send('/mail/contactUs', ['data' => $data], function($m) use ($data){
		// 	$m->to($data['adminEmail'])->subject(Lang::get("website.contact us title"))->getSwiftMessage()
		// 	->getHeaders()
		// 	->addTextHeader('x-mailgun-native-send', 'true');	
		// });
		
		return redirect()->back()->with('success', Lang::get("website.contact us message"));
	}
	
	//page 
	public function page(Request $request){
		
		$pages = DB::table('pages')
					->leftJoin('pages_description','pages_description.page_id','=','pages.page_id')
					->where([['pages.status','1'],['type',2],['pages_description.language_id',session('language_id')],['pages.slug',$request->name]])->get();
		
		if(count($pages)>0){
			$title = array('pageTitle' => $pages[0]->name);
			$result['commonContent'] = $this->commonContent();
			$result['pages'] = $pages;			
			return view("cvg.home.index", $title)->with('result', $result);
		
		}else{
			return redirect()->intended('/') ;
		}
	}
	
	
}