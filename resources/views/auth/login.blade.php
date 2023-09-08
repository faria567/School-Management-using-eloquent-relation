<!doctype html>
<html lang="en">

    

<head>
        
        <meta charset="utf-8" />
        <title>Login | Skote - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('/')}}admin/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{asset('/')}}admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('/')}}admin/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('/')}}admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="home-btn d-none d-sm-block">
            <a href="index.html" class="text-dark"><i class="fas fa-home h2"></i></a>
        </div>
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-soft-primary">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary">Welcome Back !</h5>
                                            <p>Sign in to continue to Skote.</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="{{asset('/')}}admin/images/profile-img.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> 
                                <div>
                                    <a href="index.html">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="{{asset('/')}}admin/images/logo.svg" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
                                    <form class="form-horizontal" action="{{route('login')}}" method="POST">
                                         @csrf
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email"  name="email" class="form-control" id="email" placeholder="Enter email">
                                        </div>
                
                                        <div class="form-group">
                                            <label for="userpassword">Password</label>
                                            <input type="password" name="password"  class="form-control" id="userpassword" placeholder="Enter password">
                                        </div>
                
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                                            <label class="custom-control-label" for="customControlInline">Remember me</label>
                                        </div>
                                        
                                        <div class="mt-3">
                                            <button type="submit" class="btn btn-primary btn-block waves-effect waves-light" >Log In</button>
                                        </div>
            
                                       

                                       

                                      
                                    </form>
                                </div>
            
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            
                           
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- JAVASCRIPT -->
        <script src="{{asset('/')}}admin/libs/jquery/jquery.min.js"></script>
        <script src="{{asset('/')}}admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('/')}}admin/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{asset('/')}}admin/libs/simplebar/simplebar.min.js"></script>
        <script src="{{asset('/')}}admin/libs/node-waves/waves.min.js"></script>
        
        <!-- App js -->
        <script src="{{asset('/')}}admin/js/app.js"></script>
    </body>


</html>
