<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Niğtaş Maliyet | Üye </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?=base_url()?>uploads/12.png">

    <!-- Bootstrap Css -->
    <link href="<?=base_url()?>assets/admin/css/bootstrap.min.css" id="bootstrap-stylesheet" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?=base_url()?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?=base_url()?>assets/admin/css/app.min.css" id="app-stylesheet" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?=base_url()?>/uploads/12.png">

    <!-- Bootstrap Css -->
    <link href="<?=base_url()?>assets/admin/css/bootstrap.min.css" id="bootstrap-stylesheet" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?=base_url()?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?=base_url()?>assets/admin/css/app.min.css" id="app-stylesheet" rel="stylesheet" type="text/css" />

    <link href="<?=base_url()?>assets/admin/libs/rwd-table/rwd-table.min.css" rel="stylesheet" type="text/css" />

    <script src="<?=base_url()?>assets/admin/libs/rwd-table/rwd-table.min.js"></script>
    <script src="<?=base_url()?>assets/admin/js/son_kalinan_yer.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            if (localStorage.getItem("my_app_name_here-quote-scroll") != null) {
                $(window).scrollTop(localStorage.getItem("my_app_name_here-quote-scroll"));
            }

            $(window).on("scroll", function() {
                localStorage.setItem("my_app_name_here-quote-scroll", $(window).scrollTop());
            });

        });

    </script>

    <!-- Init js -->
    <script src="<?=base_url()?>assets/admin/js/pages/responsive-table.init.js"></script>



    <script src="<?=base_url()?>assets/admin/js/pages/draggable.init.js"></script>
    <script src="<?=base_url()?>assets/admin/dragpage1.js"></script>
    <script src="<?=base_url()?>assets/admin/dragpage2.js"></script>
</head>

<body style="background-color:white;">
    <script>
        document.onkeydown = function(evt) {
            var keyCode = evt ? (evt.which ? evt.which : evt.keyCode) : event.keyCode;
            if (keyCode == 27) {
                //your function call here
                document.test.submit();

            }
        }

    </script>

    <?php 
if(isset($_POST['search']))
{
    echo $search = $_POST['search'];
}
?>
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">



                    <li class="dropdown notification-list">

                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0">
                                    <span class="float-right">
                                        <a href="<?=base_url()?>assets/css/bootstrap.min.css" class="text-dark">
                                            <small>Clear All</small>
                                        </a>
                                    </span>Notification
                                </h5>
                            </div>

                            <div class="slimscroll noti-scroll">


                            </div>

                            <!-- All-->
                            <a href="<?=base_url()?>javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                View all
                                <i class="fi-arrow-right"></i>
                            </a>

                        </div>
                    </li>
                    <li class="dropdown notification-list" style="margin-top:12px;margin-right:50px;">
                        <a href="<?=base_url()?>uye/gerceklesen/Raporlamalar/Raporal"> <button class="btn btn-success waves-effect  btn-icon waves-success"> <i class=" ti-plus"></i> Rapor Al</button></a>
                    </li>
                    <li class="dropdown notification-list" style="margin-top:12px;margin-right:50px;">
                        <a href="<?=base_url()?>uye/gerceklesen/Butunguncellemeler/Butunguncellemeler"> <button class="btn btn-lighten-success waves-effect  btn-icon waves-success"> <i class=" ti-reload"></i></button></a>
                    </li>
                    <li class="dropdown notification-list">
                        <a href="<?=base_url()?>uye/login/logout"> <button type="button" class="btn btn-lighten-danger waves-effect  width-md waves-danger" style="margin-top:12px;">Çıkış <i class="fe-log-out"></i></button></a>
                    </li>



                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="<?=base_url()?>index.html" class="logo logo-dark text-center">
                        <span class="logo-lg">
                            <img src="<?=base_url()?>assets/images/logo-dark.png" alt="" height="16">
                        </span>
                        <span class="logo-sm">
                            <img src="<?=base_url()?>assets/images/logo-sm.png" alt="" height="24">
                        </span>
                    </a>
                    <a href="index.html" class="logo logo-light text-center">
                        <span class="logo-lg">
                            <img src="<?=base_url()?>assets/images/logo-light.png" alt="" height="16">
                        </span>
                        <span class="logo-sm">
                            <img src="<?=base_url()?>assets/images/logo-sm.png" alt="" height="24">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left mb-0">
                    <li>
                        <button class="button-menu-mobile disable-btn waves-effect">
                            <i class="fe-menu"></i>
                        </button>
                    </li>

                    <li>
                        <h4 class="page-title-main"></h4>
                    </li>
                    <li>
                        <marquee width="300px;" direction="left" height="40px">
                            <h3 style="color:blue"><img src="<?=base_url()?>assets/admin/images/11.png" alt="" height="22" class="logo-dark mx-auto">HOŞGELDİNİZ</h3>

                        </marquee>
                    </li>

                </ul>
