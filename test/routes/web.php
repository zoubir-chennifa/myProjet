<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data=['age'=>12 , 'name'=>'Zoubir'];
    $objet=new stdClass();
    return view('welcome',$data);
});
//route paramters

//1-required parameter

Route::get('/chow-number/{id}', function ($id) {
    return $id;
})->name('a');

//1- parameter
Route::get('/show-string/{id?}', function () {
    return "welcome";
})->name('b');

//route name

Route::namespace('Front')->group(function (){
    //all route anly access controller or metdods in folder name front
    Route::get('users','UesrController@showUserName');
});

//route prefix
/*Route::prefix('users')->group(function (){
    Route::get('show','UesrController@showUserName') ;
    Route::delete('delete','UesrController@showUserName') ;
    Route::get('edit','UesrController@showUserName') ;
    Route::put('update','UesrController@showUserName') ;
});*/


/*
Route::group(['prefix'=>'users','middleware'=>'auth'],function (){
    //set of routes
    Route::get('/',function (){
       return 'Work';
    });
    Route::get('show','UesrController@showUserName') ;
    Route::delete('delete','UesrController@showUserName') ;
    Route::get('edit','UesrController@showUserName') ;
    Route::put('update','UesrController@showUserName') ;
});*/

//middleware
Route::get('check',function (){
   return 'middleware';
})->middleware('auth');
Route::group(['namespace'=>'Admin'],function (){
    Route::get('second','SecondController@ShowString')->middleware('auth');
});

route::get('login',function (){
    return 'Must Br login To access this Route';
})->name('login');

Route::resource('news','NewsController');
/*
Route::get('news','NewsController@index');
Route::post('news','NewsController@Store');
Route::get('news/create','NewsController@Create');
Route::resource('news/{id}/edit','NewsController@edit');
Route::resource('update/{id}','NewsController@update');
Route::resource('news/{id}','NewsController@delete');*/
Route::get('index','Front\UesrController@getIndex');

Route::get('/landing',function (){
   return view('landing');
});

Route::get('/about',function (){
    return view('about');
});
//logen page

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/dashboard', function (){
    return 'dashboard';
});
