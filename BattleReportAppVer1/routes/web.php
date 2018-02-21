<?php

/*
**--------------------------------------------------------------------------
** Web Routes
**--------------------------------------------------------------------------
** Basic Routes for a RESTful service:
**
** Route::get($uri, $callback);
** Route::post($uri, $callback);
** Route::put($uri, $callback);
** Route::delete($uri, $callback);
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('reports', function(){
  return response(['Report 1', 'Report 2', 'Report 3'], 200);
});

Route::get('reports/{report}', function ($reportId) {
    return response()->json(['reportId' => "{$reportId}"], 200);
});


Route::post('reports', function() {
    return  response()->json([
            'message' => 'Create success'
        ], 201);
});

Route::put('reports/{report}', function() {
    return  response()->json([
            'message' => 'Update success'
        ], 200);
});

Route::delete('reports/{report}',function() {
    return  response()->json(null, 204);
});
