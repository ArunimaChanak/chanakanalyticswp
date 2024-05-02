<div class="horizontal-logo-prt w-100" id="<?php echo $args['id'];?>">
    <?php if(isset($args['metadata']['client_count']) &&  $args['metadata']['client_count'] != 1){
        for ($client = 1; $client <= $args['metadata']['client_count'] ; $client++){?>
        <?php if(!empty($args['metadata']['client_'.$client])){?>
            <div>
                <a href="<?php echo $args['metadata']['client_'.$client.'_url']?>" target="_blank" class="item">
                    <img src="<?php echo json_decode($args['metadata']['client_'.$client])->url ?>" alt="<?php echo json_decode($args['metadata']['client_'.$client])->alt ?>">
                </a>
            </div>
        <?php }}
    } else { ?>
    <div>
        <div class="item">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/clients/cini.png" alt="">
        </div>
    </div>
    <div>
        <div class="item">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/clients/Dominos.png" alt="">
        </div>
    </div>
    <div>
        <div class="item">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/clients/haldirams.png" alt="">
        </div>
    </div>
    <div>
        <div class="item">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/clients/pioneer-property.png" alt="">
        </div>
    </div>
    <div>
        <div class="item">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/clients/reca-logo.png" alt="">
        </div>
    </div>
    <div>
        <div class="item">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/clients/dtdc.png" alt="">
        </div>
    </div>
    <div>
        <div class="item">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/clients/iuef.png" alt="">
        </div>
    </div>
    <div>
        <div class="item">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/clients/Kotak.png" alt="">
        </div>
    </div>
    <?php } ?>
</div>