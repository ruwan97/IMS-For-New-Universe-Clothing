    <!doctype html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
    <!--[if gt IE 8]><!-->
    <html class="no-js" lang="en">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sufee Admin - HTML5 Admin Template</title>
        <meta name="description" content="Sufee Admin - HTML5 Admin Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-icon.png">
        <link rel="shortcut icon" href="favicon.ico">


       <link rel="stylesheet" href="<?php echo base_url('vendors/bootstrap/dist/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('vendors/font-awesome/css/font-awesome.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('vendors/themify-icons/css/themify-icons.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('vendors/flag-icon-css/css/flag-icon.min.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('vendors/selectFX/css/cs-skin-elastic.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('vendors/jqvmap/dist/jqvmap.min.css'); ?>">


        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



    </head>

    <body class="bg-dark">


        <div class="sufee-login d-flex align-content-center flex-wrap">
            <div class="container">
                <div class="login-content">
                    <div class="login-logo">
                        <a href="index.html">
                            <img class="align-content" src="images/logo.png" alt="">
                        </a>
                    </div>
					<div class="login-logo">
						<a href="<?php echo base_url('index.php/Welcome/index2'); ?>">
							<img class="align-content" src="<?php echo base_url('images/client_logo.png'); ?>" alt="">
						</a>
					</div>
					//456
                    <div class="login-form rounded">
                        <form>
                            <div class="form-group">
                                <label>User ID</label>
                                <input type="text" class="form-control" placeholder="User ID">
                            </div>
                            <div class="form-group">
                                <label>Employee Name</label>
                                <input type="text" class="form-control" placeholder="Employee Name">
                            </div>
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label>New Password</label>
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label>Employee Position</label>
                                <input type="password" class="form-control" placeholder="Position">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Agree the terms and policy
                                </label>
                            </div>
                            <button type="submit" class="btn btn-dark btn-flat m-b-30 m-t-30 rounded">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


      <script src="<?php echo base_url('vendors/jquery/dist/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('vendors/popper.js/dist/umd/popper.min.js'); ?>"></script>
        <script src="<?php echo base_url('vendors/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>


    </body>

    </html>
