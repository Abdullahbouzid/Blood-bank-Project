<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css.map')}}">
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="{{asset('assets/css/bondi.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/dataTables.bootstrap5.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    
<style>

  .container-fluid a{
    color: white;
    text-decoration: none;
    }
</style>
    <title>Dashboard</title>
      </head>
      <body style="direction: rtl ; ">
          <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid mr-2">
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"aria-controls="offcanvasExample">
            <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
          </button>
          {{-- <h2 style="color: white  "  >Blood Bank</h2> --}}
          <img src="{{asset('img/blood bank white (1).png')}}" alt="Logo" height="60px" style="margin-right: 100px">

       

      
        </div>
      </nav>
      <!-- top navigation bar -->
      <!-- offcanvas -->
      <div
        class="offcanvas offcanvas-end sidebar-nav bg-dark" tabindex="-1" id="sidebar" >
        <div class="offcanvas-body p-0">
          <nav class="navbar-dark">
          
            <ul class="navbar-nav">
              
              <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            
              <li>
                <div >
                <a href="dashboard" class="nav-link px-3 active">
                  <span class="me-2"><i class="bi bi-speedometer2" style="color: white;"></i></span>
                  <span style="color: white;" >Dashboard</span>
                </a></div>
              </li>
              <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
                <li>
                  <a href="admincontrol" class="nav-link px-3">
                    <span class="me-2"><i class="bi bi-person px-3" style="color: white;"></i></span>
                    <span  style="color: white;">المسؤولين</span>
                  </a>
                </li>
                <li class="  bg-primary " > 
                  <a href="empcontrol" class="nav-link px-3">
                    <span class="me-2"><i class="bi bi-people px-3" style="color: white;"></i></span>
                    <span  style="color: white;">الموظفين</span>
                  </a>
                </li>
                <li>
                  <a href="visitcontrol" class="nav-link px-3">
                    <span class="me-2"><i class="bi bi-person-circle px-3" style="color: white;"></i></span>
                    <span  style="color: white;">المستخدمين</span>
                  </a>
                </li>
                <a  class="nav-link px-3 sidebar-link" data-bs-toggle="collapse"  href="#layouts">
                  <span class="me-2"><i class="bi bi-geo-alt-fill px-3"  style="color: white;"></i></span>
                  <span  style="color: white;">مواقع التبرع</span>
                  <span class="ms-auto">
                    <span class="right-icon px-3">
                      <i class="bi bi-chevron-down"></i>
                    </span>
                  </span>
                </a>
                <div class="collapse" id="layouts">
                  <ul class="navbar-nav ps-3">
                    <li>
                      <a href="bankcontrol" class="nav-link px-3">
                        <span class="me-2"><i class="bi bi-geo-alt-fill "  style="color: white;"></i></span>
                        <span  style="color: white;">مصرف الدم</span>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="collapse" id="layouts">
                  <ul class="navbar-nav ps-3">
                    <li>
                      <a href="centercontrol" class="nav-link px-3">
                        <span class="me-2"
                          ><i class="bi bi-geo-alt-fill "  style="color: white;"></i></span>
                        <span  style="color: white;">مراكز تبرع</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <a href="requestcontrol" class="nav-link px-3">
                  <span class="me-2"><i class="bi bi-droplet px-3"  style="color: white;"> </i></span>
                  <span  style="color: white;">طلبات طلب دم</span>
                </a>
              </li>
              <li>
                <a href="donationcontrol" class="nav-link px-3">
                  <span class="me-2"><i class="bi bi-droplet-half px-3" style="color: white;"></i></span>
                  <span style="color: white;">طلبات تبرع بالدم</span>
                </a>
              </li>
              <li>
                <a href="blood_storage" class="nav-link px-3">
                  <span class="me-2"><i class="bi bi-moisture px-3"style="color: white;"></i></span>
                  <span style="color: white;">مخزون فصائل الدم</span>
                </a>
              </li>
            
            
            </ul>
          </nav>
        </div>
        <span style="color: white; padding-right: 30%;">{{$_COOKIE["Type"]}}: {{$_COOKIE["User"]}}</span>
        <a href="login_admin" style="color: white; padding-right: 30%; text-decoration: none;">تسجيل الخروج</a>


      </div>
      <!-- offcanvas -->
      <main class="mt-5 pt-5" >
        <div class="container-fluid">
        <br>
        <h3 style="text-align: center">لإضافة الموظف يجب تعبئة البيانات الاتية</h3>
        <br>
 
        <div class="row">

          <div class="col-lg-1 col-md-1 ">
          </div>
          <div class="col-lg-10 col-md-12 col-sm-12">
            <div class="col-lg-10 col-md-12 col-sm-12">
              <form action="/empcontrol" method="post" onsubmit="return checkDataEmp()">
                   @csrf
               <div class="row">
                
            
             <div class="col-lg-6 col-md-10 col-sm-12 mt-3">
               <input type="text" class="form-control" name="Name" id="Name" placeholder="اسم الموظف" aria-label="Last name">
               @error('Name')
                     <span style="color: red; display:block;">
                          {{$message}}
                  </span> 
                    @enderror
             </div>
             <div class="col-lg-6 col-md-10 col-sm-12 mt-3">
               <input type="text" class="form-control" name="Addrees" id="Addrees"  placeholder="العنوان" aria-label="Last name">
             </div>
           
             <div class="col-lg-6 col-md-10 col-sm-12 mt-3">
              <input type="email" class="form-control" name="Email" id="Email" placeholder="البريد الالكتروني" aria-label="Last name">
            </div> 
            <div class="col-lg-6 col-md-10 col-sm-12 mt-3">
              <input type="password" class="form-control" name="Password" id = "Password" placeholder="كلمة السر" aria-label="Last name">
            </div> 
            <div class="col-lg-6 col-md-10 col-sm-12 mt-3">   
              <select class="form-control" id="Gander" name="Gander">
                <option > الجنس</option>
                    <option > ذكر</option>
                    <option >انثي </option>
          
            </select> 
          </div>
          <div class="col-lg-6 col-md-10 col-sm-12 mt-3">
            <input type="date" class="form-control" name="DoB" id= "DoB" placeholder="تاريخ الميلاد" aria-label="Last name">
          </div> 
          <div class="col-lg-6 col-md-10 col-sm-12 mt-3">
            <input type="number" class="form-control" name="Phone" id = "Phone" placeholder="رقم الهاتف" aria-label="Last name">
          </div> 
             
             
             <div class="col-lg-6 col-md-10 col-sm-12 mt-3">   
              <select class="form-control" id="Bank_id"  name="Bank_id" >
              
               <option value="">مصرف الدم التابع لها</option>
                 @foreach ($banks as $bank)
                    <option value="{{ $bank->id }}">{{ $bank->Addrees }}</option>
                @endforeach
          
            </select> 
          </div>
           <div class="mt-3">
            <button type="submit" class="btn btn-primary " > إضافة</button>
           </div>
               </div>
           </form>
           </div>

           

          </div>
          <div class="col-lg-1 col-md-1 ">
          </div>

          
         
           
           
         
        </div>

       
          <div class="row mt-5">
            <div class="col-md-12 mb-3">
              <div class="card">
                <div class="card-header">
                  <span><i class="bi bi-table me-2"></i></span> بيانات الموظفين
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="example" class="table table-striped data-table" style="width: 100%">
                      {{-- <form action="{{ route('employees.delete', $ShowEmp->id) }}" method="POST">
                        @csrf
                        @method('DELETE') --}}
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>الاسم</th>
                          <th>تاريخ الميلاد</th>
                   
                          <th>عنوان</th>
                          <th>رقم الهاتف</th>
                          <th>الجنس</th>
                          <th>الايميل </th>
                         

                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($ShowEmps as $ShowEmp)
                        <tr>
                          <td>{{ $ShowEmp->id }}</td>
                          <td>{{ $ShowEmp->Name }}</td>
                          <td>{{ $ShowEmp->DoB }}</td>
                          
                          <td>{{ $ShowEmp->Addrees }}</td>
                          <td>{{ $ShowEmp->Phone }}</td>
                          <td>{{ $ShowEmp->Gander }}</td>
                          <td>{{ $ShowEmp->Email }}</td>
                       
                         {{-- <td>{{ $ShowEmp->bank->Name }}</td> --}}
                        

                          <td> <button type="button" class="btn btn-primary">تعديل</button></td>
                          <td>
                          <form action="{{ route('empcontrol.destroy', $ShowEmp->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">حذف</button>
                        </form>
                          </td>
                        </tr>
                        @endforeach 
                      </tbody>
                      {{-- </form> --}}
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </main>

      <script src="/assets/js/success_msg.js"></script>

        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.bundle.min.map.js')}}"></script>        
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
        <script src="{{asset('assets/js/jquery-3.5.1.js')}}"></script>
        <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/js/dataTables.bootstrap5.min.js')}}"></script>
        <script src="{{asset('assets//js/script.js')}}"></script>

        <script>
       

          document.querySelectorAll('.btn-danger').forEach(button => {
           button.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default form submission

                if (confirm('هل أنت متأكد من حذف هذا الموظف؟')) {
               this.form.submit(); // Submit the form manually
                         }
                });
            });

        </script>

        


      </body>
    </html>
    