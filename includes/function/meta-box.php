<?php

//////////////////////// Contact Us /////////////////////
add_action('add_meta_boxes', 'enqueue_metabox_css');

function enqueue_metabox_css(){
    add_meta_box(
        'css_metabox',
        'CSS Metabox',
        'display_css_metabox',
        'post',
        'normal',
        'high'
    );

    wp_enqueue_style(
        'custom-css',
        get_template_directory_uri() . '/assets/css/bootstrap.min.css'
    );
    wp_enqueue_script(
        'custom-js',
        get_template_directory_uri() . '/assets/js/meta-box-custome.js'
    );
    wp_enqueue_style(
        'fontawsom-css',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'
    );
}

function contact_meta_box(){
    add_meta_box(
        'contact_enquiry',
        __('Contact Enquiry', 'contact_enquiry'),
        'contact_enquiry_html',
        'contact_enquiry',
        'normal',
        'default'
    );
}

add_action('add_meta_boxes', 'contact_meta_box');

function contact_enquiry_html($post){
    wp_nonce_field('_contact_enquiry_nonce', 'contact_enquiry_nonce');
    $contact_enquiry = get_post_meta($post->ID, 'contact_meta_key', true);
    ?>

        <div class="contact-style">
            <div class="form-row">
                <h1><b>Name:</b> <?php echo $contact_enquiry[
                    'applicant_name'
                ]; ?></h1>
            </div>
            <div class="form-row">
                <h1><b>Email:</b> <?php echo $contact_enquiry[
                    'applicant_email'
                ]; ?></h1>
            </div>
            <div class="form-row">
                <h1><b>Company:</b> <?php echo $contact_enquiry[
                    'applicant_company'
                ]; ?></h1>
            </div>
            <div class="form-row">
                <h1><b>Description: </b></h1>
                <h2 style="padding-inline: 0; font-size: 19px;">
                    <?php echo $contact_enquiry['applicant_description']; ?>
                </h2>
            </div>
        </div>

        <?php
}
//////////////////////// Quote /////////////////////

function Quote_enquiry_meta_box(){
    add_meta_box(
        'quote_enquiry',
        __('Quote Enquiry', 'quote_enquiry'),
        'quote_enquiry_html',
        'quote_enquiry',
        'normal',
        'default'
    );
}

add_action('add_meta_boxes', 'Quote_enquiry_meta_box');

function quote_enquiry_html($post){
    wp_nonce_field('_quote_enquiry_nonce', 'quote_enquiry_nonce');
    $quote_enquiry = get_post_meta($post->ID, 'quote_meta_key', true);
    ?>

        <div class="contact-style">
            <div class="form-row">
                <h1><b>Name:</b> <?php echo $quote_enquiry[
                    'applicant_name'
                ]; ?></h1>
            </div>
            <div class="form-row">
                <h1><b>Email:</b> <?php echo $quote_enquiry[
                    'applicant_email'
                ]; ?></h1>
            </div>
            <div class="form-row">
                <h1><b>Phone:</b> <?php echo $quote_enquiry[
                    'applicant_phone'
                ]; ?></h1>
            </div>
            <div class="form-row">
                <h1><b>Purpose:</b> <?php echo $quote_enquiry[
                    'applicant_purpose'
                ]; ?></h1>
            </div>
            <div class="form-row">
                <h1><b>Description: </b></h1>
                <h2 style="padding-inline: 0; font-size: 19px;">
                    <?php echo $quote_enquiry['applicant_quote']; ?>
                </h2>
            </div>
        </div>

        <?php
}

//////////////////////// Newsletter /////////////////////

function Sub_newsletter_meta_box(){
    add_meta_box(
        'sub_newsletter',
        __('Newsletter', 'sub_newsletter'),
        'sub_newsletter_html',
        'sub_newsletter',
        'normal',
        'default'
    );
}

add_action('add_meta_boxes', 'Sub_newsletter_meta_box');

function sub_newsletter_html($post){
    wp_nonce_field('_sub_newsletter_nonce', 'sub_newsletter_nonce');
    $sub_newsletter = get_post_meta($post->ID, 'newsletter_meta_key', true);
    ?>

        <div class="contact-style">
            <div class="form-row">
                <h1><b>Email:</b> <?php echo $sub_newsletter['email']; ?></h1>
            </div>
        </div>

        <?php
}

class PortfolioFieldsMetaBox{
    private $screen = ['portfolios'];

    private $meta_fields = [
        ['label' => 'Type', 'id' => 'portfolio_type', 'type' => 'text'],
        ['label' => 'Link', 'id' => 'portfolio_link', 'type' => 'text'],
    ];

    public function __construct()
    {
        add_action('add_meta_boxes', [$this, 'add_meta_boxes']);
        add_action('save_post', [$this, 'save_fields']);
    }

    public function add_meta_boxes()
    {
        foreach ($this->screen as $single_screen) {
            add_meta_box(
                'PortfolioFields',
                __('PortfolioFields', ''),
                [$this, 'meta_box_callback'],
                $single_screen,
                'normal',
                'default'
            );
        }
    }

    public function meta_box_callback($post)
    {
        wp_nonce_field('PortfolioFields_data', 'PortfolioFields_nonce');
        $this->field_generator($post);
    }

    public function field_generator($post)
    {
        $output = '';
        foreach ($this->meta_fields as $meta_field) {
            $label =
                '<label for="' .
                $meta_field['id'] .
                '">' .
                $meta_field['label'] .
                '</label>';
            $meta_value = get_post_meta($post->ID, $meta_field['id'], true);
            if (empty($meta_value)) {
                if (isset($meta_field['default'])) {
                    $meta_value = $meta_field['default'];
                }
            }
            switch ($meta_field['type']) {
                default:
                    $input = sprintf(
                        '<input %s id="%s" name="%s" type="%s" value="%s">',
                        $meta_field['type'] !== 'color'
                            ? 'style="width: 100%"'
                            : '',
                        $meta_field['id'],
                        $meta_field['id'],
                        $meta_field['type'],
                        $meta_value
                    );
            }
            $output .= $this->format_rows($label, $input);
        }
        echo '<table class="form-table"><tbody>' . $output . '</tbody></table>';
    }

    public function format_rows($label, $input)
    {
        return '<tr><th>' . $label . '</th><td>' . $input . '</td></tr>';
    }

    public function save_fields($post_id)
    {
        if (!isset($_POST['PortfolioFields_nonce'])) {
            return $post_id;
        }
        $nonce = $_POST['PortfolioFields_nonce'];
        if (!wp_verify_nonce($nonce, 'PortfolioFields_data')) {
            return $post_id;
        }
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
            return $post_id;
        }
        foreach ($this->meta_fields as $meta_field) {
            if (isset($_POST[$meta_field['id']])) {
                switch ($meta_field['type']) {
                    case 'email':
                        $_POST[$meta_field['id']] = sanitize_email(
                            $_POST[$meta_field['id']]
                        );
                        break;
                    case 'text':
                        $_POST[$meta_field['id']] = sanitize_text_field(
                            $_POST[$meta_field['id']]
                        );
                        break;
                }
                update_post_meta(
                    $post_id,
                    $meta_field['id'],
                    $_POST[$meta_field['id']]
                );
            } elseif ($meta_field['type'] === 'checkbox') {
                update_post_meta($post_id, $meta_field['id'], '0');
            }
        }
    }
}

if (class_exists('PortfolioFieldsMetabox')) {
    new PortfolioFieldsMetabox();
}

//////////////////////// Indistry Custom Fields /////////////////////
// Meta Box Class: IndustryFieldsMetaBox
// Get the field value: $metavalue = get_post_meta( $post_id, $field_id, true );
class IndustryFieldsMetaBox{
    private $screen = ['industries'];

    private $meta_fields = [
        ['label' => 'Link', 'id' => 'industry_link', 'type' => 'text'],
    ];

    public function __construct()
    {
        add_action('add_meta_boxes', [$this, 'add_meta_boxes']);
        add_action('save_post', [$this, 'save_fields']);
    }

    public function add_meta_boxes()
    {
        foreach ($this->screen as $single_screen) {
            add_meta_box(
                'IndustryFields',
                __('IndustryFields', ''),
                [$this, 'meta_box_callback'],
                $single_screen,
                'normal',
                'default'
            );
        }
    }

    public function meta_box_callback($post)
    {
        wp_nonce_field('IndustryFields_data', 'IndustryFields_nonce');
        $this->field_generator($post);
    }

    public function field_generator($post)
    {
        $output = '';
        foreach ($this->meta_fields as $meta_field) {
            $label =
                '<label for="' .
                $meta_field['id'] .
                '">' .
                $meta_field['label'] .
                '</label>';
            $meta_value = get_post_meta($post->ID, $meta_field['id'], true);
            if (empty($meta_value)) {
                if (isset($meta_field['default'])) {
                    $meta_value = $meta_field['default'];
                }
            }
            switch ($meta_field['type']) {
                default:
                    $input = sprintf(
                        '<input %s id="%s" name="%s" type="%s" value="%s">',
                        $meta_field['type'] !== 'color'
                            ? 'style="width: 100%"'
                            : '',
                        $meta_field['id'],
                        $meta_field['id'],
                        $meta_field['type'],
                        $meta_value
                    );
            }
            $output .= $this->format_rows($label, $input);
        }
        echo '<table class="form-table"><tbody>' . $output . '</tbody></table>';
    }

    public function format_rows($label, $input)
    {
        return '<tr><th>' . $label . '</th><td>' . $input . '</td></tr>';
    }

    public function save_fields($post_id)
    {
        if (!isset($_POST['IndustryFields_nonce'])) {
            return $post_id;
        }
        $nonce = $_POST['IndustryFields_nonce'];
        if (!wp_verify_nonce($nonce, 'IndustryFields_data')) {
            return $post_id;
        }
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
            return $post_id;
        }
        foreach ($this->meta_fields as $meta_field) {
            if (isset($_POST[$meta_field['id']])) {
                switch ($meta_field['type']) {
                    case 'email':
                        $_POST[$meta_field['id']] = sanitize_email(
                            $_POST[$meta_field['id']]
                        );
                        break;
                    case 'text':
                        $_POST[$meta_field['id']] = sanitize_text_field(
                            $_POST[$meta_field['id']]
                        );
                        break;
                }
                update_post_meta(
                    $post_id,
                    $meta_field['id'],
                    $_POST[$meta_field['id']]
                );
            } elseif ($meta_field['type'] === 'checkbox') {
                update_post_meta($post_id, $meta_field['id'], '0');
            }
        }
    }
}
if (class_exists('IndustryFieldsMetaBox')) {
    new IndustryFieldsMetaBox();
}

//////////////////////////for Refarel form ///////////////////////

function quote_form_meta_box(){
    add_meta_box(
        'quote_form',
        __('quote_form', 'quote_form'),
        'quote_form_html',
        'quote_form',
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'quote_form_meta_box');
function quote_form_html($post){
    wp_nonce_field('_quote_form_nonce', 'quote_form_nonce');
    $quote_form = get_post_meta($post->ID, 'quote_form_meta_key', true);
    ?>
    <div  class="contactform">
        <div class="form-rop">
            <label for="name">   Name</label><br>
            <input type="text" class="test-form"  value="<?php echo $quote_form[
        'name'
    ]; ?>" readonly>
        </div>
        <div class="form-rop">
            <label for="email"> Email</label><br>
            <input type="email" class="test-form"  value="<?php echo $quote_form[
        'email'
    ]; ?>" readonly>
        </div>
        <div class="form-rop">
            <label for="email"> Company Name</label><br>
            <input type="email" class="test-form"  value="<?php echo $quote_form[
        'company'
    ]; ?>" readonly>
        </div>
        <div class="form-rop">
            <label for="phnum"> Services</label><br>
            <input type="text" class="test-form"  value="<?php echo $quote_form[
        'service'
    ]; ?>" readonly>
        </div>
        <div class="form-rop">
            <label for="phnum"> Budget</label><br>
            <input type="text" class="test-form"  value="<?php echo $quote_form[
        'budget'
    ]; ?>" readonly>
        </div>
        
        
            <div class="form-rop">
            <label for="description"> Description</label><br>
            <input type="text" class="test-form"  value="<?php echo $quote_form[
        'description'
    ]; ?>" readonly>
        </div>
    </div>
	<?php
}

