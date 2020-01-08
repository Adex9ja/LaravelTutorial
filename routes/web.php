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

Route::get('/name/{id?}', function ($id = 'Ade') {
    return view('welcome');
//    echo  $id;
});

Route::get("/role", [
    'middleware' => 'Role:editor',
    'uses' => 'TestController@index',
]);

Route::get("/terminate", [
    'middleware' => 'terminate',
    'uses' => 'ABCController@index'
    ]);

Route::get("/hello", "TestController2@index");

Route::get('/usercontroller/path', [
    'middleware' => 'First',
    'uses' => 'UserController@showPath'
]);

Route::resource('my', 'MyController');

class MyClass{
    public $foo = 'bar';
}

Route::get('/myclass','ImplicitController@index');

Route::get('/foo/bar', 'UriController@index');

Route::get('/user/register', function(){
   return view('form_example');
});

Route::post('/user/register', 'UserController@register');

Route::get('/cookie/set','CookieController@setCookie');
Route::get('/cookie/get','CookieController@getCookie');
Route::get('/basic_response', function (){
    return 'Hello world!';
});
Route::get('/header_response', function (){
    return response("Hello world2!", 200)->header('Content-Type', 'text/html')->withCookie('name','adex9ja');
});
Route::get('/json', function (){
    return response()->json(["name" => "Ade", "password" => "1234"]);
});
Route::get('/test/data', function (){
    return view('view_data_pass', ["name" => 'Adeyemo Adeolu']);
});
Route::get('/test/data2', function (){
    return view('view_share_data');
});
Route::get('/template', function (){
    return view('child');
});
Route::get('/test_route', ['as' => 'routing', function(){
    return view('redirecting');
}]);
Route::get('/redirect', function (){
    return redirect()->route('routing');
});
Route::get('/redirect_controller', function (){
    return redirect()->action('TestController@index');
});
Route::resource('student', 'StudentController');
Route::post('/record/{id}/update', 'StudentController@update');
Route::get('/record/{id}/delete', 'StudentController@destroy');
Route::get('/localization/{locale}', 'LocalizationController@index');
Route::get('/session/set/{username}', 'SessionController@setSession');
Route::get('/session/get', 'SessionController@getSession');
Route::get('/session/forget', 'SessionController@forgetSession');
Route::get('/validation','ValidationController@index');
Route::post('/validation', 'ValidationController@validateform');
Route::get('/uploadfile','UploadFileController@index');
Route::post('/uploadfile','UploadFileController@showUploadFile');
Route::get('/sendMail','EmailController@index');
Route::post('/sendMail','EmailController@sendMail');
Route::get('/ajaxPost', 'AjaxController@index');
Route::post('/ajaxPost', 'AjaxController@formPost');
Route::get('/facadeex', function() {
    return TestFacades::testingFacades();
});
Route::get('/encrypt/{plain}', 'EncryptionController@encryptText');
Route::get('/decrypt/{cipher}', 'EncryptionController@decryptText');
Route::get('/hash/{plain}', 'HashController@generateHash');
Route::get('/hash_verify/{hash}', 'HashController@verifyHash');

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
