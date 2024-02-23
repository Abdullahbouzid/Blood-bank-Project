<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مصرف الدم</title>

    <link rel="icon" href="../../imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet"
        href="{{asset('assets/css/cdn.jsdelivr.net_npm_bootstrap@5.3.1_dist_css_bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css.map')}}">
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/login_empadmin.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/content.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/footer.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

</head>

<body>

    <div class="container" style="direction: rtl; ">
        <!-- start of posting-->
        <div class="row pt-5">
            <div class="col-sm-6">
                <div class="bg-white pt-4 p-5 my-5"
                    style=" box-shadow: -1px 4px 1px -1px #616263;border-radius: 20px; color: #616263;">

                    <div class="contianer" style="display: flex; justify-content: center;">
                        <img src="{{asset('img/blood bank.png')}}" alt="Logo" height="130px">

                    </div>

                    <div class="container">
                        <form method="POST" action="login">
                                @csrf
                            <div class="form-group pt-4">

                                <label class="text" for="">البريد الالكتروني</label>
                                <input type="Email_Emp" id="" name="Email_Emp" required class="form-control text-center mt-1"
                                    placeholder="user@email.com">

                                <label class="text pt-3" for="">كلمة المرور</label>
                                <input type="text" id="password_Emp" name="password_Emp" required
                                    class="form-control text-center mt-1 mb-1" placeholder="ادخل  كلمة السر">

                            </div>

                            <br>

                            <div class="form-group">

                                <!-- <button type="submit" class="submit" >تسجيل الدخول</button> -->
                                <button type="submit" class="submit"><a href=""
                                        style=" color: white; font-size: 18px; font-weight: bold;">تسجيل
                                        الدخول</a></button>

                            </div>

                    </div>

                    </form>
                </div>
            </div>
        </div>

    </div>

</body>

</html>