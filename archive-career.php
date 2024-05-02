<?php
get_header('', array('description' => 'Insights page', 'title' => 'Career', 'page' => 'insights'));
/*Template Name: Career*/
?>
<div class="career-banner">
    <div class="container">
        <div class="row gy-5">
            <div class="col-md-5 col-lg-6">
                <div class="banner-text">
                    <h3>Career</h3>
                    <p>Stable, Rewarding Remote Work Opportunities from Chanak Analytics</p>
                    <div class="rated-card">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/rating-kd.png" alt="">
                        </div>
                        <div class="ttx">
                            <div class="pb-2">
                                <span>
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/star.svg" alt="">
                                </span>
                                <span>
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/star.svg" alt="">
                                </span>
                                <span>
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/star.svg" alt="">
                                </span>
                                <span>
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/star.svg" alt="">
                                </span>
                                <span>
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/star.svg" alt="">
                                </span>
                            </div>
                            Rated 4.8 out of 5 on <a href="#">Glassdoor</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-lg-6">
                <div class="video-wrapper">
                    <div class="video-container" id="video-container">
                        <video controls id="video" preload="metadata" poster="<?php echo get_template_directory_uri();?>/assets/images/video-thumbnail.png">
                            <source src="//cdn.jsdelivr.net/npm/big-buck-bunny-1080p@0.0.6/video.mp4" type="video/mp4">
                        </video>
                        <div class="play-button-wrapper" id="circle-play-b">
                            <div title="Play video" class="play-gif" >
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/play-filled.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!--  -->
    <div class="designation-position">
        <div class="section-title">
        <div class="container">
            <h3>Open Positions</h3>
        </div>
    </div>
    <div class="container">
        <div class="filter-src">
            <form action="#">
                <div class="row gy-3">
                    <div class="col-md-4 col-lg-6">
                        <div class="group">
                            <input type="search" name="" id="" placeholder="Job title or keyword">
                            <button type="submit">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/search-icon.svg" alt="">
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="group">
                            <select name="" id="">
                                <option value="Choose Department" selected>Choose Department</option>
                                <option value="Department1">Department1</option>
                                <option value="Department2">Department2</option>
                                <option value="Department3">Department3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="group">
                            <select name="" id="">
                                <option value="Job Type" selected>Job Type</option>
                                <option value="Job Type1">Part Time</option>
                                <option value="Job Type2">Full Time</option>
                                <option value="Job Type3">Dadicated Hiring</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <?php
            $the_query = new WP_Query( array(
                'post_type' => 'career',
                'posts_per_page' => 10,
                    'order'       => 'ASC',
                    'orderby'     => 'id'
            ));
            if ($the_query->have_posts()){ 
                while ($the_query->have_posts()){
                    $the_query->the_post(); 
                    global $post;
                    $about_enquery_meta_key = get_post_meta($post->ID, 'career_enquery_meta_key',false);
                    foreach ($about_enquery_meta_key  as $value){}?>
                    <div class="position-card">
                        <div class="header">
                            <div class="icon">
                                <?php the_post_thumbnail('thumbnail');?>
                            </div>
                            <div class="ttx">
                                <div class="d-flex align-items-start">
                                    <h3> <?php the_title(); ?>  </h3></h3>
                                    <div class="tag tag-blue"><?php echo $value["job_type"]; ?></div>
                                </div>
                                <ul>
                                    <li> <i class="fas fa-briefcase"></i> <?php echo $value["company_name"]; ?></li>
                                    <li> <i class="fas fa-dollar-sign"></i> <?php echo $value["salary"]; ?> </li>
                                    <li> <i class="far fa-calendar-check"></i> Post Date: <span>Nov, 24 2022</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="parag">
                            <?php
                                $excerpt = $value['job_description'];
                                $excerpt = substr($excerpt, 0, 130);
                                $result = substr($excerpt, 0, strrpos($excerpt, ' '));
                            ?> 
                            <p><?php echo $result ?> ... </p>
                            <a href="<?php the_permalink() ;?>" class="btn-para">Apply Now <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/MinArrowRight.svg" alt=""></a>
                        </div>
                        <img class="tag-img" src="<?php echo get_template_directory_uri();?>/assets/images/icon/sv-tag.svg" alt="">
                    </div>
                <?php } 
            }
        wp_reset_postdata();?>
    </div>
</div>
<?php get_template_part('template-parts/stats', 'stats', array('reverse'=>true)); ?>
<div class="perks-benefits">
    <div class="section-title">
        <div class="container">
            <h3>Perks & Benefits</h3>
            <p>Remote does not mean "distant". At Chanak Analytics, you get a competitive benefits package and be part of an award-winning team. Plus, by working remotely, you save more and enjoy a work /life balance.</p>
        </div>
    </div>
    <div class="container">
        <div class="row gy-5">
            <div class="col-sm-6 col-md-4 col-lg-3">
                <a href="#" class="content">
                    <div class="item-logo">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/MagnifyingGlass.png" alt="">
                    </div>
                    <h3>1. Join Our Team</h3>
                    <p>Discover New Career Paths at Chanak Analytics. Embark on a journey filled with growth, learning, and opportunity.</p>
                </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <a href="#" class="content">
                    <div class="item-logo">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/Stack.png" alt="">
                    </div>
                    <h3>2. Employee Benefits</h3>
                    <p>Enjoy competitive salaries, flexible schedules, health benefits, and more at Chanak Analytics!</p>
                </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <a href="#" class="content">
                    <div class="item-logo">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/Code.png" alt="">
                    </div>
                    <h3>3. Training and development</h3>
                    <p>We invest in your growth! Access ongoing training programs to enhance your skills and career.</p>
                </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <a href="#" class="content">
                    <div class="item-logo">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/Package.png" alt="">
                    </div>
                    <h3>4. Company culture</h3>
                    <p>Join a vibrant community that fosters teamwork, creativity, and celebrates success at every milestone.</p>
                </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <a href="#" class="content">
                    <div class="item-logo">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/MagnifyingGlass.png" alt="">
                    </div>
                    <h3>5. Career Paths</h3>
                    <p>Discover diverse career paths in digital strategy, web development, and marketing. Your journey starts here!</p>
                </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <a href="#" class="content">
                    <div class="item-logo">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/Stack.png" alt="">
                    </div>
                    <h3>6. Why Choose Us</h3>
                    <p>We invest in your growth, offering mentorship, career advancement, and a supportive environment.</p>
                </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <a href="#" class="content">
                    <div class="item-logo">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/Code.png" alt="">
                    </div>
                    <h3>7. Meet Our Team</h3>
                    <p>Meet our passionate team of experts dedicated to driving digital innovation and success.</p>
                </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <a href="#" class="content">
                    <div class="item-logo">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/Package.png" alt="">
                    </div>
                    <h3>8. How to Apply</h3>
                    <p>Ready to embark on an exciting career journey? Apply now and kickstart your future with Chanak Analytics!</p>
                </a>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();