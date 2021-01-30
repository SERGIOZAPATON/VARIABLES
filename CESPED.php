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
		<title> Césped pista de jabalina </title>
		
	</head>

	<body>
		<?php
			if(!isset($_GET['r'])) $_GET['r']=5;
			if(!isset($_GET['a'])) $_GET['a']=90;
		?>
		
		<CENTER> 
				<b>
					<H1>				
						<u>CÉSPED NECESARIO PARA CUBRIR UNA PISTA DE JABALINA</u>
					</H1>						
				</b> 
		 
				<P>
					Se quiere poner césped artificial en un sector de una pista circular de lanzamiento de jabalina . El ángulo del sector 
					es de 90 grados y el radio 5 metros.
				</P>
				
				<P>
					<b> 
						¿Qué superficie será necesario cubrir? 
					</b>
				</P>
				
				<img src="CESPED.jpg" width="600"> 
				
				<P>
					<b> 
						<u>SOLUCIÓN</u>
					</b>
				</P>
				<P>
					Para calcular los metros cuadrados de césped que necesitas para cubrir tu pista circular de lanzamiento de jabalina 
					introduce el radio y los grados de la pista en las casillas indicadas más abajo.
				</P>
				<P>
					<em>
					Por defecto aparecen las casillas rellenas con los datos del enunciado del problema radio=5m y angulo=90º pero puedes
					cambiarlo por tus datos. <br> Nada más lo cambies se calculará en javascrip ya que este lenguaje lo ejecuta el 
					navegador (frontend). Si quieres calcularlo en php tienes que pulsar el botón "calcular en php" ya que al ser un 
					lenguaje que ejecuta el servidor (backend) tenemos que enviar los datos al servidor para que realice los cálculos.
					</em>
				</P>
		</CENTER>

		<div style=" padding:10px;background-color:#9FF781;">
			<center>
				<b>
					<H2>
						<u>JavaScript</u>
					</H2>
				</b>
			
				<form>
					<p> 
						Radio: <input id="r" name="r" placeholder="radio" onkeyup="calcular()" value="<?=$_GET['r']?>"/> metros         
					</p>
					<p>
						Ángulo: <input id='a' name="a" placeholder='ángulo' onkeyup="calcular()" value="<?=$_GET['a']?>"/> grados
					</p>
					<p>
						<button onclick="calcular()")> Calcular en php </button>
					</p>
				</form>
			</center>
			
			<center>
				<b>
					<H2>
						<div id='resultado'style=" padding:10px;	background-color:#86B404;">
						</div>
					</H2>
				</b>
			</center>
		</div>

		<script>

		console.log("vamos a calcular los metros cuadrados de césped");

		function calcular(){
			r= document.getElementById('r').value;
			a= document.getElementById('a').value;
			i=Math.round((Math.PI*Math.pow(r,2)/(360/a))*100)/100;
			document.getElementById('resultado'). innerHTML=i+' m<sup>2</sup>';
		}
		calcular();
		</script>

		<div style=" padding:10px; background-color:#F7D358;">
			<center>
				<b>
					<H2>
						<p>
							<u>php</u>
						</p>
						
						<div style=" padding:10px; background-color:#FE9A2E;">
							<?php
								$r=$_GET['r'];
								$a=$_GET['a'];
								echo round($r*$r*M_PI/(360/$a),2);
								echo " m<sup>2</sup>"
							?>
						</div>
					</H2>
				</b>
			</center>
		</div>
	</body>
</html>
