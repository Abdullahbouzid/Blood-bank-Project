<!DOCTYPE html> 
<html lang="en"> 
 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>طلب دم</title> 
 
    <link rel="icon" href="../../imgs/favicon.ico" type="image/x-icon"> 
    <link rel="stylesheet" href="{{asset('assets/css/bondi.css')}}"> 
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"> 
 
    <link rel="stylesheet" href="{{asset('assets/css/navbar.css')}}"> 
 
    <link rel="stylesheet" href="{{asset('assets/css/footer.css')}}"> 
    <link rel="stylesheet" 
        href="{{asset('assets/css/cdn.jsdelivr.net_npm_bootstrap@5.3.1_dist_css_bootstrap.min.css')}}"> 
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css.map')}}"> 
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}"> 
    <link rel="stylesheet" href="{{asset('assets/css/patient.css')}}"> 
    <link rel="stylesheet" href="{{asset('assets/css/content.css')}}"> 
 
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;400;500;600;700;800;900&display=swap" 
        rel="stylesheet"> 
 
</head> 
 
<body> 
 
    <!-- START NAVBAR --> 
 
    <nav class="navbar navbar-expand-lg navbar-expand-md "> 
        <div class="container"> 
 
            <!-- للرجوع الى القائمة الرئيسية --> 
 
 
            <img src="{{asset('img/blood bank white and black.png')}}" alt="Logo" height="78px"> 
 
 
            <!-- بوتن وظيفتها الظهور عندما يتم تصغير الشاشة  --> 
 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" 
                aria-label="Toggle navigation"> 
                <i class="barmeun fa-solid fa-bars"></i> 
            </button> 
 
            <!-- ---?--- --> 
            <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
 
                <ul class="navbar-nav mb-0 mb-lg-0 fw-bolder ms-auto "> 
                    <li class="nav-item" >
                        <a class="nav-link fs-5 pt-1 " href="home">الرئيسية</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link fs-5 pt-1 " href="blood_donation">طلب التبرع بالدم</a>
                      </li>
                      <li class="nav-item" style="background-color: #fd563f;">
                        <a class="nav-link fs-5 pt-1 " href="BloodRequest">طلب دم</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link fs-5 pt-1 " href="Blood_Center">مراكز التبرع</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link fs-5 pt-1 " href="about">حول</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link fs-5 pt-1 " href="">تسجيل الخروج</a>
                      </li>
                </ul> 
 
            </div> 
 
    </nav> 
 
    <!-- END NAVBAR --> 
 
    <!-- START SECTION --> 
 
 
        <div class="container text-center "> 
 
            <!-- الصف الذي يجمع بين نص الطلب بالدم و باقي الصفحة --> 
            <div class="row align-items-center"> 
 
                <div class="col-12 nameService position-relative"> 
                    طلب دم 
                </div> 
 
            </div> 
 
            <!-- الصف الذي يجمع بين بيانات الطلب و صورة الطلب --> 
            <div class="row mt-4"> 
 
                <!-- العمود الخاص ب بيانات الطلب --> 
                <div class="col-lg-9 col-md-12 dataPatient mb-5"> 
 
                    <div class="row"> 
                        <label style=" padding-bottom: 5px; padding-top: 5px;" for=""> 
                            الرجاء ملئ النموذج التالي 
                        </label> 
                    </div> 
 
                    <div class="row mt-4 "> 
                        <form action="/BloodRequest" method="POST">
                            @csrf
                         
                        <div class="form-group"> 
                            <label class="text exception" for="">الاسم الثلاثي</label>
                            <input type="text" id="" name="Name_Patient" required class="form-control"> 
 
                            <label class="date exception" for="">تاريخ الميلاد</label> 
                            <input type="date" id="" name="DOB_Patient" required class="form-control exception" 
                                style="cursor: pointer;"> 
                        </div> 
 
                        <div class="form-group pt-1"> 
 
                            <label class="text exception" for="">عنوان السكن</label> 
                            <input type="text" id="" name="Adds_Patient" required class="form-control exception"> 
 
                            <label class="text exception" for="">رقم الهاتف</label> 
                            <input type="text" id="" name="Phone_Patient" required class="form-control exception"> 
 
                        </div> 
 
                        <div class="form-group pt-1 "> 
 
                            <label class="text exception" for="">نوع الفصيلة</label> 
                            {{-- Type of blood for the  Patient --}}
                            <select name="TOB_Patient" id="" class="form-control" required style="text-align: center ;"> 
                                <option value="">----اختر نوع الفصيلة----</option> 
                                <option value="A+">A+</option> 
                                <option value="A-">A-</option> 
                                <option value="B+">B+</option> 
                                <option value="B-">B-</option> 
                                <option value="O+">O+</option> 
                                <option value="O-">O-</option> 
                                <option value="AB+">AB+</option> 
                                <option value="AB-">AB-</option> 
                            </select> 
 
                            <label class="text exception" for="">الجنس</label> 
                            <select name="Gander_Patient" id="" class="form-control exception" required 
                                style="text-align: center;"> 
                                <option value="">--</option> 
                                <option value="Male">ذكر</option> 
                                <option value="Female">انثى</option> 
                            </select> 
                        </div> 
 
                        <div class="form-group pt-1 "> 
 
                            <label class="text exception" for="">حالة الطلب</label> 
                            <select name="State_of_Patient" id="" class="form-control exception" required 
                                style="text-align: center; margin-left: 50%"> 
                                <option value="">--</option> 
                                <option value="Urgent">مستعجل</option> 
                                <option value="nonUrgent">غير مستعجل</option> 
                            </select> 
 
                        </div> 
                      
                    </div> 
 
                    <button type="submit" class="submit mt-5 mb-3">ارســـال</button> 
                    </form>
                </div> 
 
                <!-- العمود الخاص ب صورة الطلب --> 
                <div class="col-lg-3 d-none d-lg-block"> 
                    <img src="{{asset('img/patient.jpg')}}" alt="" style="height: 300px; padding-left: 8%;"> 
                </div> 
 
            </div> 
        </div> 
  
 
    <!-- END SECTION --> 
 
    <!-- START FOOTER --> 
 
    <script src="{{asset('assets/js/cdn.jsdelivr.net_npm_bootstrap@5.3.1_dist_js_bootstrap.bundle.min.js')}}"></script> 
    <script src="{{asset('assets/js/all.min.js')}}"></script> 
 
 
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
 
    <!-- هذم سكربت متع البوتس تراب --> 
    <footer class="footer text-white py-0"> 
        <div class="contact"> 
            <a href="#"><i class="fab fa-facebook-f"></i></a> 
            <a href="#"><i class="fa-brands fa-youtube fa-sm"></i></a> 
            <a href="#"><i class="fa-brands fa-telegram"></i></a>
            <a href="#"><i class="fa-solid fa-at"></i></a> 
        </div> 
 
    </footer> 
 
    <!-- END FOOTER --> 
 
</body> 
 
</html>

