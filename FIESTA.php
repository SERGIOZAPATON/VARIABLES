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
		<title> Personas en una Fiesta </title>
	</head>
	
	<body>
		<?php
			if(!isset($_GET['a'])) $_GET['a']=102;
			if(!isset($_GET['b'])) $_GET['b']=2;
			if(!isset($_GET['c'])) $_GET['c']=1;
		?>
		<CENTER> 
				<b>
					<H1>
						<u>PERSONAS EN UNA FIESTA</u>
					</H1>
				</b> 
				<p>
					En una fiesta hay un total de <strong>102 personas</strong> entre mujeres, hombres y niños. Calcular cuántos hay de cada grupo sabiendo que las 
					mujeres asistentes son el doble de hombres y el número de niños es igual a la suma de mujeres y hombres 
				</p>
		
			<img src="FIESTA.jpg" width="500"> 
		
				<b> 
					<p>
						<u>SOLUCIÓN</u>
					</p>
				</b>  
				<p/>	
					Para calcular el número de hombres, mujeres y niños introduce el número total de personas, el número de hombres por cada mujer
					y el número de adultos <em>(mujeres más hombres)</em> por cada niño.
				</p>
				<P>
					<em>
						Por defecto aparecen las casillas rellenas con los datos del enunciado del problema Nº total de personas= 102, 
						Nº de hombres por mujer= 2 y Nº de adultos por niño= 1,	pero puedes cambiarlo por tus datos.
						<br> Nada más lo cambies se calculará en javascrip, ya que este lenguaje lo	ejecuta el navegador (frontend). 
						Si quieres calcularlo en php tienes que pulsar el botón "calcular en php" ya que al ser un lenguaje que ejecuta el
						servidor (backend) tenemos que enviar los datos al servidor para que realice los cálculos.
					</em>
				</P>
		</CENTER>

		<div style=" padding:10px; background-color:#2E9AFE;">
			<center>
				<form>
					<p>
						Nº total de personas : <input id='a' name="a" placeholder='numero total de personas' onkeyup="calcular()" value="<?=$_GET['a']?>"/> 
					</p>
					
					<p>
						Nº hombres por mujer <input id='b' name="b" placeholder='nº de hombres por mujer' onkeyup="calcular()" value="<?=$_GET['b']?>"/>
					</p>
					
					<p>
						Nº de adultos por niño <input id='c' name="c" placeholder='nº adultos por niño' onkeyup="calcular()" value="<?=$_GET['c']?>"/>
					</p>
					<button onclick="calcular()")> Calcular en php </button>
				</form>
			</center>
		</div>
		<div style=" padding:10px; background-color:#0489B1;">
			<center>
				<b>
					<H2>
						<u>JavaScript</u>
					</H2>
				</b>
				<b>
						<H3>
							<div 
								id='resultado 1'style=" padding:10px;	background-color:lightblue;">
							</div>
						</H3>
					</b>
			
					<b>
						<H3>
							<div 
								id='resultado 2'
								style=" padding:10px;	background-color:lightblue;">
							</div>
						</H3>
					</b>
			
				<b>
					<H3>
						<div 
							id='resultado 3'
							style=" padding:10px;	background-color:lightblue;">
						</div>
					</H3>
				</b>
			</center>
		</div>

		<script>

		console.log("vamos a calcular");

		function calcular(){
		a= document.getElementById('a').value;
		b= document.getElementById('b').value;
		c= document.getElementById('c').value;
		b= parseFloat(b);
		c= parseFloat(c);
		h=Math.round((a/(b+1+(b*c)+c))*100)/100;
		document.getElementById('resultado 1'). innerHTML=h+' hombres';
		m=Math.round((b*h)*100)/100;
		document.getElementById('resultado 2'). innerHTML=m+' mujeres';
		n=Math.round((c*(m+h))*100)/100;
		document.getElementById('resultado 3'). innerHTML=n+' niños';
		}
		calcular();
		</script>

		<div style=" padding:10px; background-color:#81BEF7">
			<center>
					<b>
						<H2>
							<u>php</u>
						</H2>
						<H3>
							
							<div style=" padding:10px; background-color:#CEE3F6;">

								<?php
									
									$a=$_GET['a'];
									$b=$_GET['b'];
									$c=$_GET['c'];
									$h= round($a/($b+1+($c*$b)+$c),2);
									echo $h." hombres <br>";
								?>
							</div>
							<div style=" padding:10px; background-color:#81BEF7">
							</div>
							<div style=" padding:10px; background-color:#CEE3F6;">
								<?php
									$m= round($h*$b,2);
									echo $m." mujeres <br>";
								?>
							</div>
							<div style=" padding:10px; background-color:#81BEF7">
							</div>
							<div style=" padding:10px; background-color:#CEE3F6">
								<?php
									$n= round($c*($h+$m),2);
									echo $n." niños"
								?>
							</div>
						</H3>
					</b>
			</center>
		</div>
	</body>
</html>
