<?php
get_header('', array('description' => 'Casestudy page', 'title' => 'Casestudy page', 'page' => 'casestudy'));
/*Template Name:casestudy*/
?>
<div class="case-studies-banner case-studies-page">
    <div class="container translate-y">
        <div class="row gy-5">
            <div class="col-md-6 col-lg-6 col-xl-5 d-flex align-items-center">
                <div class="banner-text">
                    <h1>Case Studies</h1>
                    <p>Unleash growth with Chanak Analytics! More traffic, more customers, more sales. Experience the difference today! </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-0">
        <div class="col-md-6 col-lg-6 col-xl-7 px-0 ms-auto">
            <div class="thm-banr">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/web-pages.png" alt="">
            </div>
        </div>
    </div>
</div>
<div class="filter-area">
    <div class="container">
        <div class="head">
            <h2>Trending on Chanak Analytics</h2>
        </div>
        <button class="filte-toggle">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/edit-filter.png" alt="">
        </button>
        <nav>
            <form action="#">
                <div class="search-area">
                    <input type="search" name="" id="" placeholder="Search...">
                    <button type="submit"></button>
                </div>
                <ul>
                    <li>
                        <a href="#" class="active">Project</a>
                    </li>
                    <li>
                        <a href="#">Front End Expert</a>
                    </li>
                    <li>
                        <a href="#">UI/UX Strategist</a>
                    </li>
                </ul>
                <select name="" id="">
                    <option value="All categories" disabled selected>All categories</option>
                    <option value="option1">option1</option>
                    <option value="option2">option2</option>
                    <option value="optio3n">option3</option>
                </select>
            </form>
        </nav>

        <div class="filter-content">
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
                    <?php }
                }wp_reset_postdata();
            ?>
        </div>
    </div>
</div>

<?php get_template_part('template-parts/ctas2', 'ctas2'); ?>
<?php get_template_part('template-parts/catagory-case-study', 'catagory-case-study'); ?>

<div class="trusted-cmp">
    <div class="container">
        <div class="row gy-3">
            <div class="col-lg-6">
                <div class="ttx">
                    <h3>We’re just keep growing with 6.3k trusted companies</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ttx">
                    <h5>Nullam nec ipsum luctus, vehicula massa in, dicim sapien. Aenean quis luctus ert nulla quam augue.</h5>
                </div>
            </div>
            <div class="col-lg-12">
                <div id="trustedCmpSlider">
                    <div>
                        <div class="cmp-item">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/youtube-companie.png" alt="">
                        </div>
                    </div>
                    <div>
                        <div class="cmp-item">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/slack-companie.png" alt="">
                        </div>
                    </div>
                    <div>
                        <div class="cmp-item">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/amazon-companie.png" alt="">
                        </div>
                    </div>
                    <div>
                        <div class="cmp-item">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/microsoft-companie.png" alt="">
                        </div>
                    </div>
                    <div>
                        <div class="cmp-item">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/lenovo-companie.png" alt="">
                        </div>
                    </div>
                    <div>
                        <div class="cmp-item">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/dribble-companie.png" alt="">
                        </div>
                    </div>
                    <div>
                        <div class="cmp-item">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/amazon-companie.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_template_part('template-parts/stats', 'stats'); ?>
<!-- <div class="testimonial-slider">
    <div class="container">
        <div class="heading text-center">
            <h4>What Our Clients Say <br> About Us</h4>
            <p>This is the generation of technology and digitalization. Everything in and around runs both on and off-line but the covid-19 situation in 2020 has actually gleamed the importance and advantage of digital world where all the essentials are available online and with just a click is delivered to our doorstep.</p>
        </div>
        <div id="testimonialSlider">
            <div>
                <div class="say-item text-center">
                    <div class="rating flex-items-center justify-content-center">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/star.svg" alt="stat">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/star.svg" alt="stat">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/star.svg" alt="stat">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/star.svg" alt="stat">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/star.svg" alt="stat">
                    </div>
                    <div class="atle">
                        <p>Certainty say suffering his him collected intention promotion. Hill sold ham men made lose case. Views abode law heard jokes too.</p>
                    </div>
                    <div class="dtl">
                        <p>Andrew Chris</p>
                        <span>Client from Uganda</span>
                    </div>
                </div>
            </div>
            <div>
                <div class="say-item text-center">
                    <div class="rating flex-items-center justify-content-center">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/star.svg" alt="stat">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/star.svg" alt="stat">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/star.svg" alt="stat">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/star.svg" alt="stat">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/star.svg" alt="stat">
                    </div>
                    <div class="atle">
                        <p>Certainty say suffering his him collected intention promotion. Hill sold ham men made lose case. Views abode law heard jokes too.</p>
                    </div>
                    <div class="dtl">
                        <p>Andrew Chris</p>
                        <span>Client from Uganda</span>
                    </div>
                </div>
            </div>
            <div>
                <div class="say-item text-center">
                    <div class="rating flex-items-center justify-content-center">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/star.svg" alt="stat">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/star.svg" alt="stat">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/star.svg" alt="stat">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/star.svg" alt="stat">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/star.svg" alt="stat">
                    </div>
                    <div class="atle">
                        <p>Certainty say suffering his him collected intention promotion. Hill sold ham men made lose case. Views abode law heard jokes too.</p>
                    </div>
                    <div class="dtl">
                        <p>Andrew Chris</p>
                        <span>Client from Uganda</span>
                    </div>
                </div>
            </div>
            <div>
                <div class="say-item text-center">
                    <div class="rating flex-items-center justify-content-center">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/star.svg" alt="stat">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/star.svg" alt="stat">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/star.svg" alt="stat">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/star.svg" alt="stat">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/star.svg" alt="stat">
                    </div>
                    <div class="atle">
                        <p>Certainty say suffering his him collected intention promotion. Hill sold ham men made lose case. Views abode law heard jokes too.</p>
                    </div>
                    <div class="dtl">
                        <p>Andrew Chris</p>
                        <span>Client from Uganda</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<?php
get_footer();