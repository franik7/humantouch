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

		<hr class = "historyhr">
		<table>
			<tr>
				<th>ID</th>
				<th>Image</th>
				<th>Nickname</th>
				<th>Country</th>
				<th>Sent</th>
			</tr>


			<?php
$d = file_get_contents("assets/data.json");
$d = json_decode($d, true);

foreach ($d as $i => $v) {
	echo '<tr>';
	echo '<td>' . htmlspecialchars($i) . '</td>';

	if (
		substr($v['img'], -3, 3) == 'jpg' ||
		substr($v['img'], -3, 3) == 'png' ||
		substr($v['img'], -3, 3) == 'gif' ||
		substr($v['img'], -4, 4) == 'jpeg' ||
		substr($v['img'], -4, 4) == 'webp'
	) {
		echo '<td><img src="assets/' . htmlspecialchars($v['img']) . '"></td>';
	} else {
		echo '<td><img src="assets/img/userimgs/defaultavatar.png"></td>';
	}

	echo '<td>' . htmlspecialchars($v["nickname"]) . '</td>';
	echo '<td>' . htmlspecialchars($v["country"]) . '</td>';

	if ($v["sent"]) {
		echo '<td><i class="fa-regular fa-square-check fa-3x"></i></td>';
	} else {
		echo '<td><i class="fa-regular fa-square fa-3x"></i></td>';
	}

	echo '</tr>';
}
?>

		</table>
	</div>
	<br>

	<center><img src="assets/img/logo.png" alt="Human Touch" width="160" height="160">
	</center>

	<?php require_once('assets/partials/footer.php');?>

		<div class = "mid">Website by <a class = "websitelink" href='http://frants.netlify.app' target="blank">Frants</a>
		</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>
