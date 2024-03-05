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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
                    <li class="nav-item">
                        <a class="nav-link fs-5 pt-1 " href="home">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5 pt-1 " href="blood_donation">طلب التبرع بالدم</a>
                    </li>
                    <li class="nav-item" style="background-color: #fd563f;">
                        <a class="nav-link fs-5 pt-1 " href="Blood_Request">طلب دم</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5 pt-1 " href="Blood_Center">مراكز التبرع</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5 pt-1 " href="about">حول</a>
                    </li>
                    <div class="dropdown nav-item" style="margin-right:250px;">
                    <img src="{{asset('img/icons8-user-50.png')}}" alt="" style="margin-left:5px;">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
              {{$_COOKIE["User"]}}
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item exc" href="#">حسابي</a></li>
              <li><a class="dropdown-item exc" href="/">تسجيل الخروج</a></li>
            </ul>
          </div>

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
                    <form action="/Blood_Request" method="post" onsubmit="return checkDataRequest()">
                        @csrf

                        <div class="form-group">
                            <label class="text exception" for="">الاسم الثلاثي</label>
                            <input type="text" id="Name_Patient" name="Name_Patient" readonly value = "{{$_COOKIE["User"]}}" class="form-control text-center">

                            <label class="date exception" for="">تاريخ الميلاد</label>
                            <input type="date" id="DOB_Patient" name="DOB_Patient" readonly value = "{{$_COOKIE["DoB"]}}" class="form-control exception text-center"
                                style="cursor: pointer;">
                        </div>

                        <div class="form-group pt-1">

                            <label class="text exception" for="">عنوان السكن</label>
                            <input type="text" id="Adds_Patient" name="Adds_Patient" readonly value = "{{$_COOKIE["Adds"]}}" class="form-control exception text-center">

                            <label class="text exception" for="">رقم الهاتف</label>
                            <input type="text" id="Phone_Patient" name="Phone_Patient" readonly value = "{{$_COOKIE["phone"]}}"  class="form-control exception text-center">

                        </div>

                        <div class="form-group pt-1 ">

                            <label class="text exception" for="">نوع الفصيلة</label>
                            {{-- Type of blood for the Patient --}}
                            <select name="TOB_Patient" id="TOB_Patient" class="form-control"
                                style="text-align: center ;">
                                <option value="A+" {{$_COOKIE["TOB"] === "A+" ? "selected" : "--"}} >A+</option>
                                            <option value="A-" {{$_COOKIE["TOB"] === "A-" ? "selected" : "--"}}>A-</option>
                                            <option value="B+" {{$_COOKIE["TOB"] === "B+" ? "selected" : "--"}}>B+</option>
                                            <option value="B-" {{$_COOKIE["TOB"] === "B-" ? "selected" : "--"}}>B-</option>
                                            <option value="O+" {{$_COOKIE["TOB"] === "O+" ? "selected" : "--"}}>O+</option>
                                            <option value="O-" {{$_COOKIE["TOB"] === "O-" ? "selected" : "--"}}>O-</option>
                                            <option value="AB+" {{$_COOKIE["TOB"] === "AB+" ? "selected" : "--"}}>AB+</option>
                                            <option value="AB-" {{$_COOKIE["TOB"] === "AB-" ? "selected" : "--"}}>AB-</option>
                            </select>

                            <label class="text exception" for="">الجنس</label>
                            <input type="text" id="Gander_Patient" readonly value = "{{$_COOKIE["Gander"]}}"  name="Gander_Patient" class="form-control exception text-center">

                        </div>

                        <div class="form-group pt-1 ">

                            <label class="text exception" for="">عدد الاكياس</label>
                            <input type="number" id="Adds_Patient" name="Adds_Patient" min = "1" class="form-control">

                            <label class="text exception" for="">حالة الطلب</label>
                            <select name="State_of_Patient" id="State_of_Patient" class="form-control exception"
                                style="text-align: center;">
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

    <script src="/assets/js/success_msg.js"></script>
    <!-- <script src="{{asset('/assets/js/success_msg.js')}}"></script> -->
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