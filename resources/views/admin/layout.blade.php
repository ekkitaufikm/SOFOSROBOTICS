
<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/font-awesome.css')}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/vendors/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/vendors/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/vendors/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/vendors/feather-icon.css')}}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/vendors/scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/vendors/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/vendors/select2.css')}}">
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
    
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-header">
            <div class="header-wrapper row m-0">
                <div class="header-logo-wrapper col-auto p-0">
                    <div class="logo-wrapper">
                        <a href="#">
                            <img class="img-fluid" src="{{ asset('assets/admin/images/logo/resiq_logo_1.png')}}" alt="">
                        </a>
                    </div>
                    <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
                </div>
                <div class="left-header col horizontal-wrapper ps-0">
                    <ul class="horizontal-menu">
                        
                    </ul>
                </div>
                <div class="nav-right col-8 pull-right right-header p-0">
                    <ul class="nav-menus">
                        
                        <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
                        <li class="profile-nav onhover-dropdown p-0 me-0">
                            <div class="media profile-media"><img class="b-r-10" src="{{ asset('assets/admin/images/dashboard/profile.jpg')}}" alt="">
                                <div class="media-body"><span>Emay Walter</span>
                                    <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div">
                                <li><a href="#"><i data-feather="user"></i><span>Account </span></a></li>
                                <li><a href="#"><i data-feather="mail"></i><span>Inbox</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span>Taskboard</span></a></li>
                                <li><a href="#"><i data-feather="settings"></i><span>Settings</span></a></li>
                                <li><a href="#"><i data-feather="log-out"> </i><span>Logout</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Page Header Ends                              -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper">
                <div>
                    <div class="logo-wrapper">
                        <a href="{{ url('dashboard')}}">
                            <h4>Sofosrobotics</h4>
                        </a>
                        <div class="back-btn">
                            <i class="fa fa-angle-left"></i>
                        </div>
                        <div class="toggle-sidebar">
                            <i class="status_toggle middle sidebar-toggle" data-feather="grid"></i>
                        </div>
                    </div>
                    <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="{{ asset('assets/admin/images/logo/logo-icon.png')}}" alt=""></a></div>
                    <nav class="sidebar-main">
                        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                        <div id="sidebar-menu">
                            <ul class="sidebar-links pb-5" id="simple-bar">
                                <li class="back-btn"><a href="index.html"><img class="img-fluid" src="{{ asset('assets/admin/images/logo/logo-icon.png')}}" alt=""></a>
                                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6>Master Model</h6>
                                    </div>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="{{ url('dashboard')}}">
                                        <i data-feather="git-pull-request"> </i> <span>Dashboard</span>
                                    </a>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="{{ url('users')}}">
                                        <i data-feather="git-pull-request"> </i> <span>User</span>
                                    </a>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="{{ url('role')}}">
                                        <i data-feather="git-pull-request"> </i> <span>Role</span>
                                    </a>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6>Master Content</h6>
                                    </div>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="{{ url('application')}}">
                                        <i data-feather="git-pull-request"> </i> <span>Application</span>
                                    </a>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="{{ url('resources')}}">
                                        <i data-feather="git-pull-request"> </i> <span>Resources</span>
                                    </a>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="{{ url('model')}}">
                                        <i data-feather="git-pull-request"> </i> <span>Model Robot</span>
                                    </a>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="{{ url('faq')}}">
                                        <i data-feather="git-pull-request"> </i> <span>FAQ</span>
                                    </a>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="{{ url('part')}}">
                                        <i data-feather="git-pull-request"> </i> <span>Custom Part</span>
                                    </a>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6>Akun</h6>
                                    </div>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="{{ url('#')}}">
                                        <i data-feather="git-pull-request"> </i> <span>Logout</span>
                                    </a>
                                </li>
                            </ul>                        
                        </div>
                        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                    </nav>
                </div>
            </div>
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                @yield('content')
            </div>
            <!-- Container-fluid Ends-->
            
            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 footer-copyright text-center">
                            <p class="mb-0">Copyright 2022 © Sofosrobotics by FT UDINUS </p>
                        </div>
                    </div>
                </div>
            </footer>
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
    <script src="{{ asset('assets/admin/js/scrollbar/simplebar.js')}}"></script>
    <script src="{{ asset('assets/admin/js/scrollbar/custom.js')}}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('assets/admin/js/config.js')}}"></script>
    <!-- Plugins JS start-->
    <script src="{{ asset('assets/admin/js/sidebar-menu.js')}}"></script>
    <script src="{{ asset('assets/admin/js/chart/knob/knob.min.js')}}"></script>
    <script src="{{ asset('assets/admin/js/chart/knob/knob-chart.js')}}"></script>
    <script src="{{ asset('assets/admin/js/typeahead/handlebars.js')}}"></script>
    <script src="{{ asset('assets/admin/js/typeahead/typeahead.bundle.js')}}"></script>
    <script src="{{ asset('assets/admin/js/typeahead/typeahead.custom.js')}}"></script>
    <script src="{{ asset('assets/admin/js/typeahead-search/handlebars.js')}}"></script>
    
    <script src="{{ asset('assets/admin/js/select2/select2.full.min.js')}}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ asset('assets/admin/js/script.js')}}"></script>
    
    <script>
$(function() {
    $('.type-form').hide();
    $('#select-idQSTipe').on('change', function() {
        if (this.value == '' || this.value == null) {
            $('.type-form').hide();
        }
        
        if (this.value == 1) {
            $('.type-form').show();
            $('#type-form-2').hide();
            // $('#type-form-1').show();
        }
        
        if (this.value == 2) {
            $('.type-form').show();
            $('#type-form-1').hide();
            $('#type-form-2').show();
        }
    });

    $('#select-piljaw').select2({
        tags: true,
    });
});
</script>
    <!-- Plugin used-->
</body>

</html>