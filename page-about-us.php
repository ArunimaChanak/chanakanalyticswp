<?php
get_header('', array('description' => 'About us page', 'title' => 'About us page', 'page' => 'about-us'));
?>
<div class="about_us_banner dot-Union">
    <div class="container">   
        <div class="row gy-4 align-items-center">
            <div class="col-md-12 col-lg-5 col-xl-5">
                <div class="banner-text">
                    <h3>About Us</h3>
                    <p>we provide technology-driven solutions to advance your business.</p>
                </div>
            </div>
            <div class="col-xl-6 col-md-12 col-lg-7">
                <div class="row g-0 itm-card overflow-hidden">
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 position-relative">
                        <div class="item">
                            <div class="ic">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/Smiley-color.png" alt="">
                            </div>
                            <div>
                                <h5>1000+</h5>
                                <p>Successful Delivery</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 position-relative">
                        <div class="item">
                            <div class="ic">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/Briefcase-color.png" alt="">
                            </div>
                            <div>
                                <h5>90%</h5>
                                <p>Repeat Project</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 position-relative">
                        <div class="item">
                            <div class="ic">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/Trophy-color.png" alt="">
                            </div>
                            <div>
                                <h5>40+</h5>
                                <p>Technology Diversity</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 position-relative">
                        <div class="item">
                            <div class="ic">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/Users-color.png" alt="">
                            </div>
                            <div>
                                <h5>10M+</h5>
                                <p>Leads Generated</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  -->
<div class="companies_dtl">
    <div class="container">
        <div class="row gy-5 align-items-center">
            <div class="col-lg-6">
                <div class="ttx">
                    <h2>Tailored Solutions for Every Web Development Need</h2>
                    <p>At Chanak Analytics, we specialise in crafting tailored solutions for every need. From engaging mobile applications to strategic social media campaigns, targeted PPC efforts, and SEO mastery, we turn your digital dreams into a vibrant online reality.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="content">
                    <ul>
                        <li>
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/Stack.png" alt="">
                            <div>
                                <h4>User Experience Design Team.</h4>
                                <p>Etiam sed vulputate nisl, eu elementum arcu. Vivamus dignissim tortor in tellus dictum pellentesque.  Vivamus dignissim tortor in tellus dictum pellentesque. Praesent mauris metus, dictum quis velit non.</p>
                            </div>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/Cpu.png" alt="">
                            <div>
                                <h4>Simple &amp; Clean Line of Code</h4>
                                <p>Vivamus dignissim tortor in tellus dictum pellentesque. Praesent mauris metus, dictum quis velit non. Vivamus dignissim tortor in tellus dictum pellentesque. Praesent mauris metus, dictum quis velit non.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="trd-clients">
    <div class="container">
        <div class="title text-center">
            <h3>SOME OF OUR TRUSTED CLIENTS</h3>
        </div>
        <?php get_template_part('template-parts/client-carousel', 'clients', array('id'=>'clientsLogo')); ?>
    </div>
</div> 
<div class="facts__financials position-relative">
    <div class="container">
        <div class="title text-center">
            <h2 class="mb-0">Quick Facts & Financials</h2>
        </div>
        <div class="row gy-4">
            <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                <div class="item st">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/Stack.png" alt="">
                    <h3>Innovation</h3>
                    <p class="mb-0">We drive creativity with cutting-edge web solutions for tomorrow's challenges</p>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                <div class="item nd">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/Stack.png" alt="">
                    <h3>Quality</h3>
                    <p class="mb-0">Ensuring excellence in very line of code and design.</p>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                <div class="item rd">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/Stack.png" alt="">
                    <h3>Client Base</h3>
                    <p class="mb-0">X+ delighted clients and counting.</p>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                <div class="item th">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/Stack.png" alt="">
                    <h3>Services</h3>
                    <p class="mb-0">From web design to SEO, we cover your entire digital journey.</p>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                <div class="item f-th">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/Stack.png" alt="">
                    <h3>Expertise</h3>
                    <p class="mb-0">Skilled team with cutting-edge web development expertise.</p>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                <div class="item s-th">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/Stack.png" alt="">
                    <h3>Established</h3>
                    <p class="mb-0">Proudly crafting success stories since 2019.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="item svn-th">
                    <div class="row gy-4 align-items-center">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <img class="d-block mx-auto" src="<?php echo get_template_directory_uri();?>/assets/images/give-start.png" alt="">
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <h3>150+ Five Star Reviews</h3>
                            <p class="mb-0">Best suited for freelancers who works individually.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="or__story">
    <div class="container">
        <div class="row gy-4">
            <div class="col-md-6 col-lg-6 ">
                <div class="theml-set">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/grah-cher-1.png" alt="">
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="ttx">
                    <h2>Our Story</h2>
                    <p class="mb-0">Join us on a journey to blend passion, technology and ideas. We create digital stories that bring your vision to life,</p>
                
                    <ul>
                        <li class="d-flex align-items-start">
                            <img class="flex-shrink-0" src="<?php echo get_template_directory_uri();?>/assets/images/icon/check-circle-grn.png" alt="">
                            <div class="ps-3">
                                <h5>Key Performance Metrics.</h5>
                                <span>Proven success fuels our growth; we constantly establish, surpass, and redefine benchmarks.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start">
                            <img class="flex-shrink-0" src="<?php echo get_template_directory_uri();?>/assets/images/icon/check-circle-grn.png" alt="">
                            <div class="ps-3">
                                <h5>Strategic Investments.</h5>
                                <span>Strategically navigating growth, we invest in tools and technologies that define tomorrow.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start">
                            <img class="flex-shrink-0" src="<?php echo get_template_directory_uri();?>/assets/images/icon/check-circle-grn.png" alt="">
                            <div class="ps-3">
                                <h5>Revenue Growth Trends.</h5>
                                <span>Our trajectory? Upwards. Unwavering commitment to growth fuels our revenue success.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start">
                            <img class="flex-shrink-0" src="<?php echo get_template_directory_uri();?>/assets/images/icon/check-circle-grn.png" alt="">
                            <div class="ps-3">
                                <h5>Operational Efficiency.</h5>
                                <span>Efficiency isn't just a word; it's the backbone of our seamless operations.</span>
                            </div>
                        </li>
                    </ul>
                
                </div>
            </div>
        </div>
    </div>
