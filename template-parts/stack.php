<?php if(!empty($args['stack'])): ?>
    <?php $stack = $args['stack'] ?>
    <div class="technology_vrTab">
        <div class="container">
            <div class="stack_head_sub">
                <h2><?php echo $stack['stack_title'] ?></h2>
                <p><?php echo $stack['stack_description'] ?>:</p>
            </div>
            <div class="vrTab_content">
                <div class="row m-0">
                    <div class="col-xl-4 col-lg-5 col-md-6 px-0">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <?php foreach($stack['stack_array'] as $index => $stacks):?>
                                <li class="nav-item" role="presentation">
                                    <button 
                                        class="nav-link d-flex align-items-start mb-0 <?php echo ($index == 0)? 'active' : ''?>" 
                                        id="<?php echo 'stack-'.$index ?>" 
                                        data-bs-toggle="tab" 
                                        data-bs-target="#<?php echo 'stack-'.$index ?>-pane" 
                                        type="button" 
                                        role="tab" 
                                        aria-controls="<?php echo 'stack-'.$index ?>-pane" 
                                        aria-selected="true"
                                    >
                                        <div class="icon-xp p-2 flex-shrink-0 d-flex align-items-center justify-content-center">
                                            <img 
                                                src="<?php echo json_decode($stack['stack_'.$index.'_logo'])->url ?>" 
                                                alt="<?php echo json_decode($stack['stack_'.$index.'_logo'])->alt ?>"
                                            >
                                        </div>
                                        <p class="m-0"><?php echo strtoupper($stack['stack_'.$index.'_title']) ?></p>
                                    </button>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-md-6 px-0">
                        <div class="tab-content" id="myTabContent">
                            <?php foreach($stack['stack_array'] as $index => $stacks):?>
                                <div class="tab-pane fade <?php echo ($index == 0)? 'show active' : ''?>" id="<?php echo 'stack-'.$index ?>-pane" role="tabpanel" aria-labelledby="<?php echo 'stack-'.$index ?>" tabindex="0">
                                    <div class="row g-4">
                                        <?php for($i = 1; $i<= $stacks; $i++ ):?>
                                            <?php if(!empty($stack['stack_image_'.$index.'_'.$i])):?>
                                                <div class="col-6 col-md-6 col-lg-4 col-xl-3">
                                                    <div class="ixp-logo d-flex align-items-center justify-content-center">
                                                        <img 
                                                            src="<?php echo json_decode($stack['stack_image_'.$index.'_'.$i])->url ?>" 
                                                            alt="<?php echo json_decode($stack['stack_image_'.$index.'_'.$i])->alt ?>"
                                                        >
                                                    </div>
                                                </div>
                                            <?php endif ?>
                                        <?php endfor ?>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>