//////////////////////////for SignUp form ///////////////////////

function SignUp_form_meta_box(){
    add_meta_box(
        'SignUp_form',
        __('SignUp_form', 'SignUp_form'),
        'SignUp_form_html',
        'SignUp_form',
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'SignUp_form_meta_box');
function SignUp_form_html($post){
    wp_nonce_field('_SignUp_form_nonce', 'SignUp_form_nonce');
    $SignUp_form = get_post_meta($post->ID, 'SignUp_form_meta_key', true);
    ?>

    <div  class="contactform">
        <div class="form-rop">
            <label for="name">   Email</label><br>
            <input type="text" class="test-form"  value="  <?php echo $SignUp_form[
            'signup_email'
    ]; ?>" readonly>
        </div>
    </div>
	<?php
}
//////////////////////////////////CONTECT US//////////////////////////////////////

function contactus_meta_box(){
    add_meta_box(
        'contactus_enquiry',
        __('contactus_enquiry', 'contactus_enquiry'),
        'contactus_enquiry_html',
        'contactus_enquiry',
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'contactus_meta_box');
function contactus_enquiry_html($post){
    wp_nonce_field('_contactus_enquiry_nonce', 'contactus_enquiry_nonce');
    $contactus_enquiry = get_post_meta($post->ID, 'contactus_meta_key', true);?>
    <div  class="contact-style">
        <div class="form-row">
            <label for="klizos_pay_name"> Name</label><br>
            <input type="text" class="admin-contact-input w-100" $contactus_enquiry['contact_name'] ); ?>" readonly>
        </div>
        <div class="form-row">

            <label for="klizos_pay_email"> Email</label><br>
            <input type="text" class="admin-contact-input w-100" $contactus_enquiry['contact_email'] ); ?>" readonly>

        </div>

        <div class="form-row">

            <label for="klizos_pay_email"> Phone</label><br>
            <input type="text" class="admin-contact-input w-100" $contactus_enquiry['contact_phone'] ); ?>" readonly>

        </div>

    </div>
    <?php
}
function testimonial_meta_box(){
    add_meta_box(
        'testimonial_box',
        __('Testtimnial Details', 'testimonial_box'),
        'about_enquery_html',
        'testimonial',
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'testimonial_meta_box');

//////////////////////////////////TESTIMONIAL//////////////////////////////////////

function about_enquery_html($post){
    wp_nonce_field('_testimonial_enquery_nonce', 'testimonial_enquery_nonce');
    $about_enquery = get_post_meta(
        $post->ID,
        'testimonial_enquery_meta_key',
        true
    );?>
    <div class="row">
        <div class="form-row">
            <label for="klizos_pay_email"> Name</label><br>
            <input type="text" name="t_name"   class="admin-contact-input w-100" mpty($about_enquery['t_name']) )
            { echo  $about_enquery['t_name'];} ?>"   >
        </div>
        <div class="form-row">
            <label for="klizos_pay_email"> Company </label><br>
            <input type="text" name="t_company"   class="admin-contact-input w-100" mpty($about_enquery['t_company']) )
            { echo  $about_enquery['t_company'];} ?>"   >
        </div>
        <div class="form-row">
            <label for="klizos_pay_email"> Description</label><br>
            <textarea name="t_description"   class="admin-contact-input w-100" out_enquery['t_description']) )
            { echo  $about_enquery['t_description'];} ?></textarea>
        </div>
        <div class="form-row">
            <label for="klizos_pay_email"> Review</label><br>
            <input type="text" name="t_review"   class="admin-contact-input w-100" empty($about_enquery['t_review']) )
            { echo  $about_enquery['t_review'];} ?>"   >
        </div>
    </div>
    <?php
}
function wporg_save_postdata($post_id){
    if (!empty($_REQUEST['t_name'])) {
        $array_interest = [];
        $array_interest['t_name'] = $_REQUEST['t_name'];
        $array_interest['t_company'] = $_REQUEST['t_company'];
        $array_interest['t_review'] = $_REQUEST['t_review'];
        $array_interest['t_description'] = $_REQUEST['t_description'];

        update_post_meta(
            $post_id,
            'testimonial_enquery_meta_key',
            $array_interest
        );
    }
}
add_action('save_post', 'wporg_save_postdata');

//////////////////////////////////CAREER//////////////////////////////////////

function career_meta_box(){
    add_meta_box(
        'career_box',
        __('Career Details', 'career_box'),
        'career_html',
        'career',
        'normal',
        'default'
    );
    add_meta_box(
        'job_description',
        'Job Description',
        'my_editor_callback',
        'my_custom_post',
        'normal',
        'high'
    );
    add_meta_box(
        'job_requirements',
        'Job Requirements',
        'my_editor_callback',
        'my_custom_post',
        'normal',
        'high'
    );
    add_meta_box(
        'job_responsibilities',
        'Job Responsibilities',
        'my_editor_callback',
        'my_custom_post',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'career_meta_box');
function career_html($post){
    wp_nonce_field('_career_enquery_nonce', 'career_enquery_nonce');
    $career_enquery = get_post_meta($post->ID, 'career_enquery_meta_key', true);
    ?>
    <div class="row">
        <div class="form-row form-check form-switch d-flex align-items-center">
            <label class="form-check-label me-3" for="job_open">Job Open <?php echo $career_enquery[
                'job_open'
            ]; ?></label>
            <input class="form-check-input ms-0" type="checkbox" role="switch" name="job_open" id="job_open" <?php if (
                $career_enquery['job_open'] == 'on'
            ) {
                echo 'checked';
            } ?>>
        </div>
        <div class="col-12 mt-2">
            <h6> Job Description</h6>
            <?php wp_editor(
                $career_enquery['job_description'] ?? '',
                'job_description',
                [
                    'media_buttons' => false,
                    'textarea_name' => 'job_description',
                    'editor_height' => 200,
                    'textarea_rows' => 20,
                ]
            ); ?>
        </div>
        <div class="col-lg-6 mt-2">
            <h6> Job Requirements</h6>
            <?php wp_editor(
                $career_enquery['job_requirements'] ?? '',
                'job_requirements',
                [
                    'media_buttons' => false,
                    'textarea_name' => 'job_requirements',
                    'editor_height' => 200,
                    'textarea_rows' => 20,
                ]
            ); ?>
        </div>
        <div class="col-lg-6 mt-2">
            <h6> Job Responsibilities</h6>
            <?php wp_editor(
                $career_enquery['job_responsibilities'] ?? '',
                'job_responsibilities',
                [
                    'media_buttons' => false,
                    'textarea_name' => 'job_responsibilities',
                    'editor_height' => 200,
                    'textarea_rows' => 20,
                ]
            ); ?>
        </div>
        <div class="col-lg-6 form-row">
            <label for="salary"> Salary</label><br>
            <input type="text" name="salary" class="admin-contact-input w-100" value="<?php if (
                !empty($career_enquery['salary'])
            ) {
                echo $career_enquery['salary'];
            } ?>">
        </div>
        <div class="col-lg-6 form-row">
            <label for="company_name"> Company Name </label><br>
            <input type="text" name="company_name" class="admin-contact-input w-100" value="<?php if (
                !empty($career_enquery['company_name'])
            ) {
                echo $career_enquery['company_name'];
            } ?>">
        </div>
        <div class="col-lg-6 form-row">
            <label for="job_type"> Job Type</label><br>
            <input type="text" name="job_type" class="admin-contact-input w-100" value="<?php if (
                !empty($career_enquery['job_type'])
            ) {
                echo $career_enquery['job_type'];
            } ?>">
        </div>
        <div class="col-lg-6 form-row">
            <label for="job_location"> Job Location</label><br>
            <input type="text" name="job_location" class="admin-contact-input w-100" value="<?php if (
                !empty($career_enquery['job_location'])
            ) {
                echo $career_enquery['job_location'];
            } ?>">
        </div>
    </div>
    <?php
}
function career_postdata($post_id){
    if (!empty($_REQUEST['salary'])) {
        $array_interest = [];
        $array_interest['job_description'] = $_REQUEST['job_description'];
        $array_interest['job_requirements'] = $_REQUEST['job_requirements'];
        $array_interest['job_responsibilities'] =
            $_REQUEST['job_responsibilities'];
        $array_interest['salary'] = $_REQUEST['salary'];
        $array_interest['job_type'] = $_REQUEST['job_type'];
        $array_interest['company_name'] = $_REQUEST['company_name'];
        $array_interest['job_open'] = $_REQUEST['job_open'];
        $array_interest['job_location'] = $_REQUEST['job_location'];

        update_post_meta($post_id, 'career_enquery_meta_key', $array_interest);
    }
}
add_action('save_post', 'career_postdata');

////////////////////////////////Job Application////////////////////////////////////////

