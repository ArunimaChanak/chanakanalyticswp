<?php
get_header('', array('description' => '', 'title' => 'Chanak analytics', 'page' => 'home')); 
?>
<div class="home-banner dot-Union">
    <div class="container">
        <div id="homeSlider">
            <div>
                <div class="row gy-5">
                    <div class="col-lg-6">
                        <div class="banner-text">
                            <span class="flex-items-center">We want you to Succeed</span>
                            <h1>Digital Transformation</h1>
                            <p>Transform your business into a digital powerhouse and increase your revenue with our proven digital solutions.</p>
                            <div class="button-grp">
                                <a href="<?php echo get_site_url();?>/contact-us/">Get A Quote</a>
                                <button class="vid-btn flex-items-center">
                                    <span class="flex-items-center justify-content-center"></span>
                                    watch Video
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="thm-banr dot-Union">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/hro-banner.png" alt="Template directory">
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="row gy-5">
                    <div class="col-lg-6">
                        <div class="banner-text">
                            <span class="flex-items-center">We want you to Succeed</span>
                            <h1>Digital Marketing & Strategy</h1>
                            <p>Attract and engage your target audience with our tailored digital marketing solutions that deliver measurable results.</p>
                            <div class="button-grp">
                                <a href="<?php echo get_site_url();?>/contact-us/">Get A Quote</a>
                                <button class="vid-btn flex-items-center">
                                    <span class="flex-items-center justify-content-center"></span>
                                    watch Video
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="thm-banr dot-Union">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/hro-banner.png" alt="get template ">
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="row gy-5">
                    <div class="col-lg-6">
                        <div class="banner-text">
                            <span class="flex-items-center">We want you to Succeed</span>
                            <h1>Dedicated Hiring</h1>
                            <p>Access top talent and build your dream team with Chanak Analytics' dedicated hiring services.</p>
                            <div class="button-grp">
                                <a href="<?php echo get_site_url();?>/contact-us/">Get A Quote</a>
                                <button class="vid-btn flex-items-center">
                                    <span class="flex-items-center justify-content-center"></span>
                                    watch Video
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="thm-banr dot-Union">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/hro-banner.png" alt="banner">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<!-- // -->
<div class="trd-clients">
    <div class="container">
        <div class="title text-center">
            <h3>SOME OF OUR TRUSTED CLIENTS</h3>
        </div>
        <?php get_template_part('template-parts/client-carousel', 'clients', array('id'=>'clientsLogo')); ?>
    </div>
</div> 
<!--  -->
<div class="search-ends">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-3 col-md-12">
                <div class="item title me-4">
                    <h2>Your Search for the Perfect Tech Partner Ends Here.</h2>
                    <p>Because at Chanak, technology meets teamwork for success.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="item lgt-blue">
                    <div class="icon-sp overflow-visible">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/technical-support.png" alt="technical support">
                    </div>
                    <h3>100+ Technology Consultants</h3>
                    <p>Tech consultants with business & market understanding are ready to accelerate your transformation journey.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="item lgt-prpl">
                    <div class="icon-sp overflow-visible">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/marketer.png" alt="marketer">
                    </div>
                    <h3>50+ Digital Marketing Strategists</h3>
                    <p>Result-oriented team with niche skills and tools, leveraging market trends.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="item lgt-grp">
                    <div class="icon-sp overflow-visible">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/talent-search.png" alt="telent search">
                    </div>
                    <h3>250+ Talent Pool Pipeline (Top 1%)</h3>
                    <p>Access to Top Talent Across Industries.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  -->
