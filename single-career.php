<?php
$metaData = get_post_meta(get_the_ID(), 'career_enquery_meta_key', true);
get_header('', array('description' => $metaData['meta_description'] ?? "", 'title' => 'Career', 'page' => 'Career'));

while ( have_posts() ) : the_post();
    $post_type = get_post_type( get_the_category());
    $job_description = get_the_excerpt();
?>
    <div class="career-banner">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-6 order-lg-0 order-0 order-0">
                    <div class="banner-text career_page_title">
                        <div class="row">
                            <div class="col-md-3 col-lg-2 col-12">
                                <div class="logo-icon mb-3">
                                    <?php the_post_thumbnail('thumbnail');?>
                                </div>
                            </div>
                            <div class="col-md-9 col-lg-10 col-12">
                                <h3><?php the_title(); ?></h3>
                            </div>
                        </div>
                        <div class="job_description">
                            <p><?php echo $metaData['job_description']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="quote-message contact__quote__message carrer_quote_message">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-1 order-4 d-flex">
                    <div class="content mt-auto">
                        <ul>
                            <li class="d-flex align-items-center">
                                <div class="ipd d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-briefcase"></i>
                                </div>
                                <div>
                                    <p>For Application</p>
                                    <h6><?php echo $metaData['company_name']; ?></h6>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="ipd d-flex align-items-center justify-content-center">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div>
                                    <p>Job Location</p>
                                    <h6><?php echo $metaData['job_location']; ?></h6>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="ipd d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-user-check"></i>
                                </div>
                                <div>
                                    <p>Job type</p>
                                    <h6><?php echo $metaData['job_type']; ?></h6>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="ipd d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-wallet"></i>
                                </div>
                                <div>
                                    <p>Salary</p>
                                    <h6><?php echo $metaData['salary']; ?></h6>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="ipd d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-calendar-check"></i>
                                </div>
                                <div>
                                    <p>Post Date</p>
                                    <h6><?php the_date(); ?></h6>
                                </div>
                            </li>
                        </ul>
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 order-1 d-flex align-items-center">
                    <div class="form-section">
                        <?php if ($metaData["job_open"] == "on"){?>
                            <h4>Apply for your dream <?php print_r(get_the_category()[0]->name); ?> job</h4>
                        <?php } else {?>
                            <h4>Application for this <?php print_r(get_the_category()[0]->name); ?> job is closed</h4>
                        <?php } ?>
                        <form method="post">
                            <div class="row gy-3">
                                <div class="form-field col-12">
                                    <input type="text" name="name" id="name" required="" <?php if(!($metaData["job_open"] === "on")) echo 'disabled'; ?>>
                                    <label for="Name"><i class="fa-regular fa-user"></i> Name</label>
                                </div>
                                <div class="form-field col-sm-6 col-12">
                                    <input type="text" name="phonenumber" id="phonenumber" required="" <?php if(!($metaData["job_open"] === "on")) echo 'disabled'; ?>>
                                    <label for="Name"><i class="fa-solid fa-mobile-screen"></i> Phone Number</label>
                                </div>
                                <div class="form-field col-sm-6 col-12">
                                    <input type="email" name="email" id="email" required="" <?php if(!($metaData["job_open"] === "on")) echo 'disabled'; ?>>
                                    <label for="email"><i class="fa-regular fa-envelope"></i> Email</label>
                                </div>
                                <div class="form-field col-sm-6 col-12">
                                    <input type="text" name="currentSalary" id="currentSalary" required="" <?php if(!($metaData["job_open"] === "on")) echo 'disabled'; ?>>
                                    <label for="currentSalary"><i class="fa-solid fa-wallet"></i> Current salary </label>
                                </div>
                                <div class="form-field col-sm-6 col-12">
                                    <input type="text" name="expectedSalary" id="expectedSalary" required="" <?php if(!($metaData["job_open"] === "on")) echo 'disabled'; ?>>
                                    <label for="expectedSalary"><i class="fa-solid fa-wallet"></i> Expected salary </label>
                                </div>
                                <div class="form-field col-sm-6 col-12">
                                    <input type="text" name="noticePeriod" id="noticePeriod" required="" <?php if(!($metaData["job_open"] === "on")) echo 'disabled'; ?>>
                                    <label for="noticePeriod"><i class="fa-solid fa-calendar-days"></i> Notice period</label>
                                </div>
                                <div class="form-field col-sm-6 col-12">
                                    <input type="text" name="currentCompany" id="currentCompany" required="" <?php if(!($metaData["job_open"] === "on")) echo 'disabled'; ?>>
                                    <label for="currentCompany"><i class="fa-regular fa-building"></i> Current company </label>
                                </div>
                                <div class="form-field col-sm-12 col-12">
                                    <textarea name="coverLetter" id="coverLetter" required="" <?php if(!($metaData["job_open"] === "on")) echo 'disabled'; ?>></textarea>
                                    <label for="coverLetter"><i class="fa-regular fa-file"></i> Cover letter </label>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="select_cv_type">
                                        <div class="radio-buttons d-flex align-items-center">
                                            <div class="form-group me-5">
                                                <input type="radio" id="cv" name="cvType" checked
                                                    onchange="showUploadCVLink()" />
                                                <label for="cv">Upload CV Link</label>
                                            </div>
                                            <div class="form-group">
                                                <input type="radio" id="uploadcv" name="cvType"
                                                    onchange="showUploadCV()" disabled/>
                                                <label for="uploadcv">Upload CV</label>
                                            </div>
                                        </div>
                                        <div id="uploadCVInput" style="display: none;">
                                            <input type="file" placeholder="Upload CV">
                                        </div>
                                        <div id="uploadCVLinkInput" style="display: block;">
                                            <div class="form-field">
                                                <input type="url" name="cvLink" id="cvLink" required="" <?php if(!($metaData["job_open"] === "on")) echo 'disabled'; ?>>
                                                <label for="cvLink"><i class="fa-solid fa-link"></i> Upload CV
                                                    Link</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="select_cv_type">
                                        <div class="radio-buttons d-flex align-items-center">
                                            <div class="form-group me-5">
                                                <input type="radio" id="uploadPortfolioLink" name="portfolioType" checked
                                                    onchange="showUploadPortfolioLink()">
                                                <label for="uploadPortfolioLink">Upload Portfolio Link</label>
                                            </div>
                                            <div class="form-group">
                                                <input type="radio" id="uploadPortfolio" name="portfolioType" 
                                                    onchange="showUploadPortfolio()" disabled>
                                                <label for="uploadPortfolio">Upload Portfolio</label>
                                            </div>
                                        </div>
                                        <div id="uploadPortfolioInput" style="display: none;">
                                            <input type="file" placeholder="Upload Portfolio">
                                        </div>
                                        <div id="uploadPortfolioLinkInput" style="display: block;">
                                            <div class="form-field">
                                                <input type="url" name="portfolioLink" id="portfolioLink" required="" <?php if(!($metaData["job_open"] === "on")) echo 'disabled'; ?>>
                                                <label for="portfolioLink"><i class="fa-solid fa-link"></i> Portfolio
                                                    Link</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <?php if ($metaData["job_open"] == "on"){?>
                                        <button type="submit">Apply <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/MinArrowRight.svg" alt=""></button>
                                        <input type="hidden" name="action" value="submit_application" />
                                    <?php } else {?>
                                        <button type="submit" disabled>Application Closed<img src="<?php echo get_template_directory_uri();?>/assets/images/icon/MinArrowRight.svg" alt=""></button>
                                    <?php } ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-3 order-2 ">
                    <div class="job_description">
                        <h3 class="mb-5">Job Requirements</h3>
                        <?php echo $metaData['job_requirements']; ?>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-4 order-3 ">
                    <div class="job_description">
                        <h3 class="mb-5">Job Responsibilities</h3>
                        <?php echo $metaData['job_responsibilities']; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
