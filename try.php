<?php include('bpms/db_connect.php') ?>
<body>
	<!--Header-->
	<?php include("header.php");?>
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
		.row {margin: 0 -5px;}

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

			if($result1){
				while($row = mysqli_fetch_assoc($result1)){
					?>
			
		<div class="card mb-3" style="max-width: 800px;">
		<div class="row g-0">
			<div class="col-md-4">
		
			 <!-- <img src="bpms/assets/uploads/<?php echo $row['image'] ?>"alt="..." class="img-fluid rounded-start"> -->
             <img class="bd-placeholder-img" width="250" height="250" src = "bpms/assets/uploads/<?php echo $row['image'] ?>" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" role="img"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em"></text></svg>
		</div>
			<div class="col-md-8">
			<div class = "card-body">	
			<h3 class ="card-title">  <?php echo $row['file_name'] ?></h3>
			<h4 class ="card-title">  <?php echo $row['file_code'] ?></h4>
			 <h6 class ="card-text">   <?php echo $row['file_code']?></h6>
			
             <!-- <button class ="btn btn-success" onclick="myFunction()">Click me!</button>
			<button class ="btn btn-success" > View Detail</button> -->
			<p class ="card-text"> <?php echo $row['file_code']?></p>
			<a href="javascript:void();"  class="readmore-btn">Read More</a>
			
				</div>
			</div>
            <p>There is a hidden message for you. Click to see it.</p>
             <!-- <button onclick="myFunction()">Click me!</button> -->
             <div class="col-md-6 mt-4 mt-md-0">
             <p id="demo"></p>
             </div>
				</div>
				</div>
                <div class ="col-md-8">
                <!-- <p  id="demo"></p> -->
<!--                
                <script>
                function myFunction() {
                    document.getElementById("demo").innerHTML = "Hello Dear Visitor!</br> We are happy that you've chosen our website to learn programming languages. We're sure you'll become one of the best programmers in your country. Good luck to you!";
                }



                </script> -->
                </div>
			<?php
				}
			}
		else
		{
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


					<!--footer-->
					<?php include("footer.php");?>
					<!---->
					<!-- js -->
					<script src="js/jquery-2.2.3.min.js"></script>
					<!-- //js -->
					<!--/ start-smoth-scrolling -->
					<script src="js/move-top.js"></script>
					<script src="js/easing.js"></script>
					<script>
						jQuery(document).ready(function ($) {
							$(".scroll").click(function (event) {
								event.preventDefault();
								$('html,body').animate({
									scrollTop: $(this.hash).offset().top
								}, 900);
							});
						});
					</script>
					<!--// end-smoth-scrolling -->

					<script>
						$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
							 		*/

							 		$().UItoTop({
							 			easingType: 'easeOutQuart'
							 		});

							 	});
							 </script>
							 <a href="#home" class="scroll" id="toTop" style="display: block;">
							 	<span id="toTopHover" style="opacity: 1;"> </span>
							 </a>

							 <!-- //Custom-JavaScript-File-Links -->
							 <script src="js/bootstrap.js"></script>


							</body>

							</html>


<script src= "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" > </script>

<script>
$(".readmore-btn").on('click', function(){
	$(this).parent().toggleClass("showContent");

	var replaceText = $(this).parent().hasClass("showContent")? "Read Less" : "Read More";
	$(this).text(replaceText);
});
	</script>