<?php get_template_part('template-parts/category-service', 'category-service'); ?>
<!--  -->
<div class="about-chanak">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card-xp">
                    <span>Innovation with flexibility</span>
                    <h2>Cutting-Edge Development Technologies for Different Needs</h2>
                    <p>By utilizing these methodologies, we can tailor our approach to meet the unique requirements of each project, delivering exceptional results every time.</p>
                    <ul>
                        <li>Agile Development</li>
                        <li>DevOps</li>
                        <li>Scrum</li>
                        <li>Rapid Prototyping</li>
                        <li>Lean Development</li>
                    </ul>
                    <form  method="post" >
                        <div class="fild-box">
                            <input type="email" name="subs_email" id="subs_email" placeholder="Enter your Email" required >
                            <button type="submit">Get started </button>
                            <input type="hidden" name="action3" value="my_contact3" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="img-sp">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/Developement-Methodology.png" alt="development methodology">
                </div>
            </div>
        </div>
    </div>
</div>
<!--  -->
<?php get_template_part('template-parts/ctas2', 'ctas2'); ?>
<!--  -->
<!-- <div class="achievement-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="head">
                    <span>Our Achievement</span>
                    <h2>We are Connecting You The Digital Life.</h2>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="head">
                    <p>The scope the Social Media becomes crucial Is helps the business to directly engage with their needs and wants.</p>
                    <a href="#">Get A Quote <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/MinArrowRight.svg" alt="minarrow"></a>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-5">
            <div class="col-lg-4 col-md-6">
                <div class="item">
                    <h3>
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/Star.png" alt="star">
                        Digital Transformation
                    </h3>
                    <p>More than 2 billion we people over countries use socibooks we to stay in touch with friends.</p>
                    <a href="#">
                        Join Our Community
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/mini-right.png" alt="mini right">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="item">
                    <h3>
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/Trophy.png" alt="trophy">
                        Digital Transformation
                    </h3>
                    <p>More than 2 billion we people over countries use socibooks we to stay in touch with friends.</p>
                    <a href="#">
                        Go To Awards
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/mini-right.png" alt="mini right">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="item">
                    <h3>
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/Trophy.png" alt="Trophy">
                        Digital Transformation
                    </h3>
                    <p>More than 2 billion we people over countries use socibooks we to stay in touch with friends.</p>
                    <a href="#">
                        Go To Awards
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/mini-right.png" alt="right">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!--  -->
<div class="customer-srvs">
    <div class="container">
        <div class="head text-center">
            <h2>Our Commitment to Quality</h2>
            <p>Our team of experts is dedicated to ensuring that our services are delivered on time, on budget, and to the highest standards of quality. Our commitment to quality is evident in everything we do, from our rigorous testing processes to our ongoing support and maintenance services.</p>
        </div>
        <div class="row card-bg gy-5">
            <div class="col-lg-4">
                <div class="item">
                    <div class="tp">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/cosrr-i.png" alt="cosrr">
                    </div>
                    <h4>Top-Tier Software Development with CMMI Level 5 Standards</h4>
                    <p>Our software development processes adhere to globally recognized CMMI Level 5 standards, ensuring high-quality solutions for your business needs.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="item">
                    <div class="tp">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/ISO-chanak.png" alt="ISO chanak">
                    </div>
                    <h4>Commitment to ISO Standards for Quality Management</h4>
                    <p>We are committed to ISO standards for quality management, which guarantees that we consistently deliver high-quality solutions that exceed your expectations.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="item">
                    <div class="tp">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/logo/chanak-logo-short-new.png" alt="chanak logo">
                    </div>
                    <h4>Cutting-Edge In-House Technology for Marketing & Ad Optimization</h4>
                    <p>Our team of experts utilizes cutting-edge in-house technology for ad and marketing optimization, delivering results that drive engagement, conversion, and business growth for your company.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  -->
