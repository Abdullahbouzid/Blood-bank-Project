<?php

use App\Http\Controllers\VisitorControllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Center_Controllers;
use App\Http\Controllers\Request_Controllers;
use App\Http\Controllers\DonationControllers;
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
Route::view("/login-admin", 'login_admin');

Route::view("/login-emp", 'login_employee');

Route::view("/home", 'home');

Route::view("/blood-donation", 'blood_donation');

Route::view("/blood-request", 'BloodRequest');

Route::view("/blood-center", 'Blood_Center');

Route::view("/about", 'about');

Route::view("/create-account", 'create_visitor');

Route::view("/my-account", 'myaccount');

// ################ POST ######################

Route::post('/create-account', [VisitorControllers::class, 'store']);

Route::post('/blood-donation', [DonationControllers::class, 'store']);

Route::post("/blood-request", [Request_Controllers::class, 'store']);




