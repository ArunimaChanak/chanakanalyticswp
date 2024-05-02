<?php
get_header('', array('description' => 'Blog page', 'title' => 'Blog page', 'page' => 'blog'));
/*Template Name:Blog*/
?>
<div class="blog-banner main-mt">
    <div class="container">
        <div class="title d-flex">
            <h2>Blog & Articles</h2>
            <p>Discover the latest trends, boost traffic and acquire customers. Chanak Analytics delivers proven digital strategies for success. Read now! </p>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-banner-slider">
                <?php
                    $dPost = new WP_Query(array(
                        'post_type' => 'blog',
                        'posts_per_page' => 3,
                        'orderby' => 'ID', 
                        'order' => 'DESC',
                    ));
                    if ($dPost->have_posts()){
                    while ($dPost->have_posts()){
                        $dPost->the_post();
                        $metaData = get_post_meta(get_the_ID(), 'blog_enquery_meta_key', true);
                        ?>
                        <div>
                            <div class="row gy-5">
                                <div class="col-lg-6 col-md-6">
                                    <article>
                                        <span class="badge-primary"> <?php the_category('</span><span class="badge-primary">');?> </span>
                                        <h4>   <a href="<?php the_permalink() ;?>"><?php the_title(); ?></a> </h4>
                                        <ul class="ps-date flex-items-center">
                                        <?php if($avatar = get_avatar(get_the_author_meta('ID')) !== FALSE): ?>
                                            <li><?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?><?php the_author(); ?></li>
                                                
                                            <?php else: ?>
                                                <li><img src="<?php echo get_template_directory_uri();?>/assets/images/person.png" alt="user"> Jesica koli</li>
                                            <?php endif; ?>
                                            <li>
                                                <i class="fas fa-calendar-week"></i>
                                                <?php the_date('d') ?>
                                                <?php echo get_the_date('M, Y') ?> 
                                            </li>
                                            <li>
                                                <i class="fas fa-stopwatch"></i> <?php echo $metaData['read_time'] ?? '3'?> min. to read
                                            </li>
                                        </ul>
                                        <?php
                                            $excerpt = get_the_excerpt();
                                            $excerpt = substr($excerpt, 0, 300);
                                            $result = substr($excerpt, 0, strrpos($excerpt, ' '));
                                        ?> 
                                        <p><?php echo $result; ?></p>
                                    </article>
                                </div>
                                <div class="col-lg-6 col-md-6 px-2 d-none d-md-block">
                                    <div class="brand-img ">
                                    <a href="<?php the_permalink() ;?>"><?php the_post_thumbnail(array(500, 500)); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php    }
                    }wp_reset_postdata();
                    ?>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="post-section">
                    <?php
                        $dPost = new WP_Query(array(
                            'post_type' => 'blog',
                            'posts_per_page' => 2,
                            'orderby' => 'ID', 
                            'order' => 'DESC',
                            'offset'=>3
                        ));
                        if ($dPost->have_posts()){
                            while ($dPost->have_posts()){
                                $metaData = get_post_meta(get_the_ID(), 'blog_enquery_meta_key', true);
                                $dPost->the_post();
                                ?>
                                <div class="item">
                                    <span class="badge-light"> <?php the_category('</span><span class="badge-light">');?></span>
                                    <h6><a href="<?php the_permalink() ;?>"><?php the_title(); ?></a></h6>
                                    <ul class="ps-date flex-items-center">
                                        <?php if($avatar = get_avatar(get_the_author_meta('ID')) !== FALSE): ?>
                                            <li><?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?><?php the_author(); ?></li>  
                                        <?php else: ?>
                                            <li><img src="<?php echo get_template_directory_uri();?>/assets/images/person.png" alt="user"> Jesica koli</li>
                                        <?php endif; ?>
                                            <li>
                                                <i class="fas fa-calendar-week"></i>
                                                <?php the_date('d') ?>
                                                <?php echo get_the_date('M, Y') ?> 
                                            </li>
                                        <li>
                                            <i class="fas fa-stopwatch"></i> <?php echo $metaData['read_time'] ?? '3'?> min. to read
                                        </li>
                                    </ul>
                                    <?php
                                        $excerpt = get_the_excerpt();
                                        $excerpt = substr($excerpt, 0, 50);
                                        $result = substr($excerpt, 0, strrpos($excerpt, ' '));

                                    ?> 
                                    <p>  <?php echo $result; ?> </p>
                                </div>
                            <?php }
                            } wp_reset_postdata();
                        ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="trend-section">
    <div class="container">
        <div class="title">
            <h4>Trending Blogs</h4>
        </div>
        <div class="row gy-5">
            <?php
                $dPost = new WP_Query(array(
                    'post_type' => 'blog',
                    'category_name' => 'trending', 
                    'posts_per_page' => 6,
                    'orderby' => 'ID', 
                    'order' => 'DESC',
                ));
                if ($dPost->have_posts()){
                    while ($dPost->have_posts()){
                        $dPost->the_post();
                        $metaData = get_post_meta(get_the_ID(), 'blog_enquery_meta_key', true);
                        ?>
                        <div class="col-xl-4 col-md-6">
                            <div class="itm-card d-flex">
                                <div class="thumbnail-set">
                                <a href="<?php the_permalink() ;?>"><?php the_post_thumbnail(array(373, 373)); ?></a>
                                </div>
                                <div class="ttx">
                                    <span class="badge-light"> <?php the_category( '</span><span class="badge-light">');?></span>
                                    <p> <a href="<?php the_permalink() ;?>"><?php the_title(); ?></a> </p>
                                    <ul class="ps-date flex-items-center">
                                        <?php if($avatar = get_avatar(get_the_author_meta('ID')) !== FALSE): ?>
                                            <li><?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?><?php the_author(); ?></li> 
                                        <?php else: ?>
                                            <li><img src="<?php echo get_template_directory_uri();?>/assets/images/person.png" alt="user"> Jesica koli</li>
                                        <?php endif; ?>                                       
                                            <li><i class="fas fa-stopwatch"></i> <?php echo $metaData['read_time'] ?? '3'?> min. to read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php }
                }wp_reset_postdata();
            ?>
        </div>
    </div>
