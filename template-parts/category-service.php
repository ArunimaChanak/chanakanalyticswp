<div class="our-services pb-0 mt-5">
    <div class="container">
        <?php 
        !isset($args['category']) ? $args['category'] = array() : $args['category'] = $args['category'];
        $query_args_catagory = array(
            'post_type' => 'service',
            'posts_per_page' => 6,
            'orderby' => 'ID', 
            'tax_query' => array(
                'relation' => 'OR', // Retrieve posts that belong to either category
                array(
                    'taxonomy' => 'category',
                    'field' => 'name',
                    'terms' => $args['category']
                )
            ),
            // 'category_name' => array('Web Developement', 'Application Development'),
            'order' => 'DESC',
        );
        $query_args = array(
            'post_type' => 'service',
            'posts_per_page' => 6,
            'orderby' => 'ID', 
            'order' => 'DESC',
        );
        $dPost = new WP_Query(count($args['category'])==0 ? $query_args : $query_args_catagory);
        if ($dPost->have_posts()){
            $i = 1; ?>
            <div class="head text-center">
                <h2>Our <?php echo count($args['category'])==1 ? $args['category'][0]: 'Relevent'?> Services</h2>
                <p>We Provide Technology Driven Solutions to Advance Your Business.</p>
            </div>
            <div class="row gy-5">
                <?php while ($dPost->have_posts()){
                    $dPost->the_post();
                    $metaData = get_post_meta(get_the_ID(), 'service_enquery_meta_key', true); ?>
                    <div class="col-lg-6 mx-auto">
                        <div class="item">
                            <div class="top">
                                <div class="icon-sp <?php echo ($i%4 == 3)? 'lbg-red' : (($i%4 == 2)? 'lbg-pur' : (($i%4 == 1)? 'lbg-blue' : 'lbg-org')) ?>">
                                    <img src="<?php echo json_decode($metaData['feature_logo'])->url ?>" alt="<?php echo json_decode($metaData['feature_logo'])->alt ?>">
                                </div>
                                <h3><?php echo $metaData['service_title']; ?></h3>
                            </div>
                            <p><?php echo $metaData['tag_1_description']; ?></p>
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
                                <div class="anc-rp">
                                    <a href="<?php echo get_site_url();?>/quote">Get Quote</a>
                                    <a href="<?php the_permalink() ;?>">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php $i ++; } ?> 
            </div>
        <?php }wp_reset_postdata(); ?>
    </div>
</div>