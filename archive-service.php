<?php
get_header('', array('description' => 'Service page', 'title' => 'Service page', 'page' => 'services'));
/*Template Name:Service*/
?>
<div class="our_services_banner dot-Union">
    <div class="container translate-y">   
        <div class="row">
            <div class="col-sm-7 col-md-6 col-lg-5 col-xl-5">
                <div class="banner-text">
                    <h3>Our Services</h3>
                    <p>we provide technology-driven solutions to advance your business.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-5 col-md-6 col-lg-6 col-xl-6 ms-auto">
                <div class="thm-banr">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/bubble-circle.png" alt="">
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
<div class="art-content">
    <div class="container">
        <div class="row gy-3">
            <div class="col-lg-5">
                <div class="ttx-area">
                    <h3>Powerful features to help you manage all your leads</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ttx-area">
                    <p>This is the generation of technology and digitalization. Everything in and around runs both on and off-line but the covid-19 situation in 2020 has actually gleamed the importance and advantage of digital world where all the essentials are available online and with just a click is delivered to our doorstep.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  -->
<div class="development-area">
    <div class="container">
        <div class="row gx-4 gy-5">
            <?php
                $dPost = new WP_Query(array(
                    'post_type' => 'service',
                    'posts_per_page' => 6,
                    'orderby' => 'ID', 
                    'order' => 'DESC',
                ));
                if ($dPost->have_posts()){
                    $i = 1;
                while ($dPost->have_posts()){
                    $dPost->the_post();
                    $metaData = get_post_meta(get_the_ID(), 'service_enquery_meta_key', true);
                    ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="item">
                            <div class="top">
                                <div class="icon d-flex justify-content-center align-items-center icon-sp <?php echo ($i%4 == 3)? 'lbg-red' : (($i%4 == 2)? 'lbg-pur' : (($i%4 == 1)? 'lbg-blue' : 'lbg-org')) ?>">
                                    <img src="<?php echo json_decode($metaData['feature_logo'])->url ?>" alt="<?php echo json_decode($metaData['feature_logo'])->alt ?>">
                                </div>
                                <h4><?php echo $metaData['service_title']; ?></h4>
                            </div>
                            <p><?php echo $metaData['service_description']; ?></p>
                            <div class="bomt">
                                <h6>This is the:</h6>
                                <div class="d-flex flex-wrap">
                                <?php for($stack=0; $stack < 5; $stack++){
                                    if(!empty($metaData['stack_image_'.$stack.'_1'])){?>
                                        <div class="card">
                                            <img src="<?php echo json_decode($metaData['stack_image_'.$stack.'_1'])->url ?>" alt="<?php echo json_decode($metaData['stack_image_'.$stack.'_1'])->alt ?>">
                                        </div>
                                    <?php }} ?>
                                </div>
                                <a href="<?php the_permalink() ;?>" class="link__up d-inline-flex align-items-center">
                                    Read More
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/min-Arrow-Right.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                <?php $i ++; } 
                }wp_reset_postdata();
            ?>
        </div>
    </div>
</div>
<div class="filter-area">
    <div class="container">
        <div class="title text-center">
            <p>Get Our Aplication</p>
            <h3>Recent Case Studies</h3>
        </div>
        <div class="filter-content" id="recentCase">
        <?php
                $dPost = new WP_Query(array(
                    'post_type' =>'casestudy',
                    'posts_per_page' => 3,
                    'orderby' => 'ID', 
                    'order' => 'DESC',
                    // "offset"=> 6
                ));
                if ($dPost->have_posts()){
                    while ($dPost->have_posts()){
                        $dPost->the_post();
                        global $post;
                        $categories = get_the_category();
                        $metaData = get_post_meta($post->ID, 'casestudy_enquery_meta_key', true);?>
                        
            <div>
                <div class="row gy-5 direction-ctn">
                    <div class="col-md-6 col-lg-6">
                        <div class="banner">
                            <?php the_post_thumbnail('large')?>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="item">
                            <div class="top">
                                <div class="logo">
                                    <img src="<?php echo json_decode($metaData['case_logo'])->url ?>" alt="<?php echo json_decode($metaData['case_logo'])->alt ?>"> 
                                </div>
                                <div>
                                    <h3><?php echo $metaData["case_title"]; ?></h3>
                                    <a href="<?php echo $metaData["case_url"]; ?>" target="_blank">
                                        <span> Visit</span>
                                        <?php echo $metaData["case_url"]; ?>
                                    </a>
                                </div>
                            </div>
                            <h4><?php the_title(); ?></h4>
                            <?php
                                $excerpt = $metaData['case_about'];
                                $excerpt = substr($excerpt, 0, 150);
                                $result = substr($excerpt, 0, strrpos($excerpt, ' '));
                            ?> 
                            <p><?php echo $result; ?> </p>
                            <div class="btn-gpt">
                                <div class="badge-light mb-2">Type: <?php echo $metaData["case_type"]; ?></div>
                                <?php foreach($categories as $category){?>
                                    <div class="badge-light mb-0"><?php echo $category->name; ?></div>
                                <?php }?>
                                <?php for($color=1; $color <= $metaData["color_count"]; $color++){?>
                                    <span style="background:<?php echo $metaData['color_'.$color.'_hash']; ?>;"> <?php echo $metaData['color_'.$color.'_hash']; ?></span>
                                <?php }?>
                            </div>
                            <div class="content">
                                <div class="tech-card d-flex flex-wrap  mt-2">
                                    <?php for($stack=1; $stack <= $metaData["stack_count"]; $stack++){?>
                                        <div class="card">
                                            <img src="<?php echo json_decode($metaData['stack_'.$stack])->url ?>" alt="<?php echo json_decode($metaData['stack_'.$stack])->alt ?>"> 
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <a href="<?php the_permalink() ;?>" class="lm-btn">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php }
                }wp_reset_postdata();
            ?>
        </div>
    </div>
</div>
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
<?php get_template_part('template-parts/ctas2', 'ctas2'); ?>
<div class="frequently__questions">
    <div class="container mb-5">
        <div class="row gy-5">
            <div class="col-md-12 col-lg-5">
                <div class="ttx">
                    <h3>Frequently asked questions</h3>
                    <p>Got questions? Find answers to the most common questions here. Our FAQ page provides helpful information on topics customers often want to know more about. Learn about our services, industries and more by browsing questions for the topic you need help with.</p>
                    <div class="btn-group">
                        <a href="#"> <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/mini-headset.png" alt=""> Help Center</a>
                        <a href="#">privacy Policy</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-7">
                <div class="accordion_area">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Can Chanak Analytics handle both small and large-scale projects?
                            </button>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Yes, we thrive on diversity—small projects to vast enterprises, we craft solutions for all.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                What industries does Chanak Analytics serve?
                            </button>
                            <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>We cater to various industries, ensuring tailored web solutions that fit your unique needs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How do I get started with Chanak Analytics?
                            </button>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>It's easy! Contact us, share your vision, and let's embark on your digital journey together.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                How can Chanak Analytics help my business?
                            </button>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>We elevate your online presence, boost efficiency, and drive success through cutting-edge web solutions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                What services does Chanak Analytics provide?
                            </button>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>We offer a suite of services—web development, apps, SEO, and more, tailored to your goals.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_template_part('template-parts/contact-section', 'contact-section', array('heading'=>true, 'map'=>false)); ?>

<?php 
get_footer();