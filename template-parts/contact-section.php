<div class="quote-message contact__quote__message">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex">
                <div class="content <?php echo $args['heading']?"":"mt-auto" ?>">
                    <?php if ($args['heading']){ ?>
                        <div class="title">
                            <h3>Your business success <br> is our top priority!</h3>
                            <p>Say goodbye to business challenges and hello to growth opportunities. Contact us to learn more.</p>
                        </div>
                    <?php } ?>
                    <ul>
                        <li class="d-flex align-items-center">
                            <div class="ipd d-flex align-items-center justify-content-center">
                                <!-- <img src="<?php echo get_template_directory_uri();?>/assets/images/message-open.png" alt=""> -->
                                <i class="far fa-envelope-open fa-lg"></i>
                            </div>
                            <div>
                                <p>Email address</p>
                                <h6>partner@chanakanalytics.com</h6>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="ipd d-flex align-items-center justify-content-center">
                                <!-- <img src="<?php echo get_template_directory_uri();?>/assets/images/PhoneCall.png" alt=""> -->
                                <i class="fas fa-mobile-alt fa-lg"></i>
                            </div>
                            <div>
                                <p>Phone Number</p>
                                <h6>+91-798-065-0084</h6>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="ipd d-flex align-items-center justify-content-center">
                                <!-- <img src="<?php echo get_template_directory_uri();?>/assets/images/Envelope.png" alt=""> -->
                                <i class="fas fa-map-marker-alt fa-lg"></i>
                            </div>
                            <div>
                                <p>Address</p>
                                <h6>Plot K, RDB Boulevard, Chanak Analytics, 5th Floor, 1, GP Block, Sector V, Bidhannagar, Kolkata, West Bengal 700091</h6>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-section">
                    <h4>How can we improve your business today?</h4>
                    <form method="post" enctype="multipart/form-data" >
                        <div class="row gy-3">
                            <div class="form-field col-12">
                                <input type="text" name="name" id="name" required >
                                <label for="Name"><i class="fa-regular fa-user"></i> Name</label>
                            </div>
                            <div class="form-field col-sm-6 col-12">
                                <input type="text" name="phonenumber" id="phonenumber" required >
                                <label for="Name"><i class="fa-solid fa-mobile-screen"></i> Phone Number</label>
                            </div>
                            <div class="form-field col-sm-6 col-12">
                                <input type="email" name="email" id="email" required >
                                <label for="email"><i class="fa-regular fa-envelope"></i> Email</label>
                            </div>
                            <div class="form-field col-sm-6 col-12">
                                <input type="text" id="company" name="company" required >
                                <label for="company"><i class="fa-regular fa-building"></i> Company Name</label>
                            </div>
                            <div class="form-field col-sm-6 col-12">
                                <select name="service" id="service" required >
                                    <option disabled selected></option>
                                    <option value="option1">Web Development</option>
                                    <option value="option2">UI/UX Design</option>
                                    <option value="option3">Digital Marketing</option>
                                    <option value="option4">Dedicated Hiring</option>
                                </select>
                                <label for="select"><i class="fas fa-cogs"></i> Service</label>
                            </div>
                            <div class="form-field col-12">
                                <textarea name="description" id="description" required=""></textarea>
                                <label for="textarea"><i class="fa-regular fa-circle-question"></i> Message</label>
                            </div>
                            <div class="form-field col-12">
                                <button type="submit" >Request a quote <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/MinArrowRight.svg" alt=""></button> 
                                <input type="hidden" name="action2" value="my_quote" /> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12">
                <div class="content">
                    <?php if ($args['map']){ ?>
                        <ul>
                            <li class="d-flex align-item-center">
                                <div class="gmap_canvas">
                                    <iframe width="100%" height="100%" id="gmap_canvas"
                                        src="https://maps.google.com/maps?q=Plot K, RDB Boulevard, Chanak Analytics, 5th Floor, 1, GP Block, Sector V, Bidhannagar, Kolkata, West Bengal 700091&t=&z=10&ie=UTF8&iwloc=&output=embed"
                                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                                    </iframe>
                                </div>
                            </li>
                        </ul>
                    <?php } ?>
                    <div class="connect-social">
                        <p>Connect with us:</p>
                        <div class="d-flex flex-wrap">
                            <a target="_blank" href="https://www.facebook.com/chanakanalytics/">
                                <!-- <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/facebook-fill.svg" alt=""> -->
                                <i class="fab fa-facebook-f fa-lg"></i>
                            </a>
                            <a target="_blank" href="https://in.linkedin.com/company/chanakanalytics">
                                <!-- <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/linkedin-fill.svg" alt=""> -->
                                <i class="fab fa-linkedin-in fa-lg"></i>
                            </a>
                            <a target="_blank" href="https://www.instagram.com/chanakanalytics/">
                                <!-- <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/insta-two.svg" alt=""> -->
                                <i class="fab fa-instagram fa-lg"></i>
                            </a>
							<a target="_blank" href="https://twitter.com/chanakanalytics/">
                                <i class="fab fa-twitter fa-lg"></i>
                            </a>
                            <!-- <a href="#">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/twitter-fill.svg" alt="">
                            </a> -->
                            <!-- <a href="#">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/other-social.svg" alt="">
                            </a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    if( $_SERVER['REQUEST_METHOD'] == 'POST' && !empty( $_POST['action2'] ) && $_POST['action2'] == "my_quote") {
        $array_interest = array(
            'name' => sanitize_text_field($_REQUEST['name']),
            'email' => sanitize_text_field($_REQUEST['email']),
            'company' => sanitize_text_field($_REQUEST['company']),
            'service' => sanitize_text_field($_REQUEST['service']),
            'budget' => sanitize_text_field($_REQUEST['budget']),
            'description' => sanitize_text_field($_REQUEST['description']),
        );
        $interest_post = array(
            'post_title'   => wp_strip_all_tags('New quote : '. $array_interest['name'] ),
            'post_content' => $_REQUEST['description'],
            'post_status'  => 'publish',
            'post_type'    => 'quote_form',
        );
        $PostID = wp_insert_post($interest_post);
        update_post_meta($PostID,'quote_form_meta_key', $array_interest);
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