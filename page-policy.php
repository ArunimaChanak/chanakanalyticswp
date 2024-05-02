<?php
get_header('', array('description' => 'Privecy and Policy page', 'title' => 'Privecy and Policy', 'page' => 'policy'));
/*Template Name:Policy*/
?>
<div class="policy_banner">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-6">
                <div class="banner-text">
                    <h1>Privecy and Policy</h1>
                    <p>Say goodbye to business challenges and hello to growth opportunities. Contact us to learn more.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="policy_body">
    <div class="container">
        <?php
            $the_query = new WP_Query( array(
                'post_type' => 'policy',
                'order'       => 'ASC',
                'orderby'     => 'id'
            ));
            if ($the_query->have_posts()){ 
                while ($the_query->have_posts()){
                    $the_query->the_post(); ?>
                    <div class="content mt-auto">
                        <h2><?php the_title(); ?></h2>
                        <div class="policy_description w-100 mt-2"><?php print_r($the_query->posts[0]->post_content); ?></div>
                    </div>
                <?php } 
            }
        wp_reset_postdata();?>
    </div>
</div>
<?php
get_footer();