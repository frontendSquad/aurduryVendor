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
							<h1 class="fs-40 fw-bold text-black">Verification Code</h1>
							<p class="fs-16 fw-regular text-gray mb-4">Enter Your Verification Code to Proceed</p>
							<form action="password-recovery-2.php">
								<div class="form-group position-relative">
									<div class="enter-email d-flex align-items-center justify-content-center">
										<i class="fas fa-key"></i>
									</div>
									<input type="email" class="form-control login-shadow fs-16 fw-regular text-gray" placeholder="Enter Verification Code">
								</div>
								<div class="form-group mt-2">
									<div class="d-flex justify-content-end">
										<div class="forgot-pass">
											<a href="password-recovery-1.php" class="fs-14 fw-regular fc-darkblue">Resend Verification Code</a>
										</div>
									</div>
								</div>
								<div class="form-group text-center mt-2 mt-lg-3">
									<a href="password-recovery-3.php" type="sumit" class="btn btn-blue btn-login w-100 fs-20 fw-bold">Continue</a>
								</div>
								<div class="form-group text-center bck-btn mb-0 mt-2 mt-lg-2">
									<a href="login.php" class="fs-16 fw-regular text-gray">Back To Login</a>
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