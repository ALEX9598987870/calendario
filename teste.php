<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title><?php echo date('d/m/Y'); ?></title>
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="estilo.css"> 
	</head>

	<body style="padding: 50px;">

		<h1>Estamos em <?php echo date('Y'); ?> </h1>
		<p>
		Agora são <?php echo date('H'); ?> horas e
		<?php echo date('i'); ?> minutos.
		</p>

		<?php

			function linha($semana){
				echo "<tr>";
				for ($i = 0; $i <= 6; $i++) {
					if (isset($semana[$i])) {
						echo "<td>{$semana[$i]}</td>";
					} else {
						echo "<td></td>";
					}
				}
				echo "</tr>";
			}


			function calendario(){
				$dia = 1;
				$semana=array();
				while($dia<=31){
					array_push($semana, $dia);

					if (count($semana)==7) {
						linha($semana);
						$semana = array();
					}
					$dia++;
				}
				linha($semana);
			}
		 ?>


		<table class="table table-bordered table-hove col-md-6">
			<tr>
				<th scope="col">Dom</th>
				<th>Seg</th>
				<th>Ter</th>
				<th>Qua</th>
				<th>Qui</th>
				<th>Sex</th>
				<th>Sáb</th>
			</tr>
			<?php calendario(); ?>
			
		</table>





	</body>
</html>