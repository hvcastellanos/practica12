<html>
	<head>
		<title> Practica 12-variables PHP</title>
		<meta charset="utf-8"/>
	</head>
	<body>
			<?php
				$nombre='Hector';
				$edad=22;
				$salario=2600;
				$estatus=true;
				echo "valores<br/>";
				echo "NOMBRE:".$nombre.'<br/>';
				//echo "<br/>";
				echo "Edad:".$edad.'<br/>';
				echo "Salario:".$salario.'<br/>';
				echo "Estatus:".$estatus.'<br/>';
			?>		
		<h1> OPERACIONES ARITMETICAS </h1>
			<?php
				echo "<h2> OPERACIONES ARITMETICAS </h2>";
				
				echo "<b>Suma</b><br/>";
				$valor1=15;
				$valor2=7;
				$suma=$valor1+$valor2;
				echo "$valor1+$valor2<br/>";
				echo "<b>La Suma es:</b>".$suma.'<br/>';
				
				echo "<br/>";	
				echo "<b>Resta</b><br/>";
				$valor1=20;
				$valor2=7;
				$resta=$valor1-$valor2;
				echo "$valor1-$valor2<br/>";	
				echo "<b>La Resta es:</b>".$resta.'<br/>'; 
				
				echo "<br/>";	
				echo "<b>Multiplicacion</b><br/>";
				$valor1=15;
				$valor2=7;
				$multiplicacion=$valor1*$valor2;
				echo "$valor1*$valor2<br/>";
				echo "<b>La Multiplicacion es:</b>".$multiplicacion.'<br/>'; 
				
				echo "<br/>";	
				echo "<b>Division</b><br/>";
				$valor1=35;
				$valor2=7;
				$division=$valor1/$valor2;
				echo "$valor1/$valor2<br/>";
				echo "<b>La Division es:</b>".$division.'<br/>'; 
			?>
	</body>
</html>
