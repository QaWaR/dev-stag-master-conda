<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CONDA - Crowdinvesting</title>
    <link rel="stylesheet" href="assets/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owl-carousel/css/owl.theme.default.min.css">
    <link href="https://fonts.googleapis.com/css?family=Jaldi:400,700&amp;subset=latin-ext" rel="stylesheet">
    <script defer src="assets/font-awesome/js/fontawesome-all.js"></script>
    <link rel="stylesheet" href="assets/font-awesome/css/fontawesome-all.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <header>
        <!--main nav-->
        <section class="main-nav border-bottom border-grey">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light px-0">
                    <a class="navbar-brand d-flex align-items-center justify-content-between alignt-items-center" href="index.php">
                        <img src="images/conda-logo.png" alt="">
                        <p class="mb-0 pl-3 d-none d-sm-block">CROWDINVESTING</p>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarMain">
                        <div class="navbar-nav ml-auto">
                            <a href="campaigns.php" class="nav-item nav-link text-uppercase pr-3"><small class="d-block">projecte</small> entdecken</a>
                            <a href="page.php" class="nav-item nav-link text-uppercase pr-3"><small class="d-block">so funktioniert</small> crowdinvesting</a>
                            <a href="page.php" class="nav-item nav-link text-uppercase pr-3"><small class="d-block">projecte</small> einreichen</a>
                            <a href="page.php" class="nav-item nav-link text-uppercase pr-3"><small class="d-block">uber</small> conda</a>
                        </div>
                    </div>
                </nav>
            </div>
        </section>
        <!--login nav (logged out)-->
        <section class="login-nav bg-light border-bottom border-grey">
            <div class="container py-2">
                <div class="d-flex justify-content-sm-end justify-content-between align-items-center">
                    <span class="mr-2 d-none d-sm-inline">New investor?</span>
                    <a href="#" class="text-success mr-2" data-toggle="modal" data-target="#loginModal">Register</a>
                    <button class="btn btn-success btn-sm rounded mr-2" data-toggle="modal" data-target="#loginModal" >Sign in</button>
                    <a href="#" class="dropdown-toggle text-muted mr-2 d-none d-sm-inline" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle mr-2 text-muted"></i>Username</a>
                    <ul class="dropdown-menu dropdown-menu-right p-0">
                        <li class="px-2 border-bottom border-grey py-2 text-secondary">Welcome</li>
                        <li class="d-flex justify-content-between px-2 border-bottom border-grey py-2"><a href="#"><span class="text-success pr-4"><i class="fas fa-user-circle mr-2 text-success"></i>Personal account</span></a><span class="ml-auto pl-4"><a href="#"><i class="text-muted fas fa-shopping-bag mr-2"></i></a><a href="#"><i class="text-muted fas fa-cog mr-2"></i></a></span></li>
                        <li class="d-flex justify-content-between px-2 border-bottom border-grey py-2"><a href="#"><span class="text-muted pr-4"><i class="fas fa-suitcase mr-2 text-muted"></i>Company account</span></a><span class="ml-auto pl-4"><a href="#"><i class="text-muted fas fa-shopping-bag mr-2"></i></a><a href="#"><i class="text-muted fas fa-cog mr-2"></i></a></span></li>
                        <li class="px-2 py-2"><a href="#" class="text-secondary"><i class="fas fa-arrow-right mr-2"></i>Sign out</a></li>
                    </ul>
                </div>
            </div>
        </section>
        
         <!-- LOGIN MODAL -->
        <div class="modal fade text-dark" id="loginModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <img src="images/modals/logo.png" class="img-fluid my-4 w-75 mx-auto">
                    <div class="modal-header px-4">
                        <h5 class="modal-title">Sign in</h5>
                    </div>
                    <div class="modal-body px-4 bg-light">
                        <form>
                            <div class="form-group">
                                <label for="usernam">Username or email</label>
                                <input type="text" placeholder="Username or email.." class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" placeholder="Password.." class="form-control" >
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer flex-column align-items-center py-4">
                        <button class="btn btn-primary px-4 w-100 mb-2 text-uppercase" data-dismiss="modal">Login</button>
                        <button class="btn btn-danger px-4 w-100 text-uppercase" data-dismiss="modal" >Close</button> 
                    </div>
                </div>
            </div>
        </div>
    </header>