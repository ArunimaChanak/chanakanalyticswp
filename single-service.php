<?php 
    $metaData = get_post_meta(get_the_ID(), 'service_enquery_meta_key', true);
    get_header('', array('description' => $metaData['meta_description'] , 'title' => $metaData['service_title'] , 'page' => 'casestudy'));
    $clients = [];
    $stack = [];
    $categories = get_the_category();
    foreach ($metaData as $key => $value) {
        if (strpos($key, 'client_') === 0) {
            $clients[$key] = $value;
        }
    }
    foreach ($metaData as $key => $value) {
        if (strpos($key, 'stack_') === 0) {
            $stack[$key] = $value;
        }
    }
    if(have_posts()) :
        while(have_posts()) : the_post();
        ?>
    <div class="service-details">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-7 col-xl-6">
                    <div class="banner-text">
                        <h1><?php echo $metaData['service_title'] ?></h1>
                        <p><?php echo $metaData['service_description'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="beat-fraud beat-fraud-dtl">
        <div class="container">
            <div class="row gy-5">
                <div class="col-md-12 col-lg-7 col-xl-6 d-flex align-items-lg-end">
                    <div class="text-area w-100">
                        <h3><?php echo $metaData['tag_1_title'] ?></h3>
                        <p><?php echo $metaData['tag_1_description'] ?></p>
                        <ul>
                            <li><p><?php echo $metaData['tag_1_usp1'] ?></p></li>
                            <li><p><?php echo $metaData['tag_1_usp2'] ?></p></li>
                            <li><p><?php echo $metaData['tag_1_usp3'] ?></p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 col-lg-5 col-xl-6 ms-auto">
                    <div class="talk-card">
                        <h3>Ready to dive in? Start your free trial tody.</h3>
                        <p>Discuss yourproject reuirements and get the best quote</p>
                        <h5>Schedual a 30 Minutes Call</h5>
                        <a href="#">Choose time to talk</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="service-dtlSld trd-clients">
        <div class="container">
            <div class="title text-center">
                <h3>SOME OF OUR TRUSTED CLIENTS</h3>
            </div>
            <?php get_template_part('template-parts/client-carousel', 'clients', array('id'=>'clientsLogo', "metadata"=>$metaData)); ?>
        </div>
    </div> 
    <div class="financials-dtl">
        <div class="container">
            <div class="header mx-auto">
                <h2><?php echo $metaData['fact_title'] ?></h2>
                <p><?php echo $metaData['fact_description'] ?></p>
            </div>
            <div class="row gy-4">
                <?php for($fact=1; $fact <= $metaData["fact_count"]; $fact++){
                    if(!empty($metaData['fact_'.$fact.'_title']) && !empty($metaData['fact_'.$fact.'_description'])){?>
                    <div class="col-md-6 col-lg-4 mx-auto">
                        <div class="financ-card">
                            <?php if(!empty($metaData['fact_'.$fact.'_image'])):?>
                                <div class="img_xp p-3 d-flex justify-content-center align-items-center">
                                    <img src="<?php echo json_decode($metaData['fact_'.$fact.'_image'])->url ?>" alt="<?php echo json_decode($metaData['fact_'.$fact.'_image'])->alt ?>">
                                </div>
                            <?php endif ?>
                            <h3><?php echo $metaData['fact_'.$fact.'_title'] ?></h3>
                            <p><?php echo $metaData['fact_'.$fact.'_description'] ?></p>
                            <?php if(!empty($metaData['fact_'.$fact.'_link'])):?>
                                <a href="<?php echo $metaData['fact_'.$fact.'_link'] ?>" class="link_up">Learn More <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/blueArrowRight.png" alt=""></a>
                            <?php endif ?>
                        </div>
                    </div>
                <?php }} ?>
            </div>
        </div>
    </div>
    <?php get_template_part('template-parts/ctas2', 'ctas2'); ?>
<!--     <div class="developers-dtl">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-6">
                    <div class="info-ttx">
                        <span><?php echo $metaData['body_tagline'] ?></span>
                        <h2><?php echo $metaData['body_title'] ?></h2>
                        <p><?php echo $metaData['body_description'] ?></p>
                        <a href="<?php echo $metaData['body_button_link'] ?>" class="link_up btn-primary d-flex align-items-center">
                            <?php echo $metaData['body_button_text'] ?> 
                            <img class="flex-shrink-0" src="<?php echo get_template_directory_uri();?>/assets/images/icon/longarrow-right.svg" alt="">
                        </a>
                    </div>
                    <div class="row gy-4">
                        <div class="col-md-6 col-lg-6">
                            <div class="item">
                                <img src="<?php echo json_decode($metaData['body_tag_1_image'])->url ?>" alt="<?php echo json_decode($metaData['body_tag_1_image'])->alt ?>">
                                <h3><?php echo $metaData['body_tag_1_title'] ?></h3>
                                <p><?php echo $metaData['body_tag_1_description'] ?></p>
                                <a href="<?php echo $metaData['body_tag_1_link'] ?>">
                                    <?php echo $metaData['body_tag_1_button_text'] ?> 
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/blueArrowRight.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="item">
                                <img src="<?php echo json_decode($metaData['body_tag_2_image'])->url ?>" alt="<?php echo json_decode($metaData['body_tag_2_image'])->alt ?>">
                                <h3><?php echo $metaData['body_tag_2_title'] ?></h3>
                                <p><?php echo $metaData['body_tag_2_description'] ?></p>
                                <a href="<?php echo $metaData['body_tag_2_link'] ?>">
                                    <?php echo $metaData['body_tag_2_button_text'] ?> 
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/blueArrowRight.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner d-flex align-items-center justify-content-center">
                        <img src="<?php echo json_decode($metaData['body_image'])->url ?>" alt="<?php echo json_decode($metaData['body_image'])->alt ?>">
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <?php get_template_part('template-parts/stack', 'stack', array("stack"=>$stack)); ?>
    <div class="project__flexibilities ">
        <div class="container">
            <div class="head row">
                <div class="col-lg-6">
                    <h2 class="mb-0"><?php echo $metaData['tag_title'] ?></h2>
                </div>
            </div>
            <div class="row gy-5">
                <?php for($tag=2; $tag <= $metaData["tag_count"]; $tag++){
                    if(!empty($metaData['tag_'.$tag.'_title']) && !empty($metaData['tag_'.$tag.'_description'])){?>
                    <div class="col-lg-6 mx-auto">
                        <div class="content">
                            <h3><?php echo $metaData['tag_'.$tag.'_title']?></h3>
                            <p><?php echo $metaData['tag_'.$tag.'_description']?></p>
                            <!-- <?php if(!empty($metaData['tag_'.$tag.'_image'])):?>
                                <div class="img-set position-relative">
                                    <img class="position-absolute rounded-5 w-100 h-100" src="<?php echo json_decode($metaData['tag_'.$tag.'_image'])->url ?>" alt="<?php echo json_decode($metaData['tag_'.$tag.'_image'])->alt ?>">
                                </div>
                            <?php endif ?> -->
                            <ul>
                                <li class="d-flex align-items-start"><p><?php echo $metaData['tag_'.$tag.'_usp1']?></p></li>
                                <li class="d-flex align-items-start"><p><?php echo $metaData['tag_'.$tag.'_usp2']?></p></li>
                                <li class="d-flex align-items-start"><p><?php echo $metaData['tag_'.$tag.'_usp3']?></p></li>
                            </ul>
                        </div>
                    </div>
                <?php }} ?>
            </div>
        </div>
    </div>
    <?php get_template_part('template-parts/stats', 'stats', array('reverse'=>true)); ?>
    <!-- <?php get_template_part('template-parts/catagory-case-study', 'catagory-case-study', array('category'=>$categories[0]->name)); ?>
    <?php get_template_part('template-parts/catagory-blog', 'catagory-blog', array('category'=>$categories[0]->name)); ?> -->
    
<?php 
    endwhile;
    endif; 
?>
<?php get_template_part('template-parts/contact-section', 'contact-section', array('heading'=>true, 'map'=>false)); ?>
<?php
get_footer();