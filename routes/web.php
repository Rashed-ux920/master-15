<?php
use App\Http\Controllers\viewscontroller;
use App\Http\Controllers\servicecontroller;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\adminviewscontroller;
use App\Http\Controllers\BookServiceController;
use App\Http\Controllers\UserInfoController;
use App\Models\service;

use App\Models\User;
use App\Models\user_info;
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

//user side

Route::get('/', function () {
    $services = service::all();
    $admin = User::with('user_info')->wherehas('user_info',function($query){
        $query->where('role','admin');
    })->get();
    return view('welcome',compact('services','admin'));
})->name('landingpage');

Route::get('/aboute',[viewscontroller::class,'index1'])->name('aboutpage');

Route::get('/service/{id}',[viewscontroller::class,'index2'])->name('service');

Route::post('/service/{id}',[BookServiceController::class, 'store'])->name('storebook');

Route::get('/service/woodenfloor',[servicecontroller::class,'woodenfloor'])->name('woodenfloor');

Route::get('/service/genaralcarpentry',[servicecontroller::class,'genaralcarpentry'])->name('genaralcarpentry');

Route::get('/service/woodenfurniture',[servicecontroller::class,'woodenfurniture'])->name('woodenfurniture');

Route::get('/service/customcarpentry',[servicecontroller::class,'customcarpentry'])->name('customcarpentry');

Route::get('/service/furnituremodeling',[servicecontroller::class,'furnituremodeling'])->name('furnituremodeling');

Route::get('/project',[viewscontroller::class,'index3'])->name('project');

Route::get('/feature',[viewscontroller::class,'index4'])->name('feature');

Route::get('/freeqoute/{id}',[viewscontroller::class,'index5'])->name('freeqoute');

Route::get('/ourteam',[viewscontroller::class,'index6'])->name('ourteam');

Route::get('/testimonial',[viewscontroller::class,'index7'])->name('testimonial');

Route::get('/contact', [contactuscontroller::class, 'index'])->name('contactus');

Route::post('/contact', [ContactusController::class,'store'])->name('message');

Route::get('/home', [viewscontroller::class, 'index9'])->name('home');

Route::get('/profile/{id}',[ViewsController::class, 'index10'])->name('profile');

Route::get('/reservation/{id}',[BookServiceController::class,'edit'])->name('editreservation');

Route::get('/updateprofile/{id}', [UserInfoController::class,'index'])->name('updateprofile');

Route::post('/updateprofile/{id}',[UserInfoController::class, 'store'])->name('storeuserinfo');

Route::get('/editprofile/{id}',[UserInfoController::class,'edit'])->name('editprofile');

Route::post('/editprofile/{id}',[UserInfoController::class,'update'])->name('edituserprofile');

// admin side

Route::get('/dashboard',[adminviewscontroller::class,'index1'])->name('dashboard');

Route::get('/dashboard/usertable',[adminviewscontroller::class,'usertable'])->name('displayuser');

Route::get('/dasheoard/userupdate/{id}',[adminviewscontroller::class,'edituser'])->name('userrole');

Route::post('/dashboard/userupdate/{id}',[adminviewscontroller::class,'updaterole'])->name('updaterole');

Route::get('/dashboard/services',[adminviewscontroller::class,'displayservices'])->name('services');

Route::get('/dashboard/addservice',[adminviewscontroller::class,'addservices'])->name('addservice');

Route::post('/dashboard/addservice',[servicecontroller::class,'store'])->name('storeservice');

Route::get('/dashboard/editservice/{id}',[servicecontroller::class, 'edit'])->name('editservice');

Route::put('/dashboard/editservice/{id}',[servicecontroller::class,'update'])->name('updateservice');

Route::delete('/dasshboard/service/{id}',[servicecontroller::class,'destroy'])->name('deleteservice');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
