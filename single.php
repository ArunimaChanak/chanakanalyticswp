<?php
get_header('', array('description' => 'Insights page', 'title' => 'Insights page', 'page' => 'blog'));
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
                                        <li><img src="<?php echo get_template_directory_uri();?>/assets/images/icon/min-calender.svg" alt="calender"><span><?php the_time(); ?></span></li>
                                        <li><img src="<?php echo get_template_directory_uri();?>/assets/images/icon/min-clock.svg" alt="clock"><?php the_date(); ?></li>
                                        <li><img src="<?php echo get_template_directory_uri();?>/assets/images/icon/min-clock.svg" alt="clock"> 3 min. to read</li>
                                    </ul>
                                </div>
                                <div class="socia-link">
                                    <ul class="flex-items-center">
                                        <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/icon/facebook-fill.svg" alt=""></a></li>
                                        <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/icon/twitter-fill.svg" alt=""></a></li>
                                        <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/icon/insta-stock.svg" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="article-text">
                                <div class="heading">
                                    <h3><?php the_title(); ?></h3>
                                </div>
                                <div class="thumbnail-banner">
                                    <?php if(the_post_thumbnail('large') == ""){?>
                                        <?php the_post_thumbnail('large')?>
                                    <?php } else {?>
                                        <img width="373" height="271" src="http://localhost/chanakanalytics/wp-content/uploads/2023/03/thumbnail7.png" class="attachment-large size-large wp-post-image" alt="" decoding="async">
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
                                                'redirect-link'=>"#"
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
                                                <a href="#">
                                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="#7390F9" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill="#7390F9" d="M18.7627 5.13052C19.623 4.61485 20.2836 3.79833 20.5947 2.82546C19.7897 3.30287 18.898 3.64962 17.9489 3.83652C17.1889 3.02676 16.1061 2.52075 14.9078 2.52075C12.6067 2.52075 10.7412 4.38621 10.7412 6.6871C10.7412 7.01365 10.7781 7.33165 10.8491 7.63658C7.38636 7.46283 4.31635 5.80411 2.2614 3.28341C1.90276 3.89876 1.6973 4.61448 1.6973 5.37802C1.6973 6.82348 2.43292 8.09877 3.55087 8.8459C2.86784 8.82428 2.22545 8.63687 1.66365 8.32481C1.66335 8.34219 1.66335 8.35964 1.66335 8.37717C1.66335 10.3959 3.09953 12.0799 5.00554 12.4626C4.65589 12.5578 4.28782 12.6087 3.90779 12.6087C3.63934 12.6087 3.37831 12.5826 3.12397 12.5339C3.65412 14.1893 5.1928 15.3938 7.01599 15.4275C5.59007 16.5449 3.79355 17.211 1.84155 17.211C1.50528 17.211 1.17361 17.1913 0.847656 17.1528C2.69149 18.335 4.88156 19.0247 7.23446 19.0247C14.898 19.0247 19.0887 12.676 19.0887 7.17024C19.0887 6.98958 19.0847 6.80989 19.0767 6.63124C19.8907 6.04382 20.5971 5.30998 21.1557 4.47445C20.4085 4.80583 19.6055 5.02979 18.7627 5.13052Z" fill="#111113"/>
                                                    </svg>    
                                                </a>
                                                <a href="#">
                                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="#7390F9" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill="#7390F9" d="M9.51389 11.0949V20.2431H12.5486V11.2378H15.0556L15.4514 7.95023H12.5486V5.94908C12.5486 4.9485 12.8125 4.37674 14 4.37674H15.5833V1.51794C15.3194 1.51794 14.3958 1.375 13.3403 1.375C11.0972 1.375 9.51389 2.94734 9.51389 5.6632V7.95023H6.875V11.0949H9.51389Z" fill="#111113"/>
                                                    </svg>    
                                                </a>
                                                <a href="#">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="#7390F9" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill="#7390F9" d="M7.65039 0C3.4256 0 0 3.42407 0 7.64698C0 10.7775 1.88527 13.4676 4.57999 14.6522C4.55949 14.1196 4.57657 13.4778 4.71319 12.8974C4.86005 12.2761 5.69681 8.72916 5.69681 8.72916C5.69681 8.72916 5.4509 8.24098 5.4509 7.52066C5.4509 6.38727 6.10665 5.54064 6.92633 5.54064C7.62307 5.54064 7.95777 6.06296 7.95777 6.68769C7.95777 7.38752 7.51036 8.43216 7.28153 9.40168C7.09027 10.2142 7.68796 10.873 8.49057 10.873C9.93867 10.873 10.9155 9.01251 10.9155 6.80717C10.9155 5.13098 9.78498 3.87811 7.73236 3.87811C5.41333 3.87811 3.96522 5.60892 3.96522 7.54115C3.96522 8.20684 4.16331 8.67795 4.4707 9.03982C4.61072 9.20709 4.63122 9.27537 4.57999 9.46655C4.54242 9.60651 4.46045 9.94448 4.42288 10.081C4.37165 10.2756 4.21454 10.3439 4.04036 10.2722C2.97136 9.83524 2.47271 8.66771 2.47271 7.34997C2.47271 5.17878 4.30676 2.57403 7.94069 2.57403C10.8608 2.57403 12.7837 4.68719 12.7837 6.95397C12.7837 9.95472 11.1136 12.1942 8.6545 12.1942C7.82799 12.1942 7.0527 11.747 6.7863 11.2417C6.7863 11.2417 6.34231 13.0033 6.24668 13.3447C6.08616 13.9352 5.76853 14.5224 5.47822 14.9833C6.18243 15.1909 6.91276 15.2967 7.64697 15.2974C11.8718 15.2974 15.2974 11.8733 15.2974 7.65039C15.2974 3.42748 11.8752 0 7.65039 0Z" fill="#7390F9"/>
                                                    </svg>    
                                                </a>
                                            </div>
                                    </div>
                                    <h4>About  <?php the_author(); ?></h4>
                                    <p>He is the co-founder of Chanak Analytics. The Wall Street Journal calls him a top influencer on the web, Forbes says he is one of the top 10 marketers, and Entrepreneur Magazine says he created one of the 100 most brilliant companies. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
    <div class="latest-blog-section">
        <div class="container">
            <div class="title">
                <h4>Latest blog</h4>
            </div>
            <div class="row gy-5">
            <?php  
                $args = array('post_type' => "blog" , 'posts_per_page' => 3);
                $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
                    $id=get_the_ID();
                    ?>	
                    <div class="col-lg-4 col-md-6">
                        <div class="itm-card">
                            <div class="thumbnail-set">
                            <a href="<?php the_permalink() ;?>"><?php the_post_thumbnail(); ?></a></div>
                            <div class="ttx">
                                <span class="badge-light"><?php the_category('</span><span class="badge-light">');?></span>
                                <h5><a href="<?php the_permalink() ;?>"><?php the_title(); ?></a></h5>
                                <ul class="ps-date flex-items-center">
                                    <?php if($avatar = get_avatar(get_the_author_meta('ID')) !== FALSE): ?>
                                        <li><?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?><?php the_author(); ?></li>
                                    <?php else: ?>
                                        <li><img src="<?php echo get_template_directory_uri();?>/assets/images/person.png" alt="user"> Jesica koli</li>
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
                                <p> <?php echo $result; ?> </p>
                            </div>
                        </div>
                    </div>
                <?php endwhile;?>
            </div>
        </div>
    </div>
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

