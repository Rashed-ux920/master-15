<?php
use App\Http\Controllers\viewscontroller;
use App\Http\Controllers\servicecontroller;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\adminviewscontroller;
use App\Http\Controllers\UserInfoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('landingpage');

Route::get('/aboute',[viewscontroller::class,'index1'])->name('aboutpage');

Route::get('/service',[viewscontroller::class,'index2'])->name('service');

Route::get('/service/woodenfloor',[servicecontroller::class,'woodenfloor'])->name('woodenfloor');

Route::get('/service/genaralcarpentry',[servicecontroller::class,'genaralcarpentry'])->name('genaralcarpentry');

Route::get('/service/woodenfurniture',[servicecontroller::class,'woodenfurniture'])->name('woodenfurniture');

Route::get('/service/customcarpentry',[servicecontroller::class,'customcarpentry'])->name('customcarpentry');

Route::get('/service/furnituremodeling',[servicecontroller::class,'furnituremodeling'])->name('furnituremodeling');

Route::get('/project',[viewscontroller::class,'index3'])->name('project');

Route::get('/feature',[viewscontroller::class,'index4'])->name('feature');

Route::get('/freeqoute',[viewscontroller::class,'index5'])->name('freeqoute');

Route::get('/ourteam',[viewscontroller::class,'index6'])->name('ourteam');

Route::get('/testimonial',[viewscontroller::class,'index7'])->name('testimonial');

Route::get('/contact', [contactuscontroller::class, 'index'])->name('contactus');

Route::get('/home', [viewscontroller::class, 'index9'])->name('home');

Route::get('/profile/{id}',[ViewsController::class, 'index10'])->name('profile');

Route::get('/updateprofile/{id}', [UserInfoController::class,'index'])->name('updateprofile');

Route::post('/updateprofile/{id}',[UserInfoController::class, 'store'])->name('storeuserinfo');

Route::get('/dashboard',[adminviewscontroller::class,'index1'])->name('dashboard');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
