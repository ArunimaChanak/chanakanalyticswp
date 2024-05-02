<?php
get_header('', array('description' => 'Quote page', 'title' => 'Quote page', 'page' => 'quote'));
?>
<div class="get-a-quote">
    <div class="container">
        <div class="row gy-5">
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                <div class="banner-text text-center">
                    <h3>Get a project quote</h3>
                    <p>Please fill the form below to receive a quote for your project. Feel free to add as much detail as needed.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  -->
<div class="get-project-fild">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                <div class="content-area">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="step1-tab" data-bs-toggle="tab" data-bs-target="#step1" type="button" role="tab" aria-controls="step1" aria-selected="true">1</button>
                            <div class="progress-bar"></div>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="step2-tab" data-bs-toggle="tab" data-bs-target="#step2" type="button" role="tab" aria-controls="step2" aria-selected="false">2</button>
                            <div class="progress-bar"></div>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="step3-tab" data-bs-toggle="tab" data-bs-target="#step3" type="button" role="tab" aria-controls="step3" aria-selected="false">3</button>
                            <div class="progress-bar"></div>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="step4-tab" data-bs-toggle="tab" data-bs-target="#step4" type="button" role="tab" aria-controls="step4" aria-selected="false">4</button>
                        </li>
                    </ul>
                    <!--  -->
                    <form action="#">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="step1" role="tabpanel" aria-labelledby="step1-tab">
                                <div class="title">
                                    <h5>Contact details</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisc.</p>
                                </div>
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <label for="">Name</label>
                                        <input type="text" id="" placeholder="Name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Email</label>
                                        <input type="email" id="" placeholder="Email address">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Phone Number</label>
                                        <input type="text" id="" placeholder="(123) 456 - 7890">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Company</label>
                                        <input type="email" id="" placeholder="Company name">
                                    </div>
                                </div>
                                <div class="d-flex pt-5 justify-content-center">
                                    <button type="button" class="step-button" id="nextTwo">Next Step</button>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="step2" role="tabpanel" aria-labelledby="step2-tab">
                                <div class="title">
                                    <h5>Our services</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisc.</p>
                                </div>
                                <div class="row gy-4">
                                    <div class="col-12">
                                        <label for="">Select Services</label>
                                        <select name="" id="">
                                            <option disabled selected></option>
                                            <option value="option1">Web Development</option>
                                            <option value="option2">UI/UX Design</option>
                                            <option value="option3">Digital Marketing</option>
                                            <option value="option4">Dedicated Hiring</option>
                                        </select>
                                    </div>
                                    <div class="title py-3 col-12">
                                        <h5>What's your project budget?</h5>
                                        <p>Please select the project budget range you have in mind.</p>
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="js-range-slider" name="my_range" value="" data-skin="round" data-type="double" data-min="100" data-max="10000" data-grid="false" />
                                        <div class="row pt-4">
                                            <div class="col-6">
                                                <label for="">Min Price</label>
                                                <input type="text" maxlength="4" value="100" class="from"/>   
                                            </div>
                                            <div class="col-6">
                                                <label for="">Max Price</label>
                                                <input type="text" maxlength="4" value="10000" class="to"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex pt-5 justify-content-between">
                                    <button type="button" class="step-button" id="prevOne">Previous step</button>
                                    <button type="button" class="step-button" id="nextThree">Next Step</button>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="step3" role="tabpanel" aria-labelledby="step3-tab">
                                <div class="title">
                                    <h5>What’s your project budget?</h5>
                                    <p>Please select the project budget range you have in mind.</p>
                                </div>
                                <div class="row gy-4">
                                    <div class="col-12">
                                        <label for="">Company Name</label>
                                        <input type="text" id="" placeholder="Brand/Company/Product Name">
                                    </div>
                                    
                                    <div class="col-12">
                                        <label for="">Message</label>
                                        <textarea name="" id="" rows="4" placeholder="Tell us about your project..."></textarea>
                                    </div>
                                    <div class="col-12">
                                        <input type="file" name="" id="">
                                    </div>
                                </div>
                                <div class="d-flex pt-5 justify-content-between">
                                    <button type="button" class="step-button" id="prevTwo">Previous step</button>
                                    <button type="button" class="step-button" id="nextFour">Submit Now</button>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="step4" role="tabpanel" aria-labelledby="step4-tab">
                                <div class="anim-img text-center pt-5">
                                    <div class="success-checkmark">
                                        <div class="check-icon">
                                            <span class="icon-line line-tip"></span>
                                            <span class="icon-line line-long"></span>
                                            <div class="icon-circle"></div>
                                            <div class="icon-fix"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title text-center">
                                    <h5>Submit your quote request</h5>
                                    <p>Please review all the information you previously typed in the past steps, and if all is okay, submit your message to receive a project quote in 24 - 48 hours.</p>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="button" class="step-button">View Portfolio</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
get_footer();