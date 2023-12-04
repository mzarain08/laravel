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
//use Illuminate\Routing\Router;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aboutus/{id}/{name}', function ($id, $name) {
    $id = request('id');
    $name = request('name');
    echo $id . "==". $name;
    die;
});

Route::resource('contacts',"ContactController");

Route::get('/calculator', function () {
    $n1 = request('number1');
    $n2 = request('number2');
    echo $n1 . "==". $n2;
    die;
});

Route::get('/cookie/set',"CookieController@setCookie");
Route::get('/cookie/get',"CookieController@getCookie");

Route::get('/basicresponse',function(){
    return response()->json(array('test' => 'a', 'my response' => 'Test response B'));
});

Route::get('/firstview',function(){
    $name = "Zeeshan";
    return view('firstview', ['name' => $name]);
});

Route::get('/user/profile',["as" => "profile" ,function(){
    return "This is test user Profile";
}]);

Route::get('ajax',function() {
    return view('message');
});
Route::post('/getmsg','AjaxController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
