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
		<title> Dimensiones triángulo </title>
	</head>

	<body>

		<?php
			if(!isset($_GET['a'])) $_GET['a']=8;
		?>


		<CENTER> 
				<b>
					<H1>
						<u>DIMENSIONES DE UN TRIANGULO DE UN ÁREA CON LA MENOR HIPOTENUSA</u>
					</H1>
				</b>
			<p> 
				De entre todos los triánculos rectángulos de área 8 cm<sup>2</sup>, determina las dimensiones del que tiene la hipotenusa
				de menor longitud.
			</p>
			
			<img src="TRIANGULO.jpg" width="600"> 
			
			<P>
				<b> 
					<U>SOLUCIÓN </U>
				</b>
			</p>
			<p>
				Para calcular el las dimensiones del triangulo que tiene la menor hipotenusa para un área dado, introduce el área 
				en cm<sup>2</sup> en la casilla indicada más abajo.
			</p>
			<P>
				<em>
					Por defecto aparece la casillas rellena con el dato del enunciado del problema área= 8cm<sup>2</sup> pero puedes 
					cambiarlo por tus datos. <br> Nada más lo cambies se calculará en javascrip, ya que este lenguaje lo 
					ejecuta el navegador (frontend). Si quieres calcularlo en php tienes que pulsar el botón "calcular en php" ya que
					al ser un lenguaje que ejecuta el servidor (backend) tenemos que enviar los datos al servidor para que realice los
					cálculos.
				</em>
			</P>
		</CENTER>

		<div style=" padding:10px; background-color:#868A08;">
			<center>
				<form>
					<p>
						Área: <input id='a' name="a" placeholder='área del triángulo' onkeyup="calcular()"value="<?=$_GET['a']?>"/> cm<sup>2</sup>
					</p>
					<p>
					<button onclick="calcular()")> Calcular en php </button>
					</p>
				</form>
			</center>
		</div>
		<div style=" padding:10px; background-color:#AEB404;">
			<center>
					<b>
						<H2>
							<u>JavaScript</u>
						</H2>
					</b>
			</center>
			<center>
					<b>
						<H2>
							<div id='resultado 1'style=" padding:10px;	background-color:#D7DF01;">
							</div>
						</H2>
					</b>
			</center>

			<center>
					<b>
						<H2>
							<div 
								id='resultado 2'style=" padding:10px;	background-color:#D7DF01;">
							</div>
						</H2>
					</b>
			</center>

			<center>
					<b>
						<H2>
							<div 
								id='resultado 3'style=" padding:10px;	background-color:#D7DF01;">
							</div>
						</H2>
					</b>
			</center>
		</div>

		<script>
		console.log("vamos a calcular");
		function calcular(){
		a= document.getElementById('a').value;
		b=Math.round((Math.sqrt(2*a))*100)/100;
		document.getElementById('resultado 1'). innerHTML=b+' cm de base';
		y=Math.round(((a*2)/b)*100)/100;
		document.getElementById('resultado 2'). innerHTML=y+' cm de altura';
		h=Math.round((Math.sqrt(b**2+y**2))*100)/100;
		document.getElementById('resultado 3'). innerHTML=h+' cm de hipotenusa';
		}
		calcular();
		</script>

		<div style=" padding:10px; background-color:#298A08;">
			<center>
					<b>
						<H2>
							php
							
							<div style=" padding:10px; background-color:#31B404;">
								<?php
									$a=$_GET['a'];
									$b= round(sqrt (2*$a),2);
									echo $b." cm de base <br>";
								?>
							</div>
							<div style=" padding:10px; background-color:#298A08;">
							</div>
							<div style=" padding:10px; background-color:#31B404;">
								<?php
									$y= round(((2*$a)/$b),2);
									echo $y." cm de altura <br>";
								?>
							</div>
							<div style=" padding:10px; background-color:#298A08;">
							</div>
							<div style=" padding:10px; background-color:#31B404;">
								<?php
									$h= round(sqrt ($b*$b+$y*$y),2);
									echo $h." cm de hipotenusa"
								?>
							</div>
						</H2>
					</b>
			</center>
							
		</div>
	</body>
</html>
