<?php

use App\Http\Controllers\Visitor_Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Center_Controller;
use App\Http\Controllers\Emp_Controllers;
use App\Http\Controllers\Request_Controller;
use App\Http\Controllers\Donation_Controller;
use App\Models\Visitor;
use App\Http\Controllers\FormCheck;

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

// ################ VIEW ######################

Route::view("/", 'index');

// اختصار لعرض شاشة تسجيل الدخول الخاصة ب الموظف و الادمن 
Route::view("/login_admin", 'login_admin');

Route::view("/login_emp", 'login_employee');

Route::view("/home", 'home');

Route::view("/blood_donation", 'blood_donation');

Route::view("/Blood_Request", 'BloodRequest');

Route::get('/Blood_Center', function () {
    return view('Blood_Center');
});

Route::view("/about", 'about');

Route::get('/CreateAccount', function () {
    return view("create_visitor");
});
Route::view("/myaccount", 'myaccount');
Route::get('/dashboard', function () {
    return view('dashboard');
});

// ################ POST ######################
Route::post('/CreateAccount', [Visitor_Controller::class, 'store']);

Route::post('/blood_donation', [Donation_Controller::class, 'store']);

Route::post("/Blood_Request", [Request_Controller::class, 'store']);

Route::post("/", [Visitor_Controller::class, 'loginUser']);

// ############################################


// استقبال طلبات الدم
// Route::get("/BloodRequest/create",[Request_Controllers::class,'requestPatient']);
// Route::post("/BloodRequest", [Request_Controller::class, 'requestPatient']);

// عرض مراكز التبرع
Route::get('/Blood_Center', [Center_Controller::class, 'showselect']);


// tast 

// Route::get('/tast', [Center_Controller::class, 'showselect']);
// Route::post('/tast', [Center_Controller::class, 'searchselect']);
// وحدة التحكم تحقق من كلمة السر

