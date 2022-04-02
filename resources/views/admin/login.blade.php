
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <title>Halaman Login | Sofosrobotics</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/vendors/icofont.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/vendors/themify.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/vendors/flag-icon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/vendors/feather-icon.css')}}">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/vendors/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{ asset('assets/admin/css/color-1.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/responsive.css')}}">
</head>

<body>
    <!-- login page start-->
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0">
    <div class="login-card">
        <div>
            <div>
                <a class="logo" href="#">
                    
                </a>
            </div>
            <div class="login-main">
                <form action="{{ url("#")}}login-gone" method="post" class="theme-form">
                    <input type="hidden" name="_token" value="sxj9BwTpFVuYAAEDxtmulBRcfa0cepIL8wFz5yBI">                    <h4>Halaman Login</h4>
                    <p>Dibutuhkan Username dan Password untuk akses ke dalam Sistem.</p>
                    <div class="form-group">
                        <label class="col-form-label">Username</label>
                        <input type="text" id="i-username" class="form-control" name="username" placeholder="Masukkan Username" required="" autofocus>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Password</label>
                        <div class="form-input position-relative">
                            <input type="password" id="i-password" class="form-control" name="password" required="" placeholder="*********">
                            <div class="show-hide"><span class="show"> </span></div>
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        
                        <div class="text-end mt-3">
                            <button type="submit" class="btn btn-primary btn-block w-100">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
        </div>
        <!-- latest jquery-->
        <script src="{{ asset('assets/admin/js/jquery-3.5.1.min.js')}}"></script>
        <!-- Bootstrap js-->
        <script src="{{ asset('assets/admin/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
        <!-- feather icon js-->
        <script src="{{ asset('assets/admin/js/icons/feather-icon/feather.min.js')}}"></script>
        <script src="{{ asset('assets/admin/js/icons/feather-icon/feather-icon.js')}}"></script>
        <!-- scrollbar js-->
        <!-- Sidebar jquery-->
        <script src="{{ asset('assets/admin/js/config.js')}}"></script>
        <!-- Plugins JS start-->
        <!-- Plugins JS Ends-->
        <!-- Theme js-->
        <script src="{{ asset('assets/admin/js/script.js')}}"></script>
        <!-- login js-->
        <!-- Plugin used-->
    </div>
</body>

</html>