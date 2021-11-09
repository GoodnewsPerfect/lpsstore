<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
        	<div class="col-md-6">
                <div class="page-title">
            		<h1><?= str_replace('"', "'", $product['title']) ?></h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="#">   <?= lang('home') ?></a></li>
                    <li class="breadcrumb-item"><a href="#"><?= lang('shop') ?></a></li>
                    <li class="breadcrumb-item active"><?= str_replace('"', "'", $product['title']) ?></li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>

<div class="main_content">

<!-- START SECTION SHOP -->
<div class="section">
	<div class="container">
		<div class="row">
            <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
              <div class="product-image">
                    <div class="product_img_box">
                        <img id="product_img" src="<?= base_url('/attachments/shop_images/' . $product['image']) ?>" >
                        <a href="#" class="product_img_zoom" title="Zoom">
                            <span class="linearicons-zoom-in"></span>
                        </a>
                    </div>
                    <div id="pr_item_gallery" class="product_gallery_item slick_slider slick-initialized slick-slider" data-slides-to-show="4" data-slides-to-scroll="1" data-infinite="false"><button type="button" data-role="none" class="slick-prev slick-arrow slick-disabled" aria-label="Previous" role="button" aria-disabled="true" style="">Previous</button>
					
                        <div aria-live="polite" class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 828px; left: 0px;" role="listbox">
							
						<div class="item slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 128px;" tabindex="-1" role="option" aria-describedby="slick-slide00">
					<a href="#" class="product_gallery_item active" data-image="<?= base_url('/attachments/shop_images/' . $product['image']) ?>" data-zoom-image="<?= base_url('/attachments/shop_images/' . $product['image']) ?>" tabindex="0">
						<img src="<?= base_url('/attachments/shop_images/' . $product['image']) ?>" alt="<?=  $product['image']; ?>">
					</a>
                        </div>
						
                                  
									<?php
            if ($product['folder'] != null) {
                $dir = "attachments/shop_images/" . $product['folder'] . '/';
               
                    if (is_dir($dir)) {
                        if ($dh = opendir($dir)) {
                            $i = 1;
                            while (($file = readdir($dh)) !== false) {
                                if (is_file($dir . $file)) {
                                    ?>
						<div class="item slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 128px;" tabindex="-1" role="option" aria-describedby="slick-slide00">
                            <a href="#" class="product_gallery_item active" data-image="<?= base_url($dir . $file) ?>" data-zoom-image="<?= base_url($dir . $file) ?>" tabindex="0">
                                <img src="<?= base_url($dir . $file) ?>" alt="<?= str_replace('"', "'", $product['title']) ?>">
                            </a>
                        </div>
						
						  <?php $i++; 
						  }
						  }
						  closedir($dh);
						  }
						  }
						  }
						  ?>
						
						</div></div>
                        
                        
                        
                        
                        
                    <button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="" aria-disabled="false">Next</button></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="pr_detail">
                    <div class="product_description">
                        <h4 class="product_title"><a href="#"><?= $product['title'] ?></a></h4>
                        <div class="product_price">
                            <span class="price"><?= $product['price'] . CURRENCY ?></span>
                         <?php if ($product['old_price'] != '') { ?>
						 <del><?= $product['old_price'] . CURRENCY ?></del>
                <?php } ?>
                        </div>
                       <br> 
                       <hr> 
                        <div class="pr_desc">
                        <?php echo $description; ?>
                        </div>
                      
                        
                    </div>
                    <hr>
                    <div class="cart_extra">
					
					  <?php if ($product['quantity'] > 0) { ?>
                            <div class="cart_btn">
                                <a href="javascript:void(0);" data-id="<?= $product['id'] ?>" data-goto="<?= LANG_URL . '/checkout' ?>" class="add-to-cart btn-add btn btn-fill-out btn-addtocart">
                                    <span class="text-to-bg"><?= lang('buy_now') ?></span>
                                </a>
                            </div>
                            <a href="javascript:void(0);" data-id="<?= $product['id'] ?>" data-goto="<?= LANG_URL . '/shopping-cart' ?>" class="add-to-cart btn-add btn btn-fill-out btn-addtocart">
                                <span class="text-to-bg"><i class="icon-basket-loaded"></i><?= lang('add_to_cart') ?></span>
                            </a>
                        <?php } else { ?>
                            <div class="alert alert-info"><?= lang('out_of_stock_product') ?></div>
                        <?php } ?>
					
					
						
                    </div>
                    <hr>
                    <ul class="product-meta">
                        <li><?= lang('in_category') ?>: <a href="#" data-categorie-id="<?= $product['shop_categorie']; ?>"> <?= $product['categorie_name']; ?></a></li>
						<?php if ($publicQuantity == 1) { ?> 
						<li><?= lang('in_stock') ?>: <a href="#"><?= $product['quantity'] ?></a></li>
						 <?php } ?>
						 
                        <li><?= lang('num_added_to_cart') ?>: <a href="#">
						<?php @$result = array_count_values($_SESSION['shopping_cart']);
                        if (isset($result[$product['id']])) echo $result[$product['id']]; else echo 0; ?></a>
						</li>
						
 <?php if ($publicDateAdded == 1) { ?><li><?= lang('added_on') ?>: <a href="#"><?= date('m.d.Y', $product['time']) ?></a></li>  <?php } ?>
                    </ul>
                  
                </div>
            </div>
        </div>
        <div class="row">
        	<div class="col-12">
            	<div class="large_divider clearfix"></div>
            </div>
        </div>
        <div class="row">
        	<div class="col-12">
            	<div class="tab-style3">
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="Description-tab" data-toggle="tab" href="#Description" role="tab" aria-controls="Description" aria-selected="true"><?= lang('description') ?></a>
                      	</li>
                    </ul>
                	<div class="tab-content shop_info_tab">
                      	<div class="tab-pane fade show active" id="Description" role="tabpanel" aria-labelledby="Description-tab">
                        	 <?= $product['description'] ?>
                      	</div>
                      	
                	</div>
                </div>
            </div>
        </div>
        <div class="row">
        	<div class="col-12">
            	<div class="small_divider"></div>
            	<div class="divider"></div>
                <div class="medium_divider"></div>
            </div>
        </div>
        <div class="row">
        	<div class="col-12">
            	<div class="heading_s1">
                	<h3><?= lang('oder_from_category') ?></h3>
                </div>
            	<div class="releted_product_slider carousel_slider owl-carousel owl-theme owl-loaded owl-drag" data-margin="20" data-responsive="{&quot;0&quot;:{&quot;items&quot;: &quot;1&quot;}, &quot;481&quot;:{&quot;items&quot;: &quot;2&quot;}, &quot;768&quot;:{&quot;items&quot;: &quot;3&quot;}, &quot;1199&quot;:{&quot;items&quot;: &quot;4&quot;}}">
                	
                    
                    
                    
                    
                <div class="owl-stage-outer">
				<div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1413px;">
				
				  <?php
        if (!empty($sameCagegoryProducts)) {
            foreach ($sameCagegoryProducts as $prod) {
                ?>
				<div class="owl-item active" style="width: 262.5px; margin-right: 20px;">
				<div class="item">
                        <div class="product">
                            <div class="product_img">
			<a href="<?= LANG_URL . '/' . $prod['url'] ?>">
				<img src="<?= base_url('attachments/shop_images/' . $prod['image']); ?>" alt="<?=  $prod['image'];?>">
			</a>
		<div class="product_action_box">
			<ul class="list_none pr_action_btn">
				<li class="add-to-cart"><a class="add-to-cart" data-goto="<?= LANG_URL . '/checkout' ?>" href="javascript:void(0);" data-id="<?= $prod['id'] ?>"><i class="icon-basket-loaded"></i>  <?= lang('add_to_cart') ?> </a></li>
				
			</ul>
		</div>
                            </div>
                            <div class="product_info">
                                <h6 class="product_title"><a href="<?= LANG_URL . '/' . $prod['url'] ?>"><?= $prod['title'] ?></a></h6>
                                <div class="product_price">
                                    <span class="price"><?= $prod['price'] . CURRENCY ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
					</div>
					
                <?php
            }
        } else {
            ?>
			<div class="owl-item active" style="width: 262.5px; margin-right: 20px;">
				<div class="item">
            <div class="alert alert-info"><?= lang('no_same_category_products') ?></div>
			  </div>
					</div>
            <?php
        }
        ?> 
					
					
					</div></div>
					
					<div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i class="ion-ios-arrow-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="ion-ios-arrow-right"></i></button></div>
					
					
					</div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION SHOP -->


</div>