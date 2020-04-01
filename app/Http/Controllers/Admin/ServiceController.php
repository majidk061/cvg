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


class ServiceController extends Controller
{
    //
    public function service(Request $request){
		if(session('news_view')==0){
			print Lang::get("labels.You do not have to access this route");
		}else{
		$title = array('pageTitle' => Lang::get("labels.News"));
		$language_id            				=   '1';			
		
		$news = DB::table('service')
			->where('service.language_id','=', $language_id)
			->orderBy('service.service_id', 'ASC')
			->paginate(20);
		
		$currentTime =  array('currentTime'=>time());
		return view("admin.service",$title)->with('news', $news);
		}
	}
	

	// add service 
	public function addsservice(Request $request){
		if(session('news_view')==0){
			print Lang::get("labels.You do not have to access this route");
		}else{
		$title = array('pageTitle' => Lang::get("labels.AddNews"));
		$language_id      =   '1';
		
		$result = array();
		
		//get function from other controller
		$myVar = new AdminSiteSettingController();
		$result['languages'] = $myVar->getLanguages();
		
		return view("admin.addService", $title)->with('result', $result);
		}
	}

	//addNewNews
	public function addservice(Request $request){
		if(session('news_create')==0){
			print Lang::get("labels.You do not have to access this route");
		}else{
		$title = array('pageTitle' => Lang::get("labels.AddNews"));
		$date_added	= date('Y-m-d h:i:s');
		
		//get function from other controller
		$myVar = new AdminSiteSettingController();
		$languages = $myVar->getLanguages();		
		$extensions = $myVar->imageType();
		 
				
		if($request->hasFile('news_image') and in_array($request->news_image->extension(), $extensions)){
			$image = $request->news_image;
			$fileName = time().'.'.$image->getClientOriginalName();
			$image->move('resources/assets/images/service_images/', $fileName);
			$uploadImage = 'resources/assets/images/service_images/'.$fileName; 
		}else{
			$uploadImage = '';
		}	
		 
		
		 
		foreach($languages as $languages_data){
			$news_name = 'news_name_'.$languages_data->languages_id;
			$news_description = 'news_description_'.$languages_data->languages_id;
			
			DB::table('service')->insert([
					'service_name'  	    	 =>   $request->$news_name,
					'language_id'			 =>   $languages_data->languages_id,
					'image'					=>    $uploadImage,
					 'service_description'		 =>   addslashes($request->$news_description)
					]);
		}	
		
		
		$message = "Service added successfully";				
		return redirect()->back()->withErrors([$message]);
		}
	}
		
	//editnew
	public function editservice(Request $request){
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
		foreach($result['languages'] as $languages_data){
			
			$description = DB::table('service')->where([
					['language_id', '=', $languages_data->languages_id],
					['service_id', '=', $news_id],
				])->get();
				
			if(count($description)>0){								
				$description_data[$languages_data->languages_id]['service_name'] = $description[0]->service_name;
				$description_data[$languages_data->languages_id]['service_description'] = $description[0]->service_description;
				$description_data[$languages_data->languages_id]['service_id'] = $description[0]->service_id;
				$description_data[$languages_data->languages_id]['image'] = $description[0]->image;
				$description_data[$languages_data->languages_id]['language_name'] = $languages_data->name;
				$description_data[$languages_data->languages_id]['languages_id'] = $languages_data->languages_id;										
			}else{
				$description_data[$languages_data->languages_id]['service_name'] = '';
				$description_data[$languages_data->languages_id]['service_description'] = '';
				$description_data[$languages_data->languages_id]['service_id'] = '';
				$description_data[$languages_data->languages_id]['image'] = '';
				$description_data[$languages_data->languages_id]['language_name'] = $languages_data->name;
				$description_data[$languages_data->languages_id]['languages_id'] = $languages_data->languages_id;	
			}
			$news_id=$news_id+1;
		}
		$result['description'] = $description_data;	
		  
		
		return view("admin.editservice", $title)->with('result', $result);	
		}
	}
	
	
	//updatenew
	public function updateservice(Request $request){
		if(session('news_update')==0){
			print Lang::get("labels.You do not have to access this route");
		}else{
		$language_id      =   '1';	
		
		$news_last_modified	= date('Y-m-d h:i:s');
			
		//get function from other controller
		$myVar = new AdminSiteSettingController();
		$languages = $myVar->getLanguages();		
		$extensions = $myVar->imageType();
		 
		if($request->hasFile('news_image') and in_array($request->news_image->extension(), $extensions)){
			 $image = $request->news_image; 
			$fileName = time().'.'.$image->getClientOriginalName();
			$image->move('resources/assets/images/service_images/', $fileName);
			$uploadImage = 'resources/assets/images/service_images/'.$fileName; 
		}else{
			$uploadImage = $request->oldImage;
		}	
		
		foreach($languages as $languages_data){
			$id = "id_".$languages_data->languages_id;
			$news_id      =   $request->$id;	
			$news_name = 'news_name_'.$languages_data->languages_id;
			$news_description = 'news_description_'.$languages_data->languages_id;
			//if(!empty($request->$news_name)){
			
			$checkExist = DB::table('service')->where('service_id','=',$news_id)->where('language_id','=',$languages_data->languages_id)->get();
			 
			if(count($checkExist)>0){
				DB::table('service')->where('service_id','=',$news_id)->where('language_id','=',$languages_data->languages_id)->update([
					'service_name'  	     =>   $request->$news_name,
					/*'news_url'		 =>   $request->news_url,*/
					'service_description'	 =>   addslashes($request->$news_description),
					'image'     =>      $uploadImage,
					]);
			}else{
				DB::table('service')->insert([
						'service_name'  	     =>   $request->$news_name,
						'language_id'		 =>   $languages_data->languages_id,
						/*'news_url'		 =>   $request->news_url,*/
						'image'     =>      $uploadImage,
						'service_description'	 =>   addslashes($request->$news_description)
						]);	
			}
		}
		
		 
		
		$message = "Service has been updated successfully";				
		return redirect()->back()->withErrors([$message]);
		}		
	}
	
	//deleteNews
	public function deleteservice(Request $request){
		if(session('news_delete')==0){
			print Lang::get("labels.You do not have to access this route");
		}else{
		 DB::table('service')->where('service_id', $request->id)->delete();
		return redirect()->back()->withErrors(['service has been deleted successfully!']);
		}
	}
}
