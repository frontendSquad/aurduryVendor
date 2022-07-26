<?php
$title = "Password Recovery";
$pg = "password-recovery";
include('../include/head.php');
?>

<section class="login-wrap">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="logo"><img src="../assets/images/logo.png" alt="" /></div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="login-card bg-img p-0">
					<div class="row justify-content-end">
						<div class="col-12 col-lg-4">
							<h1 class="fs-40 fw-bold text-black">Password Recovery</h1>
							<p class="fs-16 fw-regular text-gray mb-4">Type in your new password</p>
							<form action="javascript:void(0);">
								<div class="form-group">
									<div class="position-relative">
										<div class="enter-password d-flex align-items-center justify-content-center">
											<i class="fas fa-unlock-alt"></i>
										</div>
										<input type="password" class="form-control show-input-2" placeholder="Enter New Password">
										<button class="btn view-btn show-btn-2 position-absolute" onclick="event.preventDefault()">
											<i class="fa fa-eye-slash" aria-hidden="true"></i>
										</button>
									</div>
								</div>
								<div class="form-group">
									<div class="position-relative">
										<div class="enter-password d-flex align-items-center justify-content-center">
											<i class="fas fa-unlock-alt"></i>
										</div>
										<input type="password" class="form-control show-input-3" placeholder="Enter Confirm Password">
										<button class="btn view-btn show-btn-3 position-absolute" onclick="event.preventDefault()">
											<i class="fa fa-eye-slash" aria-hidden="true"></i>
										</button>
									</div>
								</div>
								<div class="form-group text-center mt-3">
									<a href="dashboard.php" class="btn btn-blue btn-login w-100 fs-20 fw-bold">Continue</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include('../include/footer.php') ?>