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


class TestimonialController extends Controller
{
    //
    public function testimonial(Request $request){
		if(session('news_view')==0){
			print Lang::get("labels.You do not have to access this route");
		}else{
		$title = array('pageTitle' => Lang::get("labels.News"));
		$language_id            				=   '1';			
		
		$news = DB::table('testimonial')
			->Join('testimonial_description', 'testimonial_description.testimonial_id', '=', 'testimonial.testimonial_id')
			->Join('testimonial_image', 'testimonial_image.testimonial_id', '=', 'testimonial.testimonial_id')
			->select('testimonial.testimonial_slug','testimonial.rating','testimonial.created_at','testimonial.updated_at', 'testimonial_description.*','testimonial_image.image_url')
			->where('testimonial_description.language_id','=', $language_id)
			->orderBy('testimonial.testimonial_id', 'ASC')
			->paginate(20);
		
		$currentTime =  array('currentTime'=>time());
		return view("admin.testimonial",$title)->with('news', $news);
		}
	}
	

	// add service 
	public function addstestimonial(Request $request){
		if(session('news_view')==0){
			print Lang::get("labels.You do not have to access this route");
		}else{
		$title = array('pageTitle' => Lang::get("labels.AddNews"));
		$language_id      =   '1';
		
		$result = array();
		
		//get function from other controller
		$myVar = new AdminSiteSettingController();
		$result['languages'] = $myVar->getLanguages();
		
		return view("admin.addtestimonial", $title)->with('result', $result);
		}
	}

	//addNewNews
	public function addtestimonial(Request $request){
		if(session('news_create')==0){
			print Lang::get("labels.You do not have to access this route");
		}else{
		$title = array('pageTitle' => Lang::get("labels.AddNews"));
		$date_added	= date('Y-m-d h:i:s');
		
		//get function from other controller
		$myVar = new AdminSiteSettingController();
		$languages = $myVar->getLanguages();		
		$extensions = $myVar->imageType();
		 
				
		if($request->hasFile('image') and in_array($request->image->extension(), $extensions)){
			$image = $request->image;
			$fileName = time().'.'.$image->getClientOriginalName();
			$image->move('resources/assets/images/testimonial_images/', $fileName);
			$uploadImage = 'resources/assets/images/testimonial_images/'.$fileName; 
		}else{
			$uploadImage = '';
		}	
		 
		$id = DB::table('testimonial')->insertGetId([
					'testimonial_slug'  	    	 =>   $request->testimonial_slug,
					'rating'  	    	 =>   $request->rating
				]);

		DB::table('testimonial_image')->insert([
					'image_url'  	    	 =>   $uploadImage,
					'testimonial_id'		 =>   $id
				]);
		 
		foreach($languages as $languages_data){
			$name = 'name_'.$languages_data->languages_id;
			$description = 'description_'.$languages_data->languages_id;
			DB::table('testimonial_description')->insert([
					'project_name'  	    	 =>   $request->$name,
					'language_id'			 =>   $languages_data->languages_id,
					'project_description'		 =>   addslashes($request->$description),
					'testimonial_id'		 =>   $id
					]);
		}	
		
		
		$message = "Testimonial added successfully";				
		return redirect()->back()->withErrors([$message]);
		}
	}
		
