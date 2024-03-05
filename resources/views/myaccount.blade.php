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
    <div class="container text-center ">
        <div class="row justify-content-center ">
            <!-- <div class="col-12 nameService position-relative">
                الملف الشخصي
            </div> -->
            <div class="row pt-0 pb-0 justify-content-center">
                    <img src="{{asset('img/default_avatar_profile_icon_isolated_on_white_background_social.png')}}" alt=""
                         style="height: 150px; width:200px">
            </div>
            <div class="col-lg-6 col-md-12 dataVisitor p-3 mb-0 mt-0">

                    <!-- <form action="/blood-donation" method="post" onsubmit="return checkDataDonation()"> -->
                    <form action="" method="" onsubmit="">
                        @csrf

                        <div class="form-group" style = "">
                            <label class="text mb-1" for="" style = "display: block;">الاسم الثلاثي</label>
                            <input type="username" id="username" name="Name" value = "{{$_COOKIE["User"]}}"
                                       class="form-control text-center" placeholder="اكتب اسمك الثلاثي">
                        </div>

                                 <div class="row mt-0 ">
                                    <!-- <div class="form-group" style = "">
                                        <label class="text mb-1" for="" style = "display: block;">البريد الالكتروني</label>
                                        <input type="email" id="email" name="Email" value="{{old('Email')}}"
                                               class="form-control text-center" style = "display: inline;" placeholder="user@email.com"> 
                                    </div> -->
                                    <div class="form-group" style = "">
                                        <label class="text mb-1 mt-0" for="" style = "">تاريخ الميلاد</label>
                                        <input type="date" id="DOB_Visitor" value = "{{$_COOKIE["DoB"]}}" name="DoB" class="form-control"
                                               style="cursor: pointer;">
                                    </div>
                                    <div class="form-group" style = "">
                                        <label class="text mb-1 mt-0" for="">عنوان السكن</label>
                                        <input type="text" id="Adds_Visitor" value = "{{$_COOKIE["Adds"]}}" name="Addrees" class="form-control">
                                    </div>
                                 
                                    <div class="form-group" style = "">
                                        <label class="text mb-1 mt-0" for="">رقم الهاتف</label>
                                        <input type="text" id="Ph_Visitor" value = "{{$_COOKIE["phone"]}}"  name="Phone" class="form-control">
                                    </div>
                                    <div class="form-group" style = "">
                                        <label class="text mb-1 mt-0" for="">نوع الفصيلة</label>
                                        <select name="Typeofblood" id="TOB_Visitor" class="form-control"
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
                                    </div>
                                    <div class="form-group" style = "">
                                        <label class="text mb-1 mt-0" for="">الجنس</label>
                                        <select name="Gander" id="Gender_Visitor" class="form-control"
                                                style="text-align: center; display: flex; align-items: center; width:99%; margin-left: 50%;">
                                            <option value="ذكر" {{$_COOKIE["Gander"] === "ذكر" ? "selected" : "--"}}>ذكر</option>
                                            <option value="انثى" {{$_COOKIE["Gander"] === "انثى" ? "selected" : "--"}}>انثى</option>
                                        </select>
                                </div> 
                                <div class="form-group">
                                        <label class="text mb-1 mt-0" for="">كلمة المرور الحالية</label>
                                        <input type="password" id="password" name="Password" value="{{old('Password')}}"
                                               class="form-control text-center" placeholder="ادخل  كلمة المرور">
                                </div>
                                <div class="form-group">
                                        <label class="text mb-1 mt-0" for="">كلمة المرور الجديدة</label>
                                        <input type="password" id="password" name="Password" value="{{old('Password')}}"
                                               class="form-control text-center" placeholder="ادخل  كلمة المرور">
                                </div>

                        <button type="submit" class="submit mt-4 mb-0">
                            <a href="home" style="color:white; text-decoration: none;">حفـــظ البيانات</a>
                        </button>

                        <!-- <button type="submit" class="submit mt-5 mb-3">حفـــظ البيانات</button> -->
                    </form>
                </div>

            </div>

            <!-- العمود الخاص ب الصورة -->
            <!-- <div class="col-lg-6 d-none d-lg-block">
                <img src="{{asset('img/default_avatar_profile_icon_isolated_on_white_background_social.png')}}" alt=""
                    style="height: 300px;">
            </div> -->
        </div>
    </div>
</body>

</html>