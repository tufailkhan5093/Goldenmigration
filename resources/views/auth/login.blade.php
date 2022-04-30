<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Login | Fonik - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />

    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />


</head>

<body class="account-bg">

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center mt-4">
                                <div class="mb-3">
                                    <a href="index.html" class="auth-logo">
                                        <img src="images/logo-black.png" height="30" class="logo-dark mx-auto"
                                            alt="">
                                        <img src="images/logo-black.png" height="30" class="logo-light mx-auto"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="p-3">
                                <h4 class="font-size-18 text-muted mt-2 text-center">Welcome Back !</h4>
                                <p class="text-muted text-center mb-4">Sign in to continue</p>
 @if(session()->get('msg'))
                                    <div class="alert alert-danger">{{session()->get('msg')}}</div>
                                @endif
                                <form class="form-horizontal" method="POST">
                                    @csrf

                                    <div class="mb-3">
                                        <label class="form-label" for="username">Email</label>
                                        <input type="email" class="form-control" id="username" name="email"
                                            placeholder="Enter Email">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="userpassword">Password</label>
                                        <input type="password" class="form-control" id="userpassword" name="password"
                                            placeholder="Enter password">
                                    </div>

                                    <div class="mb-3 row mt-4">
                                        <div class="col-sm-6">
                                            <div class="form-checkbox">
                                                <input type="checkbox" class="form-check-input me-1"
                                                    id="customControlInline">
                                                <label class="form-label" class="form-check-label"
                                                    for="customControlInline">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-end">
                                            <button type="submit" class="btn btn-primary w-md waves-effect waves-light"
                                                type="submit">Log In</a>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 mt-4">
                                            <a href="pages-recoverpw.html" class="text-muted"><i
                                                    class="mdi mdi-lock"></i> Forgot your password?</a>
                                        </div>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <p>Don't have an account ? <a href="{{route('register')}}" class="fw-bold text-primary"> Signup
                                Now </a> </p>
                        <p>©
                            <script>document.write(new Date().getFullYear())</script> Fonik. Crafted with <i
                                class="mdi mdi-heart text-danger"></i> by Themesbrand
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <script src="assets/js/app.js"></script>

</body>

</html>