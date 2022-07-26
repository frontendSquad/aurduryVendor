<?php
$title = "View Content";
$pg = "settings";
include('../include/header.php');
?>

<!-- Basic form layout section start -->
<section id="view-content" class="view-content-page">
    <div class="page-title mb-4">
        <div class="row">
            <div class="col-6">
                <h2><a href="settings.php"><i class="fas fa-arrow-left"></i></a> Settings</h2>
            </div>
        </div>
    </div>
    <div class="bg-white rounded-10 shadow mb-5 p-md-5 p-3">
        <div class="row">
            <div class="col-md-12">
                <h4 class="fs-25 fw-bold text-black mb-3">Page X</h4>
            </div>
            <div class="col-xl-6 col-lg-8 col-md-12">
                <div class="video-box position-relative mb-5">
                    <a data-fslightbox
                        href="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4">
                        <img src="../assets/images/lightbox.png" alt="" class="img-fluid w-100">
                    </a>
                    <img src="../assets/images/play-btn.png" alt=""
                        class="play-btn img-fluid position-absolute top-50 start-50">
                </div>
                <h4 class="fs-25 fw-bold text-black mb-2">Article XYZ</h4>
                <p class="fs-20 text-black">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
        </div>
    </div>

    <div class="question-answer bg-white rounded-10 shadow mb-5 p-md-5 p-3">
        <div class="row">
            <div class="col-md-12">
                <h4 class="fs-25 fw-bold text-black mb-3">Question & Answer Article</h4>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What Happens If..?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a
                                type specimen book.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How Effective Is?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a
                                type specimen book.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Can I....?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a
                                type specimen book.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-10 shadow mb-5 p-md-5 p-3">
        <div class="row">
            <div class="col-md-12">
                <h4 class="fs-25 fw-bold text-black mb-3">Important Disclaimer</h4>
            </div>
            <div class="col-xl-6 col-lg-8 col-md-12">
                <p class="fs-20 text-black">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
        </div>
    </div>
</section>

<?php
include('../include/footer.php');
?>