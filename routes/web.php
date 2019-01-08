<?php



Route::get('/home', 'HomeController@index')->name('home');

//admin routes
Route::group(['namespace' => 'Admin'],function(){
	Route::get('admin/home','HomeController@index')->name('admin.home');
	// Post Routes
	Route::resource('admin/post','PostController');
	// Tag Routes
	Route::resource('admin/tag','TagController');
	// Category Routes
	Route::resource('admin/category','CategoryController');
	// Admin Auth Routes
	
});
//Admin Routes
Route::group(['namespace' => 'Admin'],function(){
	Route::get('admin/home','HomeController@index')->name('admin.home');
	
	Route::resource('admin/post','PostController');
	// Tag Routes
	Route::resource('admin/tag','TagController');
	// Category Routes
	Route::resource('admin/category','CategoryController');
	// Admin Auth Routes
	Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
	Route::post('admin-login', 'Auth\LoginController@login');
	Route::get('admin-logout', 'Auth\LoginController@logoutAdmin')->name('admin.logout');
	  //Events
   Route::resource('admin/event','EventController');
});

Auth::routes();

//frontend routes
Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about');
Route::get('/services', 'HomeController@services');
Route::get('/events', 'HomeController@events');
Route::get('/blog', 'HomeController@blog');
Route::get('/article/{slug}', 'HomeController@article');
Route::get('/learn', 'HomeController@learn');
