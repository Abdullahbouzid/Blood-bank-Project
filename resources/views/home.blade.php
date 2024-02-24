<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>الرئيسية</title>
  <link rel="icon" href="../../imgs/favicon.ico" type="image/x-icon">

  <link rel="stylesheet" href="{{asset('assets/css/bondi.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/navbar_home.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/home.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/footer.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/cdn.jsdelivr.net_npm_bootstrap@5.3.1_dist_css_bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css.map')}}">
  <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;400;500;600;700;800;900&display=swap"
    rel="stylesheet">


</head>

<body>

  <!-- START NAVBAR -->

  <nav class="navbar navbar-expand-lg navbar-expand-md ">
    <div class="container">

      <img src="{{asset('img/blood bank white (1).png')}}" alt="Logo" height="78px">


      <!-- بوتن وظيفتها الظهور عندما يتم تصغير الشاشة  -->

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="barmeun fa-solid fa-bars"></i>
      </button>

      <!-- ---?--- -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mb-0 mb-lg-0 fw-bolder ms-auto ">
          <li class="nav-item">
            <a class="nav-link fs-5 pt-1 " href="home" style="color: red;  opacity: 0.8;">الرئيسية</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5 pt-1 " href="blood_donation">طلب التبرع بالدم</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5 pt-1 " href="Blood_Request">طلب دم</a>
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
          <li class="nav-item" style="margin-right:200px">
            <img src="{{asset('img/icons8-user-50.png')}}" alt="">
            <a class="nav-link fs-5 pt-1" href="myaccount">حسابي</a>
          </li>

        </ul>

      </div>
  </nav>

  <!-- END NAVBAR -->

  <!-- START SECTION -->
  <!--من هنا تقدر تمسح لانه هذا تبع المحتوي الصفحه-->
  <div class="container">

    <!-- start of posting-->
    <div class="row align-items-center">

      <div class="col-lg-12">

        <h1 class="nameOfProjact fs-1 fw-bolder " style="font-size: 60px; text-align: center;">
          قال الله تعالى : { ومن أحياها فكأنما أحيا الناس جميعا }
          <span style="display: block;"> ففي التبرع بالدم إنقاذ لحياة مريض أو جريح فانظر أخي إلى هذا الثواب
            العظيم</span>
        </h1>

      </div>

    </div>

    <!-- END SECTION -->

    <!-- START FOOTER -->

    <script src="{{asset('assets/js/cdn.jsdelivr.net_npm_bootstrap@5.3.1_dist_js_bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/all.min.js')}}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- هذم سكربت متع البوتس تراب -->
    <footer class="footer text-white py-0 d-md-block">
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