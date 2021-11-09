
<!-- START FOOTER -->

<footer class="footer_dark">
	<div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                	<div class="widget">
                        <div class="footer_logo">
                            <a href="<?= LANG_URL ?>"><img src="<?= base_url('attachments/site_logo/' . $sitelogo) ?>" alt="logo"></a>
                        </div>
                        <p><?= $footerAboutUs ?></p>
                    </div>

                    <div class="widget">
                        <ul class="social_icons social_white">
                            <li><a href="<?= $footerSocialFacebook ?>"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="<?= $footerSocialTwitter ?>"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="<?= $footerSocialGooglePlus ?>"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="<?= $footerSocialYoutube ?>"><i class="ion-social-youtube-outline"></i></a></li>
                        </ul>
                    </div>

        		</div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                	<div class="widget">
                        <h6 class="widget_title"><?= lang('pages') ?></h6>
                        <ul class="widget_links">
                            <li><a href="<?= base_url() ?>"> <?= lang('home') ?> </a></li>
                            <li><a href="<?= LANG_URL . '/checkout' ?>"> <?= lang('checkout') ?> </a></li>
                            <li><a href="<?= LANG_URL . '/contacts' ?>"> <?= lang('contacts') ?> </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                	<div class="widget">
                    <h6 class="widget_title"><?= lang('categories') ?></h6>
                        <?php if (!empty($footerCategories)) { ?>
                        <ul class="widget_links">
                            <?php foreach ($footerCategories as $key => $categorie) { ?>
                                <li><a href="javascript:void(0);" data-categorie-id="<?= $key ?>" class="go-category"><?= $categorie ?></a></li>
                            <?php } ?>
                        </ul>
                    <?php } else { ?>
                        <p><?= lang('no_categories') ?></p>
                    <?php } ?>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                	<div class="widget">
                        <h6 class="widget_title">My Account</h6>
                        <ul class="widget_links">
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Discount</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Orders History</a></li>
                            <li><a href="#">Order Tracking</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="widget">
                <h6 class="widget_title"><?= lang('contacts') ?></h6>
                        <ul class="contact_info contact_info_light">
                            <li>
                                <i class="ti-location-pin"></i>
                                <p><?= $footerContactAddr ?></p>
                            </li>
                            <li>
                                <i class="ti-mobile"></i>
                                <p><?= $footerContactPhone ?></p>
                            </li>
                            <li>
                                <i class="ti-email"></i>
                                <p><?= $footerContactEmail ?></p>
                            </li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_footer border-top-tran">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-md-0 text-center text-md-left">© 2021 Loveworld Partnership Shop</p>
                </div>
                <div class="col-md-6">
                    <ul class="footer_payment text-center text-lg-right">
                        <li><a href="#"><img src="lpsstyles/images/visa.png" alt="visa"></a></li>
                        <li><a href="#"><img src="lpsstyles/images/discover.png" alt="discover"></a></li>
                        <li><a href="#"><img src="lpsstyles/images/master_card.png" alt="master_card"></a></li>
                        <li><a href="#"><img src="lpsstyles/images/paypal.png" alt="paypal"></a></li>
                        <li><a href="#"><img src="lpsstyles/images/amarican_express.png" alt="amarican_express"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>









<a href="https://bestwebcreator.com/shopwise/demo/index-5.html#" class="scrollup" style=""><i class="ion-ios-arrow-up"></i></a> 

<!-- Latest jQuery --> 
<script src="./lpsstyles/jquery-3.6.0.min.js"></script> 
<!-- popper min js -->
<script src="./lpsstyles/popper.min.js"></script>
<!-- Latest compiled and minified Bootstrap --> 
<script src="./lpsstyles/bootstrap.min.js"></script> 
<!-- owl-carousel min js  --> 
<script src="./lpsstyles/owl.carousel.min.js"></script> 
<!-- magnific-popup min js  --> 
<script src="./lpsstyles/magnific-popup.min.js"></script> 
<!-- waypoints min js  --> 
<script src="./lpsstyles/waypoints.min.js"></script> 
<!-- parallax js  --> 
<script src="./lpsstyles/parallax.js"></script> 
<!-- countdown js  --> 
<script src="./lpsstyles/jquery.countdown.min.js"></script> 
<!-- imagesloaded js --> 
<script src="./lpsstyles/imagesloaded.pkgd.min.js"></script>
<!-- isotope min js --> 
<script src="./lpsstyles/isotope.min.js"></script>
<!-- jquery.dd.min js -->
<script src="./lpsstyles/jquery.dd.min.js"></script>
<!-- slick js -->
<script src="./lpsstyles/slick.min.js"></script>
<!-- elevatezoom js -->
<script src="./lpsstyles/jquery.elevatezoom.js"></script>
<!-- scripts js --> 
<script src="./lpsstyles/scripts.js"></script>

</body>
</html>