function job_application_meta_box(){
    add_meta_box(
        'job_application_box',
        __('job_application Details', 'job_application_box'),
        'job_application_html',
        'job_application',
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'job_application_meta_box');
function job_application_html($post){
    wp_nonce_field(
        '_job_application_enquery_nonce',
        'job_application_enquery_nonce'
    );
    $job_enquery = get_post_meta($post->ID, 'job_application_meta_key', true);
    ?>

    <div class="contact-style">
        <div class="form-row">
            <h1><b>name :</b> <?php echo $job_enquery['name']; ?></h1>
            <h1><b>phonenumber :</b> <?php echo $job_enquery[
                'phonenumber'
            ]; ?></h1>
            <h1><b>email :</b> <?php echo $job_enquery['email']; ?></h1>
            <h1><b>currentSalary :</b> <?php echo $job_enquery[
                'currentSalary'
            ]; ?></h1>
            <h1><b>expectedSalary :</b> <?php echo $job_enquery[
                'expectedSalary'
            ]; ?></h1>
            <h1><b>noticePeriod :</b> <?php echo $job_enquery[
                'noticePeriod'
            ]; ?></h1>
            <h1><b>currentCompany :</b> <?php echo $job_enquery[
                'currentCompany'
            ]; ?></h1>
            <h1><b>coverLetter :</b> <?php echo $job_enquery[
                'coverLetter'
            ]; ?></h1>
            <h1><b>cvLink :</b> <?php echo $job_enquery['cvLink']; ?></h1>
            <h1><b>portfolioLink :</b> <?php echo $job_enquery[
                'portfolioLink'
            ]; ?></h1>
        </div>
    </div>

    <?php
}
function policy_postdata($post_id){
    if (!empty($_REQUEST['policy_description'])) {
        $policy_interest = [];
        $policy_interest['policy_description'] =
            $_REQUEST['policy_description'];
        update_post_meta($post_id, 'policy_enquery_meta_key', $policy_interest);
    }
}
add_action('save_post', 'policy_postdata');

///////////////////////////////////CASE STUDY/////////////////////////////////////
function casestudy_meta_box(){
    add_meta_box(
        'casestudy_box',
        __('casestudy Details', 'casestudy_box'),
        'casestudy_html',
        'casestudy',
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'casestudy_meta_box');
function casestudy_html($post){
    wp_enqueue_media();
    wp_nonce_field('_casestudy_enquery_nonce', 'casestudy_enquery_nonce');
    $casestudy_enquery = get_post_meta(
        $post->ID,
        'casestudy_enquery_meta_key',
        true
    );
    $upload_link = esc_url(get_upload_iframe_src());
    echo $post->post_type;
    $your_img_id = get_post_meta(get_the_ID(), '_your_img_id', true);
    $your_img_src = wp_get_attachment_image_src($your_img_id, 'full');
    $you_have_img = is_array($your_img_src);
    if (isset($casestudy_enquery['stack_count'])) {
        $stack_count = $casestudy_enquery['stack_count'];
    } else {
        $stack_count = 1;
    }
    if (isset($casestudy_enquery['color_count'])) {
        $color_count = $casestudy_enquery['color_count'];
    } else {
        $color_count = 1;
    }
    if (isset($casestudy_enquery['typo_count'])) {
        $typo_count = $casestudy_enquery['typo_count'];
    } else {
        $typo_count = 1;
    }
    if (isset($casestudy_enquery['work_flow_count'])) {
        $work_flow_count = $casestudy_enquery['work_flow_count'];
    } else {
        $work_flow_count = 1;
    }
    if (isset($casestudy_enquery['feature_count'])) {
        $feature_count = $casestudy_enquery['feature_count'];
    } else {
        $feature_count = 1;
    }
    if (isset($casestudy_enquery['testimonial_count'])) {
        $testimonial_count = $casestudy_enquery['testimonial_count'];
    } else {
        $testimonial_count = 1;
    }
    ?>
    <div class="row">
        <div class="col-6 my-2">
            <h6 for=""> Meta Description</h6><br>
            <input type="text" name="meta_description" class="admin-contact-input w-100 mt-1" value="<?php if (
                !empty($casestudy_enquery['meta_description'])
            ) {
                echo $casestudy_enquery['meta_description'];
            } ?>">
        </div>
        <div class="col-6 my-2">
            <h6 for=""> Project Title</h6><br>
            <input type="text" name="case_title" class="admin-contact-input w-100 mt-1" value="<?php if (
                !empty($casestudy_enquery['case_title'])
            ) {
                echo $casestudy_enquery['case_title'];
            } ?>">
        </div>
        <div class="col-4 my-2">
            <h6 for=""> Project URL</h6><br>
            <input type="text" name="case_url" class="admin-contact-input w-100 mt-1" value="<?php if (
                !empty($casestudy_enquery['case_url'])
            ) {
                echo $casestudy_enquery['case_url'];
            } ?>">
        </div>
        <div class="col-4 my-2">
            <h6 for=""> Project Type</h6><br>
            <input type="text" name="case_type" class="admin-contact-input w-100 mt-1" value="<?php if (
                !empty($casestudy_enquery['case_type'])
            ) {
                echo $casestudy_enquery['case_type'];
            } ?>">
        </div>
        <div class="col-4 my-2">
            <h6 for=""> Timeline in days</h6><br>
            <input type="text" name="case_time"   class="admin-contact-input w-100 mt-1" value="<?php if (
                !empty($casestudy_enquery['case_time'])
            ) {
                echo $casestudy_enquery['case_time'];
            } ?>">
        </div>
        <hr class="mt-2">
        <div class="col-12 my-2">
            <h6 for=""> About this Project</h6><br>
            <input type="text" name="case_about" class="admin-contact-input w-100 mt-1" value="<?php if (
                !empty($casestudy_enquery['case_about'])
            ) {
                echo $casestudy_enquery['case_about'];
            } ?>">
        </div>
        <div class="col-12 my-2 col-md-6">
            <h6 class="mt-2 mb-1"> Project Logo</h6>
            <input type="hidden" name="case_logo" id="case_logo" class="admin-contact-input w-100" value='<?php if (
                !empty($casestudy_enquery['case_logo'])
            ) {
                echo $casestudy_enquery['case_logo'];
            } ?>'>
            <div class="w-100 h-75 my-2 d-flex justify-content-between align-items-center border border-secondary rounded p-1 case_logo image-preview" style="min-height: 60px;">
                <button type="button" class="btn btn-outline-secondary upload-image w-auto text-center" onclick="callMedia('case_logo')"><i class="fas fa-upload"></i></button>
                <img style="max-width: 50%; max-height:100px" src="<?php if (
                    !empty($casestudy_enquery['case_logo'])
                ) {
                    echo json_decode($casestudy_enquery['case_logo'])->url;
                } ?>">
            </div>
        </div>
        <div class="col-12 my-2 col-md-6">
            <h6 class="mt-2 mb-1"> Mock Up image</h6>
            <input type="hidden" name="case_mockup" id="case_mockup" class="admin-contact-input w-100" value='<?php if (
                !empty($casestudy_enquery['case_mockup'])
            ) {
                echo $casestudy_enquery['case_mockup'];
            } ?>'>
            <div class="w-100 h-75 my-2 d-flex justify-content-between align-items-center border border-secondary rounded p-1 case_mockup image-preview" style="min-height: 60px;">
                <button type="button" class="btn btn-outline-secondary upload-image w-auto text-center" onclick="callMedia('case_mockup')"><i class="fas fa-upload"></i></button>
                <img style="max-width: 50%; max-height:100px" src="<?php if (
                    !empty($casestudy_enquery['case_mockup'])
                ) {
                    echo json_decode($casestudy_enquery['case_mockup'])->url;
                } ?>">
            </div>
        </div>
        <hr class="mt-2">
        <div > <h6>Stack List</h6></div>
        <hr class="mt-2">
        <div class="col-12 row mx-auto" id="stacks">
            <?php for ($i = 1; $i <= $stack_count; $i++): ?>
                <div class="col-12 col-md-6 col-lg-3 mx-auto">
                    <h6 class="mt-3 mb-1"> Stack <?php echo $i; ?></h.$index6>
                    <input type="hidden" name="stack_<?php echo $i; ?>" id="stack_<?php echo $i; ?>" class="admin-contact-input w-100" value='<?php if (
        !empty($casestudy_enquery['stack_' . $index . $i])
    ) {
        echo $casestudy_enquery['stack_' . $i];
    } ?>'>
                    <div class="w-100 mt-2 d-flex justify-content-between align-items-center border border-secondary rounded p-1 stack_<?php echo $i; ?> image-preview" style="min-height: 60px;">
                        <button type="button" class="btn btn-outline-secondary upload-image w-auto text-center" onclick="callMedia('stack_<?php echo $i; ?>')"><i class="fas fa-upload"></i></button>
                        <img style="max-width: 75%; max-height: 60px;" src="<?php if (
                            !empty($casestudy_enquery['stack_' . $i])
                        ) {
                            echo json_decode($casestudy_enquery['stack_' . $i])
                                ->url;
                        } ?>">
                    </div>
                </div>
            <?php endfor; ?>
        </div>
        <div class="col-12 mx-auto mt-2 text-center">
            <input type="hidden" name="stack_count" id="stack_count" value="<?php echo $stack_count; ?>">    
            <button type='button' class="ms-auto btn btn-outline-secondary" onclick="addStack()"><i class="fas fa-plus"></i></button>
        </div>
        <hr class="mt-2">
        <div > <h6>Color List</h6></div>
        <hr class="mt-2">
        <div class="col-12 row mx-auto" id="colors">
            <?php for ($i = 1; $i <= $color_count; $i++): ?>
                <div class="col-12 col-md-6 col-lg-3 mx-auto">
                    <h6 class="mt-3 mb-1"> Color <?php echo $i; ?></h6>
                    <input type="text" name="color_<?php echo $i; ?>_title" class="admin-contact-input w-100 mt-2" placeholder="title" value="<?php if (
        !empty($casestudy_enquery['color_' . $i . '_title'])
    ) {
        echo $casestudy_enquery['color_' . $i . '_title'];
    } ?>">
                    <input type="text" name="color_<?php echo $i; ?>_hash" class="admin-contact-input w-100 mt-2" placeholder="hash" value="<?php if (
        !empty($casestudy_enquery['color_' . $i . '_hash'])
    ) {
        echo $casestudy_enquery['color_' . $i . '_hash'];
    } ?>">
                </div>
            <?php endfor; ?>
        </div>
        <div class="col-12 mx-auto mt-2 text-center">
            <input type="hidden" name="color_count" id="color_count" value="<?php echo $color_count; ?>">    
            <button type='button' class="ms-auto btn btn-outline-secondary" onclick="addColor()"><i class="fas fa-plus"></i></button>
        </div>
        <hr class="mt-2">
        <div > <h6>Typographt List</h6></div>
        <hr class="mt-2">
        <div class="col-12 row mx-auto" id="typos">
            <?php for ($i = 1; $i <= $typo_count; $i++): ?>
                <div class="col-12 col-md-6 col-lg-3 mx-auto">
                    <h6 class="mt-3 mb-1"> Font <?php echo $i; ?></h6>
                    <input type="text" name="typo_<?php echo $i; ?>_family" class="admin-contact-input w-100 mt-2" placeholder="font-family" value="<?php if (
        !empty($casestudy_enquery['typo_' . $i . '_family'])
    ) {
        echo $casestudy_enquery['typo_' . $i . '_family'];
    } ?>">
                    <input type="text" name="typo_<?php echo $i; ?>_description" class="admin-contact-input w-100 mt-2" placeholder="why to use this font" value="<?php if (
        !empty($casestudy_enquery['typo_' . $i . '_description'])
    ) {
        echo $casestudy_enquery['typo_' . $i . '_description'];
    } ?>">
                </div>
            <?php endfor; ?>
        </div>
        <div class="col-12 mx-auto mt-2 text-center">
            <input type="hidden" name="typo_count" id="typo_count" value="<?php echo $typo_count; ?>">    
            <button type='button' class="ms-auto btn btn-outline-secondary" onclick="addTypo()"><i class="fas fa-plus"></i></button>
        </div>
        <hr class="mt-2">
        <div > <h6>Process Workflow</h6></div>
        <hr class="mt-2">
        <div class="col-12 row mx-auto">
            <div class="col-md-7 col-12 row" id="workflow">
                <div class="col-12">
                    <h6 for=""> Workflow Title</h6><br>
                    <input type="text" name="workflow_title" class="admin-contact-input w-100 mt-1" value="<?php if (
                        !empty($casestudy_enquery['workflow_title'])
                    ) {
                        echo $casestudy_enquery['workflow_title'];
                    } ?>">
                </div>
                <?php for ($i = 1; $i <= $work_flow_count; $i++): ?>
                    <div class="col-12 col-md-6 mx-auto">
                        <h6 class="mt-3 mb-1"> Step <?php echo $i; ?></h6>
                        <input type="text" name="workflow_<?php echo $i; ?>_title" class="admin-contact-input w-100 mt-2" placeholder="Title" value="<?php if (
        !empty($casestudy_enquery['workflow_' . $i . '_title'])
    ) {
        echo $casestudy_enquery['workflow_' . $i . '_title'];
    } ?>">
                        <input type="text" name="workflow_<?php echo $i; ?>_description" class="admin-contact-input w-100 mt-2" placeholder="Description" value="<?php if (
        !empty($casestudy_enquery['workflow_' . $i . '_description'])
    ) {
        echo $casestudy_enquery['workflow_' . $i . '_description'];
    } ?>">
                    </div>
                <?php endfor; ?>
            </div>
            <div class="col-md-5 col-12">
                <h6 class="mt-2 mb-1"> Mock Up image</h6>
                <input type="hidden" name="workflow_image" id="workflow_image" class="admin-contact-input w-100" value='<?php if (
                    !empty($casestudy_enquery['workflow_image'])
                ) {
                    echo $casestudy_enquery['workflow_image'];
                } ?>'>
                <div class="w-100 h-75 mt-2 d-flex justify-content-between align-items-center border border-secondary rounded p-1 workflow_image image-preview" style="min-height: 60px;">
                    <button type="button" class="btn btn-outline-secondary upload-image w-auto text-center" onclick="callMedia('workflow_image')"><i class="fas fa-upload"></i></button>
                    <img style="max-width: 100%; max-height: 75%;" src="<?php if (
                        !empty($casestudy_enquery['workflow_image'])
                    ) {
                        echo json_decode($casestudy_enquery['workflow_image'])->url;
                    } ?>">
                </div>
            </div>
        </div>
        <div class="col-12 mx-auto mt-2 text-center">
            <input type="hidden" name="work_flow_count" id="work_flow_count" value="<?php echo $work_flow_count; ?>">    
            <button type='button' class="ms-auto btn btn-outline-secondary" onclick="addWorkflow()"><i class="fas fa-plus"></i></button>
        </div>
        <hr class="mt-2">
        <div > <h6>Key Feature</h6></div>
        <hr class="mt-2">
        <div class="col-12 row mx-auto">
            <div class="col-md-7 col-12 row" id="feature">
                <div class="col-12">
                    <h6 for=""> Feature Title</h6><br>
                    <input type="text" name="feature_title" class="admin-contact-input w-100 mt-1" value="<?php if (
                        !empty($casestudy_enquery['feature_title'])
                    ) {
                        echo $casestudy_enquery['feature_title'];
                    } ?>">
                </div>
                <?php for ($i = 1; $i <= $feature_count; $i++): ?>
                    <div class="col-12 col-md-6 mx-auto">
                        <h6 class="mt-3 mb-1"> Feature <?php echo $i; ?></h6>
                        <input type="text" name="feature_<?php echo $i; ?>_title" class="admin-contact-input w-100 mt-2" placeholder="Title" value="<?php if (
        !empty($casestudy_enquery['feature_' . $i . '_title'])
    ) {
        echo $casestudy_enquery['feature_' . $i . '_title'];
    } ?>">
                        <input type="text" name="feature_<?php echo $i; ?>_description" class="admin-contact-input w-100 mt-2" placeholder="Description" value="<?php if (
        !empty($casestudy_enquery['feature_' . $i . '_description'])
    ) {
        echo $casestudy_enquery['feature_' . $i . '_description'];
    } ?>">
                    </div>
                <?php endfor; ?>
            </div>
            <div class="col-md-5 col-12">
                <h6 class="mt-2 mb-1"> Mock Up image</h6>
                <input type="hidden" name="feature_image" id="feature_image" class="admin-contact-input w-100" value='<?php if (
                    !empty($casestudy_enquery['feature_image'])
                ) {
                    echo $casestudy_enquery['feature_image'];
                } ?>'>
                <div class="w-100 h-75 mt-2 d-flex justify-content-between align-items-center border border-secondary rounded p-1 feature_image image-preview" style="min-height: 60px;">
                    <button type="button" class="btn btn-outline-secondary upload-image w-auto text-center" onclick="callMedia('feature_image')"><i class="fas fa-upload"></i></button>
                    <img style="max-width: 100%; max-height: 75%;" src="<?php if (
                        !empty($casestudy_enquery['feature_image'])
                    ) {
                        echo json_decode($casestudy_enquery['feature_image'])->url;
                    } ?>">
                </div>
            </div>
        </div>
        <div class="col-12 mx-auto mt-2 text-center">
            <input type="hidden" name="feature_count" id="feature_count" value="<?php echo $feature_count; ?>">    
            <button type='button' class="ms-auto btn btn-outline-secondary" onclick="addFeature()"><i class="fas fa-plus"></i></button>
        </div>
        <hr class="mt-2">
        <div > <h6>Client Testimonial</h6></div>
        <hr class="mt-2">
        <div class="col-12 row mx-auto" id="testimonial">
            <div class="col-12">
                <h6 for=""> Testimonial Description</h6><br>
                <input type="text" name="testimonial_Description" class="admin-contact-input w-100 mt-1" value="<?php if (
                    !empty($casestudy_enquery['testimonial_Description'])
                ) {
                    echo $casestudy_enquery['testimonial_Description'];
                } ?>">
            </div>
            <?php for ($i = 1; $i <= $testimonial_count; $i++): ?>
                <div class="col-12 col-md-6 col-lg-4 mx-auto">
                    <h6 class="mt-3 mb-1"> Testimonial <?php echo $i; ?></h6>
                    <input type="text" name="testimonial_<?php echo $i; ?>_name" class="admin-contact-input w-100 mt-2" placeholder="Client Name" value="<?php if (
        !empty($casestudy_enquery['testimonial_' . $i . '_name'])
    ) {
        echo $casestudy_enquery['testimonial_' . $i . '_name'];
    } ?>">
                    <input type="text" name="testimonial_<?php echo $i; ?>_desg" class="admin-contact-input w-100 mt-2" placeholder="Client Desig" value="<?php if (
        !empty($casestudy_enquery['testimonial_' . $i . '_desg'])
    ) {
        echo $casestudy_enquery['testimonial_' . $i . '_desg'];
    } ?>">
                    <input type="text" name="testimonial_<?php echo $i; ?>_comment" class="admin-contact-input w-100 mt-2" placeholder="Comment" value="<?php if (
        !empty($casestudy_enquery['testimonial_' . $i . '_comment'])
    ) {
        echo $casestudy_enquery['testimonial_' . $i . '_description'];
    } ?>">
                    <input type="hidden" name="testimonial_<?php echo $i; ?>_image" id="testimonial_<?php echo $i; ?>_image" class="admin-contact-input w-100 mt-2" placeholder="image" value='<?php if (
        !empty($casestudy_enquery['testimonial_' . $i . '_image'])
    ) {
        echo $casestudy_enquery['testimonial_' . $i . '_image'];
    } ?>'>
                    <div class="w-100 mt-2 d-flex justify-content-between align-items-center border border-secondary rounded p-1 testimonial_<?php echo $i; ?>_image image-preview" style="min-height: 60px;">
                        <button type="button" class="btn btn-outline-secondary upload-image w-auto text-center" onclick="callMedia('testimonial_<?php echo $i; ?>_image')"><i class="fas fa-upload"></i></button>
                        <img style="max-width: 75%; max-height: 60px;" src="<?php if (
                            !empty(
                                $casestudy_enquery['testimonial_' . $i . '_image']
                            )
                        ) {
                            echo json_decode(
                                $casestudy_enquery['testimonial_' . $i . '_image']
                            )->url;
                        } ?>">
                    </div>
                </div>
            <?php endfor; ?>
        </div>
        <div class="col-12 mx-auto mt-2 text-center">
            <input type="hidden" name="testimonial_count" id="testimonial_count" value="<?php echo $testimonial_count; ?>">    
            <button type='button' class="ms-auto btn btn-outline-secondary" onclick="addTestimonial()"><i class="fas fa-plus"></i></button>
        </div>
    </div>
    <script>
        function addStack(){
            var count = Number(jQuery('#stack_count').val());
            console.log(count)
            jQuery('#stacks').append(`
                <div class="col-12 col-md-6 col-lg-3 mx-auto">
                    <h6 class="mt-3 mb-1"> stack ${count+1}</h6>
                    <input name="stack_${count+1}" id="stack_${count+1}" type="hidden" class="admin-contact-input w-100" />
                    <div class="w-100 mt-2 d-flex justify-content-between align-items-center border border-secondary rounded p-1  stack_${count+1} image-preview" style="min-height: 60px;">
                        <button type="button" class="btn btn-outline-secondary upload-image w-auto text-center" onclick="callMedia('stack_${count+1}')"><i class="fas fa-upload"></i></button>
                        <img style="max-width: 75%; max-height: 60px;" src="">
                    </div>
                </div>`);
            jQuery('#stack_count').val(parseInt(count) + 1);
        } 
        function addColor(){
            var count = Number(jQuery('#color_count').val());
            console.log(count)
            jQuery('#colors').append(`
                <div class="col-12 col-md-6 col-lg-3 mx-auto">
                    <h6 class="mt-3 mb-1"> Color ${count+1}</h6>
                    <input type="text" name="color_${count+1}_title" class="admin-contact-input w-100 mt-2" placeholder="title" value="">
                    <input type="text" name="color_${count+1}_hash" class="admin-contact-input w-100 mt-2" placeholder="hash" value="">
                </div>`);
            jQuery('#color_count').val(parseInt(count) + 1);
        } 
        function addTypo(){
            var count = Number(jQuery('#typo_count').val());
            console.log(count)
            jQuery('#typos').append(`
            <div class="col-12 col-md-6 col-lg-3 mx-auto">
                <h6 class="mt-3 mb-1"> Font ${count+1}</h6>
                <input type="text" name="typo_${count+1}_family" class="admin-contact-input w-100 mt-2" placeholder="font-family" value="">
                <input type="text" name="typo_${count+1}_description" class="admin-contact-input w-100 mt-2" placeholder="why to use this font" value="">
            </div>`);
            jQuery('#typo_count').val(parseInt(count) + 1);
        } 
        function addWorkflow(){
            var count = Number(jQuery('#work_flow_count').val());
            console.log(count)
            jQuery('#workflow').append(`
            <div class="col-12 col-md-6 mx-auto">
                <h6 class="mt-3 mb-1"> Step ${count+1}</h6>
                <input type="text" name="workflow_${count+1}_title" class="admin-contact-input w-100 mt-2" placeholder="Title" value="">
                <input type="text" name="workflow_${count+1}_description" class="admin-contact-input w-100 mt-2" placeholder="Description" value="">
            </div>`);
            jQuery('#work_flow_count').val(parseInt(count) + 1);
        } 
        function addFeature(){
            var count = Number(jQuery('#feature_count').val());
            console.log(count)
            jQuery('#feature').append(`
            <div class="col-12 col-md-6 mx-auto">
                <h6 class="mt-3 mb-1"> Feature ${count+1}</h6>
                <input type="text" name="feature_${count+1}_title" class="admin-contact-input w-100 mt-2" placeholder="Title" value="">
                <input type="text" name="feature_${count+1}_description" class="admin-contact-input w-100 mt-2" placeholder="Description" value="">
            </div>`);
            jQuery('#feature_count').val(parseInt(count) + 1);
        } 
        function addTestimonial(){
            var count = Number(jQuery('#testimonial_count').val());
            console.log(count)
            jQuery('#testimonial').append(`
            <div class="col-12 col-md-6 col-lg-4 mx-auto">
                <h6 class="mt-3 mb-1"> Testimonial ${count+1}</h6>
                <input type="text" name="testimonial_${count+1}_name" class="admin-contact-input w-100 mt-2" placeholder="Client Name" value="">
                <input type="text" name="testimonial_${count+1}_desg" class="admin-contact-input w-100 mt-2" placeholder="Client Desig" value="">
                <input type="text" name="testimonial_${count+1}_comment" class="admin-contact-input w-100 mt-2" placeholder="Comment" value="">
                <input type="hidden" name="testimonial_${count+1}_image" id="testimonial_${count+1}_image" class="admin-contact-input w-100 mt-2" placeholder="image" value=''>
                <div class="w-100 mt-2 d-flex justify-content-between align-items-center border border-secondary rounded p-1 testimonial_${count+1}_image image-preview" style="min-height: 60px;">
                    <button type="button" class="btn btn-outline-secondary upload-image w-auto text-center" onclick="callMedia('testimonial_${count+1}_image')"><i class="fas fa-upload"></i></button>
                    <img style="max-width: 75%; max-height: 60px;" src="">
                </div>
            </div>`);
            jQuery('#testimonial_count').val(parseInt(count) + 1);
        } 
    </script>
    <?php
}
function casestudy_postdata($post_id){
    if (!empty($_REQUEST['meta_description'])) {
        $casestudy_array = [];
        $casestudy_array['meta_description'] =
            $_REQUEST['meta_description'] ?? '';
        $casestudy_array['case_title'] = $_REQUEST['case_title'] ?? '';
        $casestudy_array['case_url'] = $_REQUEST['case_url'] ?? '';
        $casestudy_array['case_type'] = $_REQUEST['case_type'] ?? '';
        $casestudy_array['case_time'] = $_REQUEST['case_time'] ?? '';
        $casestudy_array['case_about'] = $_REQUEST['case_about'] ?? '';
        $casestudy_array['case_mockup'] = $_REQUEST['case_mockup'] ?? '';
        $casestudy_array['case_logo'] = $_REQUEST['case_logo'] ?? '';
        $casestudy_array['stack_count'] = $_REQUEST['stack_count'] ?? '';
        $casestudy_array['color_count'] = $_REQUEST['color_count'] ?? '';
        $casestudy_array['typo_count'] = $_REQUEST['typo_count'] ?? '';
        $casestudy_array['work_flow_count'] =
            $_REQUEST['work_flow_count'] ?? '';
        $casestudy_array['feature_count'] = $_REQUEST['feature_count'] ?? '';
        $casestudy_array['testimonial_count'] =
            $_REQUEST['testimonial_count'] ?? '';
        $casestudy_array['workflow_title'] = $_REQUEST['workflow_title'] ?? '';
        $casestudy_array['workflow_image'] = $_REQUEST['workflow_image'] ?? '';
        $casestudy_array['feature_title'] = $_REQUEST['feature_title'] ?? '';
        $casestudy_array['feature_image'] = $_REQUEST['feature_image'] ?? '';
        $casestudy_array['testimonial_Description'] =
            $_REQUEST['testimonial_Description'] ?? '';
        for ($i = 1; $i <= $_REQUEST['stack_count']; $i++) {
            if (!empty($_REQUEST['stack_' . $i])) {
                $casestudy_array['stack_' . $i] =
                    $_REQUEST['stack_' . $i] ?? '';
            }
        }
        for ($i = 1; $i <= $_REQUEST['color_count']; $i++) {
            if (!empty($_REQUEST['color_' . $i . '_title'])) {
                $casestudy_array['color_' . $i . '_title'] =
                    $_REQUEST['color_' . $i . '_title'] ?? '';
            }
            if (!empty($_REQUEST['color_' . $i . '_hash'])) {
                $casestudy_array['color_' . $i . '_hash'] =
                    $_REQUEST['color_' . $i . '_hash'] ?? '';
            }
        }
        for ($i = 1; $i <= $_REQUEST['typo_count']; $i++) {
            if (!empty($_REQUEST['typo_' . $i . '_family'])) {
                $casestudy_array['typo_' . $i . '_family'] =
                    $_REQUEST['typo_' . $i . '_family'] ?? '';
            }
            if (!empty($_REQUEST['typo_' . $i . '_description'])) {
                $casestudy_array['typo_' . $i . '_description'] =
                    $_REQUEST['typo_' . $i . '_description'] ?? '';
            }
        }
        for ($i = 1; $i <= $_REQUEST['work_flow_count']; $i++) {
            if (!empty($_REQUEST['workflow_' . $i . '_title'])) {
                $casestudy_array['workflow_' . $i . '_title'] =
                    $_REQUEST['workflow_' . $i . '_title'] ?? '';
            }
            if (!empty($_REQUEST['workflow_' . $i . '_description'])) {
                $casestudy_array['workflow_' . $i . '_description'] =
                    $_REQUEST['workflow_' . $i . '_description'] ?? '';
            }
        }
        for ($i = 1; $i <= $_REQUEST['feature_count']; $i++) {
            if (!empty($_REQUEST['feature_' . $i . '_title'])) {
                $casestudy_array['feature_' . $i . '_title'] =
                    $_REQUEST['feature_' . $i . '_title'] ?? '';
            }
            if (!empty($_REQUEST['feature_' . $i . '_description'])) {
                $casestudy_array['feature_' . $i . '_description'] =
                    $_REQUEST['feature_' . $i . '_description'] ?? '';
            }
        }
        for ($i = 1; $i <= $_REQUEST['testimonial_count']; $i++) {
            if (!empty($_REQUEST['testimonial_' . $i . '_name'])) {
                $casestudy_array['testimonial_' . $i . '_name'] =
                    $_REQUEST['testimonial_' . $i . '_name'] ?? '';
            }
            if (!empty($_REQUEST['testimonial_' . $i . '_desg'])) {
                $casestudy_array['testimonial_' . $i . '_desg'] =
                    $_REQUEST['testimonial_' . $i . '_desg'] ?? '';
            }
            if (!empty($_REQUEST['testimonial_' . $i . '_comment'])) {
                $casestudy_array['testimonial_' . $i . '_comment'] =
                    $_REQUEST['testimonial_' . $i . '_comment'] ?? '';
            }
            if (!empty($_REQUEST['testimonial_' . $i . '_image'])) {
                $casestudy_array['testimonial_' . $i . '_image'] =
                    $_REQUEST['testimonial_' . $i . '_image'] ?? '';
            }
        }
        update_post_meta(
            $post_id,
            'casestudy_enquery_meta_key',
            $casestudy_array
        );
    }
}
add_action('save_post', 'casestudy_postdata');

