<?php
get_header('', array('description' => 'Contact us page', 'title' => 'Contact us page', 'page' => 'contact-us'));
?>
<div class="contact-banner">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-6">
                <div class="banner-text">
                    <h1>Contact Us</h1>
                    <p>Say goodbye to business challenges and hello to growth opportunities. Contact us to learn more.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('template-parts/contact-section', 'contact-section', array('heading'=>false, 'map'=>true)); ?>

<div class="trd-clients">
    <div class="container">
        <div class="title text-center">
            <h3>SOME OF OUR TRUSTED CLIENTS</h3>
        </div>
        <?php get_template_part('template-parts/client-carousel', 'clients', array('id'=>'clientsLogo')); ?>
    </div>
</div> 
<?php
get_footer();