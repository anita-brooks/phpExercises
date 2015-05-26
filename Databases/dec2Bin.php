<!DOCTYPE html>
	<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<title>Decimal a Binario</title>
	</head>
	<body>
	<div class="container-fluid" style="paddin-top='6%'">
		<form action="dec2Binfunction.php" method="POST">
			<table class="table table-striped table-bordered">
			<thead>
				<td colspan="10" class="text-center"><h3>Conversor de Binario a decimal usando PHP puro</h3></td>
			</thead>
			<tbody>
				<tr class="text-center">
					<td><label>Ingresa Decimal:</label></td>
					<td><input type="text" class="form-control" placeholder="Decimal" name="nDecimal"></td>
				</tr>
				<tr class="text-center">
					<td><label>Usuario:</label></td>
					<td><input type="text" class="form-control" placeholder="Usuario" name="user"></td>					
				</tr>
				<tr>
					<td>
						<button type="submit" class="btn btn-default">Print and Save</button>
					</td>
				</tr>
			</tbody>
		</table>
		</form>
	</div>	
	</body>
	</html>