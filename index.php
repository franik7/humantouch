<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Human Touch</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

	<link rel="stylesheet" href="assets/style.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300&display=swap" rel="stylesheet">

</head>

<?php require_once('assets/partials/nav.php');?>
<hr class = "midsectionhr">

<body>
	<div class="container-fluid ">

		<div class="row info order">


			<br>
			<div class="col-lg-6 half-left">
				<form action="assets/process.php" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
					<div class="form-row half-left">
						<div class="col mb-1 ">
							<h2><b>What We Do</b></h2>
							<p>Life is not always easy. If you need a human touch, let us know. Fill out the form below and we will mail you a letter or a postcard at no cost. Your nickname, country, and picture (if you choose to upload one) will be displayed on our History page. This is it.</p>

							<h2><b>Enter Your Info</b></h2>
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

<?php require_once('assets/partials/country.php');?>



					</div>
					Please make a selection:<span style="color: red !important; display: inline; float: none;">*</span>
					<div class="custom-control custom-radio">
						<input type="radio" name="letterorpostcard" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
						<label class="custom-control-label" for="customControlValidation2">Letter</label>
					</div>
					<div class="custom-control custom-radio mb-1">
						<input type="radio" class="custom-control-input" id="customControlValidation3" name="letterorpostcard" required>
						<label class="custom-control-label" for="customControlValidation3">Postcard</label>
						<div class="invalid-feedback">Please make a selection</div>
					</div>
					<label>
						<div class="mb-1">What image describes your mood right now?</div>
						<input type="file" name="pic">
					</label>
					<br>
					<br>
					<button class="btn btn-primary" type="submit">Submit form</button>
				</form>



				<!--

				Your name:
				<input type="text" name="name" placeholder="John Smith">
				<br><br>
				Your address:
				<input type="text" name="address" placeholder="John Smith">
				<br><br>
				What would you like to recieve?
				<br>
				<label>
					<input type="radio" name="letterorcard" value="Letter"> Letter
				</label>
				<br>

				<label>
					<input type="radio" name="letterorcard" value="Postcard"> Postcard
				</label>
				<br>

				<br>
				<label>
					<input type="file" name="pic">
				</label>
				<br><br>
				<input type="submit" value="Submit">
-->



			</div>
			<div class="col-lg-6 g-0 half-right">
				<img src=assets/img/banner.jpg>
			</div>

		</div>

	</div>
<hr class = "midsectionhr">
<!-- start of middle section -->
	<div class="container-fluid">
		 <div class="row info">
	<div class="col-lg-5 g-0 half-left-middle">
	  <img src = "assets/img/image1.jpg">
	</div>
	<div class="col-lg-1">

	</div>

	<div class="col-lg-6 half-right-middle">
		<p>“The human touch is that little snippet of physical affection that brings a bit of comfort, support, and kindness. It doesn’t take much from the one who gives it, but can make a huge difference in the one who receives it.” </p>
	</div>
		</div>

	</div>
<!-- end of middle section -->
<hr class = "midsectionhr">
<!-- start of bottom section -->
	<div class="container-fluid">
		 <div class="row info order">


				 <div class="col-lg-5 half-right-middle">
		<p>“During bad circumstances, which is the human inheritance, you must decide not to be reduced. You have your humanity, and you must not allow anything to reduce that. We are obliged to know we are global citizens. Disasters remind us we are world citizens, whether we like it or not.” </p>
	</div>
	<div class="col-lg-1">

	</div>
	<div class="col-lg-6 g-0 half-left-middle">
	  <img src = "assets/img/image2.jpg">
	</div>

		</div>

	</div>
<!-- end of bottom section -->




	<?php require_once('assets/partials/footer.php');?>
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

</body>



</html>