	//editnew
	public function edittestimonial(Request $request){
		if(session('news_view')==0){
			print Lang::get("labels.You do not have to access this route");
		}else{
			
		$title = array('pageTitle' => Lang::get("labels.EditNews"));
		$language_id      =   '1';	
		$id     	  =   $request->id;	
		 
		
		$result = array();
		
		//get function from other controller
		$myVar = new AdminSiteSettingController();
		$result['languages'] = $myVar->getLanguages();
		
		$slug = DB::table('testimonial')->where([
					['testimonial_id', '=', $id],
				])->first();

		$image = DB::table('testimonial_image')->where([
					['testimonial_id', '=', $id],
				])->first();
			
		$description_data = array();		
		foreach($result['languages'] as $languages_data){
			
			$description = DB::table('testimonial_description')->where([
					['language_id', '=', $languages_data->languages_id],
					['testimonial_id', '=', $id],
				])->get();
				
			if(count($description)>0){								
				$description_data[$languages_data->languages_id]['name'] = $description[0]->project_name;
				$description_data[$languages_data->languages_id]['description'] = $description[0]->project_description;
				$description_data[$languages_data->languages_id]['testimonial_id'] = $slug->testimonial_id;
				$description_data[$languages_data->languages_id]['slug'] = $slug->testimonial_slug;
				$description_data[$languages_data->languages_id]['rating'] = $slug->rating;
				$description_data[$languages_data->languages_id]['image'] = $image->image_url;
				$description_data[$languages_data->languages_id]['language_name'] = $languages_data->name;
				$description_data[$languages_data->languages_id]['languages_id'] = $languages_data->languages_id;										
			}else{
				$description_data[$languages_data->languages_id]['name'] = '';
				$description_data[$languages_data->languages_id]['description'] = '';
				$description_data[$languages_data->languages_id]['slug'] = '';
				$description_data[$languages_data->languages_id]['image'] = '';
				$description_data[$languages_data->languages_id]['testimonial_id'] = '';
				$description_data[$languages_data->languages_id]['language_name'] = $languages_data->name;
				$description_data[$languages_data->languages_id]['languages_id'] = $languages_data->languages_id;	
			}
			 
		}
		$result['description'] = $description_data;	
		   
		
		return view("admin.edittestimonial", $title)->with('result', $result);	
		}
	}
	
	
	//updatenew
	public function updatetestimonial(Request $request){
		if(session('news_update')==0){
			print Lang::get("labels.You do not have to access this route");
		}else{
		$language_id      =   '1';	 
		  $id      =   $request->id;
		$news_last_modified	= date('Y-m-d h:i:s');
			
		//get function from other controller
		$myVar = new AdminSiteSettingController();
		$languages = $myVar->getLanguages();		
		$extensions = $myVar->imageType();
		 
		if($request->hasFile('image') and in_array($request->image->extension(), $extensions)){
			 $image = $request->image; 
			$fileName = time().'.'.$image->getClientOriginalName();
			$image->move('resources/assets/images/testimonial_images/', $fileName);
			$uploadImage = 'resources/assets/images/testimonial_images/'.$fileName; 
		}else{
			$uploadImage = $request->oldImage;
		}	
		
		DB::table('testimonial')->where('testimonial_id','=',$id)
					->update([
					'testimonial_slug'  	     =>   $request->testimonial_slug,
					'rating'  	     =>   $request->rating,
					]);

		DB::table('testimonial_image')->where('testimonial_id','=',$id)
					->update([
					'image_url'     =>      $uploadImage
					]);

		foreach($languages as $languages_data){
			 
				
			$name = 'name_'.$languages_data->languages_id;
			$description = 'description_'.$languages_data->languages_id;
			//if(!empty($request->$news_name)){
			
			$checkExist = DB::table('testimonial_description')->where('testimonial_id','=',$id)->where('language_id','=',$languages_data->languages_id)->get();
			 

			if(count($checkExist)>0){
				DB::table('testimonial_description')->where('testimonial_id','=',$id)->where('language_id','=',$languages_data->languages_id)->update([
					'project_name'  	     =>   $request->$name,
					/*'news_url'		 =>   $request->news_url,*/
					'project_description'	 =>   addslashes($request->$description)
					]);
			}else{
				DB::table('testimonial_description')->insert([
						'language_id'		 =>   $languages_data->languages_id,
						'project_name'  	     =>   $request->$name,
						/*'news_url'		 =>   $request->news_url,*/
						'project_description'	 =>   addslashes($request->$description)
						]);	
			}
		}
		
		 
		
		$message = "Testimonial has been updated successfully";				
		return redirect()->back()->withErrors([$message]);
		}		
	}
	
	//deleteNews
	public function deletetestimonial(Request $request){
		if(session('news_delete')==0){
			print Lang::get("labels.You do not have to access this route");
		}else{
		 DB::table('testimonial')->where('testimonial_id', $request->id)->delete();
		return redirect()->back()->withErrors(['Testimonial has been deleted successfully!']);
		}
	}
}
