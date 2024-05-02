<?php
/*
Template Name: Local Landing
Template Post Type: local_landing
*/
$metaData = get_post_meta(get_the_ID(), 'local_landing_enquery_meta_key', true);
get_header('', array('description' => $metaData['meta_description'] ?? "", 'title' => 'Local Landing page', 'page' => 'Local Landing'));
$categories = array_map(function($cat) { return $cat->name; }, get_the_category());
?>
<div class="industries-details">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-7 col-xl-6">
                <div class="banner-text">
                    <h1>Mobile Application Development</h1>
                    <p>we provide technology-driven solutions to advance your business.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  -->
<div class="beat-fraud beat-fraud-dtl">
    <div class="container">
        <div class="row gy-5">
            <div class="col-md-12 col-lg-7 col-xl-6 d-flex align-items-lg-end">
                <div class="text-area w-100">
                    <h3>Maximize acceptance</h3>
                    <p>by using deception or false suggestions or suppression of truth or other unethical means,</p>
                    <ul>
                        <li>Upgrade your customer experience instantly</li>
                        <li>Retain more, happier customers</li>
                        <li>Start with done-for-you account setup</li>
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
<!--  -->
<div class="service-dtlSld trd-clients">
    <div class="container">
        <div class="title text-center">
            <h3>SOME OF OUR TRUSTED CLIENTS</h3>
        </div>
        <?php get_template_part('template-parts/client-carousel', 'clients', array('id'=>'clientsLogo')); ?>
    </div>
</div>

<div class="or__story">
    <div class="container">
        <div class="row gy-4">
            <div class="col-md-6 col-lg-6 ">
                <div class="theml-set">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/grah-cher-1.png" alt="">
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="ttx">
                    <h2>Our Story</h2>
                    <p class="mb-0">Join us on a journey to blend passion, technology and ideas. We create digital stories that bring your vision to life,</p>
                
                    <ul>
                        <li class="d-flex align-items-start">
                            <img class="flex-shrink-0" src="<?php echo get_template_directory_uri();?>/assets/images/icon/check-circle-grn.png" alt="">
                            <div class="ps-3">
                                <h5>Key Performance Metrics.</h5>
                                <span>Proven success fuels our growth; we constantly establish, surpass, and redefine benchmarks.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start">
                            <img class="flex-shrink-0" src="<?php echo get_template_directory_uri();?>/assets/images/icon/check-circle-grn.png" alt="">
                            <div class="ps-3">
                                <h5>Strategic Investments.</h5>
                                <span>Strategically navigating growth, we invest in tools and technologies that define tomorrow.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start">
                            <img class="flex-shrink-0" src="<?php echo get_template_directory_uri();?>/assets/images/icon/check-circle-grn.png" alt="">
                            <div class="ps-3">
                                <h5>Revenue Growth Trends.</h5>
                                <span>Our trajectory? Upwards. Unwavering commitment to growth fuels our revenue success.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start">
                            <img class="flex-shrink-0" src="<?php echo get_template_directory_uri();?>/assets/images/icon/check-circle-grn.png" alt="">
                            <div class="ps-3">
                                <h5>Operational Efficiency.</h5>
                                <span>Efficiency isn't just a word; it's the backbone of our seamless operations.</span>
                            </div>
                        </li>
                    </ul>
                
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_template_part('template-parts/category-service', 'category-service', array('category'=>$categories)); ?>

<div class="work-flow">
    <div class="container">
        <div class="row first-row gy-5">
            <div class="col-lg-5">
                <div class="article">
                    <h2>Process &amp; Work flow</h2>
                    <h3>Competitive exchange rate</h3>
                    <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                    <h3>Competitive exchange rate</h3>
                    <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                    <h3>Competitive exchange rate</h3>
                    <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                    <h3>Competitive exchange rate</h3>
                    <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="thum-brn">
                    <img src="../assets/images/work-flow.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('template-parts/category-case-study-large', 'category-case-study-large', array('category'=>$categories)); ?>

<?php get_template_part('template-parts/contact-section', 'contact-section', array('heading'=>true, 'map'=>false)); ?>
<?php
get_footer();