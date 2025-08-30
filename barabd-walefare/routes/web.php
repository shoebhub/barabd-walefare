<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Back\AdminController;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\BlogPageController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\GalleryController;
use App\Http\Controllers\Front\WelfareController;
use App\Http\Controllers\Front\AppointmentController;
use App\Http\Controllers\Front\AreasofgivingController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\StudentRegisterController;


Route::namespace('App\Http\Controllers\Front')->group(function(){
    Route::get('/',[IndexController::class,'index'])->name('index');
    Route::get('/about',[AboutController::class,'about'])->name('about');
    Route::get('/aog',[AreasofgivingController::class,'areas_of_giving'])->name('aog');
    Route::get('/blogs',[BlogController::class,'blogs'])->name('blogs');
    Route::get('/blog-page',[BlogPageController::class,'blogpage'])->name('blogpage');
    Route::get('/gallery',[GalleryController::class,'gallery'])->name('gallery');
    Route::get('/contact',[ContactController::class,'contact'])->name('contact');
    Route::get('/appointment',[AppointmentController::class,'appointment'])->name('appointment');
    Route::get('/welfare',[WelfareController::class,'welfare'])->name('welfare');

    Route::get('/barabd-welfare-apply',[WelfareController::class,'barabdWelfareAppy'])->name('welfare');

    Route::get('/barabd-welfare',[WelfareController::class,'barabdWelfare'])->name('welfare')->name('student_acceptance.verify.index');

     //verify phone action route
    Route::post('/barabd-welfare-apply', [WelfareController::class,'verifyPhoneNumber'])->name('student_acceptance.verify.phone');


    Route::get('/get-acceptance',  [WelfareController::class,'getAcceptanceLetter'])->name('student_acceptance.get-acceptance');

    Route::get('/get-acceptance-download/{id}', [WelfareController::class,'downloadAcceptance'])->name('student_acceptance.download');

    //verify after mobile verification
    Route::get('/barabd-welfare-index', [WelfareController::class,'verifyOtpWelfareIndex'])->name('student_acceptance.verify.index');


    Route::post('/barabd-welfare-create', [WelfareController::class,'store'])->name('student_acceptance.store');
});



//guest user
Route::middleware(['guest'])->group(function () {
    Route::controller(AuthController::class)->prefix('/login')->group(function () {
        Route::get('/', 'loginView')->name('login');
        Route::post('/authenticate', 'authenticate')->name('authenticate');
    });
});


//auth user
Route::middleware(['auth'])->group(function () {
    Route::controller(AuthController::class)->prefix('/home')->group(function () {
        Route::get('/', 'home')->name('home');
        Route::get('/logout', 'logout')->name('logout');
    });
});


Route::middleware(['auth'])->group(function () {
    Route::prefix('area')->name('area.')->group(function () {
        Route::get('/', [AreaController::class, 'index'])->name('index');
        Route::get('/create', [AreaController::class, 'create'])->name('create');
        Route::post('/store', [AreaController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [AreaController::class, 'edit'])->name('edit');
        Route::post('/update/{area}', [AreaController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [AreaController::class, 'destroy'])->name('destroy');
    });


    Route::prefix('district')->name('district.')->group(function () {
        Route::get('/', [DistrictController::class, 'index'])->name('index');
        Route::get('/create', [DistrictController::class, 'create'])->name('create');
        Route::post('/store', [DistrictController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [DistrictController::class, 'edit'])->name('edit');
        Route::post('/update/{area}', [DistrictController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [DistrictController::class, 'destroy'])->name('destroy');
    });


    Route::controller(StudentRegisterController::class)->prefix('/volunteer-acceptace-list')->name('volunteer.acceptace.')->group(function () {
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/list', 'list')->name('list');
    });

});


Route::middleware(['auth'])->group(function () {
    Route::prefix('volunteer')->name('volunteer.')->group(function () {
        Route::get('/', [VolunteerController::class, 'index'])->name('index');
        Route::get('/create', [VolunteerController::class, 'create'])->name('create');
        Route::post('/store', [VolunteerController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [VolunteerController::class, 'edit'])->name('edit');
        Route::post('/update/{volunteer}', [VolunteerController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [VolunteerController::class, 'destroy'])->name('destroy');
    });
});


Route::get('/volunteer/register', [StudentRegisterController::class, 'create'])->name('volunteer.form');
Route::post('/volunteer/register', [StudentRegisterController::class, 'store'])->name('student.register');



