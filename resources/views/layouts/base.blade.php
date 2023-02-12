<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/admin/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/addproducts.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/addemployee.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/customermanagment.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/services.css')}}">
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body style="">
    <header>
        <div class="logo-name">
            <div class="logo-image">
                <!--<img src="images/logo.png" alt="">-->
            </div>

            <span class="logo_name">
                <a href="{{route('admin.dashboard')}}"><img src="{{asset('imgs/logo_blue.png')}}" width="140px" style="margin-top:10px"></a>
            </span>
        </div> 
        <style>
            
        </style>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="{{route('admin.employee')}}">
                    <i class="bi bi-person-fill "  <?= $_SERVER['REQUEST_URI']==='/admin/EmpolyeeRegistration' ?  'style="color:rgb(98, 177, 241);font-size:40px"' :  'style="color:gray;font-size:40px"'; ?>></i>
                    <span class="link-name" <?= $_SERVER['REQUEST_URI']==='/admin/EmpolyeeRegistration' ?  'style="color:rgb(98, 177, 241);font-size:14px"' :  'style="color:gray;font-size:14px;display:inline-block;margin-left:10px"'; ?>>Employee Registration</span>
                </a></li>
                <li><a href="{{route('admin.products')}}">
                <i class="bi bi-bag-fill "  <?= $_SERVER['REQUEST_URI']==='/admin/Products' ?  'style="color:rgb(98, 177, 241);font-size:40px"' :  'style="color:gray;font-size:40px"'; ?>></i>
                    <span class="link-name" <?= $_SERVER['REQUEST_URI']==='/admin/Products' ?  'style="color:rgb(98, 177, 241);font-size:14px"' :  'style="color:gray;font-size:14px;display:inline-block;margin-left:10px"'; ?>>Inventory Management</span>
                </a></li>
                <li><a href="{{route('admin.invoice.res.systeme')}}">
                <i class="bi bi-calendar2-event-fill "  <?= $_SERVER['REQUEST_URI']==='/admin/InvoiceSystemReel' ?  'style="color:rgb(98, 177, 241);font-size:40px"' :  'style="color:gray;font-size:40px"'; ?>></i>
                    <span class="link-name" <?= $_SERVER['REQUEST_URI']==='/admin/InvoiceSystemReel' ?  'style="color:rgb(98, 177, 241);font-size:14px"' :  'style="color:gray;font-size:14px;display:inline-block;margin-left:10px"'; ?>>Invoice System</span>
                </a></li>
                <li><a href="{{route('admin.customer.management')}}">
                <i class="bi bi-people-fill"  <?= $_SERVER['REQUEST_URI']==='/admin/CustomerManagementSysteme' ?  'style="color:rgb(98, 177, 241);font-size:40px"' :  'style="color:gray;font-size:40px"'; ?>></i>
                    <span class="link-name" <?= $_SERVER['REQUEST_URI']==='/admin/CustomerManagementSysteme' ?  'style="color:rgb(98, 177, 241);font-size:14px"' :  'style="color:gray;font-size:14px;display:inline-block;margin-left:10px"'; ?>>customer management system</span>
                </a></li>
                <li><a href="{{route('admin.services')}}">
                <i class="bx bx-git-repo-forked"  <?= $_SERVER['REQUEST_URI']==='/admin/Services' ?  'style="color:rgb(98, 177, 241);font-size:40px"' :  'style="color:gray;font-size:40px"'; ?>></i>
                    <span class="link-name" <?= $_SERVER['REQUEST_URI']==='/admin/Services' ?  'style="color:rgb(98, 177, 241);font-size:14px"' :  'style="color:gray;font-size:14px;display:inline-block;margin-left:10px"'; ?>>Services</span>
                </a></li>
                
            </ul>
            
            <ul class="logout-mode">
                <li style="display:flex; align-items:center;">
                    <a>
                    
                    <span class="link-name">
                        <a href="{{route('logout')}}"
                        onclick="event.preventDefault();
			            document.getElementById('logout-form-admin').submit()"

                        ><span style="display:flex">
                            <i class="uil uil-signout" style="font-size:23px"></i>
                            <span class="log__admin">Logout</span>
                        </span></a>
                        <form id='logout-form-admin' method="POST" action='{{route("logout")}}'>
                            @csrf 
                        </form>
                    </span>
                    </a>
                </li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </header>

    <section class="dashboard" style="background-color:rgb(245, 243, 243)">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
            <!--<img src="images/profile.jpg" alt="">-->
        </div>
        {{$slot}}
        </section>

    <!--<script src="script.js"></script>-->
</body>
<script>
    
</script>
<script src="{{asset('js/admin/main.js')}}"></script>
<script src="{{asset('js/admin/managementcustomer.js')}}"></script>
<script src="{{asset('js/admin/services.js')}}"></script>
@livewireScripts
</html>



