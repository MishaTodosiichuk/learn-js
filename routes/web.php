<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;


/*Route::get('/', function () {
    return view('welcome');
});*/

Route::view('/', 'welcome');

Route::redirect('/home', '/');

Route::get('test', TestController::class);

//В самому низу

/*Route::fallback(function (){
    return 'Fallback';
});*/
