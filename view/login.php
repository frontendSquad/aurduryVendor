<?php
$title = "Login";
$pg = "Login In";
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
							<h1 class="fs-40 fw-bold text-black">Sign In</h1>
							<p class="fs-16 fw-regular text-gray mb-4">To keep connected with us please login with your personal information by email address and password.</p>
							<form action="dashboard.php">
								<div class="form-group position-relative">
									<div class="enter-email d-flex align-items-center justify-content-center">
										<i class="fas fa-envelope"></i>
									</div>
									<input type="email" class="form-control login-shadow fs-16 fw-regular text-gray" placeholder="Enter Your Email Address">
								</div>
								<div class="form-group mb-1">
									<div class="position-relative">
										<div class="enter-password d-flex align-items-center justify-content-center">
											<i class="fas fa-unlock-alt"></i>
										</div>
										<input type="password" class="form-control enter-input login-shadow fs-16 fw-regular text-gray" placeholder="********">
										<button class="btn view-btn position-absolute" onclick="event.preventDefault()">
											<i class="fa fa-eye-slash enter-icon right-icon" aria-hidden="true"></i>
										</button>
									</div>
								</div>
								<div class="form-group mt-2">
									<div class="d-flex justify-content-between">
										<div class="remember-pass">
											<label class="login-check fs-14 fw-regular text-gray">Remember Me
												<input type="checkbox">
												<span class="checkmark"></span>
											</label>
										</div>
										<div class="forgot-pass">
											<a href="password-recovery-1.php" class="fs-14 fw-regular fc-darkblue">Forgot Password?</a>
										</div>
									</div>
								</div>
								<div class="form-group text-center mt-4 mb-0">
									<a href="password-recovery-1.php" type="sumit" class="btn btn-blue btn-login w-100 fs-20 fw-bold">Login</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include('../include/footer.php'); ?>