</div>
<!--  -->
<div class="about_story">
    <div class="container">
        <div class="about_head_sub">
            <h2>Crafting Digital Excellence</h2>
<!--             <p>Cras at pellentesque eros. Nullam vitae sapien et felis eleifend luctus. Nam ac dui cursus, efficitur ante sed,</p> -->
        </div>
        <div class="row gy-4">
            <div class="col-md-6 col-lg-6">
                <div class="card_item d-flex">
                    <div class="img_xp p-3 d-flex justify-content-center align-items-center">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/PenNibStraight.svg" alt="">
                    </div>
                    <div class="ttx">
                        <h3>Communicate</h3>
                        <p>We believe in open communication, ensuring your vision is not just heard but truly understood. From concept to execution, we make the journey transparent and collaborative. We keep you in the loop at every milestone!</p>
                        <a href="#" class="link_up">Learn More <img src="<?php echo get_template_directory_uri();?>/assets/images/blueArrowRight.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="card_item d-flex">
                    <div class="img_xp p-3 d-flex justify-content-center align-items-center">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/Package-new.svg" alt="">
                    </div>
                    <div class="ttx">
                        <h3>Reinforce Trust</h3>
                        <p>Trust is the bedrock of our partnerships. We work tirelessly to earn and maintain your trust, delivering on promises and surpassing expectations. Your digital dreams are in trustworthy hands.</p>
                        <a href="#" class="link_up">Learn More <img src="<?php echo get_template_directory_uri();?>/assets/images/blueArrowRight.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="card_item d-flex">
                    <div class="img_xp p-3 d-flex justify-content-center align-items-center">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/Bug.svg" alt="">
                    </div>
                    <div class="ttx">
                        <h3>Humble Approach</h3>
                        <p>We embrace challenges with a down-to-earth spirit, fostering an atmosphere where collaboration thrives and projects flourish.</p>
                        <a href="#" class="link_up">Learn More <img src="<?php echo get_template_directory_uri();?>/assets/images/blueArrowRight.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="card_item d-flex">
                    <div class="img_xp p-3 d-flex justify-content-center align-items-center">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/Database.svg" alt="">
                    </div>
                    <div class="ttx">
                        <h3>Work With The Top 1% Talent</h3>
                        <p>Crafting excellence demands the best. Join forces with us and experience innovation with the top 1% of tech talent at your service.</p>
                        <a href="#" class="link_up">Learn More <img src="<?php echo get_template_directory_uri();?>/assets/images/blueArrowRight.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  -->
