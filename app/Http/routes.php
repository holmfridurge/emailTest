<?php
use Illuminate\Http\Request;
use App\Http\Requests;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bla', function () {
    return view('emailForm');
});

Route::get('/email',
            ['as' => 'laeknar', 'uses' => 'UserController@sendEmail']);

Route::post('/send', function(Request $request)
{
  dd($request->all());
});


Route::auth();

Route::get('/home', 'HomeController@index');
