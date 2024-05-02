<div class="case-studies">
    <div class="container">
        <?php
            $dPost = new WP_Query(array(
                'post_type' =>'casestudy',
                'category_name' => !empty($args['category'])?$args['category']:"",
                'posts_per_page' => 3,
                'orderby' => 'ID', 
                'order' => 'DESC',
            ));
            if ($dPost->have_posts()){ ?>
                <div class="head text-center">
                    <h3>Recent Case Studies <?php echo !empty($args['category'])?"on ".$args['category']:"" ?></h3>
                </div>
                <div class="row gy-5">
                    <?php while ($dPost->have_posts()){
                        $dPost->the_post();
                        $categories = get_the_category();
                        $metaData = get_post_meta(get_the_ID(), 'casestudy_enquery_meta_key', true);?>
                            <div class="col-lg-4 col-md-6">
                                <div class="item">
                                    <div class="asp-img position-relative">
                                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>" alt="">
                                    </div>
                                    <div class="acles">
                                        <div class="d-flex align-items-center mb-3">
                                            <img class="logo" src="<?php echo json_decode($metaData['case_logo'])->url ?>" alt="<?php echo json_decode($metaData['case_logo'])->alt ?>"> 
                                            <h4><?php echo $metaData['case_title'] ?></h4>
                                        </div>
                                        <div class="d-flex justify-content-between dtl">
                                        <p><i class="far fa-clock me-2"></i><?php echo $metaData["case_time"]; ?></p>
                                        <p><i class="far fa-calendar-alt me-2"></i><?php the_date('d') ?> <?php echo get_the_date('M, Y') ?></p>
                                    </div>
                                    <ul class="mb-2">
                                        <li class="badge-light mb-0">
                                            <?php echo $metaData["case_type"]; ?>
                                        </li>
                                        <?php foreach($categories as $category){?>
                                            <li class="badge-light mb-0">
                                                <?php echo $category->name; ?>
                                            </li>
                                        <?php }?>
                                    </ul>
                                    <div class="content">
                                        <div class="tech-card d-flex flex-wrap">
                                            <?php for($stack=1; $stack <= $metaData["stack_count"]; $stack++){?>
                                                <div class="card">
                                                    <img src="<?php echo json_decode($metaData['stack_'.$stack])->url ?>" alt="<?php echo json_decode($metaData['stack_'.$stack])->alt ?>"> 
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="d-flex btn-gpt">
                                        <a href="<?php the_permalink() ;?>">View Details</a>
                                        <?php for($color=1; $color <= $metaData["color_count"]; $color++){?>
                                            <span style="background:<?php echo $metaData['color_'.$color.'_hash']; ?>;"> <?php echo $metaData['color_'.$color.'_hash']; ?> </span>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?PHP } ?>
                </div>
            <?php } wp_reset_postdata();
        ?> 
    </div>
</div>