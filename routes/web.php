<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
Route::get('login', function () {

    if(Auth::check())

        {
            return redirect()->route('adminmain'); 
        } 
    return view('auth/login');
})->name('login');
Route::get('register', function () {
    if(Auth::check())

        {
            return redirect()->route('adminmain'); 
        } 
    return view('auth/register');
})->name('register');
Route::post('register', [App\Http\Controllers\ContactController::class,'register']); 
Route::post('login', [App\Http\Controllers\ContactController::class,'login']); 
Route::group(['middleware' => ['auth']], function () { 

Route::get('/', [App\Http\Controllers\ContactController::class,'home']);
Route::post('contact-us',[App\Http\Controllers\ContactController::class,'contact'])->name('contact');
Route::get('about_us', [App\Http\Controllers\ContactController::class,'aboutusget'])->name('about_us');

Route::get('adminmain', function () {
    return view('admin/adminmain');
})->name('adminmain');

Route::get('partner-visa', [App\Http\Controllers\ContactController::class,'webpartnershipget'])->name('partner-visa');

Route::get('parent-visa', [App\Http\Controllers\ContactController::class,'parentvisaget'])->name('parent-visa');

Route::get('child-visa',[App\Http\Controllers\ContactController::class,'childvisaget'])->name('child-visa');

Route::get('carer-visa', [App\Http\Controllers\ContactController::class,'carervisaget'])->name('carer-visa');

Route::get('skilled-visa',[App\Http\Controllers\ContactController::class,'skillvisaget'])->name('skilled-visa');

Route::get('work-visa',  [App\Http\Controllers\ContactController::class,'workvisaget'])->name('work-visa');

Route::get('business-visa', [App\Http\Controllers\ContactController::class,'businessvisaget'])->name('business-visa');

Route::get('student-visa', [App\Http\Controllers\ContactController::class,'studentvisaget'])->name('student-visa');

Route::get('visitor-visa', [App\Http\Controllers\ContactController::class,'visitorvisaget'])->name('visitor-visa');

Route::get('residentreturn-visa',[App\Http\Controllers\ContactController::class,'residentvisaget'])->name('residentreturn-visa');

Route::get('appeals', [App\Http\Controllers\ContactController::class,'appealget'])->name('appeals');

Route::get('citizenship',  [App\Http\Controllers\ContactController::class,'citizenget'])->name('citizenship');

Route::get('contact-us', function () {
    return view('services/contact-us');
})->name('contact-us');

Route::get('privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');



Route::get('admin', function () {
    return view('admin/admin');
})->name('admin');

Route::get('website-aboutus', function () {
    return view('admin/website-aboutus');
})->name('website-aboutus');
Route::post('website-aboutus',[App\Http\Controllers\ContactController::class,'aboutus']);

Route::get('web-partnervisa', function () {
    return view('admin/website_services/web-partnervisa');
})->name('web-partnervisa');
Route::post('web-partnervisa',[App\Http\Controllers\ContactController::class,'webpartnership']);

Route::get('web-parentvisa', function () {
    return view('admin/website_services/web-parentvisa');
})->name('web-parentvisa');

Route::post('web-parentvisa', [App\Http\Controllers\ContactController::class,'parentvisa']);

Route::get('web-childvisa', function () {
    return view('admin/website_services/web-childvisa');
})->name('web-childvisa');
Route::post('web-childvisa',  [App\Http\Controllers\ContactController::class,'childvisa']);

Route::get('web-carervisa', function () {
    return view('admin/website_services/web-carervisa');
})->name('web-carervisa');
Route::post('web-carervisa',  [App\Http\Controllers\ContactController::class,'carervisa']);

Route::get('web-skilledvisa', function () {
    return view('admin/website_services/web-skilledvisa');
})->name('web-skilledvisa');
Route::post('web-skilledvisa', [App\Http\Controllers\ContactController::class,'skillvisa']);

Route::get('web-workvisa', function () {
    return view('admin/website_services/web-workvisa');
})->name('web-workvisa');
Route::post('web-workvisa', [App\Http\Controllers\ContactController::class,'workvisa']);

Route::get('web-businessvisa', function () {
    return view('admin/website_services/web-businessvisa');
})->name('web-businessvisa');
Route::post('web-businessvisa', [App\Http\Controllers\ContactController::class,'businessvisa']);

Route::get('web-studentvisa', function () {
    return view('admin/website_services/web-studentvisa');
})->name('web-studentvisa');
Route::post('web-studentvisa', [App\Http\Controllers\ContactController::class,'studentvisa']);

Route::get('web-visitorvisa', function () {
    return view('admin/website_services/web-visitorvisa');
})->name('web-visitorvisa');
Route::post('web-visitorvisa',  [App\Http\Controllers\ContactController::class,'visitorvisa']);

Route::get('web-residentreturnvisa', function () {
    return view('admin/website_services/web-residentreturnvisa');
})->name('web-residentreturnvisa');
Route::post('web-residentreturnvisa',  [App\Http\Controllers\ContactController::class,'residentvisa'])->name('web-residentreturnvisa');

Route::post('web-appeals', [App\Http\Controllers\ContactController::class,'appeal'])->name('web-appeals');

Route::get('web-australiancitizenship', function () {
    return view('admin/website_services/web-australiancitizenship');
})->name('web-australiancitizenship');
Route::post('web-australiancitizenship', [App\Http\Controllers\ContactController::class,'citizen']);

Route::get('website-contactus', function () {
    return view('admin/website-contactus');
})->name('website-contactus');

Route::get('website-home', function () {
    return view('admin/website-home');
})->name('website-home');   
Route::post('website-home', [App\Http\Controllers\ContactController::class,'slider']);
Route::post('website-home', [App\Http\Controllers\ContactController::class,'who']);

});