<!-- <div class="case-studies">
    <div class="container">
        <div class="head text-center">
            <h3>Recent Case Studies</h3>
        </div>
        <div class="row gy-5">
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
                        $about_enquery_meta_key = get_post_meta($post->ID, 'casestudy_enquery_meta_key',false);
                        foreach ($about_enquery_meta_key  as $value  ) {}?>
                        <div class="col-lg-4 col-md-6">
                            <div class="item">
                                <div class="asp-img position-relative">
                                    <?php the_post_thumbnail(array(300,300)); ?>
                                </div>
                                <div class="acles">
                                    <h4><?php the_title() ?></h4>
                                    <div class="d-flex justify-content-between dtl">
                                    <p><i class="far fa-clock me-2"></i><?php echo $value["project_timeline"]; ?></p>
                                    <p><i class="far fa-calendar-alt me-2"></i><?php the_date('d') ?> <?php echo get_the_date('M, Y') ?></p>
                                </div>
                                <?php
                                    $excerpt = get_the_excerpt();
                                    $excerpt = substr($excerpt, 0, 85);
                                    $result = substr($excerpt, 0, strrpos($excerpt, ' '));
                                ?>
                                <ul>
                                    <li>
                                        <span>Industry:</span>
                                        <?php  if($value["Industry"]){ echo $value["Industry"]; } ?>
                                    </li>
                                </ul>
                                <div class="content">
                                    <div class="tech-card d-flex flex-wrap">
                                        <div class="card">
                                            <img src=" <?php echo $value["tech_icon_1"]; ?>" alt="logo"> 
                                        </div>
                                        <div class="card">
                                            <img src=" <?php echo $value["tech_icon_2"]; ?>" alt="logo"> 
                                        </div>
                                        <div class="card">
                                            <img src=" <?php echo $value["tech_icon_3"]; ?>" alt="logo"> 
                                        </div>
                                        <div class="card">
                                            <img src=" <?php echo $value["tech_icon_4"]; ?>" alt="logo"> 
                                        </div>
                                        <div class="card">
                                            <img src=" <?php echo $value["tech_icon_5"]; ?>" alt="logo"> 
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex btn-gpt">
                                    <a href="<?php the_permalink() ;?>">View Details</a>
                                    <?php  if($value["website_name"]){ ?> <span style="background:<?php echo $value["Secondary"]; ?>;color:<?php echo $value["Primary"]; ?>;"> <?php echo $value["Secondary"]; ?> </span> <?php } ?>
                                    <?php  if($value["website_name"]){ ?> <span style="background:<?php echo $value["Primary"]; ?>;color:<?php echo $value["Secondary"]; ?>;"> <?php echo $value["Primary"]; ?> </span> <?php } ?>
                                </div>
                            </div>
                        </div>
                    <?PHP } } 
                    wp_reset_postdata();
                ?> 
            </div>
        </div>
    </div>
</div> -->
<?php get_template_part('template-parts/catagory-case-study', 'catagory-case-study'); ?>
<?php get_template_part('template-parts/contact-section', 'contact-section', array('heading'=>true, 'map'=>false)); ?>
<?php get_template_part('template-parts/catagory-blog', 'catagory-blog'); ?>

<?php
    if( $_SERVER['REQUEST_METHOD'] == 'POST' && !empty( $_POST['action3'] ) && $_POST['action3'] == "my_contact3") {
        $array_interest = array(
            'email' => sanitize_text_field($_REQUEST['subs_email']),
        );

        $interest_post = array(
            'post_title'   => wp_strip_all_tags('New Subscribe: '. $array_interest['email'] ),
            'post_content' => $_REQUEST['subs_email'],
            'post_status'  => 'publish',
            'post_type'    => 'sub_newsletter',
        );
        // print_r($interest_post);
        $PostID = wp_insert_post($interest_post);
        update_post_meta($PostID,'newsletter_meta_key', $array_interest);
        if (isset($PostID) && $PostID == TRUE) {
        ?>
        <script type="text/javascript">
            document.querySelector('body').classList.add('position-relative');
            setTimeout(() => {
                var alertNode = document.querySelector('.alert')
                if (alertNode) { alertNode.lastElementChild.click(); }
                document.querySelector('body').classList.remove('position-relative');
            }, 5000);
        </script>
        <div class="alert floating alert-info alert-dismissible fade show m-0" role="alert">
            <i class="fa-solid fa-circle-check me-2"></i>
            <strong>Your query have been submited</strong>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <?php
        }
    }
?>
<?php

get_footer();