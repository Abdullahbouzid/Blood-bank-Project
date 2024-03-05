<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>انشاء حساب</title>
    <link rel="icon" href="../../imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet"
        href="{{asset('assets/css/cdn.jsdelivr.net_npm_bootstrap@5.3.1_dist_css_bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css.map')}}">
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/create_visitor.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/content.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/footer.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>

<body>

    <!--من هنا تقدر تمسح لانه هذا تبع المحتوي الصفحه-->
    <div class="container" style="direction: rtl; ">
        <!-- start of posting-->
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="bg-white p-1 " style="border-radius: 20px; color: #616263; margin-top:9%; ">

                    <div class="container">

                        <img src="{{asset('img/blood bank.png')}}" alt="Logo" height="100px"
                            style="padding-right: 39%;">
                        <br>
                        <form action="/CreateAccount" method="post" onsubmit="return checkData_CreateVisitor()">
                            @csrf

                            <div class="form-group" style = "">
                                <label class="text mb-1" for="" style = "">الاسم الثلاثي</label>
                                <input type="username" id="username" name="Name" value="{{old('Username')}}"
                                       class="form-control text-center" style = "" placeholder="اكتب اسمك الثلاثي">
                            </div>

                                <div class="row mt-1">
                                    <div class="form-group" style = "">
                                        <label class="text mb-1" for="" style = "display: block;">البريد الالكتروني</label>
                                        <input type="email" id="email" name="Email" value="{{old('Email')}}"
                                               class="form-control text-center" style = "display: inline;" placeholder="user@email.com"> 
                                                <!-- <span id="email-error" data-error="emailExists" style="color: red; display:block;"> -->
                                                <!-- @error('Email') -->
                                                <!-- البريد الالكتروني مسجل لدينا مسبقا -->
                                                <!-- {{ $message }} -->

                                                <!-- @enderror -->
                                                <!-- </span> -->
                                    </div>
                                    <div class="form-group" style = "">
                                        <label class="text mb-1" for="" style = "display: block;">تاريخ الميلاد</label>
                                        <input type="date" id="DOB_Visitor" name="DoB" class="form-control"
                                               style="cursor: pointer;">
                                    </div>
                                    <div class="form-group" style = "">
                                        <label class="text mb-1 mt-1" for="">عنوان السكن</label>
                                        <input type="text" id="Adds_Visitor" name="Addrees" class="form-control">
                                    </div>
                                    <div class="form-group" style = "">
                                        <label class="text mb-1 mt-1" for="">رقم الهاتف</label>
                                        <input type="text" id="Ph_Visitor" name="Phone" class="form-control">
                                    </div>
                                    <div class="form-group" style = "">
                                        <label class="text mb-1 mt-1" for="">نوع الفصيلة</label>
                                        <select name="Typeofblood" id="TOB_Visitor" class="form-control"
                                                style="text-align: center ;">
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
                                    </div>
                                    <div class="form-group" style = "">
                                        <label class="text mb-1 mt-1" for="">الجنس</label>
                                        <select name="Gander" id="Gender_Visitor" class="form-control"
                                                style="text-align: center; display: flex; align-items: center; width:99%; margin-left: 50%;">
                                            <option value="">--</option>
                                            <option value="ذكر">ذكر</option>
                                            <option value="انثى">انثى</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="text mb-1 mt-2" for="">كلمة المرور</label>
                                        <input type="password" id="password" name="Password" value="{{old('Password')}}"
                                               class="form-control text-center" placeholder="ادخل  كلمة المرور">
                                    </div>
                                    <div class="form-group">
                                        <label class="text mb-1 mt-2" for="">تاكيد كلمة المرور</label>
                                        <input type="password" id="password_again" name="password_again"
                                               value="{{old('password_again')}}" class="form-control text-center" 
                                               onchange="checkMatchPassword()" placeholder="ادخل  كلمة المرور مجددا">
                                    <!-- </div> -->
                                </div>    

                                <span id="password-error" class="hidden"></span>

                                <button type="submit" class="submit mb-3 mt-4" style="">إنشاء حساب
                                    جديد
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-6  d-none d-lg-block">
                <img class="img-fluid rounded mb-5 mb-lg-0" style="height: 100%; width: 100%; align-items: center;"
                    src="{{asset('img/visitorlogin.png')}}" alt="">
            </div>

        </div>
    </div>
    <!-- </div> -->


    <!-- START FOOTER -->
    <script src="/assets/js/success_msg.js"></script>
    <script src="{{asset('assets/js/cdn.jsdelivr.net_npm_bootstrap@5.3.1_dist_js_bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/all.min.js')}}"></script>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- هذم سكربت متع البوتس تراب -->
    <footer class="footer d-none d-lg-block text-white py-0">
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