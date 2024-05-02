 <?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage chanakanalytics
 * @since chanakanalytics 1.3
 */
?>
<footer>
        <div class="container">
            <div class="top-link">
                <div class="row gy-5">
                    <div class="col-lg-3 col-md-3 col-6">
                        <h6>Home</h6>
                        <ul>
                            <li>
                                <a href="<?php echo get_site_url();?>/about-us/">About us</a>
                            </li>
                            <li>
                                <a href="<?php echo get_site_url();?>/contact-us/">Contect us</a>
                            </li>
                            <li>
                                <a href="<?php echo get_site_url();?>/blog/">Contect us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-6">
                        <h6>Resources</h6>
                        <ul>
                            <li>
                                <a href="<?php echo get_site_url();?>/category/digital-strategies/">Digital Strategies</a>
                            </li>
                            <li>
                                <a href="<?php echo get_site_url();?>/category/web-developement/">Web Development</a>
                            </li>
                            <li>
                                <a href="<?php echo get_site_url();?>/category/seo/">SEO</a>
                            </li>
                            <li>
                                <a href="<?php echo get_site_url();?>/category/technology/">Technology</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-6">
                        <h6>Main links</h6>
                        <ul>
                            <li>
                                <a href="<?php echo get_site_url();?>/quote/">Get Qoute</a>
                            </li>
                            <li>
                                <a href="<?php echo get_site_url();?>/career/">Career</a>
                            </li>
                            <li>
                                <a href="<?php echo get_site_url();?>/casestudy/">Case study</a>
                            </li>
                            <li>
                                <a href="<?php echo get_site_url();?>/service/">Service page</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-6">
                        <h6>Services</h6>
                        <ul>
                            <?php
                                $dPost = new WP_Query(array(
                                    'post_type' => 'service',
                                    'orderby' => 'ID', 
                                    'posts_per_page' => 4,
                                    'order' => 'DESC',
                                ));
                                if ($dPost->have_posts()){
                                    while ($dPost->have_posts()){
                                        $dPost->the_post();
                                        $metaData = get_post_meta(get_the_ID(), 'service_enquery_meta_key', true);
                                    ?>
                                    <li>
                                        <a href="<?php the_permalink() ;?>"><?php the_title(); ?></a>
                                    </li>
                                    <?php } 
                                }wp_reset_postdata();
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="bottom-link">
                <div class="row gy-5">
                    <div class="col-lg-7 col-md-12">
                        <div class="row">
                            <div class="col-lg-5 col-md-5">
                                <h6>Contact</h6>
                                <p>Plot K, RDB Boulevard, Chanak Analytics, 5th Floor, 1, GP Block, Sector V, Bidhannagar, Kolkata, West Bengal 700091</p>
                            </div>
                            <div class="col-lg-7 col-md-7">
                                <ul>
                                    <li>Email : <span>partner@chanakanalytics.com</span></li>
                                    <li>WhatsApp : <span>+91-7980650084</span></li>
                                    <!-- <li>USA : <span>12293664976</span></li>
                                    <li>UK : <span>442037407969</span></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 news-letter">
                        <h6>Subscribe Chanak's Newsletter</h6>
                        <p>Subscribe to be the first one to know about updates. Enter your email</p>
                        <form method="post" id="newsletter">
                            <div class="fild-box">
                                <input type="email" name="email" id="" placeholder="Enter your Email" required >
                                <input type="submit" value="Subscribe">
                                <input type="hidden" name="action2" value="my_contact2" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php get_template_part('template-parts/client-carousel', 'clients', array('id'=>'multiLogo')); ?>
            <!-- <div class="horizontal-logo-prt" id="multiLogo">
                <div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/Agnes_Solutions.png" alt="Solutions">
                    </div>
                </div>
                <div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/cloud9.png" alt="cloud9">
                    </div>
                </div>
                <div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/Adyas.png" alt="adyas">
                    </div>
                </div>
                <div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/Agnes_Solutions.png" alt="Agnes">
                    </div>
                </div>
                <div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/cloud9.png" alt="Cloud9">
                    </div>
                </div>
                <div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/Adyas.png" alt="Adyas">
                    </div>
                </div>
                <div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/cloud9.png" alt="Cloud9">
                    </div>
                </div>
            </div> -->
        </div>
        <div class="copy-right">
            <div class="container flex-items-center d-flex justify-content-between">
                <ul class="flex-items-center">
                    <li>
                        <a target="_blank" href="https://www.facebook.com/chanakanalytics/">
                            <!-- <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/facebook-fill.svg" alt="facebook"> -->
                                                            <i class="fab fa-facebook-f fa-lg"></i>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://in.linkedin.com/company/chanakanalytics">
                            <!-- <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/linkedin-fill.svg" alt="linkedin"> -->
                                                            <i class="fab fa-linkedin-in fa-lg"></i>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.instagram.com/chanakanalytics/">
                            <!-- <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/insta-stock.svg" alt="Insta"> -->
                                                            <i class="fab fa-instagram fa-lg"></i>
                        </a>
                    </li>
					<li>
                        <a target="_blank" href="https://twitter.com/chanakanalytics/">
                            <!-- <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/insta-stock.svg" alt="Instastock"> -->
                                                            <i class="fab fa-twitter fa-lg"></i>
                        </a>
                    </li>
                </ul>
                <p>© <?php echo date('Y'); ?> Chanak Analytics. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    
    <?php wp_footer(); ?>
    <script type="text/javascript">
        $(window).on('load', () => {
            $('body').removeAttr('style');
            $('#preloader').remove();
            // $('#preloader').css("display", "none");
        })
    </script>
   
</body>
</html>

<?php
    if( $_SERVER['REQUEST_METHOD'] == 'POST' && !empty( $_POST['action2'] ) && $_POST['action2'] == "my_contact2") {
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