</div> -->
<div class="trend-section-or trend-section">
    <div class="container">
        <div class="title">
            <h4>Trending Blogs</h4>
        </div>
        <div class="row gy-4">
            <div class="col-xl-8 col-lg-7 col-md-6">
                <?php
                    $dPost = new WP_Query(array(
                        'post_type' => 'blog',
                        'category_name' => 'Trending', 
                        'posts_per_page' => 2,
                        'orderby' => 'ID', 
                        'order' => 'DESC',
                        //'offset'=>6
                    ));
                    if ($dPost->have_posts()){
                        while ($dPost->have_posts()){
                            $dPost->the_post();
                            $metaData = get_post_meta(get_the_ID(), 'blog_enquery_meta_key', true);
                            ?>
                            <div class="itm-lg d-flex">
                                <div class="thumbnail-set">
                                    <a href="<?php the_permalink() ;?>"><?php the_post_thumbnail(array(130, 130)); ?></a>
                                </div>
                                <div class="ttx">
                                    <div><span class="badge-light"><?php the_category('</span><span class="badge-light">');?></span></div>
                                    <h5><a href="<?php the_permalink() ;?>"><?php the_title(); ?></a></h5>
                                    <ul class="ps-date flex-items-center">
                                        <?php if($avatar = get_avatar(get_the_author_meta('ID')) !== FALSE): ?>
                                            <li><?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?><?php the_author(); ?></li>
                                        <?php else: ?>
                                            <li><img src="<?php echo get_template_directory_uri();?>/assets/images/person.png" alt="user"> Jesica koli</li>
                                        <?php endif; ?>
                                            <li>
                                                <i class="fas fa-calendar-week"></i>
                                                <?php the_date('d') ?>
                                                <?php echo get_the_date('M, Y') ?> 
                                            </li>
                                            <li>
                                                <i class="fas fa-stopwatch"></i> <?php echo $metaData['read_time'] ?? '3'?> min. to read
                                            </li>
                                    </ul>
                                    <?php
                                        $excerpt = get_the_excerpt();
                                        $excerpt = substr($excerpt, 0, 100);
                                        $result = substr($excerpt, 0, strrpos($excerpt, ' '));
                                    ?> 
                                    <p><?php echo $result; ?> </p>
                                    <a href="<?php the_permalink(); ?>" class="read-text">Read More</a>
                                </div>
                            </div>
                        <?php }
                    }wp_reset_postdata();
                ?>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-6">
                <?php
                    $dPost = new WP_Query(array(
                        'post_type' => 'blog',
                        'category_name' => 'Digital Strategies', 
                        'posts_per_page' => 3,
                        'orderby' => 'ID', 
                        'order' => 'ASC',
                        'offset'=>3
                    ));
                    if ($dPost->have_posts()){
                        while ($dPost->have_posts()){
                            $dPost->the_post();
                            $metaData = get_post_meta(get_the_ID(), 'blog_enquery_meta_key', true);
                            ?>
                            <div class="itm-card d-flex">
                                <div class="thumbnail-set">
                                    <a href="<?php the_permalink() ;?>"><?php the_post_thumbnail(array(266, 266)); ?></a>
                                </div>
                                <div class="ttx">
                                    <span class="badge-light"> <?php the_category('</span><span class="badge-light">');?></span>
                                    <p><a href="<?php the_permalink() ;?>"><?php the_title(); ?></a> </p>
                                    <ul class="ps-date flex-items-center">
                                        <?php if($avatar = get_avatar(get_the_author_meta('ID')) !== FALSE): ?>
                                            <li><?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?><?php the_author(); ?></li>        
                                        <?php else: ?>
                                            <li><img src="<?php echo get_template_directory_uri();?>/assets/images/person.png" alt="user"> Jesica koli</li>
                                        <?php endif; ?>
                                            <li>
                                                <i class="fas fa-calendar-week"></i>
                                                <?php the_date('d') ?>
                                                <?php echo get_the_date('M, Y') ?> 
                                            </li>
                                            <li>
                                                <i class="fas fa-stopwatch"></i> <?php echo $metaData['read_time'] ?? '3'?> min. to read
                                            </li>
                                    </ul>
                                </div>
                            </div>
                        <?php }
                    }wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</div>
