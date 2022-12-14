<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use Illuminate\Http\Request;
use App\Http\Controllers\Atefcontroller;
use App\Http\Controllers\Testinvokable;
use App\Http\Controllers\TestResorseController;



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


Route::get("/",[Atefcontroller::class, 'index'] );
Route::resource('/atef',TestResorseController::class);
/*
Route::get("/create",[Atefcontroller::class, 'create'] );
Route::post("/store",[Atefcontroller::class, 'store'] );
*/

//Route::get("/",Atefcontroller::class);
//Route::get("/",Testinvokable::class);

/*
Route::get('/token',function( Request $request){
    return $token=$request->session()->token();
});
*/
/*
Route::get('/token',function( Request $request){
    return csrf_token();
});
*/

/*
Route::get('/token',function( Request $request){
    return view("token");
});
*/


/*
Route::get('/home',function(){
    return  "<h1> اهلا بك في الطريق العام </h1>" ;
})->middleware('policemanb');
*/


/*
Route::get('/home',function(){
    return  "<h1> اهلا بك في الطريق العام </h1>" ;
})->middleware('policemanb:admin');

Route::get('/admin',function(){
    return  "<h1> تفضل تملك الشروط للطريق </h1>" ;
})->name('admin');
Route::get('/user',function(){
    return  "<h1> عفوا لا تملك الشروط للطريق </h1>" ;
})->name('user');
*/

/*
Route::get('/home/{type}',function($type){
    return  "<h1> اهلا بك في الطريق العام </h1>" ;
})->middleware('policemanb');

Route::get('/admin',function(){
    return  "<h1> تفضل تملك الشروط للطريق </h1>" ;
})->name('admin');
Route::get('/user',function(){
    return  "<h1> عفوا لا تملك الشروط للطريق </h1>" ;
})->name('user');
*/


/*
Route::get('/', function () {
    return view('welcome');
});
*/

/*
Route::get('/', [Home::class, 'index'])->name('callhome');
Route::get('/show', [Home::class, 'show'])->name('show');
Route::get('/edit', [Home::class, 'edit'])->name('edit');
*/

/*
Route::controller(Home::class)->group(function(){
    Route::get('/index','index');
    Route::get('/show','show');
    Route::get('/edit','edit');
});
*/


/*
Route::prefix('admin')->group(function(){
    Route::get('atef',function(){
        return "atef 1";
    });
    Route::get('fox',function(){
        return "fox 1";
    });
    Route::get('asd',function(){
        return "asd 1";
    });
    
});
*/


/*
Route::get('/atef',function(){
    echo "welcome atef";

})->name('callatef');
*/

/*
Route::middleware(['middl1','middl2'])->group(function(){
    Route::get('/test1', [Home::class, 'index'])->name('callhome');
    Route::get('/test2', [Home::class, 'index'])->name('callhome');
});
*/






/*
Route::get('/atef/{name}/{age}', function ($name,$age) {
    return "welcome " . $name . " age " .$age;
})->where(['name' => '[A-Za-z]+','age' => '[0-9]+']);
*/
/*
Route::get('/atef/{name}/{age}', function ($name,$age) {
    return "welcome " . $name . " age " .$age;
})->whereNumber('age')->whereAlpha('name');
*/
/*
Route::get('/atef/{name}/{age}', function ($name,$age) {
    return "welcome " . $name . " age " .$age;
})->whereAlphaNumeric('name')->whereNumber('age');
*/
/*
Route::get('/atef/{name}/{age}', function ($name,$age) {
    return "welcome " . $name . " age " .$age;
});
Route::get('/search/{search}', function ($search) {
    return $search;
})->where('search','.*');
Route::get('/atef/{name}/{age}', function ($name,$age) {
    return "welcome " . $name . " age " .$age;
})->where('age','.*');
*/
/*
Route::get('/atef', function () {
    return "welcome atef";
});
*/
/*
Route::get('/ateff', function () {
    return view('Front.home');
});
Route::redirect('/asd','/atef');
*/
/*
Route::get('/{name}/{age}', function ($name,$age) {
    echo 'welcome ' . $name . ' Your age is '.$age;
 });
 */
/*
Route::get('/home', [Home::class, 'index']);
*/
/*
Route::match(['get','post'],'/atef',function(){
    return "welocme atef";
});
*/
/*
Route::any('/',function(){
    return "anyy";
});
*/

