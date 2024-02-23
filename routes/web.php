<?php

use App\Http\Controllers\Visitor_Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Center_Controller;
use App\Http\Controllers\Emp_Controllers;
use App\Http\Controllers\Request_Controllers;
use App\Http\Controllers\DonationControllers;
use App\Http\Controllers\FormCheck;

// >>>>>>> dd99cb9d602e01f248dffda3232ecaa9af1d9818
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
    return view('index');
});

// اختصار لعرض شاشة تسجيل الدخول الخاصة ب الموظف و الادمن 
Route::view("/login_administrator", 'login_admin');

Route::view("/login_employee", 'login_employee');

Route::get("/home", function () {
    return view('home');
});

Route::get('/blood_donation', function () {
    return view('blood_donation');
});

Route::get('/BloodRequest', function () {
    return view('BloodRequest');
});

// Route::get('/Blood_Center', function () {
//     return view('Blood_Center');
// });

Route::get('/about', function () {
    return view('about');
});

Route::get('/CreateAccount', function () {
    return view("create_visitor");
});
Route::get('/dashboard', function () {
    return view('dashboard');
});



Route::post('/CreateAccount', [Visitor_Controllers::class, 'store']);

// Route::get('/CreateAccount/{email}', [VisitorControllers::class, 'show']);

// خاص بالنموذج تسجيل الدخول
Route::post("/home", [FormCheck::class, 'getUserlogin']);
// Route::view("/index","home");

Route::post('/blood_donation', [DonationControllers::class, 'requestVisitor']);

// استقبال طلبات الدم
// Route::get("/BloodRequest/create",[Request_Controllers::class,'requestPatient']);
Route::post("/BloodRequest", [Request_Controllers::class, 'requestPatient']);

// عرض مراكز التبرع
Route::get('/Blood_Center', [Center_Controller::class, 'showselect']);




// tast 

// Route::get('/tast', [Center_Controller::class, 'showselect']);
// Route::post('/tast', [Center_Controller::class, 'searchselect']);
// وحدة التحكم تحقق من كلمة السر

