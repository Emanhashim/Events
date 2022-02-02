<?php include('bpms/db_connect.php') ?>

<body>
	<!--Header-->
	<?php include("header.php"); ?>
	<!--//header-->
	<!--/banner-->
	<div class="banner-inner">
	</div>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.php">Home</a>
		</li>
		<li class="breadcrumb-item active">Event</li>
	</ol>
	<!--//banner-->
	<!--/main-->
	<section class="main-content-w3layouts-agileits">
		<div class="container">
			<div class="section-title">
				<h2>Event</h2>
				<p>Check our Events</p>
			</div>
			<section id="features" class="features">
				<div class="container">

					<!DOCTYPE html>
					<html>

					<head>
						<meta name="viewport" content="width=device-width, initial-scale=1">
						<style>
							* {
								box-sizing: border-box;
							}

							body {
								font-family: Arial, Helvetica, sans-serif;
							}

							/* Float four columns side by side */
							.column {
								float: left;
								width: 25%;
								padding: 0 10px;
							}

							/* Remove extra left and right margins, due to padding */
							.row {
								margin: 0 -5px;
							}

							/* Clear floats after the columns */
							.row:after {
								content: "";
								display: table;
								clear: both;
							}

							/* Responsive columns */
							@media screen and (max-width: 600px) {
								.column {
									width: 100%;
									display: block;
									margin-bottom: 20px;
								}
							}

							/* Style the counter cards */
							.card {
								box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
								padding: 16px;
								text-align: center;
								background-color: #f1f1f1;
							}
						</style>
					</head>

					<body>

						<!-- <h2>Responsive Column Cards</h2>
			<p>Resize the browser window to see the effect.</p> -->

						<div class="row">
							<div class="container mt-3 pt-2">
								<!-- <h4 class="text-center text-white">Upcoming Events</h4> -->

								<?php

								$query1 = "SELECT * FROM lada ";
								$result1 = mysqli_query($conn, $query1);
								$check_result1 = mysqli_num_rows($result1) > 0;

								if ($result1) {
									while ($row = mysqli_fetch_assoc($result1)) {
								?>

										<div class="card mb-3" style="max-width: 740px;">
											<div class="row g-0">
												<div class="col-md-4">
													<img class="bd-placeholder-img" width="250" height="250" src="bpms/assets/uploads/<?php echo $row['image'] ?>" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" role="img">
													<title>Placeholder</title>
													<rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6" dy=".3em"></text></svg>
													<!-- <img src="bpms/assets/uploads/<?php echo $row['image'] ?>"alt="..." class="img-fluid rounded-start"> -->

												</div>
												<div class="col-md-8">
													<div class="card-body">
														<h3 class="card-title"> <?php echo $row['file_name'] ?></h3>
														<h4 class="card-title"> <?php echo $row['file_code'] ?></h4>
														<p class="card-text"><?php echo $row['file_code'] ?></p>

														<button class="btn btn-success"> View Detail</button>
														<a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Modi sit est</a>



													</div>
												</div>
											</div>
										</div>
										<button data-id='<?php echo $row['id']; ?>' class="userinfo btn btn-success">Info</button>

								<?php
									}
								} else {
									echo "No Events ";
								}
								?>

							</div>

						</div>
					</body>

					</html>
				</div>
		</div>
	</section><!-- End Features Section -->

	<div class="modal fade" id="empModal" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">User Info</h4>
					<button type="button" class="close" data-dismiss="modal">×</button>
				</div>
				<div class="modal-body">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!--footer-->
	<?php include("footer.php"); ?>
	<!---->

</body>

</html>

<script type='text/javascript'>
	$(document).ready(function() {
		$('.userinfo').click(function() {
			var userid = $(this).data('id');
			$.ajax({
				url: 'ajax.php',
				type: 'post',
				data: {
					userid: userid
				},
				success: function(response) {
					$('.modal-body').html(response);
					$('#empModal').modal('show');
				}
			});
		});
	});
</script>
</div>