<?php
include "php/check_access_front.php";
echo "TEST";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="initial-scale=1.0, width=device-width" name="viewport">
	<title>Reservation System</title>

	<!-- css -->
	<link href="css/base.min.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">

	<!-- favicon -->
	<!-- ... -->

	<!-- ie -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->
		</head>
		<body class="avoid-fout">
			<div class="avoid-fout-indicator avoid-fout-indicator-fixed">
				<div class="progress-circular progress-circular-alt progress-circular-center">
					<div class="progress-circular-wrapper">
						<div class="progress-circular-inner">
							<div class="progress-circular-left">
								<div class="progress-circular-spinner"></div>
							</div>
							<div class="progress-circular-gap"></div>
							<div class="progress-circular-right">
								<div class="progress-circular-spinner"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<header class="header">
				<a class="header-logo" href="index.php">Student Activity Center Reservation System</a>
				
				<ul class="nav nav-list pull-right">
					<li>
						<a data-toggle="menu" href="#profile">
							<span>Sign In</span>
							<!-- <span class="avatar avatar-sm"><img alt="alt text for John Smith avatar" src="images/users/avatar-001.jpg"></span> -->
						</a>
					</li>
				</ul>
			</header>
			<?php include "template/login-page.php"; ?>

			<div class="content">

				<?php include "template/front-tabs.php"; ?>
				
			</div>
			
			
			<!-- FOOTER -->
			<?php include "template/footer.php"; ?>

			<script src="js/jquery.min.js"></script>
			<script src="js/base.min.js" type="text/javascript"></script>
		</body>
		</html>