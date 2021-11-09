
<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
        	<div class="col-md-6">
                <div class="page-title">
            		<!-- <h1><?= lang('home') ?> <span class="active"> > <?= lang('latest_blog') ?></span></h1> -->
                </div>
            </div>
            <div class="col-md-6">
            <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="<?= LANG_URL ?>"><?= lang('home') ?></a></li>
                    <li class="breadcrumb-item active"><?= lang('latest_blog') ?></li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<!-- END SECTION BREADCRUMB -->

<!-- START MAIN CONTENT -->
<div class="main_content">

<!-- START SECTION BLOG -->
<div class="section">
	<div class="container">
    	<div class="row">
        	<div class="col-xl-9">
            <?php
                if (!empty($posts)) {
                    foreach ($posts as $post) {
                        ?>
                        <div class="col-md-6 blog-col">
                            <div class="thumbnail blog-list">
                                <a href="<?= LANG_URL . '/blog/' . $post['url'] ?>" class="img-container">
                                    <img src="<?= base_url('attachments/blog_images/' . $post['image']) ?>" alt="<?= $post['title'] ?>">
                                </a>
                                <div class="caption">
                                    <h5>
                                        <?= character_limiter($post['title'], 85) ?>
                                    </h5>
                                    <small>
                                        <span>
                                            <i class="fa fa-clock-o"></i>
                                            <?= date('M d, y', $post['time']) ?>
                                        </span>
                                    </small>
                                    <p class="description"><?= character_limiter(strip_tags($post['description']), 300) ?></p>
                                    <a class="btn btn-blog pull-right" href="<?= LANG_URL . '/blog/' . $post['url'] ?>">
                                        <i class="fa fa-long-arrow-right"></i>
                                        <?= lang('read_mode') ?>
                                    </a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    ?>
                    <div class="alert alert-info"><?= lang('no_posts') ?></div>
                <?php } ?>
            </div>
            <?= $links_pagination ?>
        </div>
    </div>
            	
<!-- END SECTION BLOG -->

