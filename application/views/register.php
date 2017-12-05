<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Lot Management System</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/material-dashboard23cd.css')?>" rel="stylesheet" />
    <link href="maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body class="off-canvas-sidebar">
    <nav class="navbar navbar-primary navbar-transparent navbar-absolute">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../dashboard.html">Material Dashboard Pro</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="../dashboard.html">
                            <i class="material-icons">dashboard</i> Dashboard
                        </a>
                    </li>
                    <li class=" active ">
                        <a href="register.html">
                            <i class="material-icons">person_add</i> Register
                        </a>
                    </li>
                    <li class="">
                        <a href="login.html">
                            <i class="material-icons">fingerprint</i> Login
                        </a>
                    </li>
                    <li class="">
                        <a href="lock.html">
                            <i class="material-icons">lock_open</i> Lock
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper wrapper-full-page">
        <div class="full-page register-page" filter-color="black" data-image="<?php echo base_url('assets/img/register.jpg'); ?>">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="card card-signup">
                            <h2 class="card-title text-center">Register</h2>
                            <div class="row">
                                <div class="col-md-5 col-md-offset-1">
                                    <div class="card-content">
                                        <div class="info info-horizontal">
                                            <div class="icon icon-rose">
                                                <i class="material-icons">timeline</i>
                                            </div>
                                            <div class="description">
                                                <h4 class="info-title">Marketing</h4>
                                                <p class="description">
                                                    We've created the marketing campaign of the website. It was a very interesting collaboration.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="info info-horizontal">
                                            <div class="icon icon-primary">
                                                <i class="material-icons">code</i>
                                            </div>
                                            <div class="description">
                                                <h4 class="info-title">Fully Coded in HTML5</h4>
                                                <p class="description">
                                                    We've developed the website with HTML5 and CSS3. The client has access to the code using GitHub.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="info info-horizontal">
                                            <div class="icon icon-info">
                                                <i class="material-icons">group</i>
                                            </div>
                                            <div class="description">
                                                <h4 class="info-title">Built Audience</h4>
                                                <p class="description">
                                                    There is also a Fully Customizable CMS Admin Dashboard for this product.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="social text-center">
                                        <button class="btn btn-just-icon btn-round btn-twitter">
                                            <i class="fa fa-twitter"></i>
                                        </button>
                                        <button class="btn btn-just-icon btn-round btn-dribbble">
                                            <i class="fa fa-dribbble"></i>
                                        </button>
                                        <button class="btn btn-just-icon btn-round btn-facebook">
                                            <i class="fa fa-facebook"> </i>
                                        </button>
                                        <h4> or be classical </h4>
                                    </div>
                                    <form class="form" method="" action="#">
                                        <div class="card-content">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">face</i>
                                                </span>
                                                <input type="text" class="form-control" placeholder="First Name...">
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">email</i>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Email...">
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">lock_outline</i>
                                                </span>
                                                <input type="password" placeholder="Password..." class="form-control" />
                                            </div>
                                            <!-- If you want to add a checkbox to this form, uncomment this code -->
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsCheckboxes" checked> I agree to the
                                                    <a href="#something">terms and conditions</a>.
                                                </label>
                                            </div>
                                        </div>
                                        <div class="footer text-center">
                                            <a href="#pablo" class="btn btn-primary btn-round">Get Started</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portofolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="http://www.creative-tim.com/"> Creative Tim </a>, made with love for a better web
                    </p>
                </div>
            </footer>
        </div>
    </div>
</body>
</body>
<script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/material.min.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/perfect-scrollbar.jquery.min.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js');?>"></script>
<script src="<?php echo base_url('assets/js/arrive.min.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/jquery.validate.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/moment.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/chartist.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/jquery.bootstrap-wizard.js');?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap-notify.js');?>"></script>
<script src="<?php echo base_url('assets/js/jquery.sharrre.js');?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap-datetimepicker.js');?>"></script>
<script src="<?php echo base_url('assets/js/jquery-jvectormap.js');?>"></script>
<script src="<?php echo base_url('assets/js/nouislider.min.js');?>"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1_8C5Xz9RpEeJSaJ3E_DeBv8i7j_p6Aw"></script>
<script src="<?php echo base_url('assets/js/jquery.select-bootstrap.js');?>"></script>
<script src="<?php echo base_url('assets/js/jquery.datatables.js');?>"></script>
<script src="<?php echo base_url('assets/js/sweetalert2.js');?>"></script>
<script src="<?php echo base_url('assets/js/jasny-bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/fullcalendar.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/jquery.tagsinput.js');?>"></script>
<script src="<?php echo base_url('assets/js/material-dashboard23cd.js');?>"></script>
</html>