<?php
/*
Project Name: laravelcommerce
Project URI: http://laravelcommerce.com
Author: VectorCoder Team
Author URI: http://vectorcoder.com/
Version: 1.1 -desktop
*/
header("Cache-Control: no-cache, must-revalidate");
header('Access-Control-Allow-Origin:  *');
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Admin controller Routes
|--------------------------------------------------------------------------
|
| This section contains all admin Routes
| 
|
*/

 

Route::group(['prefix' => 'admin'], function () {
	
	Route::group(['namespace' => 'Admin'], function () {

		Route::group(['middleware' => 'admin'], function () {
			 
			//show admin personal info record
			Route::get('/adminInfo', 'AdminController@adminInfo');

		/*
		|--------------------------------------------------------------------------
		| categories/Product Controller Routes
		|--------------------------------------------------------------------------
		|
		| This section contains categories/Product Controller Routes
		| 
		|
		*/
			//main listingManufacturer
			Route::get('/manufacturers', 'AdminManufacturerController@manufacturers');
			Route::get('/addmanufacturer', 'AdminManufacturerController@addmanufacturer');
			Route::post('/addnewmanufacturer', 'AdminManufacturerController@addnewmanufacturer');
			Route::get('/editmanufacturer/{id}', 'AdminManufacturerController@editmanufacturer');
			Route::post('/updatemanufacturer', 'AdminManufacturerController@updatemanufacturer');
			Route::post('/deletemanufacturer', 'AdminManufacturerController@deletemanufacturer');

			//main categories
			Route::get('/categories', 'AdminCategoriesController@categories');
			Route::get('/addcategory', 'AdminCategoriesController@addcategory');
			Route::post('/addnewcategory', 'AdminCategoriesController@addnewcategory');
			Route::get('/editcategory/{id}', 'AdminCategoriesController@editcategory');
			Route::post('/updatecategory', 'AdminCategoriesController@updatecategory');
			Route::get('/deletecategory/{id}', 'AdminCategoriesController@deletecategory');

			//sub categories
			Route::get('/subcategories', 'AdminCategoriesController@subcategories');
			Route::get('/addsubcategory', 'AdminCategoriesController@addsubcategory');
			Route::post('/addnewsubcategory', 'AdminCategoriesController@addnewsubcategory');
			Route::get('/editsubcategory/{id}', 'AdminCategoriesController@editsubcategory');
			Route::post('/updatesubcategory', 'AdminCategoriesController@updatesubcategory');
			Route::get('/deletesubcategory/{id}', 'AdminCategoriesController@deletesubcategory');
			
			Route::post('/getajaxcategories', 'AdminCategoriesController@getajaxcategories');
  
			
			//alert setting
			Route::get('/alertsetting', 'AdminSiteSettingController@alertSetting');
			Route::post('/updateAlertSetting', 'AdminSiteSettingController@updateAlertSetting');
			
			        
			
			//setting page
			Route::get('/setting', 'AdminSiteSettingController@setting');
			Route::post('/updateSetting', 'AdminSiteSettingController@updateSetting');
			
			Route::get('/websettings', 'AdminSiteSettingController@webSettings');	
			Route::get('/themeSettings', 'AdminSiteSettingController@themeSettings');			
			Route::get('/appsettings', 'AdminSiteSettingController@appSettings');			
			Route::get('/admobSettings', 'AdminSiteSettingController@admobSettings');		
			Route::get('/facebooksettings', 'AdminSiteSettingController@facebookSettings');
			Route::get('/googlesettings', 'AdminSiteSettingController@googleSettings');	
			Route::get('/applicationapi', 'AdminSiteSettingController@applicationApi');	
			Route::get('/webthemes', 'AdminSiteSettingController@webThemes');
			Route::get('/seo', 'AdminSiteSettingController@seo');		
			Route::get('/customstyle', 'AdminSiteSettingController@customstyle');	
			Route::post('/updateWebTheme', 'AdminSiteSettingController@updateWebTheme');
			Route::get('/mailchimp', 'AdminSiteSettingController@mailchimp');			
			
			 
			
			//language setting
			Route::get('/getlanguages', 'AdminSiteSettingController@getlanguages');
			Route::get('/languages', 'AdminSiteSettingController@languages');
			Route::post('/defaultlanguage', 'AdminSiteSettingController@defaultlanguage');			
			Route::get('/addlanguages', 'AdminSiteSettingController@addlanguages');
			Route::post('/addnewlanguages', 'AdminSiteSettingController@addnewlanguages');
			Route::get('/editlanguages/{id}', 'AdminSiteSettingController@editlanguages');
			Route::post('/updatelanguages', 'AdminSiteSettingController@updatelanguages');
			Route::post('/deletelanguage', 'AdminSiteSettingController@deletelanguage');

			//banners
			Route::get('/banners', 'AdminBannersController@banners');
			Route::get('/addbanner', 'AdminBannersController@addbanner');
			Route::post('/addNewBanner', 'AdminBannersController@addNewBanner');
			Route::get('/editbanner/{id}', 'AdminBannersController@editbanner');
			Route::post('/updateBanner', 'AdminBannersController@updateBanner');
			Route::post('/deleteBanner/', 'AdminBannersController@deleteBanner');
			
			//sliders
			Route::get('/sliders', 'AdminSlidersController@sliders');
			Route::get('/addsliderimage', 'AdminSlidersController@addsliderimage');
			Route::post('/addNewSlide', 'AdminSlidersController@addNewSlide');
			Route::get('/editslide/{id}', 'AdminSlidersController@editslide');
			Route::post('/updateSlide', 'AdminSlidersController@updateSlide');
			Route::post('/deleteSlider/', 'AdminSlidersController@deleteSlider');
			
			//constant banners
			Route::get('/constantbanners', 'AdminConstantController@constantBanners');
			Route::get('/addconstantbanner', 'AdminConstantController@addconstantBanner');
			Route::post('/addNewConstantBanner', 'AdminConstantController@addNewconstantBanner');
			Route::get('/editconstantbanner/{id}', 'AdminConstantController@editconstantbanner');
			Route::post('/updateconstantBanner', 'AdminConstantController@updateconstantBanner');
			Route::post('/deleteconstantBanner/', 'AdminConstantController@deleteconstantBanner');

			//profile setting
			Route::get('/profile', 'AdminController@adminProfile');
			Route::post('/updateProfile', 'AdminController@updateProfile');
			Route::post('/updateAdminPassword', 'AdminController@updateAdminPassword');
   

			//news categories
			Route::get('/newscategories', 'AdminNewsCategoriesController@newscategories');
			Route::get('/addnewscategory', 'AdminNewsCategoriesController@addnewscategory');
			Route::post('/addnewsnewcategory', 'AdminNewsCategoriesController@addnewsnewcategory');
			Route::get('/editnewscategory/{id}', 'AdminNewsCategoriesController@editnewscategory');
			Route::post('/updatenewscategory', 'AdminNewsCategoriesController@updatenewscategory');
			Route::post('/deletenewscategory', 'AdminNewsCategoriesController@deletenewscategory');

			//news
			Route::get('/news', 'AdminNewsController@news');
			Route::get('/addnews', 'AdminNewsController@addnews');
			Route::post('/addnewnews', 'AdminNewsController@addnewnews');
			Route::get('/editnews/{id}', 'AdminNewsController@editnews');
			Route::post('/updatenews', 'AdminNewsController@updatenews');
			Route::post('/deletenews', 'AdminNewsController@deletenews');

			//service 
			Route::get('/service', 'ServiceController@service');
			Route::get('/addservice', 'ServiceController@addsservice');
			Route::post('/addservice', 'ServiceController@addservice');
			Route::get('/editservice/{id}', 'ServiceController@editservice');
			Route::post('/updateservice', 'ServiceController@updateservice');
			Route::post('/deleteservice', 'ServiceController@deleteservice');

			//location 
			Route::get('/location', 'LocationController@location');
			Route::get('/addlocation', 'LocationController@addslocation');
			Route::post('/addlocation', 'LocationController@addlocation');
			Route::get('/editlocation/{id}', 'LocationController@editlocation');
			Route::post('/updatelocation', 'LocationController@updatelocation');
			Route::post('/deletelocation', 'LocationController@deletelocation');

			//testimonial 
			Route::get('/testimonial', 'TestimonialController@testimonial');
			Route::get('/addtestimonial', 'TestimonialController@addstestimonial');
			Route::post('/addtestimonial', 'TestimonialController@addtestimonial');
			Route::get('/edittestimonial/{id}', 'TestimonialController@edittestimonial');
			Route::post('/updatetestimonial', 'TestimonialController@updatetestimonial');
			Route::post('/deletetestimonial', 'TestimonialController@deletetestimonial');

			//app pages controller
			Route::get('/pages', 'AdminPagesController@pages');
			Route::get('/addpage', 'AdminPagesController@addpage');
			Route::post('/addnewpage', 'AdminPagesController@addnewpage');
			Route::get('/editpage/{id}', 'AdminPagesController@editpage');
			Route::post('/updatepage', 'AdminPagesController@updatepage');
			Route::get('/pageStatus', 'AdminPagesController@pageStatus');
			
			//site pages controller
			Route::get('/webpages', 'AdminPagesController@webpages');
			Route::get('/addwebpage', 'AdminPagesController@addwebpage');
			Route::post('/addnewwebpage', 'AdminPagesController@addnewwebpage');
			Route::get('/editwebpage/{id}', 'AdminPagesController@editwebpage');
			Route::post('/updatewebpage', 'AdminPagesController@updatewebpage');
			Route::get('/pageWebStatus', 'AdminPagesController@pageWebStatus');	
			
			  

		});

		
		//log in
		Route::get('/login', 'AdminController@login');
		Route::post('/checkLogin', 'AdminController@checkLogin');

		//log out
		Route::get('/logout', 'AdminController@logout');
});

});



