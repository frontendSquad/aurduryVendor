<?php
$title = "Contact Us";
$pg = "contact-us";
include('../include/header.php');
?>

<!-- Map-->

<section class="story py-5">
    <div class="container">
        <div class="page-title mb-4">
            <div class="row">
                <div class="col-md-6 col-sm-12 mb-md-0 mb-3">
                    <h2>Contact Us</h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.977052888794!2d-87.62974738786188!3d41.89227980652477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2cac5bb14fc3%3A0xd063bdca7a88cf23!2sChicago%20Marriott%20Downtown%20Magnificent%20Mile!5e0!3m2!1sen!2s!4v1656580206301!5m2!1sen!2s" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

<!-- contact form -->

<section class="contact py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4">
                <h3 class="font-weight-bold mb-4 text-dark">Leave Us A <span class="font-weight-normal">Message</span>
                </h3>
                <form action="#">
                    <div class="form-group mb-4">
                        <input class="form-control rounded-pill shadow border-0" type="text" value="" placeholder="Enter Your Full Name">
                    </div>
                    <div class="form-group mb-4">
                        <input class="form-control rounded-pill shadow border-0" type="email" value="" placeholder="Enter Your Email Address">
                    </div>
                    <div class="form-group mb-4">
                        <input class="form-control rounded-pill shadow border-0" type="text" value="" placeholder="Enter Subject">
                    </div>
                    <div class="form-group mb-4">
                        <textarea class="form-control rounded-15 shadow border-0" rows="5" placeholder="Describe yourself here...">
                        </textarea>
                    </div>
                    <button type="button" data-toggle="modal" data-target="#confirmationPop" class="rounded-pill bg-theme-primary border-0 px-5 py-2 text-white">Submit</button>
                </form>
            </div>
            <div class="col-md-6 mb-4">
                <h3 class="font-weight-bold mb-4 text-dark">Get in <span class="font-weight-normal">Touch</span></h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book.</p>
                <div class="socialInfo py-4">
                    <div class="d-flex align-items-center flex-wrap flex-md-nowrap gap-15 mb-4">
                        <div class="socialIcon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="socialContent">
                            <h5 class="font-weight-bold mb-0 text-dark">
                                Address
                            </h5>
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center flex-wrap flex-md-nowrap gap-15 mb-4">
                        <div class="socialIcon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="socialContent">
                            <h5 class="font-weight-bold mb-0 text-dark">
                                Email Address
                            </h5>
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center flex-wrap flex-md-nowrap gap-15 mb-4">
                        <div class="socialIcon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="socialContent">
                            <h5 class="font-weight-bold mb-0 text-dark">
                                Phone Number
                            </h5>
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                        </div>
                    </div>
                </div>
                <h6 class="font-weight-bold mb-3 text-dark">Working Hours</h6>
                <p>Monday – Saturday: 08AM – 22PM</p>
            </div>
        </div>
    </div>
</section>
<?php
include('../include/footer.php');
?>