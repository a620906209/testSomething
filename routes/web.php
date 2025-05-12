<?php

use App\Events\ChatMessageEvent;
use App\Events\Playground;
// use App\Events\PlaygroundEvent;
use App\Http\Controllers\indexController;
use App\Http\Controllers\SinglePageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user', [UserController::class, 'showProfile']);
// route::get('/{any}',[SinglePageController::class,'index']);
Route::get('/index/{id}', [UserController::class, 'index']);

Route::get('order', [OrderController::class, 'all']);
Route::get('order/{id}', [OrderController::class, 'store']);
Route::get('overhundred', [OrderController::class, 'hundred']);

Route::get('ooo',[OrderController::class,'ooo']);

Route::get('index', [indexController::class,'index']);
Route::get('showitem',[indexController::class,'showitem']);
Route::get('test',function(){
return  Redirect::to('https://admin.sb321.net/');
});
Route::get('value',function(){
// return view('value',['value'=>'myvalue']);
return View::first(['value','value'],['value'=>'myvalue1']);
});


// Route::get('playground',function(){
//     event(new PlaygroundEvent());
//     return 'playground';
// });

Route::get('ws',function(){
    return view('websocket');
});

Route::post('/chat-message',function(Illuminate\Http\Request $request){
    // dd($request->message);
    event(new ChatMessageEvent($request->message));

     return null;
});

route::get('/axiostest',[indexController::class,'axiostest']);
route::post('/axiospost',[indexController::class,'axiospost']);

Route::get('/playground',function(){

    event(new Playground());
    return null;
});


//測試部屬
Route::get('/playgroundGG',function(){

    event(new PlaygroundGGG());
    return null;
});