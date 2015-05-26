<?php

include('conexionDatabase.php');
$dataName = "ejercicios";

 //here goes all the functions for save and convert
$data1 = $_POST['nDecimal'];
$data2 = $_POST['user'];
$result = decbin($data1);

mysql_select_db($dataName);
$sql = "INSERT INTO bindec (numDecimal, numBinario, usuario) VALUES ('$data1' , '$result', '$data2')";	
mysql_query($sql);

if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
?>

<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
	<body>
		<div class="container-fluid">
			<div class="text-center">
				<label><?php echo "Updated Successful" ?></label><br>
				<label><?php echo "The number in binary is: ". $result ?></label><br>
				<label><?php echo "The user is: " .$data2 ?></label>
			</div>
			<label> Return?</label>
			<a class="btn btn-primary" href="dec2Bin.php">Back to Page</a >
		</div>
	</body>
</html>