
<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container">
       
        <div class="row align-items-center">
        	<div class="col-md-6">
                <div class="page-title">
            		<h1><?= lang('user_register') ?></h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="<?= LANG_URL ?>"><?= lang('home') ?></a></li>
                    <li class="breadcrumb-item active"><?= lang('user_register') ?></li>
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
                            <h3><?= lang('user_register') ?></h3>
                        </div>
                        <form method="post" action="">
                            <div class="form-group">
                                <input type="text" required="" class="form-control" name="name" placeholder="Enter Your Name">
                            </div>
                            <div class="form-group">
                                <input type="text" required="" class="form-control" name="phone" placeholder="Enter Your Phone">
                            </div>
                            <div class="form-group">
                                <input type="text" required="" class="form-control" name="email" placeholder="Enter Your Email">
                            </div>
                            <div class="form-group">
                                <input class="form-control" required="" type="password" name="pass" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input class="form-control" required="" type="password" name="pass_repeat" placeholder="Confirm Password">
                            </div>
                            <div class="login_footer form-group">
                                <div class="chek-form">
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="">
                                        <label class="form-check-label" for="exampleCheckbox2"><span>I agree to terms &amp; Policy.</span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-fill-out btn-block login loginmodal-submit" name="signup" value="<?= lang('register_me') ?>">
                            </div>
                        </form>
                        <div class="different_login">
                            <span> or</span>
                        </div>
                    
                        <div class="form-note text-center">Already have an account? <a href="<?= LANG_URL ?>"><?= lang('login_to_acc') ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END LOGIN SECTION -->