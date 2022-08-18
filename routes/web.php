<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PatientReportController;
use App\Http\Controllers\adminController;
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

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/showstatus', function () {
    return view('showCovidReapot');
});

//Login user and sign up
Route::get('/logout', [PatientController::class, 'logout'] );
Route::post('/login', [PatientController::class, 'login'] );
Route::post('/signup', [PatientController::class, 'signup'] );

//edit user and sign up 
Route::get('/edit/{id}', [PatientController::class, 'editProfile']);
Route::post('/update/{id}', [PatientController::class, 'updateProfile']);

//updare status
//Route::post('/covid', [PatientReportController::class, 'createReport'] );
Route::get('/covidstatus/{id}', [PatientReportController::class, 'covidStatusProfile']);

Route::post('/covidcare', [PatientReportController::class, 'createReport']);



//ADMIN 


Route::get('/adminlogin', function () {
    return view('adminlogin');
});
Route::get('/adminProfile', function () {
    return view('adminProfile');
});

Route::post('/adminlogin', [adminController::class, 'adminLogin'] );
Route::get('/alluser',[adminController::class, 'ShowData']);
//show data
Route::get('/patientdata/{id}',[adminController::class, 'ShowPatientData']);
//delete data
Route::get('/deletedata/{id}',[adminController::class, 'deleteData']);
//logout
Route::get('/adminlogout', [adminController::class, 'logout'] );
Route::get('/adminProfile', [adminController::class, 'ShowAdminData'] );
//report
Route::get('/coviddata/{id}',[adminController::class, 'ShowPatientStatus']);