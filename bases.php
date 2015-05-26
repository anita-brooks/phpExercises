<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<meta charset="UTF-8">
	<title>PHP operaciones de base de numeración</title>
</head>
		<?php
		/* Se establecen los valores inciales */
			$vDecimal = 9058341;
			$vBinario = "10100011101011";
			$vOctal = "74521";
			$vHexal = "FF56C1";
			
			/* Se convierte el decimal a otras bases */
			$decBin = decbin($vDecimal);
			$decOct = decoct($vDecimal);
			$decHex = dechex($vDecimal);
			
			/* Se convierte de otras bases a decimal */
			$binDec = bindec($vBinario);
			$octDec = octdec($vOctal);
			$hexDec = hexdec($vHexal);
		?>

<body>
<div class="container-fluid" style="padding-top: 6%;">
	<table class="table table-striped table-bordered">
  <th colspan='10' class="text-center"><h3>Conversiones</h3></th>
	  
  <tbody>
	  <tr>
		  <td><strong>Valor</strong></td>
		  <td><strong>base original</strong></td>
		  <td><strong>Convertir a</strong></td>
		  <td><strong>Resultado</strong></td>
	  </tr>
    <tr>
      <td><?php echo ("$vDecimal"); ?></td>
      <td>Decimal</td>
      <td>
		  <div class="list-unstyled">
			  <li>Binario</li>
			  <li>Octa</li>
			  <li>Hexa</li>
		  </div>	  
	  </td>
	  <td>
		  	<div class="list-unstyled">
		  		<li><?php echo ("$decBin"); ?></li>
				<li><?php echo ("$decOct"); ?></li>
				<li><?php echo ("$decHex"); ?></li>	
	  		</div>
	  </td>
    </tr>
    <tr>
		<td>
			<div class="list-unstyled">
		  		<li><?php echo ("$vBinario"); ?></li>
				<li><?php echo ("$vOctal"); ?></li>
				<li><?php echo ("$vHexal"); ?></li>	
	  		</div>
		</td>	
      <td>
		  <div class="list-unstyled">
			  <li>Binario</li>
			  <li>Octal</li>
			  <li>Hexa</li>
		  </div>
	  </td>
      <td>Decimal</td>
      <td>
		  <div class="list-unstyled">
			  <li><?php echo ("$binDec"); ?></li>
			  <li><?php echo ("$octDec"); ?></li>
			  <li><?php echo ("$hexDec"); ?></li>
		  </div>
	  </td>
    </tr>
  </tbody>
  </table>
</div>

<section style="position:absolute; padding-left:7%;">
	<h4>Insert something here</h4>
</section>		
</body>
</html>