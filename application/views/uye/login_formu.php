<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Niğtaş | Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?=base_url()?>uploads/12.png">
        <link href="<?=base_url()?>assets/admin/js/sweet-alert.js"  type="text/javascript" />
        <!-- Bootstrap Css -->
        <link href="<?=base_url()?>assets/admin/css/bootstrap.min.css" id="bootstrap-stylesheet" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?=base_url()?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?=base_url()?>assets/admin/css/app.min.css" id="app-stylesheet" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="<?=base_url()?>uploads/12.png">

        <!-- Sweet Alert-->
        <link href="<?=base_url()?>assets/admin/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="<?=base_url()?>assets/admin/css/bootstrap.min.css" id="bootstrap-stylesheet" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?=base_url()?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?=base_url()?>assets/admin/css/app.min.css" id="app-stylesheet" rel="stylesheet" type="text/css" />
    
    </head>


    <body class="authentication-bg">
        
        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="text-center">
                            <a href="index.html" class="logo">
                                
                               <img src="<?=base_url()?>assets/admin/images/11.png" alt="" height="110" class="logo-dark mx-auto"> 
                            </a>
                            <p class="text-muted mt-2 mb-4">Üye Panel</p>
                        </div>
                        <div class="card">

                            <div class="card-body p-4">
                                
                                <div class="text-center mb-4">
                                    <h4 class="text-uppercase mt-0">Giriş</h4>
                                </div>

                                <form action="<?=base_url()?>uye/Login/login_ol" method="post">

                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Kullanıcı Adı</label>
                                        <input name="email" class="form-control" type="email" id="emailaddress" required=""  placeholder="Kullanıcı adı giriniz...">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Şifre</label>
                                        <input name="password" class="form-control" type="password" required="" id="password"  placeholder="Şifre giriniz...">
                                    </div>
                                    
                                    <div class="form-group mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                            <label class="custom-control-label" for="checkbox-signin">Beni Hatırla!</label>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button type="submit" class="btn btn-primary btn-block" id="sa-success">Giriş</button>
                                    </div>
                                    
                                </form>
                                <?php if ($this->session->flashdata("login_hata")) { ?>
                                           <div class="col-md-6">
                                            <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
                                            <div class="alert alert-success alert-dismissable">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                                                </div>
                                           
                                        </div>
                                         <?php }?>
                                         <?php if ($this->session->flashdata("login_yetki")) { ?>
                                           <div class="col-md-6">
                                            
                                            <div class="alert alert-success alert-dismissable">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                             <a href="#" class="alert-link">Bilgi</a>: <?=$this->session->flashdata("login_yetki")?>
                                            </div>
                                           
                                        </div>
                                         <?php }?>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                     
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>                        
                                        <marquee width="100%" direction="left" height="100px">
                                         <h3 style="color:blue"><img src="<?=base_url()?>assets/admin/images/11.png" alt="" height="22" class="logo-dark mx-auto"> Niğtaş Pazarlama Departmanı Tarafından Geliştirilmiştir.</h3>
                       
                        </marquee>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <script src="<?=base_url()?>assets/admin/js/vendor.min.js"></script>

        <!-- Sweet Alerts js -->
        <script src="<?=base_url()?>assets/admin/libs/sweetalert2/sweetalert2.min.js"></script>

        <!-- Sweet alert init js-->
        <script src="<?=base_url()?>assets/admin/js/pages/sweet-alerts.init.js"></script>


        <!-- App js -->
        <script src="<?=base_url()?>assets/admin/js/app.min.js"></script>
        <!-- end page -->
        <script src="<?=base_url()?>assets/admin/js/pages/sweet-alerts.init.js"></script>
        <script src="<?=base_url()?>assets/admin/libs/sweetalert2/sweetalert2.min.js"></script>
        <!-- Vendor js -->
        <script src="<?=base_url()?>assets/admin/js/vendor.min.js"></script>
        <script src="<?=base_url()?>assets/admin/js/vendor.min.js"></script>  
        <!-- App js -->
        <script src="<?=base_url()?>assets/admin/js/app.min.js"></script>
        
    </body>
</html>
