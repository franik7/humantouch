<html lang="en">
<!-- Head -->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Human Touch</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

	<link rel="stylesheet" href="assets/style.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300&display=swap" rel="stylesheet">

	<script src="https://kit.fontawesome.com/3e428fbdcd.js" crossorigin="anonymous"></script>

</head>

<!-- End of Head -->

<!-- Nav Section Partial -->
<?php require_once('assets/partials/nav.php');?>
<hr class="midsectionhr">

<!-- Nav Section Partial End -->


<!-- Start of Top Section /Image + Text/  -->

<body>

	<div class="container-fluid ">
		<div class="row info order">
			<br>
			<div class="col-lg-6 half-left">
				<h1><b>Human Touch</b></h1>
							<p>Life is not always easy. If you need a human touch, let us know. Fill out the form below and we will mail you a letter or a postcard, your choice. Your nickname, country, and picture (if you choose to upload one) will be displayed on our History page. This is it, nothing else is required from you. There is no cost, no obligations, just a human touch. </p>
				<a href = "#theform"><button type="button" class="btn btn-secondary">Proceed</button></a>
			</div>
			<div class="col-lg-6 g-0 half-right">
				<img src=assets/img/banner.jpg>
			</div>
		</div>
	</div>
	<hr class="midsectionhr">
	<!-- End of Top Section /Image + Text/  -->

	<!-- Start of Middle1 Section / Image + Text -->
	<div class="container-fluid">
		<div class="row info order1">
			<div class="col-lg-6 g-0 half-left-middle">
				<img src="assets/img/image1.jpg">
			</div>

			<div class="col-lg-6 half-right-middle">
				<p>“The human touch is that little snippet of physical affection that brings a bit of comfort, support, and kindness. It doesn’t take much from the one who gives it, but can make a huge difference in the one who receives it.” </p>
			</div>
		</div>
	</div>
	<hr class="midsectionhr">
	<!-- End of Middle Section1 / Image + Text -->


	<!-- Start of Middle2 Section / Image + Text -->
	<div class="container-fluid">
		<div class="row info order">
			<div class="col-lg-6 half-right-middle">
				<p>“During bad circumstances, which is the human inheritance, you must decide not to be reduced. You have your humanity, and you must not allow anything to reduce that. We are obliged to know we are global citizens. Disasters remind us we are world citizens, whether we like it or not.” </p>
			</div>

			<div class="col-lg-6 g-0 half-left-middle">
				<img src="assets/img/image2.jpg">
			</div>
		</div>
	</div>

	<!-- End of Middle2 Section / Image + Text -->

	<!-- Start of Middle3 Section / Image + Text -->
	<div class="container-fluid">
		<div class="row info order1">
			<div class="col-lg-6 g-0 half-left-middle">
				<img src="assets/img/image3.jpg">
			</div>

			<div class="col-lg-6 half-right-middle">
				<p>“A human touch is explosive. It’s so warm that it melts away everything, including our ego.” </p>
			</div>
		</div>
	</div>
	<hr class="midsectionhr">
	<!-- End of Middle3 Section / Image + Text -->

	<!-- Start of Bottom Section / Image + Form -->
	<div class="container-fluid theform" id = "theform">
		<div class="row info order">
			<br>
			<div class="col-lg-6 half-left">
				<form action="assets/process.php" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
					<div class="form-row half-left">
						<div class="col mb-1 ">

							<h2><b>Please Enter Your Info</b></h2>
							<label for="validationCustom01">Name</label>
							<input type="text" name="name" class="form-control" id="validationCustom01" placeholder="First and last name" value="">
							<div class="valid-feedback">
								Looks good!
							</div>
						</div>
						<div class="col mb-1">
							<label for="validationCustom02">Nickname</label><span style="color: red !important; display: inline; float: none;">*</span>
							<input type="text" name="nickname" class="form-control" id="validationCustom02" placeholder="Nickname" value="" required>
							<div class="valid-feedback">
								Looks good!
							</div>
							<div class="invalid-feedback">
								Please provide your nickname
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col mb-1">
							<label for="validationCustom03">Address</label><span style="color: red !important; display: inline; float: none;">*</span>
							<input type="text" name="address" class="form-control" id="validationCustom03" placeholder="Address" required>
							<div class="invalid-feedback">
								Please provide your address
							</div>
						</div>
						<div class="col mb-1">
							<label for="validationCustom03">What would you like to share?</label><span style="color: red !important; display: inline; float: none;">*</span>
							<input type="text" name="question" maxlength="200" class="form-control" id="validationCustom03" placeholder="Please write what you would like to share" required>
							<div class="invalid-feedback">
								Please write what you would like to share
							</div>
						</div>


						<?php require_once('assets/partials/country.php');?>


					</div>
					Please make a selection:<span style="color: red !important; display: inline; float: none;">*</span>
					<div class="custom-control custom-radio">
						<input type="radio" name="letterorpostcard" class="custom-control-input" id="customControlValidation2" name="radio-stacked" value="letter" required>
						<label class="custom-control-label" for="customControlValidation2">Letter</label>
					</div>
					<div class="custom-control custom-radio mb-1">
						<input type="radio" class="custom-control-input" id="customControlValidation3" name="letterorpostcard" value="postcard" required>
						<label class="custom-control-label" for="customControlValidation3">Postcard</label>
						<div class="invalid-feedback">Please make a selection</div>
					</div>
					<label>
						<div class="mb-1">What image describes your mood right now?</div>
						<input type="file" name="pic">
					</label>
					<input type="hidden" value=false name="sent">
					<br>
					<br>

					<button type="submit" class="btn btn-secondary">Get a Human Touch</button>
				</form>
			</div>
			<div class="col-lg-6 g-0 half-right">
				<img src=assets/img/banner2.jpg>
			</div>
		</div>
	</div>

	<!-- End of Bottom Section / Image + Form -->



	<!-- Footer -->

	<?php require_once('assets/partials/footer.php');?>

	<div class = "mid">Website by <a class = "websitelink" href='http://frants.netlify.app' target="blank">Frants</a>
		</div>


	<!-- End of Footer -->

	<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


	<script>
		// Example starter JavaScript for disabling form submissions if there are invalid fields
		(function() {
			'use strict';
			window.addEventListener('load', function() {
				// Fetch all the forms we want to apply custom Bootstrap validation styles to
				var forms = document.getElementsByClassName('needs-validation');
				// Loop over them and prevent submission
				var validation = Array.prototype.filter.call(forms, function(form) {
					form.addEventListener('submit', function(event) {
						if (form.checkValidity() === false) {
							event.preventDefault();
							event.stopPropagation();
						}
						form.classList.add('was-validated');
					}, false);
				});
			}, false);
		})();

	</script>
	<!-- JS End -->




</body>

</html>
