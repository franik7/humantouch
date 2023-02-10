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
<body>


	<hr>
	<table>
		<tr>
			<th>ID</th>
			<th>IMAGE</th>
			<th>NICKNAME</th>
			<th>COUNTRY</th>

		</tr>
<!--
		<tr>
			<td>1</td>
			<td>Joe</td>
			<td>Hip Hop</td>
		</tr>
-->
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
		</tr>
		';
		};
		?>

	</table>
	<hr>
	<?php require_once('assets/partials/footer.php');?>
</body>

</html>