if( $_SERVER['REQUEST_METHOD'] == 'POST' && !empty( $_POST['action'] ) && $_POST['action'] == "submit_application") {

    $array_interest = array(
        'job_title'      => get_the_title(get_the_ID()),
        'post_id'        => get_the_ID(),
        'name'           => $_REQUEST['name'],
        'phonenumber'    => $_REQUEST['phonenumber'],
        'email'          => $_REQUEST['email'],
        'currentSalary'  => $_REQUEST['currentSalary'],
        'expectedSalary' => $_REQUEST['expectedSalary'],
        'noticePeriod'   => $_REQUEST['noticePeriod'],
        'currentCompany' => $_REQUEST['currentCompany'],
        'coverLetter'    => $_REQUEST['coverLetter'],
        'cvLink'         => $_REQUEST['cvLink'],
        'portfolioLink'  => $_REQUEST['portfolioLink'],
    );
    $interest_post = array(
        'post_title'   => wp_strip_all_tags('Candidate: '. $array_interest['name'] ),
        'post_content' => "Now job request from ". $array_interest['job_title'] ,
        'post_status'  => 'publish',
        'post_type'    => 'job_application',
    );

    print_r($interest_post);
    $PostID = wp_insert_post($interest_post);
    print_r($PostID);
    update_post_meta($PostID,'job_application_meta_key', $array_interest);

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
endwhile;
get_footer();