/*
|--------------------------------------------------------------------------
| front-end Controller Routes
|--------------------------------------------------------------------------
|
| This section contains all Routes of front-end content
| 
|
*/

/********* setting themes dynamically *********/
// default setting
  

Route::group(['namespace' => 'Web'], function () {	
	
//language route
Route::post('/language-chooser', 'WebSettingController@changeLanguage');
Route::post('/language/', array(
	//'before' => 'csrf',
	'as' => 'language-chooser',
	'uses' => 'WebSettingController@changeLanguage'
	));
		
	Route::get('/setStyle', 'DefaultController@setStyle');
	Route::get('/settheme', 'DefaultController@settheme');
	Route::get('/page', 'DefaultController@page');
	Route::post('/subscribeNotification/', 'CustomersController@subscribeNotification');
	
	/*
	|--------------------------------------------------------------------------
	| construction website Controller Routes
	|--------------------------------------------------------------------------
	|
	| This section contains all Routes of construction website. 
	| 
	|
	*/
	Route::get('/', 'DefaultController@index');
	Route::get('/index', 'DefaultController@index');
	

	Route::get('/our-company', 'DefaultController@OurCompany');
	Route::get('/our-location', 'DefaultController@Location');
	Route::get('/services', 'DefaultController@Services');
	Route::get('/Franchise-With-CVG', 'DefaultController@Franchise');
	Route::get('/contact-us', 'DefaultController@ContactUs');
	Route::post('/processContactUs', 'DefaultController@processContactUs');
	Route::get('/testimonials', 'DefaultController@testimonials');

	/*
	|--------------------------------------------------------------------------
	| End construction website Controller Routes
	|--------------------------------------------------------------------------
	| 
	| This section contains all Routes of construction website. 
	| 
	|
	*/
	
	
	//news section
	Route::get('/news', 'NewsController@news');
	Route::get('/news-detail/{slug}', 'NewsController@newsDetail');
	Route::post('/loadMoreNews', 'NewsController@loadMoreNews');	
	
	
	Route::get('/clear-cache', function() {
		$exitCode = Artisan::call('cache:clear');
	});
	
	/*
	|--------------------------------------------------------------------------
	| categories / products Controller Routes
	|--------------------------------------------------------------------------
	|
	| This section contains all Routes of categories page, products/shop page, product detail. 
	| 
	|
	*/
	
	Route::get('/shop', 'ProductsController@shop');
	Route::post('/shop', 'ProductsController@shop');
	Route::get('/product-detail/{slug}', 'ProductsController@productDetail');
	Route::post('/filterProducts', 'ProductsController@filterProducts');
	
	
	/*
	|--------------------------------------------------------------------------
	| Cart Controller Routes
	|--------------------------------------------------------------------------
	|
	| This section contains customer cart products
	| 
	*/

	Route::get('/getCart', 'DataController@getCart');
	
	//getquantity
	Route::post('/getquantity', 'ProductsController@getquantity');
	
	
	Route::post('/addToCart', 'CartController@addToCart');
	Route::post('/updatesinglecart', 'CartController@updatesinglecart');
	Route::get('/cartButton', 'CartController@cartButton');
	
	Route::get('/viewcart', 'CartController@viewcart');
	Route::get('/editcart', 'CartController@editcart');
	
	Route::post('/updateCart', 'CartController@updateCart');
	Route::get('/deleteCart', 'CartController@deleteCart');
	Route::post('/apply_coupon', 'CartController@apply_coupon');
	Route::get('/removeCoupon/{id}', 'CartController@removeCoupon');
		
	/*
	|--------------------------------------------------------------------------
	| customer registrations Controller Routes
	|--------------------------------------------------------------------------
	|
	| This section contains all Routes of signup page, login page, forgot password 
	| facebook login , google login, shipping address etc.
	|
	*/
	
	Route::get('/login', 'CustomersController@login');
	Route::get('/signup', 'CustomersController@signup');
	Route::post('/process-login', 'CustomersController@processLogin');
	Route::get('/logout', 'CustomersController@logout');
	Route::post('/signupProcess', 'CustomersController@signupProcess');
	Route::get('/forgotPassword', 'CustomersController@forgotPassword');
	Route::get('/recoverPassword', 'CustomersController@recoverPassword');
	Route::post('/processPassword', 'CustomersController@processPassword');
	
	
	Route::get('login/{social}', 'CustomersController@socialLogin');
	Route::get('login/{social}/callback', 'CustomersController@handleSocialLoginCallback');
	Route::post('/commentsOrder', 'OrdersController@commentsOrder');
	
	//zones
	Route::post('/ajaxZones', 'ShippingAddressController@ajaxZones');
	
	//likeMyProduct
	Route::post('likeMyProduct', 'CustomersController@likeMyProduct');
	
	//subscribe mailchimp
	Route::get('subscribe', 'WebSettingController@subscribe');
	/*
	|--------------------------------------------------------------------------
	| WEbiste auth path Controller Routes
	|--------------------------------------------------------------------------
	|
	| This section contains all Routes of After login 
	| 
	|
	*/
		
	
});
