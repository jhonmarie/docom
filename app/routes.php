
<?php


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get ( '/', function () {
//     $q = Input::get ( 'q' );
//     $data = Record::where('for','LIKE','%'.$q.'%')->orWhere('recieveby','LIKE','%'.$q.'%')->paginate(5);
//         return View::make('practice')->with ('data', $data );
// } );
// Route::get('viewrecord', function()
// {
// 	 $data = Record::all();
// return View::make('viewrecord')->with('viewrecord', $data);
// });

Route::get('/',function()
    {
       return View::make('practice');  
    });



Route::any('/search',function() {
    $q = Input::get ( 'q' );
    $data = Record::where('for','LIKE','%'.$q.'%')->orWhere('recieveby','LIKE','%'.$q.'%')->paginate(5);
    return View::make('modal')->with('data', $data );
});




Route::get('login', 'LoginController@login');
Route::post('user_data', 'LoginController@get_login_details');
Route::get('register', 'RegisterController@register');
Route::post('confirmation', 'RegisterController@register_confirmation');
Route::post('added', 'RegisterController@addData');
Route::resource('items', 'ItemsController');



Route::get('register', function (){
	return View::make('register');
});

