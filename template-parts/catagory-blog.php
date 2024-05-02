<div class="latest-blog-section home__blog">
    <div class="container">
        <?php
            $dPost = new WP_Query(array(
                'post_type' => 'blog',
                'category_name' => !empty($args['category'])?$args['category']:"",
                'posts_per_page' => 3,
                'orderby' => 'ID', 
                'order' => 'DESC',
            ));
            if ($dPost->have_posts()){ ?>
                <div class="title text-center">
                    <h4>Our Latest Blogs <?php echo !empty($args['category'])?"on ".$args['category']:"" ?></h4>
                </div>
                <div class="row gy-5">
                    <?php while ($dPost->have_posts()){
                        $dPost->the_post(); 
                        $metaData = get_post_meta(get_the_ID(), 'blog_enquery_meta_key', true);
                        ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="itm-card">
                                <div class="thumbnail-set">
                                    <a href="<?php the_permalink() ;?>"><?php the_post_thumbnail(array(500, 500)); ?></a>
                                </div>
                                <div class="ttx">
                                    <span class="badge-light"><?php the_category("</span><span class='badge-light'>"); ?> </span>
                                    <h5> <a href="<?php the_permalink() ;?>"><?php the_title(); ?></a></h5>
                                    <ul class="ps-date flex-items-center">
                                    <?php if($avatar = get_avatar(get_the_author_meta('ID')) !== FALSE): ?>
                                        <li>
                                            <?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?>
                                            <?php the_author(); ?>
                                        </li>
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
                                        $excerpt = substr($excerpt, 0, 100);
                                        $result = substr($excerpt, 0, strrpos($excerpt, ' '));
                                    ?> 
                                    <p>  <?php echo $result; ?> </p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php }wp_reset_postdata(); 
        ?>
    </div>
</div>