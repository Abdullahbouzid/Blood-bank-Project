<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حسابي</title>

    <link rel="icon" href="../../imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/css/bondi.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet"
        href="{{asset('assets/css/cdn.jsdelivr.net_npm_bootstrap@5.3.1_dist_css_bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css.map')}}">
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/myaccount.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/content.css')}}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

</head>

<body>

    <!-- الصف الذي يجمع بين نص الطلب بالدم و باقي الصفحة -->
    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col-12 nameService position-relative">
                الملف الشخصي
            </div>
            <div class="col-lg-9 col-md-12 dataVisitor mb-5 mt-4">
                <div class="row">
                    <label style=" padding-bottom: 5px; padding-top: 5px;" for="">
                        الرجاء ملئ بياناتك الشخصية
                    </label>
                </div>

                <div class="row mt-4">

                    <!-- <form action="/blood-donation" method="post" onsubmit="return checkDataDonation()"> -->
                    <form action="" method="" onsubmit="">
                        @csrf

                        <div class="form-group">
                            <label class="text exception" for="">البريد الالكتروني</label>
                            <input type="Email" id="Email_Visitor" name="Email_Visitor" class="form-control">

                            <label class="text exception" for="" style=" display: flex; align-items: center;">الاسم
                                الثلاثي</label>
                            <input type="text" id="Name_Visitor" name="Name_Visitor" class="form-control">

                        </div>

                        <div class="form-group pt-2">
                            <label class="date exception" for="">تاريخ الميلاد</label>
                            <input type="date" id="DOB_Visitor" name="DOB_Visitor" class="form-control exception"
                                style="cursor: pointer;">

                            <label class="text exception" for="">عنوان السكن</label>
                            <input type="text" id="Adds_Visitor" name="Adds_Visitor" class="form-control exception">

                        </div>

                        <div class="form-group pt-2">
                            <label class="text exception" for="">رقم الهاتف</label>
                            <input type="text" id="Ph_Visitor" name="Ph_Visitor" class="form-control exception">

                            <label class="text exception" for="">نوع الفصيلة</label>
                            <select name="TOB_Visitor" id="TOB_Visitor" class="form-control"
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
                        <div class="form-group pt-2">
                            <label class="text exception" for="">الجنس</label>
                            <select name="Gender_Visitor" id="Gender_Visitor" class="form-control exception"
                                style="text-align: center; display: flex; align-items: center; width:99%; margin-left: 50%;">
                                <option value="">--</option>
                                <option value="Male">ذكر</option>
                                <option value="Female">انثى</option>
                            </select>

                        </div>

                        <button type="submit" class="submit mt-5 mb-3">
                            <a href="home" style="color:white; text-decoration: none;">حفـــظ البيانات</a>
                        </button>

                        <!-- <button type="submit" class="submit mt-5 mb-3">حفـــظ البيانات</button> -->
                    </form>
                </div>

            </div>

            <!-- العمود الخاص ب الصورة -->
            <div class="col-lg-3 d-none d-lg-block">
                <img src="{{asset('img/default_avatar_profile_icon_isolated_on_white_background_social.png')}}" alt=""
                    style="height: 300px;">
            </div>
        </div>
    </div>
</body>

</html>