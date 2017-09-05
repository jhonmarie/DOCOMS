

<?php
	
    Route::get('/', function () {
  $data = Record::all();
  return View::make('viewdata')->withData($data);
});
    Route::post('/save', function () {
  $data = Request::all();
  $edit = Record::where('id',$data['edit_id'])->first();
    $edit->file_no=$data['file_no'];
    $edit->receiveby=$data['receiveby'];
  $edit->for=$data['for'];
  $edit->office=$data['office'];
  $edit->address=$data['address'];
  $edit->subject=$data['subject'];
  $edit->ctn=$data['ctn'];
  $edit->rep=$data['rep'];
  $edit->remarks=$data['remarks'];


  $edit->save();
  return Redirect::back();
});

 Route::post('/delete', function () {
 $data = Request::all();
 $delete = Record::where('id',$data['del_id'])->delete();
 return Redirect::back();
});

 Route::any('/search',function(){
    $q = Input::get ( 'q' );
    $rec = Record::where('id','LIKE','%'.$q.'%')->get();
    if(count($rec) > 0)
        return View::make('print')->withDetails($rec)->withQuery ( $q );
    else return View::make('print')->withMessage('No Details found. Try to search again !');
});
// Route::get ( '/', function () {
//     return View::make( 'Welcome' );
// } );
// Route::any ( '/search', function () {
//     $q = Input::get ( 'q' );
//     $data = Record::where ( 'for', 'LIKE', '%' . $q . '%' )->orWhere ( 'receiveby', 'LIKE', '%' . $q . '%' )->orWhere ( 'file_no', 'LIKE', '%' . $q . '%' );

//         return View::make( 'viewdata' )->with('data', $data);

// } );

// Route::get('record', function () {
//     $data = Record::all();
//     return view('Welcome')->with('data',$data);
// });
// Route::get('record/{id?}',function($id){
//     $data = Record::find($id);
//     return response()->json($data);
// });
// Route::post('record',function(Request $request){   
//     $data = Record::create($request->input());
//     return response()->json($data);
// });
// Route::put('record/{id?}',function(Request $request,$id){
//     $data = Record::find($id);
//     $data->for = $request->for;
//     $data->office = $request->office;
//     $data->address = $request->address;
//     $data->subject = $request->subject;
//     $data->receiveby = $request->receiveby;
//     $data->save();
//     return response()->json($data);
// });
// Route::delete('record/{id?}',function($id){
//     $data =Record::destroy($id);
//     return response()->json($data);
// });

Route::get ( '/print', function () {
    return View::make( 'print' );
} );
Route::get ( '/addrecord', function () {
    return View::make( 'modal' );
} );

Route::get('login', 'LoginController@login');
Route::post('user_data', 'LoginController@get_login_details');
Route::get('register', 'RegisterController@register');
Route::post('confirmation', 'RegisterController@register_confirmation');
Route::post('added', 'RegisterController@addData');
Route::post('/editItem', 'RegisterController@editItem');
Route::post('/deleteItem', 'RegisterController@deleteItem');
Route::post('/download', 'RegisterController@downloadRecord');