//////////////////////////////////BLOG//////////////////////////////////////
function blog_meta_box(){
    add_meta_box(
        'blog_box',
        __('blog Details', 'blog_box'),
        'blog_html',
        'blog',
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'blog_meta_box');
function blog_html($post){
    wp_nonce_field('_blog_enquery_nonce', 'blog_enquery_nonce');
    $metaData = get_post_meta($post->ID, 'blog_enquery_meta_key', true);
    $upload_link = esc_url(get_upload_iframe_src());
    $your_img_id = get_post_meta(get_the_ID(), '_your_img_id', true);
    $your_img_src = wp_get_attachment_image_src($your_img_id, 'full');
    $you_have_img = is_array($your_img_src);
    ?>
    <div class="row">
        <div class="col-7">
            <label for=""> Meta Description</label><br>
            <input type="text" name="meta_description" class="admin-contact-input w-100" value="<?php if (
                !empty($metaData['meta_description'])
            ) {
                echo $metaData['meta_description'];
            } ?>">
        </div>
        <div class="col-5">
            <label for=""> Read Time</label><br>
            <input type="text" name="read_time" class="admin-contact-input w-100" value="<?php if (
                !empty($metaData['read_time'])
            ) {
                echo $metaData['read_time'];
            } ?>">
        </div>
        <div class="col-6">
            <label for=""> facebook link</label><br>
            <input type="text" name="facebook_link" class="admin-contact-input w-100" value="<?php if (
                !empty($metaData['facebook_link'])
            ) {
                echo $metaData['facebook_link'];
            } ?>">
        </div>
        <div class="col-6">
            <label for=""> instagram link</label><br>
            <input type="text" name="instagram_link" class="admin-contact-input w-100" value="<?php if (
                !empty($metaData['instagram_link'])
            ) {
                echo $metaData['instagram_link'];
            } ?>">
        </div>
    </div>
    <?php
}
function blog_postdata($post_id){
    if (!empty($_REQUEST['meta_description'])) {
        $array_interest = [];
        $array_interest['meta_description'] = $_REQUEST['meta_description'];
        $array_interest['read_time'] = $_REQUEST['read_time'];
        $array_interest['facebook_link'] = $_REQUEST['facebook_link'];
        $array_interest['instagram_link'] = $_REQUEST['instagram_link'];
        update_post_meta($post_id, 'blog_enquery_meta_key', $array_interest);
    }
}
add_action('save_post', 'blog_postdata');

