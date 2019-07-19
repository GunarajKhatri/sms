<?php



Route::get('/',function (){
	return  view('welcome');
});



	 

//Admin side

Route::get('/adminpanel','adminscontroller@index');
Route::get('/create/user','adminscontroller@create')->name('admin-register');
Route::post('/create/user','adminscontroller@store')->name('admin-register');
Route::get('/adminpanel/edit/{id}','adminscontroller@edit')->name('admin-edit');
Route::get('/adminpanel/delete/{id}','adminscontroller@destroy')->name('admin-delete');
Route::post('/adminpanel/update/{id}','adminscontroller@update')->name('admin-update');

//class route
Route::resource('/adminpanel/class','classcontroller');
//teacher route
Route::resource('/adminpanel/teacher','teachercontroller');

//section route
 Route::get('/adminpanel/section/{id}','showcontroller@creates');
 Route::get('/adminpanel/section/class/show','showcontroller@showclass');
 Route::post('/adminpanel/section/{id}/store','showcontroller@store');
 Route::get('/adminpanel/section/class/{id}','showcontroller@sec');
 Route::get('/adminpanel/section/class/destroy/{id}','showcontroller@destroy');
 Route::get('/adminpanel/section/class/{id}/edit','showcontroller@edit');
 Route::post('/adminpanel/section/class/{id}/update/{num}','showcontroller@update');

//student route
 
 Route::get('/adminpanel/student/class/show','studentscontroller@showclass');
 Route::get('/adminpanel/student/class/{id}','studentscontroller@showstd');
 Route::get('/adminpanel/student/create/{id}','studentscontroller@create');
 Route::post('/adminpanel/student/{id}/store','studentscontroller@store');
 Route::get('/adminpanel/student/class/destroy/{id}','studentscontroller@destroy');
 Route::get('/adminpanel/student/class/{id}/edit/{num}','studentscontroller@edit');
 Route::post('/adminpanel/student/class/{id}/update/{num}','studentscontroller@update');












// Register routes
 Route::get('/admin',function(){ 
 return view('admin');
  });
 Route::get('/admin-login','admin\Auth\LoginController@showLoginForm')->name('admin.login');
 Route::post('/admin-login', 'admin\Auth\LoginController@login')->name('admin.login');
 Route::post('/admin-logout', 'admin\Auth\LoginController@logout')->name('admin.logout');
Auth::routes();





