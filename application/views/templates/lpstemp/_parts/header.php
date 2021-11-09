<!DOCTYPE html>
<html lang="<?= MY_LANGUAGE_ABBR ?>">
<head>
<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" /> 
        <meta name="description" content="<?= $description ?>" />
        <meta name="keywords" content="<?= $keywords ?>" />
        <meta property="og:title" content="<?= $title ?>" />
        <meta property="og:description" content="<?= $description ?>" />
        <meta property="og:url" content="<?= LANG_URL ?>" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="<?= base_url('assets/img/site-overview.png') ?>" />
        <title><?= $title ?></title>
		
<!-- Favicon Icon -->
<link rel="shortcut icon" type="image/x-icon" href="<?= base_url('lpsstyles/favicon.png') ?>">
<!-- Animation CSS -->
<link rel="stylesheet" href="<?= base_url('lpsstyles/animate.css') ?>">	
<!-- Latest Bootstrap min CSS -->
<link rel="stylesheet" href="<?= base_url('lpsstyles/bootstrap.min.css') ?>">
<!-- Google Font -->
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet"> 
<!-- Icon Font CSS -->

 <link href="<?= base_url('lpsstyles/all.min.css') ?>" rel="stylesheet" />  
 <link href="<?= base_url('lpsstyles/ionicons.min.css') ?>" rel="stylesheet" />  
 <link href="<?= base_url('lpsstyles/themify-icons.css') ?>" rel="stylesheet" />  
 <link href="<?= base_url('lpsstyles/linearicons.css') ?>" rel="stylesheet" />  
 <link href="<?= base_url('lpsstyles/flaticon.css') ?>" rel="stylesheet" />  
 <link href="<?= base_url('lpsstyles/simple-line-icons.css') ?>" rel="stylesheet" /> 

<!--- owl carousel CSS-->
 <link href="<?= base_url('lpsstyles/owl.carousel.min.css') ?>" rel="stylesheet" />  
 <link href="<?= base_url('lpsstyles/owl.theme.css') ?>" rel="stylesheet" />  
 <link href="<?= base_url('lpsstyles/owl.theme.default.min.css') ?>" rel="stylesheet" />  
<!-- Magnific Popup CSS -->

 <link href="<?= base_url('lpsstyles/magnific-popup.css') ?>" rel="stylesheet" /> 
 
<!-- Slick CSS -->
 <link href="<?= base_url('lpsstyles/slick.css') ?>" rel="stylesheet" />  
 <link href="<?= base_url('lpsstyles/slick-theme.css') ?>" rel="stylesheet" />  

<!-- Style CSS -->
<link href="<?= base_url('lpsstyles/style.css') ?>" rel="stylesheet" />  
<link href="<?= base_url('lpsstyles/responsive.css') ?>" rel="stylesheet" />  

<script async="" src="<?= base_url('lpsstyles/modules.bff3b8d60820fc90decc.js') ?>"></script>
   <?php if ($cookieLaw != false) { ?>
            <script type="text/javascript">
                window.cookieconsent_options = {"message": "<?= $cookieLaw['message'] ?>", "dismiss": "<?= $cookieLaw['button_text'] ?>", "learnMore": "<?= $cookieLaw['learn_more'] ?>", "link": "<?= $cookieLaw['link'] ?>", "theme": "<?= $cookieLaw['theme'] ?>"};
            </script>
            <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
        <?php } ?>
		
<style type="text/css">iframe#_hjRemoteVarsFrame {display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;}</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
</head>

<body class="" style="">

<!-- LOADER -->
<div class="preloader loaded" style="display: none;">
    <div class="lds-ellipsis">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!-- END LOADER -->