//////////////////////////////////SERVICE//////////////////////////////////////
function service_meta_box(){
    add_meta_box(
        'service_box',
        __('service Details', 'service_box'),
        'service_html',
        'service',
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'service_meta_box');
function service_html($post){
    wp_enqueue_media();
    wp_nonce_field('_service_enquery_nonce', 'service_enquery_nonce');
    $service_enquery = get_post_meta(
        $post->ID,
        'service_enquery_meta_key',
        true
    );
    $upload_link = esc_url(get_upload_iframe_src());
    $your_img_id = get_post_meta(get_the_ID(), '_your_img_id', true);
    $your_img_src = wp_get_attachment_image_src($your_img_id, 'full');
    $you_have_img = is_array($your_img_src);
    if (isset($service_enquery['client_count'])) {
        $client_count = $service_enquery['client_count'];
    } else {
        $client_count = 1;
    }
    if (isset($service_enquery['tag_count'])) {
        $tag_count = $service_enquery['tag_count'];
    } else {
        $tag_count = 1;
    }
    if (isset($service_enquery['fact_count'])) {
        $fact_count = $service_enquery['fact_count'];
    } else {
        $fact_count = 1;
    }
    if (isset($service_enquery['stack_count'])) {
        $stack_count = $service_enquery['stack_count'];
    } else {
        $stack_count = 1;
    }
    if (isset($service_enquery['stack_array'])) {
        $stack_array = $service_enquery['stack_array'];
    } else {
        $stack_array = [1];
    }
    print_r($stack_array);
    ?>
    <div class="row">
        <div class="col-6 my-2">
            <label for=""> Meta Description</label><br>
            <input type="text" name="meta_description" class="admin-contact-input w-100 mt-1" value="<?php if (
                !empty($service_enquery['meta_description'])
            ) {
                echo $service_enquery['meta_description'];
            } ?>"   >
        </div>
        <div class="col-12 col-md-6 col-lg-3 mx-auto">
            <h6 class="mt-3 mb-1"> Feature Logo</h6>
            <input type="hidden" name="feature_logo" id="feature_logo" class="admin-contact-input w-100" value='<?php if (!empty($service_enquery['feature_logo'])) {echo $service_enquery['feature_logo'];} ?>'>
            <div class="w-100 mt-2 bg-dark d-flex justify-content-between align-items-center border border-secondary rounded p-1 feature_logo image-preview" style="min-height: 60px;">
                <button type="button" class="btn btn-outline-secondary upload-image w-auto text-center" onclick="callMedia('feature_logo')"><i class="fas fa-upload"></i></button>
                <img style="max-width: 75%; max-height: 60px;" src="<?php if (!empty($service_enquery['feature_logo'])) {echo json_decode($service_enquery['feature_logo'])->url;} ?>">
            </div>
        </div>
        <div class="col-6 my-2">
            <label for=""> Service Title</label><br>
            <input type="text" name="service_title"   class="admin-contact-input w-100 mt-1" value="<?php if (
                !empty($service_enquery['service_title'])
            ) {
                echo $service_enquery['service_title'];
            } ?>"   >
        </div>
        <div class="col-6 my-2">
            <label for=""> Service Description</label><br>
            <input type="text" name="service_description"   class="admin-contact-input w-100 mt-1" value="<?php if (
                !empty($service_enquery['service_description'])
            ) {
                echo $service_enquery['service_description'];
            } ?>"   >
        </div>
        <hr class="mt-2">
        <div > <h6>Stack array</h6></div>
        <hr class="mt-2">
        <div class="col-6 my-2">
            <label for=""> Stack Title</label><br>
            <input type="text" name="stack_title"   class="admin-contact-input w-100 mt-1" value="<?php if (
                !empty($service_enquery['stack_title'])
            ) {
                echo $service_enquery['stack_title'];
            } ?>"   >
        </div>
        <div class="col-6 my-2">
            <label for=""> Stack Description</label><br>
            <input type="text" name="stack_description"   class="admin-contact-input w-100 mt-1" value="<?php if (
                !empty($service_enquery['stack_description'])
            ) {
                echo $service_enquery['stack_description'];
            } ?>"   >
        </div>
        <div class="col-12 row mx-auto" id="stacks">
            <?php foreach ($stack_array as $index => $stacks): ?>
                <div class="row mx-auto border-bottom pb-4">
                    <div class="col-md-6 col-lg-3 mx-auto">
                        <h6 class="mt-3 mb-1"> Stack <?php echo $index +
                            1; ?></h6><br>
                        <input type="text" name="stack_<?php echo $index; ?>_title" class="admin-contact-input w-100 mt-1" value="<?php if (
        !empty($service_enquery['stack_' . $index . '_title'])
    ) {
        echo $service_enquery['stack_' . $index . '_title'];
    } ?>">
                        <h6 class="mt-3 mb-1"> Logo <?php echo $index + 1; ?></h6>
                        <input type="hidden" name="stack_<?php echo $index; ?>_logo" id="stack_<?php echo $index; ?>_logo" class="admin-contact-input w-100" value='<?php if (
        !empty($service_enquery['stack_' . $index . '_logo'])
    ) {
        echo $service_enquery['stack_' . $index . '_logo'];
    } ?>'>
                        <div class="w-100 mt-2 d-flex justify-content-between align-items-center border border-secondary rounded p-1 stack_<?php echo $index; ?>_logo image-preview" style="min-height: 60px;">
                            <button type="button" class="btn btn-outline-secondary upload-image w-auto text-center" onclick="callMedia('stack_<?php echo $index; ?>_logo')"><i class="fas fa-upload"></i></button>
                            <img style="max-width: 95%; max-height: 60px;" src="<?php if (
                                !empty(
                                    $service_enquery['stack_' . $index . '_logo']
                                )
                            ) {
                                echo json_decode(
                                    $service_enquery['stack_' . $index . '_logo']
                                )->url;
                            } ?>">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-8 mx-auto row" id="stack_<?php echo $index; ?>">
                        <?php for ($i = 1; $i <= $stacks; $i++): ?>
                            <div class="col-12 col-md-6 col-lg-3 mx-auto">
                                <h6 class="mt-3 mb-1"> Image <?php echo $i; ?></h6>
                                <input type="hidden" name="stack_image_<?php echo $index; ?>_<?php echo $i; ?>" id="stack_image_<?php echo $index; ?>_<?php echo $i; ?>" class="admin-contact-input w-100" value='<?php if (
        !empty($service_enquery['stack_image_' . $index . '_' . $i])
    ) {
        echo $service_enquery['stack_image_' . $index . '_' . $i];
    } ?>'>
                                <div class="w-100 mt-2 d-flex justify-content-between align-items-center border border-secondary rounded p-1 stack_image_<?php echo $index; ?>_<?php echo $i; ?> image-preview" style="min-height: 60px;">
                                    <button type="button" class="btn btn-outline-secondary upload-image w-auto text-center" onclick="callMedia('stack_image_<?php echo $index; ?>_<?php echo $i; ?>')"><i class="fas fa-upload"></i></button>
                                    <img style="max-width: 95%; max-height: 60px;" src="<?php if (
                                        !empty(
                                            $service_enquery[
                                                'stack_image_' . $index . '_' . $i
                                            ]
                                        )
                                    ) {
                                        echo json_decode(
                                            $service_enquery[
                                                'stack_image_' . $index . '_' . $i
                                            ]
                                        )->url;
                                    } ?>">
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                    <div class="col-12 col-lg-1 mx-auto mt-5 text-center">
                        <input type="hidden" name="stack_<?php echo $index; ?>_count" id="stack_<?php echo $index; ?>_count" value="<?php echo $stacks; ?>">    
                        <button type='button' class="ms-auto btn btn-outline-secondary" onclick="addStack('stack_<?php echo $index; ?>')"><i class="fas fa-plus"></i></button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="col-12 mx-auto mt-2 text-center">
            <input type="hidden" name="stack_array" id="stack_array" value="<?php echo count(
                $stack_array
            ); ?>">    
            <button type='button' class="ms-auto btn btn-outline-secondary" onclick="addStackArray()"><i class="fas fa-plus"></i></button>
        </div>
        <hr class="mt-2">
        <div><h6>Client List</h6></div>
        <hr class="mt-2">
        <div class="col-12 row mx-auto" id="clients">
            <?php for ($i = 1; $i <= $client_count; $i++): ?>
                <div class="col-12 col-md-6 col-lg-3 mx-auto">
                    <h6 class="mt-3 mb-1"> Client <?php echo $i; ?></h6>
                    <input type="text" name="client_<?php echo $i; ?>_url" id="client_<?php echo $i; ?>_url" class="admin-contact-input w-100" value='<?php if (
        !empty($service_enquery['client_' . $i . '_url'])
    ) {
        echo $service_enquery['client_' . $i . '_url'];
    } ?>'>
                    <input type="hidden" name="client_<?php echo $i; ?>" id="client_<?php echo $i; ?>" class="admin-contact-input w-100" value='<?php if (
        !empty($service_enquery['client_' . $i])
    ) {
        echo $service_enquery['client_' . $i];
    } ?>'>
                    <div class="w-100 mt-2 d-flex justify-content-between align-items-center border border-secondary rounded p-1 client_<?php echo $i; ?> image-preview" style="min-height: 60px;">
                        <button type="button" class="btn btn-outline-secondary upload-image w-auto text-center" onclick="callMedia('client_<?php echo $i; ?>')"><i class="fas fa-upload"></i></button>
                        <img style="max-width: 75%; max-height: 60px;" src="<?php if (
                            !empty($service_enquery['client_' . $i])
                        ) {
                            echo json_decode($service_enquery['client_' . $i])->url;
                        } ?>">
                    </div>
                </div>
            <?php endfor; ?>
        </div>
        <div class="col-12 mx-auto mt-2 text-center">
            <input type="hidden" name="client_count" id="client_count" value="<?php echo $client_count; ?>">    
            <button type='button' class="ms-auto btn btn-outline-secondary" onclick="addClient()"><i class="fas fa-plus"></i></button>
        </div>
        <hr class="mt-2">
        <div > <h6>Service Tag List</h6></div>
        <hr class="mt-2">
        <div class="col-6 my-2 mx-auto">
            <h6 class="mt-3 mb-1"> General Tag Title</h6><br>
            <input type="text" name="tag_title" class="admin-contact-input w-100 mt-1" value="<?php if (
                !empty($service_enquery['tag_title'])
            ) {
                echo $service_enquery['tag_title'];
            } ?>"   >
        </div>
        <div class="col-12 row mx-auto" id="tags">
            <?php for ($i = 1; $i <= $tag_count; $i++): ?>
                <div class="col-12 col-md-6 col-lg-3 mx-auto">
                    <h6 class="mt-3 mb-1"> tag <?php echo $i; ?></h6>
                    <input type="text" name="tag_<?php echo $i; ?>_title" class="admin-contact-input w-100 mt-2" placeholder="title" value="<?php if (
        !empty($service_enquery['tag_' . $i . '_title'])
    ) {
        echo $service_enquery['tag_' . $i . '_title'];
    } ?>">
                    <input type="text" name="tag_<?php echo $i; ?>_description" class="admin-contact-input w-100 mt-2" placeholder="description" value="<?php if (
        !empty($service_enquery['tag_' . $i . '_description'])
    ) {
        echo $service_enquery['tag_' . $i . '_description'];
    } ?>">
                    <input type="hidden" name="tag_<?php echo $i; ?>_image" id="tag_<?php echo $i; ?>_image" class="admin-contact-input w-100 mt-2" placeholder="image" value='<?php if (
        !empty($service_enquery['tag_' . $i . '_image'])
    ) {
        echo $service_enquery['tag_' . $i . '_image'];
    } ?>'>
                    <div class="w-100 mt-2 d-flex justify-content-between align-items-center border border-secondary rounded p-1 tag_<?php echo $i; ?>_image image-preview" style="min-height: 60px;">
                        <button type="button" class="btn btn-outline-secondary upload-image w-auto text-center" onclick="callMedia('tag_<?php echo $i; ?>_image')"><i class="fas fa-upload"></i></button>
                        <img style="max-width: 75%; max-height: 60px;" 
                        src="<?php if (
                            !empty($service_enquery['tag_' . $i . '_image'])
                        ) {
                            echo json_decode(
                                $service_enquery['tag_' . $i . '_image']
                            )->url;
                        } ?>">
                    </div>
                    <input type="text" name="tag_<?php echo $i; ?>_usp1" class="admin-contact-input w-100 mt-2" placeholder="usp1" value="<?php if (
        !empty($service_enquery['tag_' . $i . '_usp1'])
    ) {
        echo $service_enquery['tag_' . $i . '_usp1'];
    } ?>">
                    <input type="text" name="tag_<?php echo $i; ?>_usp2" class="admin-contact-input w-100 mt-2" placeholder="usp2" value="<?php if (
        !empty($service_enquery['tag_' . $i . '_usp2'])
    ) {
        echo $service_enquery['tag_' . $i . '_usp2'];
    } ?>">
                    <input type="text" name="tag_<?php echo $i; ?>_usp3" class="admin-contact-input w-100 mt-2" placeholder="usp3" value="<?php if (
        !empty($service_enquery['tag_' . $i . '_usp3'])
    ) {
        echo $service_enquery['tag_' . $i . '_usp3'];
    } ?>">
                </div>
            <?php endfor; ?>
        </div>
        <div class="col-12 mx-auto mt-2 text-center">
            <input type="hidden" name="tag_count" id="tag_count" value="<?php echo $tag_count; ?>">    
            <button type='button' class="ms-auto btn btn-outline-secondary" onclick="addtag()"><i class="fas fa-plus"></i></button>
        </div>
        <hr class="mt-2">
        <div > <h6>Service Fact List</h6></div>
        <hr class="mt-2">
        <div class="col-6 my-2">
            <h6 class="mt-3 mb-1"> Fact Title</h6><br>
            <input type="text" name="fact_title" class="admin-contact-input w-100 mt-1" value="<?php if (
                !empty($service_enquery['fact_title'])
            ) {
                echo $service_enquery['fact_title'];
            } ?>"   >
        </div>
        <div class="col-6 my-2">
            <h6 class="mt-3 mb-1"> Fact Description</h6><br>
            <input type="text" name="fact_description" class="admin-contact-input w-100 mt-1" value="<?php if (
                !empty($service_enquery['fact_description'])
            ) {
                echo $service_enquery['fact_description'];
            } ?>"   >
        </div>
        <div class="col-12 row mx-auto" id="facts">
            <?php for ($i = 1; $i <= $fact_count; $i++): ?>
                <div class="col-12 col-md-6 col-lg-3 mx-auto">
                    <h6 class="mt-3 mb-1"> fact <?php echo $i; ?></h6>
                    <input type="text" name="fact_<?php echo $i; ?>_title" class="admin-contact-input w-100 mt-2" placeholder="title" value="<?php if (
        !empty($service_enquery['fact_' . $i . '_title'])
    ) {
        echo $service_enquery['fact_' . $i . '_title'];
    } ?>">
                    <input type="text" name="fact_<?php echo $i; ?>_description" class="admin-contact-input w-100 mt-2" placeholder="description" value="<?php if (
        !empty($service_enquery['fact_' . $i . '_description'])
    ) {
        echo $service_enquery['fact_' . $i . '_description'];
    } ?>">
                    <input type="hidden" name="fact_<?php echo $i; ?>_image" id="fact_<?php echo $i; ?>_image" class="admin-contact-input w-100 mt-2" placeholder="image" value='<?php if (
        !empty($service_enquery['fact_' . $i . '_image'])
    ) {
        echo $service_enquery['fact_' . $i . '_image'];
    } ?>'>
                    <div class="w-100 mt-2 d-flex justify-content-between align-items-center border border-secondary rounded p-1 fact_<?php echo $i; ?>_image image-preview" style="min-height: 60px;">
                        <button type="button" class="btn btn-outline-secondary upload-image w-auto text-center" onclick="callMedia('fact_<?php echo $i; ?>_image')"><i class="fas fa-upload"></i></button>
                        <img style="max-width: 75%; max-height: 60px;" src="<?php if (
                            !empty($service_enquery['fact_' . $i . '_image'])
                        ) {
                            echo json_decode(
                                $service_enquery['fact_' . $i . '_image']
                            )->url;
                        } ?>">
                    </div>
                    <input type="text" name="fact_<?php echo $i; ?>_link" class="admin-contact-input w-100 mt-2" placeholder="link" value="<?php if (
        !empty($service_enquery['fact_' . $i . '_link'])
    ) {
        echo $service_enquery['fact_' . $i . '_link'];
    } ?>">
                </div>
            <?php endfor; ?>
        </div>
        <div class="col-12 mx-auto mt-2 text-center">
            <input type="hidden" name="fact_count" id="fact_count" value="<?php echo $fact_count; ?>">    
            <button type='button' class="ms-auto btn btn-outline-secondary" onclick="addfact()"><i class="fas fa-plus"></i></button>
        </div>
        <hr class="mt-2">
        <div><h6>Service body details </h6></div>
        <hr class="mt-2">
        <div class="row my-2 mx-auto">
            <div class="col-md-8 col-12 row">
                <div class="col-12 col-md-6 mt-1 mx-auto">
                    <h6 class="mt-3 mb-1">body tagline</h6>
                    <input type="text" name="body_tagline" class="admin-contact-input mt-1 w-100" value="<?php if (
                        !empty($service_enquery['body_tagline'])
                    ) {
                        echo $service_enquery['body_tagline'];
                    } ?>">
                </div>
                <div class="col-12 col-md-6 mt-1 mx-auto">
                    <h6 class="mt-3 mb-1">body title</h6>
                    <input type="text" name="body_title" class="admin-contact-input mt-1 w-100" value="<?php if (
                        !empty($service_enquery['body_title'])
                    ) {
                        echo $service_enquery['body_title'];
                    } ?>">
                </div>
                <div class="col-12 col-md-6 mt-1 mx-auto">
                    <h6 class="mt-3 mb-1">body description</h6>
                    <input type="text" name="body_description" class="admin-contact-input mt-1 w-100" value="<?php if (
                        !empty($service_enquery['body_description'])
                    ) {
                        echo $service_enquery['body_description'];
                    } ?>">
                </div>
                <div class="col-6 col-md-3 mt-1 mx-auto">
                    <h6 class="mt-3 mb-1">body button_text</h6>
                    <input type="text" name="body_button_text" class="admin-contact-input mt-1 w-100" value="<?php if (
                        !empty($service_enquery['body_button_text'])
                    ) {
                        echo $service_enquery['body_button_text'];
                    } ?>">
                </div>
                <div class="col-6 col-md-3 mt-1 mx-auto">
                    <h6 class="mt-3 mb-1">body button link</h6>
                    <input type="text" name="body_button_link" class="admin-contact-input mt-1 w-100" value="<?php if (
                        !empty($service_enquery['body_button_link'])
                    ) {
                        echo $service_enquery['body_button_link'];
                    } ?>">
                </div>
            </div>
            <div class="col-md-4 col-12 mt-1 mx-auto">
                <h6 class="mt-3 mb-1">body image</h6>
                <input type="hidden" name="body_image" id="body_image" class="admin-contact-input mt-1 w-100" value='<?php if (
                    !empty($service_enquery['body_image'])
                ) {
                    echo $service_enquery['body_image'];
                } ?>'>
                <div class="w-100 mt-2 d-flex justify-content-between align-items-center border border-secondary rounded p-1 body_image image-preview" style="min-height: 60px;">
                    <button type="button" class="btn btn-outline-secondary upload-image w-auto text-center" onclick="callMedia('body_image')"><i class="fas fa-upload"></i></button>
                    <img style="max-width: 75%; max-height: 60px;" src="<?php if (
                        !empty($service_enquery['body_image'])
                    ) {
                        echo json_decode($service_enquery['body_image'])->url;
                    } ?>">
                </div>
            </div>
            <hr class="mt-4">
            <div class="col-12 col-md-6">
                <h6 class="mt-3 mb-1"> Body Tag 1</h6><br>
                <input type="text" name="body_tag_1_title" class="admin-contact-input w-100 mt-2" placeholder="title" value="<?php if (
                    !empty($service_enquery['body_tag_1_title'])
                ) {
                    echo $service_enquery['body_tag_1_title'];
                } ?>">
                <input type="text" name="body_tag_1_description" class="admin-contact-input w-100 mt-2" placeholder="description" value="<?php if (
                    !empty($service_enquery['body_tag_1_description'])
                ) {
                    echo $service_enquery['body_tag_1_description'];
                } ?>">
                <input type="hidden" name="body_tag_1_image" id="body_tag_1_image" class="admin-contact-input mt-2 w-100" value='<?php if (
                    !empty($service_enquery['body_tag_1_image'])
                ) {
                    echo $service_enquery['body_tag_1_image'];
                } ?>'>
                <div class="w-100 mt-2 d-flex justify-content-between align-items-center border border-secondary rounded p-1 body_tag_1_image image-preview" style="min-height: 60px;">
                    <button type="button" class="btn btn-outline-secondary upload-image w-auto text-center" onclick="callMedia('body_tag_1_image')"><i class="fas fa-upload"></i></button>
                    <img style="max-width: 75%; max-height: 60px;" src="<?php if (
                        !empty($service_enquery['body_tag_1_image'])
                    ) {
                        echo json_decode($service_enquery['body_tag_1_image'])->url;
                    } ?>">
                </div>
                <input type="text" name="body_tag_1_button_text" class="admin-contact-input w-100 mt-2" placeholder="button text" value="<?php if (
                    !empty($service_enquery['body_tag_1_button_text'])
                ) {
                    echo $service_enquery['body_tag_1_button_text'];
                } ?>">
                <input type="text" name="body_tag_1_link" class="admin-contact-input w-100 mt-2" placeholder="link" value="<?php if (
                    !empty($service_enquery['body_tag_1_link'])
                ) {
                    echo $service_enquery['body_tag_1_link'];
                } ?>">
            </div>
            <div class="col-12 col-md-6">
                <h6 class="mt-3 mb-1"> Body Tag 2</h6><br>
                <input type="text" name="body_tag_2_title" class="admin-contact-input w-100 mt-2" placeholder="title" value="<?php if (
                    !empty($service_enquery['body_tag_2_title'])
                ) {
                    echo $service_enquery['body_tag_2_title'];
                } ?>">
                <input type="text" name="body_tag_2_description" class="admin-contact-input w-100 mt-2" placeholder="description" value="<?php if (
                    !empty($service_enquery['body_tag_2_description'])
                ) {
                    echo $service_enquery['body_tag_2_description'];
                } ?>">
                <input type="hidden" name="body_tag_2_image" id="body_tag_2_image" class="admin-contact-input mt-2 w-100" value='<?php if (
                    !empty($service_enquery['body_tag_2_image'])
                ) {
                    echo $service_enquery['body_tag_2_image'];
                } ?>'>
                <div class="w-100 mt-2 d-flex justify-content-between align-items-center border border-secondary rounded p-1 body_tag_2_image image-preview" style="min-height: 60px;">
                    <button type="button" class="btn btn-outline-secondary upload-image w-auto text-center" onclick="callMedia('body_tag_2_image')"><i class="fas fa-upload"></i></button>
                    <img style="max-width: 75%; max-height: 60px;" src="<?php if (
                        !empty($service_enquery['body_tag_2_image'])
                    ) {
                        echo json_decode($service_enquery['body_tag_2_image'])->url;
                    } ?>">
                </div>
                <input type="text" name="body_tag_2_button_text" class="admin-contact-input w-100 mt-2" placeholder="button text" value="<?php if (
                    !empty($service_enquery['body_tag_2_button_text'])
                ) {
                    echo $service_enquery['body_tag_2_button_text'];
                } ?>">
                <input type="text" name="body_tag_2_link" class="admin-contact-input w-100 mt-2" placeholder="link" value="<?php if (
                    !empty($service_enquery['body_tag_2_link'])
                ) {
                    echo $service_enquery['body_tag_2_link'];
                } ?>">
            </div>
        </div>
        <hr class="mt-2">
    </div>
    <script>
        function addClient(){
            var count = Number(jQuery('#client_count').val());
            console.log(count)
            jQuery('#clients').append(`
                <div class="col-12 col-md-6 col-lg-3 mx-auto">
                    <h6 class="mt-3 mb-1"> Client ${count+1}</h6>
                    <input name="client_${count+1}" id="client_${count+1}" type="hidden" class="admin-contact-input w-100" />
                    <input name="client_${count+1}_url" id="client_${count+1}_url" type="text" class="admin-contact-input w-100" />
                    <div class="w-100 mt-2 d-flex justify-content-between align-items-center border border-secondary rounded p-1  client_${count+1} image-preview" style="min-height: 60px;">
                        <button type="button" class="btn btn-outline-secondary upload-image w-auto text-center" onclick="callMedia('client_${count+1}')"><i class="fas fa-upload"></i></button>
                        <img style="max-width: 75%; max-height: 60px;" src="">
                    </div>
                </div>`);
            jQuery('#client_count').val(parseInt(count) + 1);
        } 
        function addStack(stacks){
            var count = Number(jQuery('#'+stacks+'_count').val());
            // console.log(count, stacks)
            jQuery('#'+stacks).append(`
                <div class="col-12 col-md-6 col-lg-3 mx-auto">
                    <h6 class="mt-3 mb-1"> Image ${count+1}</h6>
                    <input name="${stacks}_${count+1}" id="${stacks}_${count+1}" type="hidden" class="admin-contact-input w-100" />
                    <div class="w-100 mt-2 d-flex justify-content-between align-items-center border border-secondary rounded p-1  ${stacks}_${count+1} image-preview" style="min-height: 60px;">
                        <button type="button" class="btn btn-outline-secondary upload-image w-auto text-center" onclick="callMedia('${stacks}_${count+1}')"><i class="fas fa-upload"></i></button>
                        <img style="max-width: 75%; max-height: 60px;" src="">
                    </div>
                </div>`);
            jQuery('#'+stacks+'_count').val(parseInt(count) + 1);
        } 
        function addStackArray(){
            console.log(jQuery("#stacks").children())
            var count = Number(jQuery('#stack_array').val());
            jQuery('#stacks').append(`
                <div class="row mx-auto border-bottom pb-4">
                    <div class="col-md-6 col-lg-3 mx-auto">
                        <h6 class="mt-3 mb-1"> Stack ${count+1}</h6><br>
                        <input type="text" name="stack_${count}_title" class="admin-contact-input w-100 mt-1" value="">
                        <h6 class="mt-3 mb-1"> Logo ${count+1}</h6>
                        <input type="hidden" name="stack_${count}_logo" id="stack_${count}_logo" class="admin-contact-input w-100" value=''>
                        <div class="w-100 mt-2 d-flex justify-content-between align-items-center border border-secondary rounded p-1 stack_${count}_logo image-preview" style="min-height: 60px;">
                            <button type="button" class="btn btn-outline-secondary upload-image w-auto text-center" onclick="callMedia('stack_${count}_logo')"><i class="fas fa-upload"></i></button>
                            <img style="max-width: 95%; max-height: 60px;" src="">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-8 mx-auto row" id="stack_${count}">
                        <div class="col-12 col-md-6 col-lg-3 mx-auto">
                            <h6 class="mt-3 mb-1"> Image 1</h6>
                            <input type="hidden" name="stack_image_${count}_1" id="stack_image_${count}_1" class="admin-contact-input w-100" value=''>
                            <div class="w-100 mt-2 d-flex justify-content-between align-items-center border border-secondary rounded p-1 stack_image_${count}_1 image-preview" style="min-height: 60px;">
                                <button type="button" class="btn btn-outline-secondary upload-image w-auto text-center" onclick="callMedia('stack_image_${count}_1')"><i class="fas fa-upload"></i></button>
                                <img style="max-width: 95%; max-height: 60px;" src="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-1 mx-auto mt-5 text-center">
                        <input type="hidden" name="stack_${count}_count" id="stack_${count}_count" value="1">    
                        <button type='button' class="ms-auto btn btn-outline-secondary" onclick="addStack('stack_${count}')"><i class="fas fa-plus"></i></button>
                    </div>
                </div>
            `)
            jQuery('#stack_array').val(parseInt(count) + 1);

        }
        function addtag(){
            var count = Number(jQuery('#tag_count').val());
            jQuery('#tags').append(`
                <div class="col-12 col-md-6 col-lg-3 mx-auto">
                    <h6 class="mt-3 mb-1"> tag `+(count+1)+`</h6>
                    <input type="text" name="tag_`+(count+1)+`_title" class="admin-contact-input w-100 mt-2" placeholder="title">
                    <input type="text" name="tag_`+(count+1)+`_description" class="admin-contact-input w-100 mt-2" placeholder="description">
                    <input type="hidden" name="tag_`+(count+1)+`_image" id="tag_`+(count+1)+`_image" class="admin-contact-input w-100 mt-2" placeholder="image" value="">
                    <div class="w-100 mt-2 d-flex justify-content-between align-items-center border border-secondary rounded p-1 tag_`+(count+1)+`_image image-preview" style="min-height: 60px;">
                        <button type="button" class="btn btn-outline-secondary upload-image w-auto text-center" onclick="callMedia('tag_`+(count+1)+`_image')"><i class="fas fa-upload"></i></button>
                        <img style="max-width: 75%; max-height: 60px;" src="">
                    </div>
                    <input type="text" name="tag_`+(count+1)+`_usp1" class="admin-contact-input w-100 mt-2" placeholder="usp1">
                    <input type="text" name="tag_`+(count+1)+`_usp2" class="admin-contact-input w-100 mt-2" placeholder="usp2">
                    <input type="text" name="tag_`+(count+1)+`_usp3" class="admin-contact-input w-100 mt-2" placeholder="usp3">
                </div>`
            );
            jQuery('#tag_count').val(parseInt(count) + 1);
        }
        function addfact(){
            var count = Number(jQuery('#fact_count').val());
            jQuery('#facts').append(`
                <div class="col-12 col-md-6 col-lg-3 mx-auto">
                    <h6 class="mt-3 mb-1"> fact `+(count+1)+`</h6>
                    <input type="text" name="fact_`+(count+1)+`_title" class="admin-contact-input w-100 mt-2" placeholder="title">
                    <input type="text" name="fact_`+(count+1)+`_description" class="admin-contact-input w-100 mt-2" placeholder="description">
                    <input type="hidden" name="fact_`+(count+1)+`_image" id="fact_`+(count+1)+`_image" class="admin-contact-input w-100 mt-2" placeholder="image" value="">
                    <div class="w-100 mt-2 d-flex justify-content-between align-items-center border border-secondary rounded p-1 fact_`+(count+1)+`_image image-preview" style="min-height: 60px;">
                        <button type="button" class="btn btn-outline-secondary upload-image w-auto text-center" onclick="callMedia('fact_`+(count+1)+`_image')"><i class="fas fa-upload"></i></button>
                        <img style="max-width: 75%; max-height: 60px;" src="">
                    </div>
                    <input type="text" name="fact_`+(count+1)+`_link" class="admin-contact-input w-100 mt-2" placeholder="link">
                </div>`
            );
            jQuery('#fact_count').val(parseInt(count) + 1);
        }
    </script>
    <?php
}
function service_postdata($post_id){
    if (!empty($_REQUEST['meta_description'])) {
        $service_array = [];
        $service_array['meta_description'] =
            $_REQUEST['meta_description'] ?? '';
        $service_array['service_title'] = $_REQUEST['service_title'] ?? '';
        $service_array['service_description'] =
            $_REQUEST['service_description'] ?? '';
        $service_array['client_count'] = $_REQUEST['client_count'] ?? '';
        $service_array['stack_title'] = $_REQUEST['stack_title'] ?? '';
        $service_array['feature_logo'] = $_REQUEST['feature_logo'] ?? '';
        $service_array['stack_description'] =
            $_REQUEST['stack_description'] ?? '';
        $service_array['tag_count'] = $_REQUEST['tag_count'] ?? '';
        $service_array['tag_title'] = $_REQUEST['tag_title'] ?? '';
        $service_array['fact_count'] = $_REQUEST['fact_count'] ?? '';
        $service_array['fact_title'] = $_REQUEST['fact_title'] ?? '';
        $service_array['fact_description'] =
            $_REQUEST['fact_description'] ?? '';
        $stacks_array = [];
        for ($i = 0; $i <= $_REQUEST['stack_array']; $i++) {
            if (!empty($_REQUEST['stack_' . $i . '_title'])) {
                $service_array['stack_' . $i . '_title'] =
                    $_REQUEST['stack_' . $i . '_title'];
                $service_array['stack_' . $i . '_logo'] =
                    $_REQUEST['stack_' . $i . '_logo'];
                $service_array['stack_' . $i . '_count'] =
                    $_REQUEST['stack_' . $i . '_count'];
                for ($j = 1; $j <= $_REQUEST['stack_' . $i . '_count']; $j++) {
                    $service_array['stack_image_' . $i . '_' . $j] =
                        $_REQUEST['stack_image_' . $i . '_' . $j];
                }
                array_push($stacks_array, $_REQUEST['stack_' . $i . '_count']);
            }
        }
        $service_array['stack_array'] = $stacks_array;
        for ($i = 1; $i <= $_REQUEST['client_count']; $i++) {
            if (!empty($_REQUEST['client_' . $i])) {
                $service_array['client_' . $i] =
                    $_REQUEST['client_' . $i] ?? '';
                $service_array['client_' . $i . '_url'] =
                    $_REQUEST['client_' . $i . '_url'] ?? '';
            }
        }
        for ($i = 1; $i <= $_REQUEST['tag_count']; $i++) {
            if (!empty($_REQUEST['tag_' . $i . '_title'])) {
                $service_array['tag_' . $i . '_title'] =
                    $_REQUEST['tag_' . $i . '_title'] ?? '';
            }
            if (!empty($_REQUEST['tag_' . $i . '_description'])) {
                $service_array['tag_' . $i . '_description'] =
                    $_REQUEST['tag_' . $i . '_description'] ?? '';
            }
            if (!empty($_REQUEST['tag_' . $i . '_image'])) {
                $service_array['tag_' . $i . '_image'] =
                    $_REQUEST['tag_' . $i . '_image'] ?? '';
            }
            if (!empty($_REQUEST['tag_' . $i . '_usp1'])) {
                $service_array['tag_' . $i . '_usp1'] =
                    $_REQUEST['tag_' . $i . '_usp1'] ?? '';
            }
            if (!empty($_REQUEST['tag_' . $i . '_usp2'])) {
                $service_array['tag_' . $i . '_usp2'] =
                    $_REQUEST['tag_' . $i . '_usp2'] ?? '';
            }
            if (!empty($_REQUEST['tag_' . $i . '_usp3'])) {
                $service_array['tag_' . $i . '_usp3'] =
                    $_REQUEST['tag_' . $i . '_usp3'] ?? '';
            }
        }
        for ($i = 1; $i <= $_REQUEST['fact_count']; $i++) {
            if (!empty($_REQUEST['fact_' . $i . '_title'])) {
                $service_array['fact_' . $i . '_title'] =
                    $_REQUEST['fact_' . $i . '_title'] ?? '';
            }
            if (!empty($_REQUEST['fact_' . $i . '_description'])) {
                $service_array['fact_' . $i . '_description'] =
                    $_REQUEST['fact_' . $i . '_description'] ?? '';
            }
            if (!empty($_REQUEST['fact_' . $i . '_image'])) {
                $service_array['fact_' . $i . '_image'] =
                    $_REQUEST['fact_' . $i . '_image'] ?? '';
            }
            if (!empty($_REQUEST['fact_' . $i . '_link'])) {
                $service_array['fact_' . $i . '_link'] =
                    $_REQUEST['fact_' . $i . '_link'] ?? '';
            }
        }
        $service_array['body_tagline'] = $_REQUEST['body_tagline'] ?? '';
        $service_array['body_title'] = $_REQUEST['body_title'] ?? '';
        $service_array['body_description'] =
            $_REQUEST['body_description'] ?? '';
        $service_array['body_image'] = $_REQUEST['body_image'] ?? '';
        $service_array['body_button_text'] =
            $_REQUEST['body_button_text'] ?? '';
        $service_array['body_button_link'] =
            $_REQUEST['body_button_link'] ?? '';
        $service_array['body_tag_1_title'] =
            $_REQUEST['body_tag_1_title'] ?? '';
        $service_array['body_tag_1_description'] =
            $_REQUEST['body_tag_1_description'] ?? '';
        $service_array['body_tag_1_image'] =
            $_REQUEST['body_tag_1_image'] ?? '';
        $service_array['body_tag_1_button_text'] =
            $_REQUEST['body_tag_1_button_text'] ?? '';
        $service_array['body_tag_1_link'] = $_REQUEST['body_tag_1_link'] ?? '';
        $service_array['body_tag_2_title'] =
            $_REQUEST['body_tag_2_title'] ?? '';
        $service_array['body_tag_2_description'] =
            $_REQUEST['body_tag_2_description'] ?? '';
        $service_array['body_tag_2_image'] =
            $_REQUEST['body_tag_2_image'] ?? '';
        $service_array['body_tag_2_button_text'] =
            $_REQUEST['body_tag_2_button_text'] ?? '';
        $service_array['body_tag_2_link'] = $_REQUEST['body_tag_2_link'] ?? '';
        update_post_meta($post_id, 'service_enquery_meta_key', $service_array);
    }
}
add_action('save_post', 'service_postdata');

//////////////////////////////////LOCAL LANDING//////////////////////////////////////

function local_landing_meta_box(){
    add_meta_box(
        'local_landing_box',
        __('local_landing Details', 'local_landing_box'),
        'local_landing_html',
        'local_landing',
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'local_landing_meta_box');
function local_landing_html($post){
}
function local_landing_postdata($post_id){}
add_action('save_post', 'local_landing_postdata');
