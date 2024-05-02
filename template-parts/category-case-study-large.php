<div class="filter-area">
    <div class="container">
        <?php
        !isset($args['category']) ? $args['category'] = array() : $args['category'] = $args['category'];
        $query_args_catagory = array(
            'post_type' => 'casestudy',
            'posts_per_page' => 3,
            'orderby' => 'ID', 
            'tax_query' => array(
                'relation' => 'OR',
                array(
                    'taxonomy' => 'category',
                    'field' => 'name',
                    'terms' => $args['category']
                )
            ),
            'order' => 'DESC',
        );
        $query_args = array(
            'post_type' => 'casestudy',
            'posts_per_page' => 3,
            'orderby' => 'ID', 
            'order' => 'DESC',
        );
        $dPost = new WP_Query(count($args['category'])==0 ? $query_args : $query_args_catagory);
        if ($dPost->have_posts()){?>
            <div class="title text-center">
                <p>Get Our Aplication</p>
                <h3>Recent Case Studies</h3>
            </div>
            <div class="filter-content" id="recentCase">
            <?php while ($dPost->have_posts()){
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