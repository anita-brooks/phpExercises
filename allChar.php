<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	</head>	
	<body>
		<?php
			$matrizDeEntidades=get_html_translation_table(ENT_HTML5);
			echo ("<table class='table table-hover table-bordered'>\n");
			
			echo ("<tbody>\n");
			echo ("<th colspan='16' class='text-center'><strong>LISTADO DE ENTIDADES HTML</strong></th>\n");
			
			echo ("</tr>\n<tr>\n");
			for ($contador=0; $contador<8; $contador++){
				echo ("<td><strong>Car.</strong></td>\n<td><strong>Entidad</strong></td>\n");
			}	
			
			echo ("</tr>\n");
			echo("<tr>\n");
			$contador=0;
			
			foreach ($matrizDeEntidades as $clave=>$valor){
				$valor=substr($valor,1);
				echo ("<td>$clave</td>\n<td>&amp;$valor</td>\n");
					$contador++;
						if($contador>7){
							echo("</tr><\n<tr>\n");
							$contador=0;
						}
			}
			echo("</tbody>\n");
			echo("</table>");
		?>
	</body>
</html>