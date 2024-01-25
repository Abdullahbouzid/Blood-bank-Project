<!DOCTYPE html> 
<html lang="en"> 
 
<head> 
  <meta charset="UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <title>طلب التبرع بالدم</title> 
 
  <link rel="stylesheet" href="{{asset('assets/css/bondi.css')}}"> 
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"> 
 
  <link rel="stylesheet" href="{{asset('assets/css/navbar.css')}}"> 
 
  <link rel="stylesheet" href="{{asset('assets/css/footer.css')}}"> 
  <link rel="stylesheet" href="{{asset('assets/css/cdn.jsdelivr.net_npm_bootstrap@5.3.1_dist_css_bootstrap.min.css')}}"> 
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css.map')}}"> 
  <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}"> 
  <link rel="stylesheet" href="{{asset('assets/css/blood_donation.css')}}"> 
  <link rel="stylesheet" href="{{asset('assets/css/content.css')}}"> 
 
  <link rel="preconnect" href="https://fonts.googleapis.com"> 
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;400;500;600;700;800;900&display=swap" 
    rel="stylesheet"> 
 
</head> 
 
<body> 
 
  <!-- START NAVBAR --> 
 
  <nav class="navbar navbar-expand-lg navbar-expand-md "> 
    <divfixed class="container"> 
 
      <!-- للرجوع الى القائمة الرئيسية --> 
 
      <img src="{{asset('img/blood bank white and black.png')}}" alt="Logo" height="78px"> 
 
 
 
      <!-- بوتن وظيفتها الظهور عندما يتم تصغير الشاشة  --> 
 
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
        <i class="barmeun fa-solid fa-bars"></i> 
      </button> 
 
      <!-- ---?--- --> 
      <div class="collapse navbar-collapse " id="navbarSupportedContent"> 
 
        <ul class="navbar-nav mb-0 mb-lg-0 fw-bolder ms-auto "> 
          <li class="nav-item"> 
            <a class="nav-link fs-5 pt-1 " href="home">الرئيسية</a> 
          </li> 
          <li class="nav-item" style="background-color: #fd563f;"> 
            <a class="nav-link fs-5 pt-1 " href="blood_donation">طلب التبرع بالدم</a> 
          </li> 
          <li class="nav-item"> 
            <a class="nav-link fs-5 pt-1 " href="patient">طلب دم</a> 
          </li> 
          <li class="nav-item"> 
            <a class="nav-link fs-5 pt-1 " href="#">مراكز التبرع</a> 
          </li> 
          <li class="nav-item"> 
            <a class="nav-link fs-5 pt-1 " href="#">حول</a> 
          </li> 
 
        </ul> 
 
      </div> 
 
  </nav> 
 
  <!-- END NAVBAR --> 
 
  <!-- START SECTION --> 
 
  <form action="" method=""> 
    <div class="container text-center "> 
 
      <!-- الصف الذي يجمع بين نص التبرع بالدم و باقي الصفحة --> 
      <div class="row align-items-center"> 
 
        <div class="col-12 nameService position-relative"> 
          التبرع بالدم 
        </div> 
 
      </div> 
 
      <!-- الصف الذي يجمع بين بيانات التبرع و صورة التبرع --> 
      <div class="row mt-4"> 
 
        <!-- العمود الخاص ب صورة التبرع --> 
        <div class="col-lg-3 d-none d-lg-block"> 
          <img src="{{asset('img/blood-donation.jpg')}}" alt="" style="height: 300px; padding-left: 8%;"> 
 
        </div> 
 
        <!-- العمود الخاص ب بيانات التبرع --> 
        <div class="col-lg-9 col-md-12 dataDonation mb-5"> 
 
          <div class="row"> 
            <label style=" padding-bottom: 5px; padding-top: 5px;" for=""> 
              الرجاء ملئ النموذج التالي 
            </label> 
          </div> 
 
          <div class="row mt-4"> 
 
            <div class="form-group"> 
              <label class="text exception" for="">الاسم الثلاثي</label> 
              <input type="text" id="" name="fullName" required class="form-control"> 
 
              <label class="date exception" for="">تاريخ الميلاد</label> 
              <input type="date" id="" name="DateOfBirth" required class="form-control exception" 
                style="cursor: pointer;">

                </div> 
 
            <div class="form-group pt-1"> 
 
              <label class="text exception" for="">عنوان السكن</label> 
              <input type="text" id="" name="address" required class="form-control exception"> 
 
              <label class="text exception" for="">رقم الهاتف</label> 
              <input type="text" id="" name="phone" required class="form-control exception"> 
 
            </div> 
 
            <div class="form-group pt-1 "> 
 
              <label class="text exception" for="">نوع الفصيلة</label> 
              <select name="typeBlood" id="" class="form-control" required style="text-align: center ;"> 
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
              <select name="typeBlood" id="" class="form-control exception" required style="text-align: center;"> 
                <option value="">--</option> 
                <option value="Male">ذكر</option> 
                <option value="Female">انثى</option> 
              </select> 
            </div> 
 
            <div class="form-group pt-1"> 
 
              <label class="date exception" for="">تاريخ التبرع</label> 
              <input type="date" id="" name="DateOfDonation" required class="form-control exception" 
                style="cursor: pointer;"> 
 
              <label class="text exception" for="">اسم المركز</label> 
              <select name="nameCenter" id="" class="form-control exception" required style="text-align: center;"> 
                <option value="">----اختر اسم المركز----</option> 
              </select> 
 
            </div> 
 
          </div> 
 
 
          <div class="row pt-3 pb-0"> 
            <span style="font-size: 16px; font-weight: bold;"> 
              ملاحظة : لا يمكن التبرع بالدم في حالة قيام المتبرع باجراء عملية حديثة و عدم تجاوز 6 شهور من اخر تبرع او 
              قيام بالحجامة الشرعية 
            </span> 
 
          </div> 
 
          <button type="submit" class="submit mt-4 mb-3">ارســـال</button> 
 
        </div> 
 
      </div> 
    </div> 
  </form> 
 
  <!-- END SECTION --> 
 
  <!-- START FOOTER --> 
 
  <script src="/assets/js/cdn.jsdelivr.net_npm_bootstrap@5.3.1_dist_js_bootstrap.bundle.min.js"></script> 
  <script src="/assets/js/all.min.js"></script> 
 
 
 
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