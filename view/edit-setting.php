<?php
$title = "Edit Content";
$pg = "settings";
include('../include/header.php');
?>

<!-- Basic form layout section start -->
<section id="edit-content" class="edit-content-page">
    <div class="page-title mb-4">
        <div class="row">
            <div class="col-md-6 col-sm-12 mb-md-0 mb-3">
                <h2><a href="settings.php"><i class="fas fa-arrow-left"></i></a> Settings</h2>
            </div>
        </div>
    </div>

    <div class="bg-white shadow-small rounded-10 p-md-5 p-3 mb-4">
        <div class="row">
            <div class="col-xxl-6 col-xl-7 col-md-12">
                <h4 class="fs-25 fw-bold text-black mb-3">Edit Content</h4>
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <h6 class="fs-20 text-black fw-bold mb-0">Page Name <span class="text-red">*</span></h6>
                    </div>
                    <div class="col-md-7">
                        <input type="text" class="form-control fs-16 text-gray border-0 delete-shadow" value="ABC">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white shadow-small rounded-10 p-md-5 p-3 mb-4">
        <div class="row">
            <div class="col-xxl-6 col-xl-7 col-md-12">
                <h4 class="fs-25 fw-bold text-black mb-3">Section</h4>
                <div class="row align-items-center mb-4">
                    <div class="col-md-5">
                        <h6 class="fs-20 text-black fw-bold mb-0">Section Title <span class="text-red">*</span></h6>
                    </div>
                    <div class="col-md-7">
                        <input type="text" class="form-control fs-16 text-gray border-0 delete-shadow" value="ABC">
                    </div>
                </div>
                <div class="row align-items-start">
                    <div class="col-md-5">
                        <h6 class="fs-20 text-black fw-bold mb-0">Description <span class="text-red">*</span></h6>
                    </div>
                    <div class="col-md-7">
                        <textarea class="form-control border-0 delete-shadow fs-20 text-black p-4 border-0 delete-shadow rounded-10" rows="8">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</textarea>
                    </div>
                </div>
                <div class="row align-items-start my-5">
                    <div class="col-md-5">
                        <h6 class="fs-20 text-black fw-bold mb-0">Image <span class="text-red">*</span></h6>
                    </div>
                    <div class="col-md-6">
                        <div class="bg-light2 rounded-10 text-center p-4">
                            <div class="media-left flex-shrink-0 mb-5 mb-lg-3">
                                <div class="profile-img text-center m-auto m-md-0">
                                    <div class="attached">
                                        <button name="file" class="btn p-0" onclick="document.getElementById('upload').click()">
                                            <img src="../assets/images/upload-img.png" class="img-fluid ml-0" alt="">
                                        <input type="file" id="upload" name="file">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-red px-4 py-3">Delete</button>
                            <button class="btn btn-dark px-4 py-3">Browse</button>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center mb-4">
                    <div class="col-md-5">
                        <h6 class="fs-20 text-black fw-bold mb-0">Video Embedded Link <span class="text-red">*</span></h6>
                    </div>
                    <div class="col-md-7">
                        <input type="text" class="form-control fs-16 fw-bold text-blue text-decoration-underline border-0 delete-shadow" value="www.ABCdummylink.com">
                    </div>
                </div>
                <button class="btn btn-blue fs-18 fw-bold mt-4">Add Faqs</button>
                <button class="btn btn-dark fs-18 fw-regular mt-4">Remove Section</button>
            </div>
        </div>
    </div>

    <div class="bg-white shadow-small rounded-10 p-md-5 p-3 mb-4">
        <div class="row">
            <div class="col-xxl-6 col-xl-7 col-md-12">
                <h4 class="fs-25 fw-bold text-black mb-3">Section</h4>
                <div class="row align-items-center mb-4">
                    <div class="col-md-5">
                        <h6 class="fs-20 text-black fw-bold mb-0">Section Title <span class="text-red">*</span></h6>
                    </div>
                    <div class="col-md-7">
                        <input type="text" class="form-control fs-16 text-gray border-0 delete-shadow" value="ABC">
                    </div>
                </div>
                <div class="row align-items-start">
                    <div class="col-md-5">
                        <h6 class="fs-20 text-black fw-bold mb-0">Description <span class="text-red">*</span></h6>
                    </div>
                    <div class="col-md-7">
                        <textarea class="form-control border-0 delete-shadow fs-20 text-black p-4 border-0 delete-shadow rounded-10" rows="8">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</textarea>
                    </div>
                </div>
                <div class="row align-items-start my-5">
                    <div class="col-md-5">
                        <h6 class="fs-20 text-black fw-bold mb-0">Image <span class="text-red">*</span></h6>
                    </div>
                    <div class="col-md-6">
                        <div class="bg-light2 rounded-10 text-center p-4">
                            <div class="media-left flex-shrink-0 mb-5 mb-lg-3">
                                <div class="profile-img text-center m-auto m-md-0">
                                    <div class="attached">
                                        <button name="file" class="btn p-0" onclick="document.getElementById('upload').click()">
                                            <img src="../assets/images/upload-img.png" class="img-fluid ml-0" alt="">
                                        <input type="file" id="upload" name="file">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-red px-4 py-3">Delete</button>
                            <button class="btn btn-dark px-4 py-3">Browse</button>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center mb-4">
                    <div class="col-md-5">
                        <h6 class="fs-20 text-black fw-bold mb-0">Video Embedded Link <span class="text-red">*</span></h6>
                    </div>
                    <div class="col-md-7">
                        <input type="text" class="form-control fs-16 fw-bold text-blue text-decoration-underline border-0 delete-shadow" value="www.ABCdummylink.com">
                    </div>
                </div>
                <button class="btn btn-blue fs-18 fw-bold mt-4">Remove Section</button>
            </div>
        </div>
    </div>

    <div class="bg-white shadow-small rounded-10 p-md-5 p-3 mb-4">
        <div class="row">
            <div class="col-xxl-6 col-xl-7 col-md-12">
                <h4 class="fs-25 fw-bold text-black mb-3">Section</h4>
                <div class="row align-items-center mb-4">
                    <div class="col-md-5">
                        <h6 class="fs-20 text-black fw-bold mb-0">Question 01</h6>
                    </div>
                    <div class="col-md-7">
                        <input type="text" class="form-control fs-16 text-gray border-0 delete-shadow" value="ABC">
                    </div>
                </div>
                <div class="row align-items-start mb-5">
                    <div class="col-md-5">
                        <h6 class="fs-20 text-black fw-bold mb-0">Answer 01</h6>
                    </div>
                    <div class="col-md-7">
                        <textarea class="form-control border-0 delete-shadow fs-20 text-black p-4 border-0 delete-shadow rounded-10" rows="8">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</textarea>
                        <button class="btn btn-red fs-18 fw-bold mt-4">Delete</button>
                    </div>
                </div>
                <div class="row align-items-center mb-4">
                    <div class="col-md-5">
                        <h6 class="fs-20 text-black fw-bold mb-0">Question 02</h6>
                    </div>
                    <div class="col-md-7">
                        <input type="text" class="form-control fs-16 text-gray border-0 delete-shadow" value="ABC">
                    </div>
                </div>
                <div class="row align-items-start">
                    <div class="col-md-5">
                        <h6 class="fs-20 text-black fw-bold mb-0">Answer 02</h6>
                    </div>
                    <div class="col-md-7">
                        <textarea class="form-control border-0 delete-shadow fs-20 text-black p-4 border-0 delete-shadow rounded-10" rows="8">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</textarea>
                        <button class="btn btn-red fs-18 fw-bold mt-4">Delete</button>
                    </div>
                </div>
                <button class="btn btn-blue fs-18 fw-bold mt-4">Add More</button>
            </div>
        </div>
    </div>

    <div class="text-center">
        <button class="btn btn-blue fs-18 fw-bold mt-4">Add Section</button>
        <button class="btn btn-dark fs-18 fw-regular mt-4">Update</button>
    </div>
</section>

<?php
include('../include/footer.php');
?>