<body style="overflow:hi">

<!-- site preloader start -->
<div class="page-loader">
    <div class="loader-in"></div>
</div>
<!-- site preloader end -->

<div class="pageWrapper">


    <!-- login box start -->
    <div class="login-box">
        <a class="close-login" href="#"><i class="fa fa-times"></i></a>

        <form method="post" action="<?php echo base_url();?>user_login/check_user_identity">
            <div class="container">
                <p>Hello our valued visitor, We present you the best web solutions and high quality graphic designs with
                    a lot of features. just login to your account and enjoy ...</p>


                    <div class="login-controls">
                        <div class="skew-25 input-box left">
                            <input type="text" name="email_or_user_id" id="email_or_user_id" class="txt-box skew25"
                                   placeholder="User name Or Email"/>
                        </div>
                        <div class="skew-25 input-box left">
                            <input type="password" name="pass" id="pass" class="txt-box skew25" placeholder="Password"/>
                        </div>
                        <div class="left skew-25 main-bg">
                            <input type="submit" class="btn skew25" value="Login"/>
                        </div>
                        <div class="check-box-box">
                            <input type="checkbox" class="check-box"/><label>Remember me !</label>
                            <a href="#">Forgot your password ?</a>
                        </div>

                    </div>


            </div>
        </form>
        <?php echo validation_errors('<div class="error">','</div>'); ?>
    </div>
    <!-- login box End -->


    <!-- Header Start -->
    <div id="headWrapper" class="clearfix">

        <!-- top bar start -->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div id="header-sidebar" style="padding-top: 5px; float: right; padding-right: 25px">
                        <div class="textwidget">
                            <p>
                                <a class="su-button su-button-style-3d login-btn" target="_blank"
                                   style="color:#FFFFFF;background-color:#fc9798;border-color:#ca797a;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px"
                                   href="#">
<span
    style="color:#FFFFFF;padding:8px 24px;font-size:13px;line-height:20px;border-color:#fdb6b7;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;text-shadow:none;-moz-text-shadow:none;-webkit-text-shadow:none">
<i class="fa fa-chevron-right" style="font-size:13px;color:#FFFFFF"></i>
Log In
</span>
                                </a>
                                <a class="su-button su-button-style-3d" target="_blank"
                                   style="color:#FFFFFF;background-color:#43b5d3;border-color:#3691a9;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px"
                                   href="<?php echo base_url(); ?>register">
<span
    style="color:#FFFFFF;padding:8px 24px;font-size:13px;line-height:20px;border-color:#7bcbe0;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;text-shadow:none;-moz-text-shadow:none;-webkit-text-shadow:none">
<i class="fa fa-chevron-right" style="font-size:13px;color:#FFFFFF"></i>
Sign Up
</span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- top bar end -->