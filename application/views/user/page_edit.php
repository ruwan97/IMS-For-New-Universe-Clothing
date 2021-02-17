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
						<a href="<?php echo base_url('index.php/Welcome/login'); ?>">
							<img class="align-content" src="<?php echo base_url('images/client_logo.png'); ?>" alt="">
						</a>
					</div>
					//456
                    <div class="login-form rounded">
                        <form action="" method="post">
                            <!-- <div class="form-group <?=form_error('uid') ? 'has-error' : null?>">
                                <label>User Id *</label>

                                <input type="hidden" name="uid" value="<?=$row->user_id?>">

                                <input type="text" name="uid" value="<?=$this->input->post('uid') ?? $row->user_id?>" class="form-control">
                                <?=form_error('uid')?>
                            </div> -->
                            <div class="form-group <?=form_error('uname') ? 'has-error' : null?>">
                             	<label>User Name *</label>
                                    <input type="hidden" name="uid" value="<?=$row->user_id?>">
                                	<input type="text" name="uname" value="<?=$this->input->post('uname') ?? $row->user_name?>" class="form-control">
                                <?=form_error('uname')?>
                            </div>
                            <div class="form-group <?=form_error('email') ? 'has-error' : null?>">
                               	<label>Email *</label>
                                <input type="email" name="email" value="<?=$this->input->post('email') ?? $row->user_email?>" class="form-control">
                                <?=form_error('email')?>
                            </div>
                            <div class="form-group <?=form_error('role') ? 'has-error' : null?>">
                                <label>Role</label>
                                    <select name="role" class="form-control">
                                        <?php $role = $this->input->post('role') ? $this->input->post('role') : $row->role ?>
                                        <option value="1">ADMIN</option>
                                        <option value="2" <?=$role == 2 ? 'selected' : null?>>STAFF</option>
                                    </select>
                                    <?=form_error('role')?>
                                    <!-- <input type="text" name="role" value="<?=$this->input->post('role') ?? $row->role?>" class="form-control">
                                    <?=form_error('role')?> -->
                            </div>
                            <div class="form-group <?=form_error('dob') ? 'has-error' : null?>">
                                <label>Date Of Birth *</label>
                                <input type="date" name="dob" value="<?=$this->input->post('dob') ?? $row->DOB?>" class="form-control">
                                        <?=form_error('dob')?>
                            </div>
                            <div class="form-group <?=form_error('mobile') ? 'has-error' : null?>">
                                <label>Mobile *</label>
                                <input type="text" name="mobile" value="<?=$this->input->post('mobile') ?? $row->mobile?>" class="form-control">
                                <?=form_error('mobile')?>
                            </div>
                            <div class="form-group <?=form_error('address') ? 'has-error' : null?>">
                                <label>Address *</label>
                                    <textarea name="address"  class="form-control"><?=$this->input->post('address') ?? $row->address?></textarea> 
                                    <?=form_error('address')?>
                                </div>
                            <div class="form-group <?=form_error('password') ? 'has-error' : null?>">
                                <label>Password</label>
                                <input type="Password" name="password" value="<?=$this->input->post('password')?>" class="form-control">
                                <?=form_error('password')?>
                            </div>
                            <div class="form-group <?=form_error('passconf') ? 'has-error' : null?>">
                                <label>Password Conformation</label>
                                <input type="Password" name="passconf" value="<?=$this->input->post('passconf')?>" class="form-control">
                                <?=form_error('passconf')?>
                            </div>
                            <div class="form-group <?=form_error('avataar') ? 'has-error' : null?>">
                                <label>Avataar *</label>
                                    <input type="file" name="avataar" value="<?=$this->input->post('avataar')?>">
                                    <?=form_error('avataar')?>
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
