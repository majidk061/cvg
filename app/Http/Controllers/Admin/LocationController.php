<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;

use DB;

//for password encryption or hash protected
use Hash;
use App\Administrator;
use Lang;

//for authenitcate login data
use Auth;

class LocationController extends Controller
{
    //

    public function location(Request $request){
		if(session('news_view')==0){
			print Lang::get("labels.You do not have to access this route");
		}else{
		$title = array('pageTitle' => Lang::get("labels.News"));
		$language_id            				=   '1';			
		
		$news = DB::table('location')
			->orderBy('location.location_id', 'ASC')
			->paginate(20);
		$currentTime =  array('currentTime'=>time());
		return view("admin.location",$title)->with('news', $news);
		}
	}
	

	// add service 
	public function addslocation(Request $request){
		if(session('news_view')==0){
			print Lang::get("labels.You do not have to access this route");
		}else{
		$title = array('pageTitle' => Lang::get("labels.AddNews"));
		$language_id      =   '1';
		
		$result = array();
		
		//get function from other controller
		$myVar = new AdminSiteSettingController();
		$result['languages'] = $myVar->getLanguages();
		
		return view("admin.addLocation", $title)->with('result', $result);
		}
	}

	//addNewNews
	public function addlocation(Request $request){
		if(session('news_create')==0){
			print Lang::get("labels.You do not have to access this route");
		}else{
		$title = array('pageTitle' => Lang::get("labels.AddNews"));
		$date_added	= date('Y-m-d h:i:s');
		
		//get function from other controller
		$myVar = new AdminSiteSettingController();
		$languages = $myVar->getLanguages();		
		$extensions = $myVar->imageType();
		 
		DB::table('location')->insert([
					'full_address'  	    	 =>   $request->address,
					'slug'			 =>   $request->slug,
					'lat'					=>    $request->lat,
					'lng'		 =>   $request->lng
					]);
		
		
		$message = "location added successfully";				
		return redirect()->back()->withErrors([$message]);
		}
	}
		
	//editnew
	public function editlocation(Request $request){
		if(session('news_view')==0){
			print Lang::get("labels.You do not have to access this route");
		}else{
			
		$title = array('pageTitle' => Lang::get("labels.EditNews"));
		$language_id      =   '1';	
		$news_id     	  =   $request->id;	
		 
		
		$result = array();
		
		//get function from other controller
		$myVar = new AdminSiteSettingController();
		$result['languages'] = $myVar->getLanguages();
		 
			
		$description_data = array();		
		$description = DB::table('location')->where([
					['location_id', '=', $news_id],
				])->first();
		$result['description'] = $description;	
		  
		
		return view("admin.editlocation", $title)->with('result', $result);	
		}
	}
	
	
	//updatenew
	public function updatelocation(Request $request){
		if(session('news_update')==0){
			print Lang::get("labels.You do not have to access this route");
		}else{
		$language_id      =   '1';	
		$news_id     	  =   $request->id;	
		$news_last_modified	= date('Y-m-d h:i:s');
			
		//get function from other controller
		$myVar = new AdminSiteSettingController();
		$languages = $myVar->getLanguages();		
		  
		DB::table('location')->where('location_id','=',$news_id)->update([
					'full_address'  	    	 =>   $request->address,
					'slug'			 =>   $request->slug,
					'lat'					=>    $request->lat,
					'lng'		 =>   $request->lng
					]);
		 
		
		$message = "location has been updated successfully";				
		return redirect()->back()->withErrors([$message]);
		}		
	}
	
	//deleteNews
	public function deletelocation(Request $request){
		if(session('news_delete')==0){
			print Lang::get("labels.You do not have to access this route");
		}else{
		 DB::table('location')->where('location_id', $request->id)->delete();
		return redirect()->back()->withErrors(['Location has been deleted successfully!']);
		}
	}
}
