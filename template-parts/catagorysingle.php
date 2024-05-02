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
                                                <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/min-calender.svg" alt="calender">
                                                <?php the_date('d') ?>
                                                <?php echo get_the_date('M, Y') ?> 
                                            </li>
                                            <li>
                                                <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/min-clock.svg" alt="clock"> 3 min. to read
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