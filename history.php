<!--
how to variate checkmark vs no checkmark in Sent field
how to implement default image if no image is selected
-->



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

	<script src="https://kit.fontawesome.com/3e428fbdcd.js" crossorigin="anonymous"></script>

</head>

<?php require_once('assets/partials/nav.php');?>



<body>
	<div>

		<hr>
		<table>
			<tr>
				<th>ID</th>
				<th>IMAGE</th>
				<th>NICKNAME</th>
				<th>COUNTRY</th>
				<th>SENT</th>
			</tr>


			<?php
		$d = file_get_contents("assets/data.json");
		$d = json_decode($d,true);
//		print_r($d);
		foreach($d as $i => $v){
		echo'
		<tr>
			<td>'.$i.'</td>
			<td><img src="assets/'.$v['img'].'"></td>
			<td>'.$v["nickname"].'</td>
			<td>'.$v["country"].'</td>
			<td><i class="fa-regular fa-square fa-3x"></i> </td>
					</tr>
		';

		};
		?>


<?php
	 if(file_exists("$v.jpg")) $filename = "$v.jpg";
	 else $filename = "default.jpg";

	 echo "<img src=assets/img/usrimgs/'$defaultavatar.png'/>";
?>




		</table>
	</div>
	<br>

	<center><img src="assets/img/logo.png" alt="Human Touch" width="160" height="160">
	</center>
	<hr>




	<?php require_once('assets/partials/footer.php');?>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>




</body>

</html>
