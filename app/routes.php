

<?php
	
 
Route::get ( '/', function () {
    return View::make( 'data1' );
} );
Route::any ( '/search', function () {
    $q = Input::get ( 'q' );
    $data = Record::where ( 'for', 'LIKE', '%' . $q . '%' )->orWhere ( 'receiveby', 'LIKE', '%' . $q . '%' )->orWhere ( 'file_no', 'LIKE', '%' . $q . '%' )->paginate(5);

        return View::make( 'viewdata' )->with('data', $data);

} );



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
//     return view ( 'viewrecord' );
// } );

// Route::any('/search',function(){
//     $data = Input::get ( 'data' );
//     $rec = Record::where('for','LIKE','%'.$data.'%')->orWhere('receiveby','LIKE','%'.$data.'%')->get();
//     if(count($rec) > 0)
//         return View::make('viewrecord')->withDetails($data)->withQuery ( $data );
//     else return View('viewrecord')->withMessage('No Details found. Try to search again !');
// });


// Route::get('/', function()
// {
// 	 $data= Data::all();
// 	 return View::make('Welcome')->withData($data);
// });


Route::post ( '/editItem', function (Request $request) {
    
    $rules = array (
            'for' => 'required',
            'office' => 'required',
            'address' => 'required',
            'subject' => 'required',
            'receiveby' => 'required'
             
    );
    $validator = Validator::make ( Input::all (), $rules );
    if ($validator->fails ())
        
        return Response::json ( array (             
                'errors' => $validator->getMessageBag ()->toArray () 
        ) );
    else {
        
        $data = Record::find ( $request->id );
        $data->for = ($request->for);
        $data->office = ($request->office);
        $data->address = ($request->address);
        $data->subject = ($request->subject);
        $data->receiveby = ($request->receiveby);
        $data->save ();
        return response ()->json ( $data );
    }
} );


Route::post ( '/deleteItem', function (Request $request) {
    Data::find ( $request->id )->delete ();
    return response ()->json ();
} );


Route::get('login', 'LoginController@login');
Route::post('user_data', 'LoginController@get_login_details');
Route::get('register', 'RegisterController@register');
Route::post('confirmation', 'RegisterController@register_confirmation');
Route::post('added', 'RegisterController@addData');
Route::post('member/{id}','MemberController@destroy');

Route::get('printout', function()
{
	return View::make('printout');
});


Route::resource('recordCRUD','RecordCRUDController');