<!-- START HEADER -->
<header class="header_wrap">
	
	<div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                	<div class="d-flex align-items-center justify-content-center justify-content-md-start">
                        <div class="lng_dropdown mr-2">
                            <div class="ddOutOfVision" id="msdrpdd20_msddHolder" style="height: 0px; overflow: hidden; position: absolute;"><select name="countries" class="custome_select" id="msdrpdd20" tabindex="-1">
                                <option value="en" data-image="assets/images/eng.png" data-title="English">English</option>
                                <option value="fn" data-image="assets/images/fn.png" data-title="France">France</option>
                                <option value="us" data-image="assets/images/us.png" data-title="United States">United States</option>
                            </select></div><div class="dd ddcommon borderRadius" id="msdrpdd20_msdd" tabindex="0" style="width: 130px;"><div class="ddTitle borderRadiusTp"><span class="divider"></span><span class="ddArrow arrowoff"></span><span class="ddTitleText " id="msdrpdd20_title"><img src="assets/images/eng.png" class="fnone"><span class="ddlabel">English</span><span class="description" style="display: none;"></span></span></div><input id="msdrpdd20_titleText" type="text" autocomplete="off" class="text shadow borderRadius" style="display: none;"><div class="ddChild ddchild_ border shadow" id="msdrpdd20_child" style="z-index: 9999; display: none; position: absolute; visibility: visible; height: 105px;"><ul><li class="enabled _msddli_ selected" title="English"><img src="assets/images/eng.png" class="fnone"><span class="ddlabel">English</span><div class="clear"></div></li><li class="enabled _msddli_" title="France"><img src="assets/images/fn.png" class="fnone"><span class="ddlabel">France</span><div class="clear"></div></li><li class="enabled _msddli_" title="United States"><img src="assets/images/us.png" class="fnone"><span class="ddlabel">United States</span><div class="clear"></div></li></ul></div></div>
                        </div>
                        <div class="mr-3">
                            <div class="ddOutOfVision" id="msdrpdd21_msddHolder" style="height: 0px; overflow: hidden; position: absolute;"><select name="countries" class="custome_select" id="msdrpdd21" tabindex="-1">
                                <option value="USD" data-title="USD">USD</option>
                                <option value="EUR" data-title="EUR">EUR</option>
                                <option value="GBR" data-title="GBR">GBR</option>
                            </select></div><div class="dd ddcommon borderRadius" id="msdrpdd21_msdd" tabindex="0" style="width: 56px;"><div class="ddTitle borderRadiusTp"><span class="divider"></span><span class="ddArrow arrowoff"></span><span class="ddTitleText " id="msdrpdd21_title"><span class="ddlabel">USD</span><span class="description" style="display: none;"></span></span></div><input id="msdrpdd21_titleText" type="text" autocomplete="off" class="text shadow borderRadius" style="display: none;"><div class="ddChild ddchild_ border shadow" id="msdrpdd21_child" style="z-index: 9999; display: none; position: absolute; visibility: visible; height: 105px;"><ul><li class="enabled _msddli_ selected" title="USD"><span class="ddlabel">USD</span><div class="clear"></div></li><li class="enabled _msddli_" title="EUR"><span class="ddlabel">EUR</span><div class="clear"></div></li><li class="enabled _msddli_" title="GBR"><span class="ddlabel">GBR</span><div class="clear"></div></li></ul></div></div>
                        </div>
                        <ul class="contact_detail text-center text-lg-left">
                            <li><i class="ti-mobile"></i><span>123-456-7890</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                	<div class="text-center text-md-right">
                       	<ul class="header_list">
					<?php if (isset($_SESSION['logged_user'])) { ?>
					<li><a href="<?= LANG_URL . '/myaccount' ?>"><i class="ti-control-shuffle"></i><span><?= lang('my_acc') ?></span></a></li>
                <?php } else { ?>
					<li><a href="<?= LANG_URL . '/login' ?>"><i class="ti-heart"></i><span><?= lang('login') ?></span></a></li>
					<li><a href="<?= LANG_URL . '/register' ?>"><i class="ti-user"></i><span><?= lang('register') ?></span></a></li>
                <?php } ?>
						
                        	
						</ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	
	<div class="bottom_header dark_skin main_menu_uppercase">
    	<div class="container">
            <nav class="navbar navbar-expand-lg"> 
                  <a class="navbar-brand" href="<?= LANG_URL ?>">
                    <img class="logo_light" src="<?= base_url('attachments/site_logo/' . $sitelogo) ?>" alt="<?= $title ?>">
                    <img class="logo_dark" src="<?= base_url('attachments/site_logo/' . $sitelogo) ?>" alt="<?= $title ?>">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false"> 
                    <span class="ion-android-menu"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                       
                        <li <?= uri_string() == '' || uri_string() == MY_LANGUAGE_ABBR ? ' class="active"' : '' ?> ><a class="nav-link nav_item" href="<?= LANG_URL ?>"> <?= lang('home') ?> </a></li>  
						
                        <li <?= uri_string() == 'shop' || uri_string() == MY_LANGUAGE_ABBR . '/shop' ? ' class="active"' : '' ?> class="dropdown">
                            <a class="dropdown-toggle nav-link" href="<?= LANG_URL . '/shop' ?>" data-toggle="dropdown"><?= lang('shop') ?></a>
                            <div class="dropdown-menu">
							   <ul> 
							   <?php

                                            function loop_tree_nav($nav_categories, $is_recursion = false)
                                            {
                                                if ($is_recursion == false) {
                                                    ?>
                                                    <span>
                                                        <?php
                                                    }
                                                    foreach ($nav_categories as $nav_category) {
                                                        $children = false;
                                                        if (isset($nav_category['children']) && !empty($nav_category['children'])) {
                                                            $children = true;
                                                        }
                                                        ?> 
                                                       <li> <a href="javascript:void(0);" data-categorie-id="<?= $nav_category['id'] ?>" class="dropdown-item nav-link nav_item <?= $children == true ? 'mega-title' : '' ?>">
														<?= $nav_category['name'] ?>
														</a></li> 
                                                        <?php
                                                        if ($children === true) {
                                                            loop_tree_nav($nav_category['children'], true);
                                                        }
                                                    }
                                                    if ($is_recursion == false) {
                                                        ?>
                                                    </span>
                                                    <?php
                                                }
                                            }

                                            loop_tree_nav($nav_categories);
                                            ?>
							
                                </ul>
                            </div>
                        </li>
                       
                    
						  <?php
                                    if (!empty($nonDynPages)) {
                                        foreach ($nonDynPages as $addonPage) {
                                            ?>
                                            <li<?= uri_string() == $addonPage || uri_string() == MY_LANGUAGE_ABBR . '/' . $addonPage ? ' class="active"' : '' ?>><a class="nav-link nav_item"  href="<?= LANG_URL . '/' . $addonPage ?>"><?= mb_ucfirst(lang($addonPage)) ?></a></li>
                                            <?php
                                        }
                                    }
                                        ?>
						
                     
                        <li <?= uri_string() == 'checkout' || uri_string() == MY_LANGUAGE_ABBR . '/checkout' ? ' class="active"' : '' ?> ><a class="nav-link nav_item" href="<?= LANG_URL . '/checkout' ?>"> <?= lang('checkout') ?> </a></li>   
						
						<li <?= uri_string() == 'shopping-cart' || uri_string() == MY_LANGUAGE_ABBR . '/shopping-cart' ? ' class="active"' : '' ?> ><a class="nav-link nav_item" href="<?= LANG_URL . '/shopping-cart' ?>"><?= lang('shopping_cart') ?> </a></li>
						
						<?php
						if (!empty($dynPages)) {
							?>
							<li class="dropdown">
                            <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">The LPS </a>
                            <div class="dropdown-menu">
                                <ul> 
								<?php 
								foreach ($dynPages as $addonPage) { ?>
                                            <li <?= urldecode(uri_string()) == 'page/' . $addonPage['pname'] || uri_string() == MY_LANGUAGE_ABBR . '/' . 'page/' . $addonPage['pname'] ? ' class="dropdown-item nav-link nav_item active"' : 'class="dropdown-item nav-link nav_item "'
                                            ?>><a class="nav-link nav_item"  href="<?= LANG_URL . '/page/' . $addonPage['pname'] ?>"><?= mb_ucfirst($addonPage['lname']) ?></a></li>
                                <?php } ?>
                                </ul>
								</div>
								</li>			
                       <?php  } ?>
						
						<li <?= uri_string() == 'contacts' || uri_string() == MY_LANGUAGE_ABBR . '/contacts' ? ' class="active"' : '' ?>><a class="nav-link nav_item" href="<?= LANG_URL . '/contacts' ?>"><?= lang('contacts') ?></a></li> 
                    </ul>
                </div>
                <ul class="navbar-nav attr-nav align-items-center">
                    <li><a href="javascript:void(0);" class="nav-link search_trigger"><i class="linearicons-magnifier"></i></a>
                        <div class="search_wrap">
                            <span class="close-search"><i class="ion-ios-close-empty"></i></span>
                            <form>
                                <input type="text" placeholder="Search" class="form-control" id="search_input">
                                <button type="submit" class="search_icon"><i class="ion-ios-search-strong"></i></button>
                            </form>
                        </div><div class="search_overlay"></div><div class="search_overlay"></div>
                    </li>
					
                    <li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="#" data-toggle="dropdown"><i class="linearicons-cart"></i><span class="cart_count"><?//= $cartItems['array'] == 0 ? 0 : $sumOfItems ?></span></a>
                        <div class="cart_box dropdown-menu dropdown-menu-right">
                          
                                <?= $load::getCartItems($cartItems) ?>
                            
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
	</header>