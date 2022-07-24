<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\FrontEndController;
use App\Http\controllers\BackendController;
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


Route::get('index',[FrontEndController::class,'index']);//[ControllerName::class,'function name']


// this is the route for the product page
Route::get('product',[FrontEndController::class,'product'])->name('product');

//this is the admin page
Route::get('admin',[FrontEndController::class,'admin'])->name('admin');

//this is the route for the bidhaa
Route::get('bidhaa',[FrontEndController::class,'bidhaa'])->name('bidhaa');

//this is the route for the Dashboard
Route::get('dashboard',[FrontEndController::class,'dashboard'])->name('dashboard');

//this is the route of the mauzomuuzaji
Route::get('mauzomuuzaji',[FrontEndController::class, 'mauzomuuzaji'])->name('mauzomuuzaji');

//this is the route for the empty
Route::get('empty',[FrontEndController::class,'empty'])->name('empty');

//this is the router for the historiamauzo
Route::get('historiamauzo',[FrontEndController::class,'historiamauzo'])->name('historiamauzo');

//this is the route for logout
Route::get('logout',[FrontEndController::class,'logout'])->name('logout');
//this is the route for the matawi
Route::get('matawi',[FrontEndController::class,'matawi'])->name('matawi');

//this is the route for the mauzo
Route::get('mauzo',[FrontEndController::class,'mauzo'])->name('mauzo');

//this is the route for the printirisiti
Route::get('printirisiti',[FrontEndController::class,'printirisiti'])->name('printirisiti');

//this is the route for the report
Route::get('report',[FrontEndController::class,'report'])->name('report');

//this is the route for the risiti
Route::get('risiti',[FrontEndController::class,'risiti'])->name('risiti');

//this is the route for the sale_report
Route::get('sale_report',[FrontEndController::class,'report_report'])->name('sale_report');

//this is the route for the setting
Route::get('setting',[FrontEndController::class,'setting'])->name('setting');

//this is the route for the wateja
Route::get('wateja',[FrontEndController::class,'wateja'])->name('wateja');

//this is the route for the wauzaji
Route::get('wauzaji',[FrontEndController::class,'wauzaji'])->name('wauzaji');

//this is the route for the welcome
Route::get('welcome',[FrontEndController::class,'welcome'])->name('welcome');




//route

############################BACKEND###############################


Route::post('add',[BackendController::class,'createBranch'])->name('matawi.add');


//dont touch from this route  write your routes above this route
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


