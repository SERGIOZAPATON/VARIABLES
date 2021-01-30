<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="html, javasript, php, problemas matematicos, informática industrial, formación profesional, 
										grado superior, automatización y robótica industrial">
		<meta name="author" content="Sergio de la Fuente Rasilla">
		<meta name="description" content="Tarea 1 segunda evaluación, resolución de problemas con variables utilizando javasrip y php del 
										módulo informática industrial del grado superior en automatización y robótica industrial. ">
		<title> Volumen de una lata </title>
		
	</head>

	<body>
		<?php
			if(!isset($_GET['r'])) $_GET['r']=4;
			if(!isset($_GET['a'])) $_GET['a']=15;
			if(!isset($_GET['c'])) $_GET['c']=1000;
		?>

		<CENTER> 
			<b>
				<H1>
					<U>VOLUMEN DE UNA LATA Y LATAS NECESARIAS PARA ENVASAR X LITROS</U>
				</H1>
			</b>
			
			<P>
				Una lata de refresco tiene una altura de 15 cm y el diámetro de la base es de 8 cm. <b> ¿Cuál es el volumen de la lata? </b> 
			</P>
			<p>
				Si queremos envasar 1000 litros de refresco. <b> ¿Cuántas latas necesitamos? </b>
			</p>
				<img src="lata.jpg" width="600"> 
			<p>
				<b> 
					<u>SOLUCIÓN</u>
				</b>
			</p>
			<p>
				Para calcular el volumen de la lata en litros introduce la altura y el diámetro de la lata en las casillas indicadas más 
				abajo.
				Para calcular cuántas de las latas anteriores necesitas para envasar los litros que precises introduce el número de litros
				a envasar en las casillas indicadas más abajo.
			</p>
			<P>
				<em>
					Por defecto aparecen las casillas rellenas con los datos del enunciado del problema radio=4Cm, altura=15cm y volumen=1000 litros
					pero puedes cambiarlo por tus datos. <br> Nada más lo cambies se calculará en javascrip, ya que este lenguaje lo 
					ejecuta el navegador (frontend). Si quieres calcularlo en php tienes que pulsar el botón "calcular en php" ya que
					al ser un lenguaje que ejecuta el servidor (backend) tenemos que enviar los datos al servidor para que realice los
					cálculos.
				</em>
			</P>
		</CENTER>
		
		<div style=" padding:10px; background-color:#A901DB;">
			<center>
				<form>
					<p>
						Radio:  <input id='r' name="r" placeholder='radio' onkeyup="calcular()" value="<?=$_GET['r']?>"/> centímetros
					</p>
					<p>
						Altura: <input id='a' name="a" placeholder='altura' onkeyup="calcular()" value="<?=$_GET['a']?>"/> centímetros
					</p>
					<p>
						Volumen: <input id='c' name="c" placeholder='litros a envasar' onkeyup="calcular()" value="<?=$_GET['c']?>"/> litros         .
					<p>	
						<button onclick="calcular()")> Calcular en php </button>
					</p>
				</form>
			</center>
		</div>	
		<div style=" padding:10px; background-color:#819FF7;">
			<center>
				<b>
					<H2>
						<u>JavaScript</u>
					</H2>
				</b>
				<b>
					<H2>
						<div id='resultado 1'style=" padding:10px;	background-color:lightblue;">
						</div>
					</H2>
				</b>
	
				<b>
					<H2>
						<div id='resultado 2'style=" padding:10px;	background-color:lightblue;">
						</div>
					</H2>
				</b>
			</center>

		</div>

		<script>
			console.log("vamos a calcular");

			function calcular(){
			r= document.getElementById('r').value;
			a= document.getElementById('a').value;
			c= document.getElementById('c').value;
			i=Math.round(((Math.PI*Math.pow(r,2)*a)/1000)*100)/100;
			document.getElementById('resultado 1'). innerHTML=i+' litros';
			j=Math.round(c/i)*100/100;
			document.getElementById('resultado 2'). innerHTML=j+' latas'
			}
			calcular();
		</script>

		<div style=" padding:10px; background-color:#F781D8;">
			<center>
				<b>
					<H2>
						<p>
							<u>php</u>
						</p>
						<div style=" padding:10px; background-color:lightpink;">
							<?php
								$r=$_GET['r'];
								$a=$_GET['a'];
								$c=$_GET['c'];
								$i= round((($r*$r*M_PI*$a)/1000),2);
								echo $i." litros<br>";
							?>
						</div>
						<div style=" padding:10px; background-color:#F781D8;">
						</div>
						<div style=" padding:10px; background-color:lightpink;">
							<?php
								$j= round($c/$i,2);
								echo $j." latas"
							?>
						</div>
						</div>
					</H2>
				</b>
			</center>
		</div>
	</body>
</html>
