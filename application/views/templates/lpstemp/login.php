
<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container">
    <!-- <?= lang('home') ?> <span class="active"> > <?= lang('user_login') ?> -->
        <div class="row align-items-center">
        	<div class="col-md-6">
                <div class="page-title">
            		<h1><?= lang('login_to_acc') ?></h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="<?= LANG_URL ?>"><?= lang('home') ?></a></li>
                    <li class="breadcrumb-item active"><?= lang('login_to_acc') ?></li>
                    <!-- <li class="breadcrumb-item active">Login</li> -->
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<!-- END SECTION BREADCRUMB -->

<!-- START MAIN CONTENT -->
<div class="main_content">

<!-- START LOGIN SECTION -->
<div class="login_register_wrap section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-md-10">
                <div class="login_wrap">
            		<div class="padding_eight_all bg-white">
                        <div class="heading_s1">
                            <h3>Login to Account</h3>
                        </div>
                        <form method="post" action="">
                            <div class="form-group">
                                <input type="text" required="" class="form-control" name="email" placeholder="Enter Your Email">
                            </div>
                            <div class="form-group">
                                <input class="form-control" required="" type="password" name="pass" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-fill-out btn-block login loginmodal-submit" name="login" value="<?= lang('login') ?>">
                            </div>
                        </form>
                        <div class="login-help">
                            <a href="<?= LANG_URL . '/register' ?>"><?= lang('register') ?></a>
                        </div>
                        <!-- <div class="form-note text-center">Already have an account? <a href="https://bestwebcreator.com/shopwise/demo/login.html">Log in</a></div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>