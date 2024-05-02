<?php
$metaData = get_post_meta(get_the_ID(), 'blog_enquery_meta_key', true);
get_header('', array('description' => $metaData['meta_description'] ?? "", 'title' => 'Insights page', 'page' => 'blog'));
?>
    <div class="blog-poster">
        <div class="container">
            <?php 
            while ( have_posts() ) : the_post();
                $post_type = get_post_type( get_the_category()); 
                ?>
                <div class="row">
                    <div class="col-lg-9">
                        <div class="post-top">
                            <div class="user-dtal d-flex">
                                <div class="pic-set">
                                    <?php if($avatar = get_avatar(get_the_author_meta('ID')) !== FALSE): ?>
                                        <?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?>
                                    <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/person1.png" alt="person">
                                    <?php endif; ?>
                                </div>
                                <div class="ttx">
                                    <h4>  <?php the_author(); ?> </h4>
                                    <ul class="ps-date flex-items-center">
                                        <li><i class="far fa-clock"></i><span class="ms-2"><?php the_time(); ?></span></li>
                                        <li><i class="fas fa-calendar-week"></i><span class="ms-2"><?php the_date(); ?></span></li>
                                        <li><i class="fas fa-stopwatch"></i><span class="ms-2"><?php echo $metaData['read_time'] ?? '3'?> min. to read</span></li>
                                    </ul>
                                </div>
                                <div class="socia-link">
                                    <ul class="flex-items-center">
                                        <?php if (!empty($metaData['facebook_link'])){?> 
                                            <li><a target="_blank" href="<?php echo $metaData['facebook_link'] ?>"><i class="fab fa-facebook-f fa-sm"></i></a></li>
                                        <?php }?>
                                        <?php if (!empty($metaData['instagram_link'])){?> 
                                            <li><a target="_blank" href="<?php echo $metaData['instagram_link'] ?>"><i class="fab fa-instagram fa-lg"></i></a></li>
                                        <?php }?>
                                        <li><a target="_blank" href="https://www.linkedin.com/in/rajdeyx/"><i class="fab fa-linkedin-in fa-lg"></i></a></li>
                                        <!-- <li><a><i class="fas fa-bookmark fa-lg"></i></a></li> -->
                                    </ul>
                                </div>
                            </div>
                            <div class="article-text">
                                <div class="heading">
                                    <h1><?php the_title(); ?></h1>
                                </div>
                                <div class="thumbnail-banner">
                                    <?php if(the_post_thumbnail('large') == ""){?>
                                        <?php the_post_thumbnail('large')?>
                                    <?php } else {?>
                                        <img width="373" height="271" src="http://localhost/chanakanalytics/wp-content/uploads/2023/03/thumbnail7.png" class="attachment-large size-large wp-post-image" alt="image" decoding="async">
                                    <?php } ?>
                                </div>
                                <div class="panel-bar">
                                    <!-- <button class="min-filter">filter 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                                        </svg>
                                    </button>
                                    <div class="tab-side">
                                        <ul>
                                            <li><a class="active" href="#">Lorem ipsum dolor</a></li>
                                            <li><a href="#">sit amet, </a></li>
                                            <li><a href="#">consectetur</a></li>
                                            <li><a href="#">adipiscing elit. Ut </a></li>
                                            <li><a href="#">vehicula tempus </a></li>
                                            <li><a href="#">dui sit amet </a></li>
                                            <li><a href="#">scelerisque. Proin</a></li>
                                            <li><a href="#">pulvinar molestie</a></li>
                                            <li><a href="#">tincidunt </a></li>
                                            <li><a href="#">Suspendisse</a></li>
                                            <li><a href="#">consectetur </a></li>
                                            <li><a href="#">molestie dignissim. </a></li>
                                            <li><a href="#">Morbi vitae purus</a></li>
                                            <li><a href="#">erat. Proin nunc</a></li>
                                        </ul>
                                    </div> -->
                                    <article>
                                        <p><?php the_content(); ?> </p>
                                        <?php get_template_part(
                                            'template-parts/ctas', 
                                            'ctas', 
                                            array(
                                                'heading'=>"Join the community",
                                                'description'=>"Join our 400,000+ person community and contribute to a more private and decentralized internet. Start for free.",
                                                'button-text'=>"Subscribe",
                                                'redirect-link'=>"#newsletter"
                                                )
                                            ); 
                                        ?>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="right-btm row">
                            <div class="col-lg-12 col-md-6">
                                <div class="notified-touch text-center">
                                    <h3>Get notified when we’re launching.</h3>
                                    <p>Get insider access - Subscribe to our New-letter and unblock a world of exclusive content</p>
                                    <form  method="post">
                                        <input type="email" name="email" id="email" placeholder="Enter your Email" required >
                                        <button type="submit">Notify Me</button>
                                        <input type="hidden" name="action" value="my_contact" />
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="profile-info">
                                    <div class="img-dp">
                                        <?php if($avatar = get_avatar(get_the_author_meta('ID')) !== FALSE): ?>
                                            <li><?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?></li>
                                        <?php else: ?>
                                            <li><img src="<?php echo get_template_directory_uri();?>/assets/images/person.png" alt="user"> Jesica koli</li>
                                        <?php endif; ?>
                                            <div class="social-link">
                                                <a target="_blank" href="https://www.linkedin.com/in/rajdeyx/">
                                                    <i class="fab fa-linkedin fa-xs"></i>
                                                </a>
                                            </div>
                                    </div>
                                    <h4>About <?php the_author(); ?></h4>
                                    <p>Raj is passionate about helping businesses make data-driven decisions that lead to growth and success. Through his work at Chanak Analytics, he has helped numerous businesses optimize their operations, increase revenue, and gain a competitive edge. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
    <?php get_template_part('template-parts/catagory-blog', 'catagory-blog'); ?>
    <?php get_template_part('template-parts/contact-section', 'contact-section', array('heading'=>true, 'map'=>true)); ?>
    <?php
    if( $_SERVER['REQUEST_METHOD'] == 'POST' && !empty( $_POST['action'] ) && $_POST['action'] == "my_contact") {
        $array_interest = array(
            'email' => sanitize_text_field($_REQUEST['email']),
        );

        $interest_post = array(
            'post_title'   => wp_strip_all_tags('New Subscribe: '. $array_interest['email'] ),
            'post_content' => sanitize_text_field($_REQUEST['email']),
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
<?php
get_footer();