<!-- <div class="latest-blog-section">
    <div class="container">
        <div class="title">
            <h4>Stay curious</h4>
        </div>
        <div class="row gy-5">
            <?php
                $dPost = new WP_Query(array(
                        'post_type' => 'blog',
                        'posts_per_page' => 6,
                        'orderby' => 'ID', 
                        'order' => 'DESC',
                    ));
                    if ($dPost->have_posts()){
                        while ($dPost->have_posts()){
                        $dPost->the_post();
                        $metaData = get_post_meta(get_the_ID(), 'blog_enquery_meta_key', true);
                            ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="itm-card">
                                    <div class="thumbnail-set">
                                    <a href="<?php the_permalink() ;?>"><?php the_post_thumbnail(); ?></a>
                                    </div>
                                    <div class="ttx">
                                        <span class="badge-light"><?php the_category('</span><span class="badge-light">');?></span>
                                        <h5>  <a href="<?php the_permalink() ;?>"><?php the_title(); ?></a> </h5>
                                        <ul class="ps-date flex-items-center">
                                            <?php if($avatar = get_avatar(get_the_author_meta('ID')) !== FALSE): ?>
                                                <li><?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?><?php the_author(); ?></li>
                                            <?php else: ?>
                                                <li><img src="<?php echo get_template_directory_uri();?>/assets/images/person.png" alt="user"> Jesica koli</li>
                                            <?php endif; ?>
                                                <li>
                                                    <i class="fas fa-calendar-week"></i>
                                                    <?php the_date('d') ?>
                                                    <?php echo get_the_date('M, Y') ?> 
                                                </li>
                                                <li>
                                                    <i class="fas fa-stopwatch"></i> <?php echo $metaData['read_time'] ?? '3'?> min. to read
                                                </li>
                                        </ul>
                                        <?php
                                            $excerpt = get_the_excerpt();
                                            $excerpt = substr($excerpt, 0, 50);
                                            $result = substr($excerpt, 0, strrpos($excerpt, ' '));
                                        ?> 
                                        <p> <?php echo $result; ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    }wp_reset_postdata();
                ?>
        </div>
    </div>
</div>
<div class="latest-blog-section latest-blog-section-or">
    <div class="container">
        <div class="title">
            <h4>Stay curious</h4>
        </div>
        <div class="row gy-5">
            <div class="col-lg-8 col-md-12">
                <div class="row gy-5">
                    <?php
                        $dPost = new WP_Query(array(
                            'post_type' => 'blog',
                            'posts_per_page' => 4,
                            'orderby' => 'ID', 
                            'order' => 'DESC',
                        ));
                        if ($dPost->have_posts()){
                            while ($dPost->have_posts()){
                            $dPost->the_post();
                            $metaData = get_post_meta(get_the_ID(), 'blog_enquery_meta_key', true);
                                ?>
                                <div class="col-lg-6 col-md-6">
                                    <div class="itm-card">
                                        <div class="ttx">
                                            <h5>  <a href="<?php the_permalink() ;?>"><?php the_title(); ?></a> </h5>
                                            <span class="badge-light"><?php the_category('</span><span class="badge-light">');?></span>
                                        </div>
                                        <div class="thumbnail-set">
                                        <a href="<?php the_permalink() ;?>"><?php the_post_thumbnail(); ?></a>
                                        </div>
                                        <div class="ttx">
                                            <ul class="ps-date flex-items-center">
                                                <?php if($avatar = get_avatar(get_the_author_meta('ID')) !== FALSE): ?>
                                                    <li><?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?><?php the_author(); ?></li>
                                                <?php else: ?>
                                                    <li><img src="<?php echo get_template_directory_uri();?>/assets/images/person.png" alt="user"> Jesica koli</li>
                                                <?php endif; ?>
                                                    <li>
                                                    <i class="fas fa-calendar-week"></i>
                                                        <?php the_date('d') ?>
                                                        <?php echo get_the_date('M, Y') ?> 
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-stopwatch"></i> <?php echo $metaData['read_time'] ?? '3'?> min. to read
                                                    </li>
                                            </ul>
                                            <?php
                                                $excerpt = get_the_excerpt();
                                                $excerpt = substr($excerpt, 0, 30);
                                                $result = substr($excerpt, 0, strrpos($excerpt, ' '));

                                                ?> 
                                            <p>  <?php echo $result; ?> </p>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                        }wp_reset_postdata();
                    ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="row gy-3">
                    <?php
                        $dPost = new WP_Query(array(
                            'post_type' => 'blog',
                            'posts_per_page' => 5,
                            'orderby' => 'ID', 
                            'order' => 'DESC',
                        ));
                        if ($dPost->have_posts()){
                            while ($dPost->have_posts()){
                            $dPost->the_post();
                            $metaData = get_post_meta(get_the_ID(), 'blog_enquery_meta_key', true);
                                ?>
                                <div class="col-lg-12 col-md-6">
                                    <div class="brt-card">
                                        <span class="badge-light"><?php the_category('</span><span class="badge-light">');?></span>
                                        <p>  <a href="<?php the_permalink() ;?>"><?php the_title(); ?></a> </p>
                                        <ul class="ps-date flex-items-center">
                                            <?php if($avatar = get_avatar(get_the_author_meta('ID')) !== FALSE): ?>
                                                <li><?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?><?php the_author(); ?></li>
                                            <?php else: ?>
                                                <li><img src="<?php echo get_template_directory_uri();?>/assets/images/person.png" alt="user"> Jesica koli</li>
                                            <?php endif; ?>
                                                <li>
                                                    <i class="fas fa-calendar-week"></i>
                                                    <?php the_date('d') ?>
                                                    <?php echo get_the_date('M, Y') ?> 
                                                </li>
                                                <li>
                                                    <i class="fas fa-stopwatch"></i> <?php echo $metaData['read_time'] ?? '3'?> min. to read
                                                </li>
                                        </ul>
                                    </div>
                                </div>
                            <?php }
                        }wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="blog-listed">
    <div class="container">    
        <div class="row gy-4">
            <div class="col-lg-8">
                <div class="title">
                    <h4>Stay curious</h4>
                </div>
                <?php
                    $dPost = new WP_Query(array(
                        'post_type' => 'blog',
                        'posts_per_page' => 4,
                        'orderby' => 'ID', 
                        'order' => 'DESC',
                    ));
                    if ($dPost->have_posts()){
                        while ($dPost->have_posts()){
                        $dPost->the_post();
                        $metaData = get_post_meta(get_the_ID(), 'blog_enquery_meta_key', true);
                            ?>
                            <div class="itm-lg d-flex">
                                <div class="thumbnail-set">
                                    <a href="<?php the_permalink() ;?>"><?php the_post_thumbnail(); ?></a>
                                </div>
                                <div class="ttx">
                                    <span class="badge-light"> <?php the_category('</span><span class="badge-light">');?> </span>
                                    <h5> <a href="<?php the_permalink() ;?>"><?php the_title(); ?></a> </h5>
                                    <ul class="ps-date flex-items-center">
                                        <?php if($avatar = get_avatar(get_the_author_meta('ID')) !== FALSE): ?>
                                            <li><?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?><?php the_author(); ?></li>    
                                        <?php else: ?>
                                            <li>
                                                <img src="<?php echo get_template_directory_uri();?>/assets/images/person.png" alt="user"> Jesica koli
                                            </li>
                                        <?php endif; ?>
                                            <li>
                                                <i class="fas fa-calendar-week"></i>
                                                <?php the_date('d') ?>
                                                <?php echo get_the_date('M, Y') ?> 
                                            </li>
                                            <li>
                                                <i class="fas fa-stopwatch"></i> <?php echo $metaData['read_time'] ?? '3'?> min. to read
                                            </li>
                                    </ul>
                                    <?php
                                        $excerpt = get_the_excerpt();
                                        $excerpt = substr($excerpt, 0, 50);
                                        $result = substr($excerpt, 0, strrpos($excerpt, ' '));
                                    ?> 
                                    <p><?php echo $result; ?></p>
                                </div>
                            </div>
                        <?php   }
                    }wp_reset_postdata();
                ?>
            </div>
            <div class="col-lg-4">
                <div class="tpbom-area">
                    <div class="heading">
                        <h5>Discover more of what <br> matters to you</h5>
                    </div>
                    <div class="tag__gtp" id="thisTgglCls">
                        <?php
                            $categories = get_categories();
                        foreach($categories as $category) {
                        echo ' <a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a> ';
                        }
                        ?>
                        
                    </div>
                    <div class="heading">
                        <h5>Categories </h5>
                    </div>
                    <ul class="categories">
                    <?php
                        $args = array(
                            'orderby' => 'slug',
                            'parent' => 0
                        );
                        $categories = get_categories( $args );
                        foreach( $categories as $category ){ ?>
                            <li> <?php echo $category->name ?>
                            <span><?php echo $category->category_count ?></span>
                        </li>
                        
                            
                        
                        <?php  }
                    ?>
                            
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="join-community">
    <div class="container">
        <div class="content">
            <div class="ttx text-center">
                <h4>Join the community</h4>
                <p>Join our 400,000+ person community and contribute to a more private and decentralized internet. Start for free.</p>
            </div>
            <form method="post" >
                <div class="fild-box">
                    <input type="email" name="email" id="email" placeholder="Enter your Email" required >
                    <input type="submit" name="" value="Subscribe">
                    <input type="hidden" name="action" value="my_contact" />
                </div>
            </form>
        </div>
    </div>
</div>
<!-- <div class="testimonial-slider">
    <div class="container">
        <div class="heading text-center">
            <h4>What Our Clients Say <br> About Us</h4>
            <p>This is the generation of technology and digitalization. Everything in and around runs both on and off-line but the covid-19 situation in 2020 has actually gleamed the importance and advantage of digital world where all the essentials are available online and with just a click is delivered to our doorstep.</p>
        </div>
    
        <div id="testimonialSlider">
        <?php
    $the_query = new WP_Query( array(
        'post_type' => 'testimonial',
        'post_status' => 'publish',
        
    ) );

    if ( $the_query->have_posts() ) {  ?>
        <?php  while ($the_query->have_posts()){
                $the_query->the_post();
                    global $post;
                    
                $about_enquery_meta_key = get_post_meta($post->ID, 'testimonial_enquery_meta_key',false);
                    
                
                    foreach ( $about_enquery_meta_key as $term ) { ?>
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
                            <p>  <?php  echo $term['t_description'];  ?></p>
                        </div>
                        <div class="dtl">
                            <p> <?php  echo $term['t_name'];  ?> </p>
                            <span> <?php  echo $term['t_company'];  ?> </span>
                        </div>
                    </div>
                </div>
                    
            <?php 
            }?>
                
            <?php   } }  wp_reset_postdata(); ?>
            
        </div>
    </div>
    



</div> -->

<?php
    if( $_SERVER['REQUEST_METHOD'] == 'POST' && !empty( $_POST['action'] ) && $_POST['action'] == "my_contact") {
        $array_interest = array(
            'email' => sanitize_text_field($_REQUEST['email']),
            
        );

        $interest_post = array(
            'post_title'   => wp_strip_all_tags('New Subscribe: '. $array_interest['email'] ),
            'post_content' => $_REQUEST['email'],
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