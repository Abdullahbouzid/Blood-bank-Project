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
                <div class="bg-white p-4 pb-0 " style="border-radius: 20px; color: #616263; margin-top:9%;">

                    <div class="container">

                        <img src="{{asset('img/blood bank.png')}}" alt="Logo" height="100px"
                            style="padding-right: 39%;">


                        <br>
                        <form action="/CreateAccount" method="post" onsubmit="return checkData_CreateVisitor()">
                            @csrf

                            <div class="form-group">

                                <!-- <span id="message" class="hidden"></span> -->

                                <!-- <label class="text mb-1" style="display:block;" for="">الاسم الثلاثي</label> -->
                                <label class="text mb-1" for="">الاسم الثلاثي</label>
                                <input type="username" id="username" name="Username" class="form-control text-center"
                                    placeholder="اكتب اسمك الثلاثي">

                                <label class="text mb-1 mt-3" for="">البريد الالكتروني</label>
                                <input type="email" id="email" name="Email" class="form-control text-center"
                                    placeholder="user@email.com">

                                <label class="text mb-1 mt-3" for="">كلمة المرور</label>
                                <input type="password" id="password" name="Password" class="form-control text-center"
                                    placeholder="ادخل  كلمة المرور">

                                <label class="text mb-1 mt-3" for="">تاكيد كلمة المرور</label>
                                <input type="password" id="password_again" name="visitorpassword"
                                    class="form-control text-center" onchange="checkMatch()"
                                    placeholder="ادخل  كلمة المرور مجددا">

                                <span id="error-message" class="hidden"></span>

                                <label class="date mb-1 mt-3" style="display: block" for="">تاريخ الميلاد</label>
                                <input type="date" id="DOB_Visitor" name="DOB_Visitor" class="form-control date"
                                    style="">

                                <button type="submit" class="submit mb-3" style="">إنشاء حساب
                                    جديد</button>
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