<?php

class ItemsController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function edit($id)
{
    $data = Record::findOrFail($id);
    $data->Recievedby  = Input::get('recieveby');
    $data->For        = Input::get('for');
    $data->office   = Input::get('office');
    $data->address = Input::get('address');
    $data->Subject     = Input::get('sub');
    $data->save();

    return Redirect::route('modal');
}

public function destroy($id)
{
    $data = Record::findOrFail($id);
    $data->delete();

    return Redirect::route('modal');
}

}
