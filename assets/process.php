<?php
//print_r( $_POST );
//echo '<br>';
//echo '<br>';
//// print_r( $_GET );
//print_r( $_FILES );
//echo '<br>';
//echo '<br>';
//
//print_r( $_FILES['pic'] );
//echo '<br>';
//echo '<br>';
//
//print_r( $_FILES['pic']['name'] );
//echo '<br>';
//echo '<br>';
//
//print_r( $_FILES['pic']['type'] );
//echo '<br>';
//echo '<br>';
//
//print_r( $_FILES['pic']['tmp_name'] );
//echo '<br>';
//echo '<br>';
//
//print_r( $_FILES['pic']['error'] );
//echo '<br>';
//echo '<br>';
//
//print_r( $_FILES['pic']['size'] );
//echo '<br>';
//echo '<br>';

//uploading the image
$t = $_FILES['pic']['tmp_name'];
$i = 'img/'.$_FILES['pic']['name'];
move_uploaded_file($t, $i);

$a = $_POST;
$a['img'] = $i;

//print_r( $a );
//echo '<br>';
//echo '<br>';

//get the data
$d = file_get_contents('data.json');
//print_r( $d );
//echo '<br><br>';

//format the data
$d = json_decode( $d,true );
//print_r( $d );
//echo '<br><br>';

//edit the data
array_unshift($d, $a);
//print_r( $d );
//echo '<br><br>';

//change it back to json, reformat the data
$d = json_encode( $d );
//print_r( $d );
//echo '<br><br>';

// save the data
file_put_contents('data.json', $d);

header('location:..//history.php');
?>
