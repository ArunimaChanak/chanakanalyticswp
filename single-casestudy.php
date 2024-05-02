<?php 
    $metaData = get_post_meta(get_the_ID(), 'casestudy_enquery_meta_key', true);
    $categories = get_the_category();
    $fonts = [];
    for ($typo=1; $typo <= $metaData["typo_count"]; $typo++) {
        $fonts[] = $metaData['typo_'.$typo.'_family']?? '';
    }
    get_header('', array('description' => $metaData['meta_description'] , 'title' => $metaData['case_title'] , 'page' => 'casestudy', "fonts" => $fonts));
    if(have_posts()) :
        while(have_posts()) : the_post();
        ?>
    <div class="case-studies-banner">
        <div class="container">
            <div class="row gy-5">
                <div class="col-md-6 col-lg-6 col-xl-5 d-flex align-items-center">
                    <div class="banner-text">
                        <h1><?php echo $metaData['case_title']; ?></h1>
                        <div class="link">
                            <a target="_blank" href="<?php print_r( $metaData['case_url']  )?> ">
                                <span> Visit</span>
                                <?php print_r( $metaData['case_url']  )?> 
                            </a>
                        </div>
                        <div class="info-area">
                            <div class="info-item">
                                <span>
                                    <i class="far fa-file-alt fa-lg"></i>
                                    Website Type
                                </span>
                                <h6><?php print_r( $metaData['case_type']  )?> </h6>
                            </div>
                            <div class="info-item">
                                <span>
                                    <i class="far fa-file-alt fa-lg"></i>
                                    Project Timeline
                                </span>
                                <h6><?php print_r( $metaData['case_time'])?> </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-7">
                    <div class="thm-banr dot-Union">
                        <img src="<?php echo json_decode($metaData['case_mockup'])->url ?? get_template_directory_uri().'/assets/images/mockup.png' ?>" alt="<?php echo json_decode($metaData['case_mockup'])->alt ?? '' ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
			$first_part = wp_trim_words($metaData['case_about'], 100, false);
			$remaining = substr($metaData['case_about'], strlen($first_part));
    ?>
    <div class="about-project">
        <div class="container">
            <div class="row gy-4">
                <div class="col-md-4 col-lg-3">
                    <div class="title">
                        <h3>About this Project</h3>
                    </div>
                </div>
                <div class="col-md-8 col-lg-9">
                    <div class="para-text">
                        <p> <?php echo $first_part ?? ''; ?> </p>
                    </div>
                </div>
                <div class="col-12 mt-0">
                    <div class="para-text">
                        <p> <?php echo $remaining ?? ''; ?> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dev-stack">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-6">
                    <div class="content">
                        <h3>Technology Stack</h3>
                        <div class="tech-card d-flex flex-wrap">
                            <?php for($stack=1; $stack <= $metaData["stack_count"]; $stack++){?>
                                <div class="card">
                                    <img src="<?php echo !empty($metaData['stack_'.$stack]) ? json_decode($metaData['stack_'.$stack])->url : '' ?>" alt="<?php echo !empty($metaData['stack_'.$stack]) ? json_decode($metaData['stack_'.$stack])->alt : '' ?>"> 
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content">
                        <h3>Colors</h3>
                        <div class="color-card d-flex flex-wrap">
                            <?php for($color=1; $color <= $metaData["color_count"]; $color++){?>
                                <div class="card">
                                    <div class="clr-box">
                                        <div class="clr" style="background: <?php echo $metaData['color_'.$color.'_hash'] ?? ''; ?>"></div>
                                    </div>
                                    <div>
                                        <h6><?php echo $metaData['color_'.$color.'_title'] ?? ''?>: </h6>
                                        <span> <?php echo $metaData['color_'.$color.'_hash'] ?? ''; ?></span>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 gy-3">
                <div class="col-12">
                    <div class="content">
                        <h3>Typography</h3>
                    </div>
                </div>
                <?php for($typo=1; $typo <= $metaData["typo_count"]; $typo++){?>
                    <div class="col-lg-6">
                        <div class="content d-flex d-lg-block align-items-center">
                            <h6 class="mb-0 mb-lg-2">Font-Family: <?php echo $metaData['typo_'.$typo.'_family'] ?? ''; ?> </h6>
                            <p class="ms-3 ms-lg-0"><?php echo $metaData['typo_'.$typo.'_description'] ?? ''; ?></p>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex" style="font-family: <?php echo $metaData['typo_'.$typo.'_family'] ?? ''; ?>;">
                        <div class="ff-text mt-auto d-flex flex-wrap">
                            <div class="item">
                                <div class="ff-type fw-light">
                                    Aa
                                </div>
                                <span>Light</span>
                            </div>
                            <div class="item">
                                <div class="ff-type fw-normal">
                                    Aa
                                </div>
                                <span>Regular</span>
                            </div>
                            <div class="item">
                                <div class="ff-type fw-medium">
                                    Aa
                                </div>
                                <span>Medium</span>
                            </div>
                            <div class="item">
                                <div class="ff-type fw-semibold">
                                    Aa
                                </div>
                                <span>Semi Bold</span>
                            </div>
                            <div class="item">
                                <div class="ff-type fw-bold">
                                    Aa
                                </div>
                                <span>Bold</span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php get_template_part('template-parts/ctas2', 'ctas2'); ?>
    <div class="work-flow">
        <div class="container">
            <div class="row first-row gy-5">
                <div class="col-lg-5">
                    <div class="article">
                        <h2><?php echo !empty($metaData['workflow_title']) ? $metaData["workflow_title"] : 'Process & Work flow'; ?></h2>
                        <?php for($workflow=1; $workflow <= $metaData["work_flow_count"]; $workflow++){?>
                            <h3><?php echo $metaData['workflow_'.$workflow.'_title'] ?? ''; ?></h3>
                            <p><?php echo $metaData['workflow_'.$workflow.'_description'] ?? ''; ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-7 d-flex align-items-center">
                    <div class="thum-brn">
                        <img src="<?php echo json_decode($metaData['workflow_image'])->url ?? '' ?>" alt="<?php echo json_decode($metaData['workflow_image'])->alt ?? '' ?>"> 
                    </div>
                </div>
            </div>
            <div class="row second-row gy-5">
                <div class="col-lg-7 d-flex align-items-center">
                    <div class="thum-brn">
                        <img src="<?php echo json_decode($metaData['feature_image'])->url ?? '' ?>" alt="<?php echo json_decode($metaData['feature_image'])->alt ?? '' ?>"> 
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="article">
                        <h2><?php echo !empty($metaData['feature_title']) ? $metaData["feature_title"] : 'Key Features Of The Project'; ?></h2>
                        <?php for($feature=1; $feature <= $metaData["feature_count"]; $feature++){?>
                            <h3><?php echo $metaData['feature_'.$feature.'_title'] ?? ''; ?></h3>
                            <p><?php echo $metaData['feature_'.$feature.'_description'] ?? ''; ?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php 
    endwhile;
    endif; 
?>
<!-- <div class="happy-clients">
    <div class="container">
        <div class="head text-center">
            <h2>Happy Clients</h2>
            <p>The Marketing Accountability Standards Board (MASB) endorses the definitions, purposes, and constructs of classes</p>
        </div>
        <div id="clientSlider">
            <div>
                <div class="row gy-4">
                    <div class="col-md-6 col-lg-6 d-flex align-items-end">
                        <div class="ttx-artl">
                            <div class="lgr-img">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/profile-1.png" alt="">
                            </div>
                            <p>Not weekly or monthly like other sites out there. This ensures that we offer prospective homebuyers and investors with the freshest- hottest deals on the Internet.</p>
                            
                            <div class="user-dtle">
                                <h5>Rowhan Smith</h5>
                                <span>CEO, Foreclosure</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="clients-thumbnail">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/clien-img1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="row gy-4">
                    <div class="col-md-6 col-lg-6 d-flex align-items-end">
                        <div class="ttx-artl">
                            <div class="lgr-img">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/profile-1.png" alt="">
                            </div>
                            <p>Not weekly or monthly like other sites out there. This ensures that we offer prospective homebuyers and investors with the freshest- hottest deals on the Internet.</p>
                            
                            <div class="user-dtle">
                                <h5>Rowhan Smith</h5>
                                <span>CEO, Foreclosure</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="clients-thumbnail">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/clien-img1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<?php get_template_part('template-parts/catagory-case-study', 'catagory-case-study'); ?>
<?php get_template_part('template-parts/contact-section', 'contact-section', array('heading'=>true, 'map'=>true)); ?>
<?php
get_footer();