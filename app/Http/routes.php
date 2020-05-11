<?php

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

Route::get('/hi', function () {
    return view('welcome');
    //return "Home";
});


/*--------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------
***********************************************Project er Route*******************************************************
----------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------*/

//Home Page
Route::get('/about','AdminController@about');
// Or
Route::get('/', function(){ return redirect('/about'); });



//LogIn Work
Route::get('loginKoro','Auth\AuthController@doLogIn');
// Authentication routes...
//Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

//Registration Work
Route::get('regKoro','Auth\AuthController@doRegister');
// Registration routes...
//Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Admin er Page e User Table View , Edit ,Delete(Admin)
Route::resource('table','AdminController');

Route::resource('restaurant','RestaurantController');

Route::get('/zonal-restaurants/{zone}','RestaurantController@getRestaurants');


Route::get('/foods/{restaurant_name}','RestaurantController@getFoods');
//Food Item image Soho Upload,Edit,Delete(Admin) // Item View,OrderPage e View Kora(User)
Route::resource('/image', 'OrderController');
//Food item Order kora(User)
Route::get('/ok/{id}','MakeOrderController@create');
//order er Details Dekha(User) // sob order er list dekha(Admin)
Route::resource('/orderMake','MakeOrderController');
Route::resource('/contacts','ContactsController');
Route::get('messages','ContactsController@show');


/*--------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------
**************************************Project er Route End************************************************************
----------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------*/

Route::controllers([
   'password' => 'Auth\PasswordController',
]);

Route::get('/kfoodies', function () {
    return view('Home.otherIndex');

});
//2 November Test
Route::get('/kfs', function () {

    return view('influx.about-us');
});

//Initial Tests
Route::get('/myuser/{id}/{name}', function ($id,$name) {
    //return view('myuser');
    return "User ".$id." Name ".$name;
})->where(['id'=> '[0-9]+','name'=> '[A-Za-z]+']);;

Route::get('/Tanu','Mycontroller@index');

Route::get('/contact','Mycontroller@contact');

Route::resource('nondon','Log_InController');





