<?php

use App\Http\Controllers\Visitor_Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Center_Controller;
use App\Http\Controllers\Bank_Controller;
use App\Http\Controllers\countController;
use App\Http\Controllers\Emp_Controller;
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
    return view('/Dashboards.dashboard');
});

Route::get('/empcontrol', function () {
    return view('/Dashboards.empcontrol');
});


Route::get('/visitcontrol', function () {
    return view('/Dashboards.visitcontrol');
});
Route::get('/bankcontrol', function () {
    return view('/Dashboards.bankcontrol');
});
Route::get('/admincontrol', function () {
    return view('/Dashboards.admincontrol');
});

Route::get('/centercontrol', function () {
    return view('/Dashboards.centercontrol');
});
Route::get('/donationcontrol', function () {
    return view('/Dashboards.donationcontrol');
});

Route::get('/requestcontrol', function () {
    return view('/Dashboards.requestcontrol');
});
Route::get('/blood_storage', function () {
    return view('/Dashboards.blood_storage');
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

################# Dashboard #########################

// وحدة التحكم عرض المصارف
Route::get('/bankcontrol', [Bank_Controller::class, 'index'])->name('bankcontrol.index');
//add new bank
Route::post('/bankcontrol', [Bank_Controller::class, 'store']);

//حذف صف في المصرف بناء على رقم المصرف
Route::delete('/bankcontrol/{bank}', [Bank_Controller::class, 'destroy'])->name('bankcontrol.destroy');
//تعديل بيانات مصرف معين
// Route::post('/bankcontrol/update', [Bank_Controller::class, 'update'])->name('bankcontrol.update');



 
// show emp
Route::get('/empcontrol', [Emp_Controller::class, 'show_Emp'])->name('employees.index');
//show the admins in dashboard
Route::get('/admincontrol', [Emp_Controller::class, 'show_Admin'])->name('show admin only');
//لحذف موظف 
// Route::delete('/empcontrol/{employee}', [Emp_Controller::class,'destroy'])->name('employees.delete');



//وحدة التحكم عرض مراكز التبرع
Route::get('/centercontrol', [Center_Controller::class, 'show_center_incontrol']);
//وحدة التحكم عرض عدد جميع المتطلبات
Route::get('/dashboard', [countController::class, 'Show_count']);


//وحدة التحكم عرض بيانات المستخدمين
Route::get('/visitcontrol', [Visitor_Controller::class, 'show_visitor_control']);


