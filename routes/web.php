<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PatientController;

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

Route::get('/', function () {
    return view('pages/home');
});


Route::middleware(['middleware'=>'PreventBackHistory'])->group(function(){
    Auth::routes();
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('settings', [AdminController::class, 'settings'])->name('admin.settings');

    Route::post('update-profile-info', [AdminController::class, 'updateInfo'])->name('adminUpdateinfo');
    Route::post('update-profile-picture', [AdminController::class, 'updatePicture'])->name('adminPictureUpdate');
    Route::post('update-password', [AdminController::class, 'changePasswordAdminForm'])->name('changePassword');


// route for patients
    Route::get('admin/patients', [PatientController::class, 'index'])->name('admin.patients.index');
    Route::get('admin/patients/data', [PatientController::class, 'getData'])->name('admin.patients.data');



    Route::resource('patients', PatientController::class);
    Route::post('patients/{id}/update-payment', [PatientController::class, 'updatePayment'])->name('patients.updatePayment');

    Route::post('patients/{id}/trash', [PatientController::class, 'trash'])->name('patients.trash');
    Route::post('admin/patients/{id}/restore', [PatientController::class, 'restore'])->name('patients.restore');
    Route::delete('admin/patients/{id}/delete', [PatientController::class, 'forceDelete'])->name('patients.forceDelete');
    Route::get('admin/patients/trash', [PatientController::class, 'trashIndex'])->name('patients.trashIndex');


    // Additional controls
    Route::get('patients/create', [PatientController::class, 'create'])->name('patients.create');
    Route::get('patients/{id}/print-invoice', [PatientController::class, 'printInvoice'])->name('patients.printInvoice');
});


    Route::group(['prefix'=>'user','middleware'=>['isUser','auth','PreventBackHistory']],function(){
    Route::get('dashboard',[UserController::class, 'index'])->name('user.dashboard');
    Route::get('profile',[UserController::class, 'profile'])->name('user.profile');
    Route::get('settings',[UserController::class, 'settings'])->name('user.settings');
});