<div class="technology_vrTab">
    <div class="container">
        <div class="about_head_sub">
            <h2>Our Technology Capabilities</h2>
            <p>Unleash digital brilliance with our technology prowess—where innovation, efficiency, and cutting-edge solutions meet to shape your digital future.</p>
        </div>

        <div class="vrTab_content">
            <div class="row m-0">
                <div class="col-xl-4 col-lg-5 col-md-6 px-0">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <?php
                            $dPost = new WP_Query(array(
                                'post_type' => 'service',
                                'orderby' => 'ID', 
                                'posts_per_page' => 5,
                                'order' => 'DESC',
                            ));
                            if ($dPost->have_posts()){
                                $i = 1;
                            while ($dPost->have_posts()){
                                $dPost->the_post();
                                $metaData = get_post_meta(get_the_ID(), 'service_enquery_meta_key', true);
                            ?>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link d-flex align-items-start mb-0 <?php echo ($i == 1)? 'active' : ''?>" id="service_<?php echo str_replace(array(':', '\\', '/', '*', ' '), "_", $metaData['service_title']) ?>" data-bs-toggle="tab" data-bs-target="#service_<?php echo str_replace(array(':', '\\', '/', '*', ' '), "_", $metaData['service_title']) ?>_pane" type="button" role="tab" aria-controls="service_<?php echo str_replace(array(':', '\\', '/', '*', ' '), "_", $metaData['service_title']) ?>_pane" aria-selected="true">
                                    <div class="icon-xp flex-shrink-0 d-flex align-items-center justify-content-center icon d-flex justify-content-center align-items-center icon-sp lbg-red">
                                        <img src="<?php echo json_decode($metaData['feature_logo'])->url ?>" alt="<?php echo json_decode($metaData['feature_logo'])->alt ?>">
                                    </div>
                                    <p class="m-0"><?php the_title(); ?></p>
                                </button>
                            </li>
                        <?php $i ++; } 
                            }wp_reset_postdata();
                        ?>
                    </ul>
                </div>
                <div class="col-xl-8 col-lg-7 col-md-6 px-0">
                    <div class="tab-content" id="myTabContent">
                        <?php
                            $dPost = new WP_Query(array(
                                'post_type' => 'service',
                                'orderby' => 'ID', 
                                'posts_per_page' => 5,
                                'order' => 'DESC',
                            ));
                            if ($dPost->have_posts()){
                                $i = 1;
                                while ($dPost->have_posts()){
                                    $dPost->the_post();
                                    $metaData = get_post_meta(get_the_ID(), 'service_enquery_meta_key', true);
                                ?>
                                <div class="tab-pane fade <?php echo ($i == 1)? 'show active' : ''?>" id="service_<?php echo str_replace(array(':', '\\', '/', '*', ' '), "_", $metaData['service_title']) ?>_pane" role="tabpanel" aria-labelledby="service_<?php echo str_replace(array(':', '\\', '/', '*', ' '), "_", $metaData['service_title']) ?>" tabindex="0">
                                    <div class="row g-4">
                                        <?php for($stack=0; $stack <= 5; $stack++){
                                            for($stack_id=0; $stack_id <= 2; $stack_id++){
                                            if(!empty($metaData['stack_image_'.$stack.'_'.$stack_id])){?>
                                            <div class="col-6 col-md-6 col-lg-4 col-xl-3">
                                                <div class="ixp-logo d-flex align-items-center justify-content-center">
                                                    <img src="<?php echo json_decode($metaData['stack_image_'.$stack.'_'.$stack_id])->url ?>" alt="<?php echo json_decode($metaData['stack_image_'.$stack.'_'.$stack_id])->alt ?>">
                                                </div>
                                            </div>
                                        <?php }}} ?>
                                    </div>
                                </div>
                            <?php $i ++; } 
                            }wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  -->
<div class="about_practices">
    <div class="container">
        <div class="about_head_sub">
            <h2>Practices</h2>
            <p>Where Innovation meets practical excellence</p>
        </div>
        <div class="row gy-4">
            <div class="col-md-6 col-lg-4">
                <div class="ttx-item">
                    <h3>Efficient Coding Standards :</h3>
                    <p>Streamlined code for optimal performance. Our developers adhere to industry-leading standards, ensuring clean, efficient, and future-ready web solutions.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="ttx-item">
                    <h3>User-Centric Design Philosophy :</h3>
                    <p>We prioritize users in every design. From seamless navigation to engaging interfaces, our designs are rooted in enhancing user experience, making your digital space truly inviting.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="ttx-item">
                    <h3>Agile Development Methods :</h3>
                    <p>Agile is not just a term; it's our DNA. We embrace flexibility, collaboration, and iterative progress. We ensure rapid development cycles that keep pace with your evolving needs.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  -->
<div class="project__flexibilities">
    <div class="container">
        <div class="head row">
            <div class="col-lg-6">
                <h2 class="mb-0">Project Management models & flexibilities</h2>
            </div>
        </div>
        <div class="row gy-5">
            <div class="col-lg-6">
                <div class="content">
                    <h3>Beat Fraud :</h3>
                    <p>Ensuring security without compromise. Our real-time monitoring and robust protocols shield your digital assets from evolving cyber threats.</p>
                    <div class="img-set position-relative">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/web-page.png" alt="" class="position-absolute w-100 h-100">
                    </div>
                    <ul>
                        <li class="d-flex align-items-start">Real-time threat monitoring.</li>
                        <li class="d-flex align-items-start">Robust protection protocols.</li>
                        <li class="d-flex align-items-start">Shield assets from threats.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="content">
                    <h3>Maximise Acceptance :</h3>
                    <p>Your success is our focus. We drive adoption through user-centric designs and seamless project integration, maximising acceptance for unparalleled growth.</p>
                    <div class="img-set position-relative">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/web-page2.png" alt="" class="position-absolute w-100 h-100">
                    </div>
                    <ul>
                        <li class="d-flex align-items-start">Focus on customer success.</li>
                        <li class="d-flex align-items-start">User-centric design drives adoption.</li>
                        <li class="d-flex align-items-start">Seamless integration maximizes acceptance.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_template_part('template-parts/contact-section', 'contact-section', array('heading'=>true, 'map'=>false)); ?>
<?php 
get_footer();