<!DOCTYPE html>
<html lang="en">
<head>
	<?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <?php if(isset($args['fonts'])){ 
        foreach ($args['fonts'] as $value){?>
        <link href="https://fonts.googleapis.com/css2?family=<?php echo $value ?>:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <?php }} ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" hreflang="en" href="<?php echo get_template_directory_uri();?>/assets/images/logo/trans2.ico">
    <?php if(isset($args['description'])){ ?>
        <meta name="description" content='<?php echo $args['description']; ?>'>
    <?php } else { ?>
        <meta name="description" content="Welcome to Chanak Analytics, a leading software development service provider. Our team of skilled developers is dedicated to creating innovative and reliable software solutions to help your business succeed. From custom application development to ongoing maintenance and support, we have the expertise to deliver the best results for your project. Contact us today to learn more about how we can help you.">
    <?php } ?>
    <?php if(isset($args['title'])){ ?>
        <title><?php echo $args['title']; ?></title>
    <?php } else { ?>
        <title>Welcome to Chanak Analytics, a leading software development service provider. Our team of skilled developers is dedicated to creating innovative and reliable software solutions to help your business succeed. From custom application development to ongoing maintenance and support, we have the expertise to deliver the best results for your project. Contact us today to learn more about how we can help you.</title>
    <?php } ?>
    <!-- <title>Blog page</title> -->
	<meta name="google-site-verification" content="F5M6dfQ2oJBJCf-tQACt1LLYqHbIr8fGH1aO-WA0G2c" />
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-PBPK04W9GV"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-PBPK04W9GV');
</script>
</head>
<body style="height: 100vh; overflow: hidden;">
    <section id="preloader" style="position: absolute;inset: 0 0 0 0;z-index: 1999; overflow:hidden;
        background: #fff url('<?php echo get_template_directory_uri(); ?>/assets/images/logo/chanak-logo-short-new.png') center/10% no-repeat;">
    </section>
    <div class="progress-wrap">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
		</svg>
	</div>
    <header id="headerScroll">
        <div class="top-nav">
            <div class="container flex-items-center">
                <ul class="contact flex-items-center">
                    <li>
                        <a target="_blank" href="https://wa.me/+917980650084?text=I%20have%20a%20query.">
                            <!-- <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/whatsapp_icon.svg" alt="icon"> -->
                            <i class="fab fa-whatsapp fa-lg"></i>
                            <span>+91-7980650084</span>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="mailto:partner@chanakanalytics.com">
                            <!-- <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/email_mail.svg" alt="icon"> -->
                            <i class="far fa-envelope fa-lg"></i>
                            <span>partner@chanakanalytics.com</span>
                        </a>
                    </li>
                </ul>
                <ul class="social flex-items-center ms-auto">
                    <li><a target="_blank" href="https://www.facebook.com/chanakanalytics/"><i class="fab fa-facebook-f fa-xs"></i></a></li>
                    <li><a target="_blank" href="https://in.linkedin.com/company/chanakanalytics"><i class="fab fa-linkedin-in fa-sm"></i></a></li>
                    <li><a target="_blank" href="https://www.instagram.com/chanakanalytics/"><i class="fab fa-instagram fa-sm"></i></a></li>
					<li><a target="_blank" href="https://twitter.com/chanakanalytics/"><i class="fab fa-twitter fa-sm"></i></a></li>
                    <!-- <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/icon/youtube.svg" alt=""></a></li> -->
                </ul>
            </div>
        </div>
        <nav class="navbar navbar-expand-xl">
            <div class="container">
                <a class="navbar-brand" href="<?php echo get_site_url();?>/">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/logo/chanak-logo-new.png" alt="chanak logo">
                    <button class="lpTbtn">We're Hiring!</button>
                </a>
                <div class="header-item item-right">
                    <!-- mobile menu trigger -->
                    <div class="mobile-menu-trigger">
                        <span></span>
                    </div>
                </div>
                <!-- <div class="quote-button flex-items-center ms-auto">
                    <a class="mx-auto btn-primary" href="<?php echo get_site_url();?>/quote/">Get A Quote</a>
                </div> -->
                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger hamburger-one"></div>
                </button> -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-5">
                        <li><a class="<?php echo $args['page'] == 'home' ? 'active' : ''; ?>" href="<?php echo get_site_url();?>/">home</a></li>
                        <!-- <li><a class="<?php echo $args['page'] == 'about-us' ? 'active' : ''; ?>" href="<?php echo get_site_url();?>/about-us/">about us</a></li> -->
                        <li class="dropdown">
                            <a class="dropdown-toggle <?php echo $args['page'] == 'about-us' ? 'active' : ''; ?>" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" onClick="resetNavbar()">about us</a>
                            <div class="dropdown-menu mega-menu" aria-labelledby="navbarDropdown">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="item">
                                                <h6>Know More About US</h6>
                                                <ul>
                                                    <li class="active-nav"><a class="element" href="<?php echo get_site_url();?>/casestudy/" onmouseover="hover('casestudies')"><h5>Chanak's Case Studies →</h5></a></li>
                                                    <li><a class="element" href="<?php echo get_site_url();?>/about-us/"><h5>About Chanak Analytics →</h5></a></li>
                                                    <li><a class="element" href="<?php echo get_site_url();?>/career/" onmouseover="hover('career')"><h5>Chanak's Career Options →</h5></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="blog item" id="career">
                                                <h6>Career Opportunity with Chanak Analytics</h6>
                                                <ul>
                                                <?php
                                                    $the_query = new WP_Query( array(
                                                        'post_type' => 'career',
                                                        'posts_per_page' => 3,
                                                        'orderby' => 'ID', 
                                                        'order' => 'DESC',
                                                    ));
                                                    if ($the_query->have_posts()){ 
                                                        while ($the_query->have_posts()){
                                                            $the_query->the_post(); 
                                                            global $post;
                                                            $about_enquery_meta_key = get_post_meta($post->ID, 'career_enquery_meta_key',false);
                                                            foreach ($about_enquery_meta_key  as $value){
                                                                $excerpt = get_the_excerpt();
                                                                $excerpt = substr($excerpt, 0, 85);
                                                                $result = substr($excerpt, 0, strrpos($excerpt, ' '));?>
                                                                <li>
                                                                    <a class="row ms-3" href="<?php the_permalink() ;?>">
                                                                        <div class="icon-sp shadow-none p-0 my-auto col-2 me-3">
                                                                            <?php the_post_thumbnail('thumbnail');?> 
                                                                        </div>
                                                                        <div class="my-auto col-9">
                                                                            <h5 class="mb-2"><?php the_title() ?></h5>
                                                                            <div class="d-flex">
                                                                                <div class="badge-light"><i class="fas fa-briefcase me-2"></i> <?php echo $value["company_name"]; ?></div>
                                                                                <div class="badge-light"><i class="fas fa-business-time me-2"></i> <?php echo $value["job_type"]; ?></div>
                                                                                <div class="badge-light"><i class="fas fa-calendar-check me-2"></i> <?php the_date(); ?> </div>
                                                                            </div>
                                                                            <p><?php echo $result ?> ... </p>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            <?php }} } 
                                                        wp_reset_postdata();
                                                    ?> 
                                                </ul>
                                            </div>
                                            <div class="blog item" id="casestudies">
                                                <h6>Case Studies of Chanak Analytics</h6>
                                                <ul>
                                                    <?php
                                                        $dPost = new WP_Query(array(
                                                            'post_type' =>'casestudy',
                                                            'posts_per_page' => 3,
                                                            'orderby' => 'ID', 
                                                            'order' => 'DESC',
                                                        ));
                                                        if ($dPost->have_posts()){
                                                            while ($dPost->have_posts()){
                                                                $dPost->the_post();
                                                                global $post;
                                                                $metaData = get_post_meta(get_the_ID(), 'casestudy_enquery_meta_key', true);
                                                                
                                                                    $excerpt = $metaData['case_about'];
                                                                    $excerpt = substr($excerpt, 0, 85);
                                                                    $result = substr($excerpt, 0, strrpos($excerpt, ' '));?>
                                                                    <li>
                                                                        <a class="row ms-3" href="<?php the_permalink() ;?>">
                                                                            <div class="icon-sp p-0 my-auto col-2 me-3">
                                                                                <img src="<?php echo json_decode($metaData['case_logo'])->url ?>" alt="<?php echo json_decode($metaData['case_logo'])->alt ?>"> 
                                                                            </div>
                                                                            <div class="my-auto col-9">
                                                                                <h5 class="mb-2"><?php echo $metaData['case_title'] ;?></h5>
                                                                                <div class="d-flex">
                                                                                    <div class="badge-light">Type: <?php echo $metaData["case_type"]; ?></div>
                                                                                    <?php for($color=1; $color <= $metaData["color_count"]; $color++){?>
                                                                                        <span style="background:<?php echo $metaData['color_'.$color.'_hash']; ?>;"> <?php echo $metaData['color_'.$color.'_hash']; ?></span>
                                                                                    <?php }?>
                                                                                </div>
                                                                                <p><?php echo $result ?> ... </p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                <?php }} 
                                                            wp_reset_postdata();
                                                        ?> 
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle <?php echo $args['page'] == 'services' ? 'active' : ''; ?>" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" onClick="resetNavbar()">service</a>
                            <div class="dropdown-menu mega-menu" aria-labelledby="navbarDropdown">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="item">
                                                <h6>Service Catagories</h6>
                                                <ul>
                                                    <?php
                                                        $categories = get_terms( 'category', array(
                                                            'orderby'    => 'count',
                                                            'order'      => 'DESC',
                                                            'object_type' => 'service',
                                                            'hide_empty' => true
                                                        ) );
                                                        foreach($categories as $index=>$category) {
                                                            $dPost = new WP_Query(array(
                                                                'post_type' => 'service',
                                                                'category_name' => $category->name, 
                                                                'posts_per_page' => 4,
                                                                'orderby' => 'ID', 
                                                                'order' => 'DESC',
                                                                //'offset'=>6
                                                            ));
                                                            if ($dPost->have_posts()){
                                                        ?>
                                                            <li class="<?php echo $category->name=='Web Developement' ? 'active-nav ' : '' ?>">
                                                                <a class="element" onmouseover="hover('service_<?php echo str_replace(' ', '_', $category->name)?>')">
                                                                    <h5><?php echo $category->name ?> </h5>
                                                                </a>
                                                            </li>
                                                        <?php }}
                                                    ?>
                                                    <li><a class="element" href="<?php echo get_site_url();?>/service/"><h5>View All Services →</h5></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <?php
                                                $categories = get_categories();
                                                foreach($categories as $category) { ?>
                                                    <div class="blog item" id="service_<?php echo str_replace(" ", "_", $category->name) ?>">
                                                        <h6><?php echo $category->name ?></h6>
                                                        <ul>
                                                            <?php
                                                                $dPost = new WP_Query(array(
                                                                    'post_type' => 'service',
                                                                    'category_name' => $category->name, 
                                                                    'posts_per_page' => 4,
                                                                    'orderby' => 'ID', 
                                                                    'order' => 'DESC',
                                                                    //'offset'=>6
                                                                ));
                                                                if ($dPost->have_posts()){
                                                                    while ($dPost->have_posts()){
                                                                        $dPost->the_post();
                                                                        $metaData = get_post_meta(get_the_ID(), 'service_enquery_meta_key', true);
                                                                        ?>
                                                                        <li>
                                                                            <a class="row ms-3" href="<?php the_permalink() ;?>">
                                                                                <div class="icon-sp lbg-red col-2 me-3">
                                                                                    <img src="<?php echo json_decode($metaData['feature_logo'])->url ?>" alt="<?php echo json_decode($metaData['feature_logo'])->alt ?>">
                                                                                </div>
                                                                                <div class="my-auto col-9">
                                                                                    <h5><?php the_title(); ?></h5>
                                                                                    <?php
                                                                                        $excerpt = $metaData['service_description'];
                                                                                        $excerpt = substr($excerpt, 0, 150);
                                                                                        $result = substr($excerpt, 0, strrpos($excerpt, ' '));
                                                                                    ?> 
                                                                                    <p><?php echo $result; ?> ...</p>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                    <?php }
                                                                }wp_reset_postdata();
                                                            ?>
                                                        </ul>
                                                    </div>
                                                <?php }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle <?php echo $args['page'] == 'blog' ? 'active' : ''; ?>" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" onClick="resetNavbar()">blog</a>
                            <div class="dropdown-menu mega-menu" aria-labelledby="navbarDropdown">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="item">
                                                <h6>Blog Catagories</h6>
                                                <ul>
                                                    <?php
                                                        $categories = get_terms( 'category', array(
                                                            'orderby'    => 'count',
                                                            'order'      => 'DESC',
                                                            'number'     => 5,
                                                            'hide_empty' => true
                                                        ) );
                                                        foreach($categories as $index=>$category) {
                                                            $dPost = new WP_Query(array(
                                                                'post_type' => 'blog',
                                                                'category_name' => $category->name, 
                                                                'posts_per_page' => 4,
                                                                'orderby' => 'ID', 
                                                                'order' => 'DESC',
                                                                //'offset'=>6
                                                            ));
                                                            if ($dPost->have_posts()){
                                                        ?>
                                                            <li class="<?php echo $index==1 ? 'active-nav' : '' ?>">
                                                                <a class="element" href="<?php echo get_category_link($category); ?>" onmouseover="hover('<?php echo $category->name ?>')">
                                                                    <h5><?php echo $category->name ?></h5>
                                                                </a>
                                                            </li>
                                                        <?php }}
                                                    ?>
                                                    <li><a class="element" href="<?php echo get_site_url();?>/blog/"><h5>View All blog →</h5></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <?php
                                                $categories = get_categories();
                                                foreach($categories as $category) { ?>
                                                    <div class="blog item" id="<?php echo $category->name ?>">
                                                        <h6><?php echo $category->name ?></h6>
                                                        <ul>
                                                            <?php
                                                                $dPost = new WP_Query(array(
                                                                    'post_type' => 'blog',
                                                                    'category_name' => $category->name, 
                                                                    'posts_per_page' => 4,
                                                                    'orderby' => 'ID', 
                                                                    'order' => 'DESC',
                                                                    //'offset'=>6
                                                                ));
                                                                if ($dPost->have_posts()){
                                                                    while ($dPost->have_posts()){
                                                                        $dPost->the_post();
                                                                        ?>
                                                                        <li>
                                                                            <a class="row ms-3" href="<?php the_permalink() ;?>">
                                                                                <div class="my-auto col-2 me-3">
                                                                                    <?php the_post_thumbnail(); ?>
                                                                                </div>
                                                                                <div class="my-auto col-9">
                                                                                    <h5><?php the_title(); ?></h5>
                                                                                    <?php
                                                                                        $excerpt = get_the_excerpt();
                                                                                        $excerpt = substr($excerpt, 0, 100);
                                                                                        $result = substr($excerpt, 0, strrpos($excerpt, ' '));
                                                                                    ?> 
                                                                                    <p><?php echo $result; ?> ...</p>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                    <?php }
                                                                }wp_reset_postdata();
                                                            ?>
                                                        </ul>
                                                    </div>
                                                <?php }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- <li><a class="<?php echo $args['page'] == 'industries' ? 'active' : ''; ?>" href="<?php echo get_site_url();?>/industry/">industries</a></li> -->
                        <li><a class="<?php echo $args['page'] == 'contact-us' ? 'active' : ''; ?>" href="<?php echo get_site_url();?>/contact-us/">contact us</a></li>
                    </ul>
                    <div class="quote-button-2 flex-items-center ms-3">
                        <a class="mx-auto btn-primary" href="<?php echo get_site_url();?>/quote/">Get A Quote</a>
                    </div>
                </div>
            </div>
        </nav>
        <div id="scroll-bar"></div>
    </header>
    <div class="header-mobile">
        <div class="header-item item-center">
            <div class="menu-overlay"></div>
            <nav class="menu">
                <div class="mobile-menu-head">
                    <div class="go-back">
                        <i class="fas fa-angle-double-left"></i>
                    </div>
                    <div class="current-menu-title">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/logo/chanak-logo-new.png" />
                    </div>
                    <div class="mobile-menu-close"><i class="fas fa-times"></i></div>
                </div>
                <ul class="menu-main">
                    <li>
                        <a href="<?php echo get_site_url();?>/">Home</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">
                            About Us 
                            <i class="fas fa-angle-double-right"></i>
                        </a>
                        <div class="sub-menu mega-menu mega-menu-column-4">
                            <ul>
                                <li>
                                    <a href="<?php echo get_site_url();?>/about-us/">About Chanak Analytics →</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        Chanak's Case Studies
                                        <i class="fas fa-angle-double-right"></i>
                                    </a>
                                    <div class="sub-menu mega-menu mega-menu-column-4">
                                        <ul>
                                            <?php
                                                $dPost = new WP_Query(array(
                                                    'post_type' =>'casestudy',
                                                    'posts_per_page' => 3,
                                                    'orderby' => 'ID', 
                                                    'order' => 'DESC',
                                                ));
                                                if ($dPost->have_posts()){
                                                    while ($dPost->have_posts()){
                                                        $dPost->the_post();
                                                        global $post;
                                                        $metaData = get_post_meta(get_the_ID(), 'casestudy_enquery_meta_key', true);
                                                        $excerpt = $metaData['case_about'];
                                                        $excerpt = substr($excerpt, 0, 85);
                                                        $result = substr($excerpt, 0, strrpos($excerpt, ' '));?>
                                                        <li>
                                                            <a class="d-flex single_mbile_menu_item" href="<?php the_permalink() ;?>">
                                                                <div class="mobile_menu_tab_icon ">
                                                                    <img src="<?php echo json_decode($metaData['case_logo'])->url ?>" alt="<?php echo json_decode($metaData['case_logo'])->alt ?>"> 
                                                                </div>
                                                                <div class="mobile_menu_shot_desc">
                                                                    <h5 class="mb-2"><?php echo $metaData['case_title'] ;?></h5>
                                                                    <p><?php echo $result ?> ... </p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    <?php }} 
                                                wp_reset_postdata();
                                            ?> 
                                            <li class="quote-button-2 flex-items-center ms-3">
                                                <a class="mx-auto btn-primary" href="<?php echo get_site_url();?>/casestudy/">View All <i class="fas fa-angle-double-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        Chanak's Career Options
                                        <i class="fas fa-angle-double-right"></i>
                                    </a>
                                    <div class="sub-menu mega-menu mega-menu-column-4">
                                        <ul>
                                            <?php
                                                $dPost = new WP_Query(array(
                                                    'post_type' =>'career',
                                                    'posts_per_page' => 5,
                                                    'orderby' => 'ID', 
                                                    'order' => 'DESC',
                                                ));
                                                if ($the_query->have_posts()){ 
                                                    while ($the_query->have_posts()){
                                                        $the_query->the_post(); 
                                                        global $post;
                                                        $about_enquery_meta_key = get_post_meta($post->ID, 'career_enquery_meta_key',false);
                                                        foreach ($about_enquery_meta_key  as $value){?>
                                                        <li>
                                                            <a class="d-flex single_mbile_menu_item" href="<?php the_permalink() ;?>">
                                                                <div class="mobile_menu_tab_icon ">
                                                                    <?php the_post_thumbnail('thumbnail');?>
                                                                </div>
                                                                <div class="mobile_menu_shot_desc">
                                                                    <p><?php the_title() ?></p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    <?php }} }
                                                wp_reset_postdata();
                                            ?> 
                                            <li class="quote-button-2 flex-items-center my-3">
                                                <a class="mx-auto btn-primary" href="<?php echo get_site_url();?>/career/">View All <i class="fas fa-angle-double-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">
                            Blog
                            <i class="fas fa-angle-double-right"></i>
                        </a>
                        <div class="sub-menu mega-menu mega-menu-column-4">
                            <ul>
                                <?php $dPost = new WP_Query(array(
                                        'post_type' => 'blog',
                                        'posts_per_page' => 5,
                                        'orderby' => 'ID', 
                                        'order' => 'DESC',
                                    ));
                                    if ($dPost->have_posts()){
                                        while ($dPost->have_posts()){
                                            $dPost->the_post();
                                            ?>
                                            <li>
                                                <a class="d-flex single_mbile_menu_item" href="<?php the_permalink() ;?>">
                                                    <div class="mobile_menu_tab_icon ">
                                                        <?php the_post_thumbnail();?>
                                                    </div>
                                                    <div class="mobile_menu_shot_desc">
                                                        <p><?php the_title() ?></p>
                                                    </div>
                                                </a>
                                            </li>
                                        <?php }} 
                                    wp_reset_postdata();
                                ?> 
                                <li class="quote-button-2 flex-items-center my-3">
                                    <a class="mx-auto btn-primary" href="<?php echo get_site_url();?>/blog/">View All <i class="fas fa-angle-double-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">
                            Services
                            <i class="fas fa-angle-double-right"></i>
                        </a>
                        <div class="sub-menu mega-menu mega-menu-column-4">
                            <ul>
                                <?php
                                    $categories = get_terms( 'category', array(
                                        'orderby'    => 'count',
                                        'order'      => 'DESC',
                                        'object_type' => 'service',
                                        'hide_empty' => true
                                    ) );
                                    foreach($categories as $index=>$category) {
                                        $dPost = new WP_Query(array(
                                            'post_type' => 'service',
                                            'category_name' => $category->name, 
                                            'posts_per_page' => 4,
                                            'orderby' => 'ID', 
                                            'order' => 'DESC',
                                            //'offset'=>6
                                        ));
                                        if ($dPost->have_posts()){?>
                                            <li class="menu-item-has-children">
                                                <a href="#">
                                                    <?php echo $category->name ?>
                                                    <i class="fas fa-angle-double-right"></i>
                                                </a>
                                                <div class="sub-menu mega-menu mega-menu-column-4">
                                                    <ul>
                                                        <?php $dPost = new WP_Query(array(
                                                                'post_type' => 'service',
                                                                'category_name' => $category->name, 
                                                                'posts_per_page' => 4,
                                                                'orderby' => 'ID', 
                                                                'order' => 'DESC',
                                                            ));
                                                            if ($dPost->have_posts()){
                                                                while ($dPost->have_posts()){
                                                                    $dPost->the_post();
                                                                    $metaData = get_post_meta(get_the_ID(), 'service_enquery_meta_key', true);
                                                                    ?>
                                                                    <li>
                                                                        <a class="d-flex single_mbile_menu_item" href="<?php the_permalink() ;?>">
                                                                            <div class="mobile_menu_tab_icon icon-sp lbg-red border-0 rounded-4">
                                                                                <img class="h-auto" src="<?php echo json_decode($metaData['feature_logo'])->url ?>" alt="<?php echo json_decode($metaData['feature_logo'])->alt ?>">
                                                                            </div>
                                                                            <div class="mobile_menu_shot_desc">
                                                                                <p><?php the_title(); ?></p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                <?php }} 
                                                            wp_reset_postdata();
                                                        ?>
                                                    </ul>
                                                </div>
                                            </li>
                                        <?php }} 
                                    wp_reset_postdata();
                                ?> 
                                <li class="quote-button-2 flex-items-center my-3">
                                    <a class="mx-auto btn-primary" href="<?php echo get_site_url();?>/service/">View All <i class="fas fa-angle-double-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="<?php echo get_site_url();?>/contact-us/">Contact Us</a>
                    </li>
                    <li>
                        <div class="quote-button-2 flex-items-center my-3">
                            <a class="mx-auto my-0 btn-primary text-decoration-none" href="<?php echo get_site_url();?>/quote/">Get A Quote <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    