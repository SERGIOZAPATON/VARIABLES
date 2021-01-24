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
		<CENTER> 
				<b>
					<H1>
						PROBLEMA PROPUESTO
					</H1>
				</b>
		</CENTER> 

		<CENTER>
				<p>
					En una fiesta hay un total de <strong>102 personas</strong> entre mujeres, hombres y niños. Calcular cuántos hay de cada grupo sabiendo que las 
					mujeres asistentes son el doble de hombres y el número de niños es igual a la suma de mujeres y hombres 
				</p>
		</CENTER>

		<CENTER> 
				<b> 
					<p>
					SOLUCIÓN 
					</p>
				</b> 
		</CENTER> 

		<CENTER> 
				<p/>	
					Para calcular el número de hombres, mujeres y niños introduce el número total de personas, el número de hombres por cada mujer
					y el número de adultos <em>(mujeres más hombres)</em> por cada niño.
				</p>
		</CENTER>

		<div style=" padding:10px; background-color:blue;">
				<center>
						<b>
							<H2>
								JavaScript
							</H2>
						</b>
				</center>
				
		<form>
			<div>
				<input id='a' name="a" placeholder='numero total de personas' onkeyup="calcular()" value="<?=$_GET['a']?>"/> 
			</div>
			
			<div>
				<input id='b' name="b" placeholder='nº de hombres por mujer' onkeyup="calcular()" value="<?=$_GET['b']?>"/>
			</div>
			
			<div>
				<input id='c' name="c" placeholder='nº adultos por niño' onkeyup="calcular()" value="<?=$_GET['c']?>"/>
			</div>
			
			<button onclick="calcular()")> Calcular en php </button>
		</form>


		<center>
				<b>
					<H2>
						<div 
							id='resultado 1'
							style=" padding:10px;	background-color:lightblue;">
						</div>
					</H2>
				</b>
		</center>

		<center>
				<b>
					<H2>
						<div 
							id='resultado 2'
							style=" padding:10px;	background-color:lightblue;">
						</div>
					</H2>
				</b>
		</center>

		<center>
				<b>
					<H2>
						<div 
							id='resultado 3'
							style=" padding:10px;	background-color:lightblue;">
						</div>
					</H2>
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
		h=Math.round(a/(b+1+(b*c)+c))*100/100;
		document.getElementById('resultado 1'). innerHTML=h+' hombres';
		m=Math.round(b*h)*100/100;
		document.getElementById('resultado 2'). innerHTML=m+' mujeres';
		n=Math.round(c*(m+h))*100/100;
		document.getElementById('resultado 3'). innerHTML=n+' niños';
		}

		</script>

		<div style=" padding:10px; background-color:green;">
			<center>
					<b>
						<H2>
							php
							
							<div style=" padding:10px; background-color:lightpink;">

								<?php
									if(!isset($_GET['a'])) $_GET['a']=102;
									if(!isset($_GET['b'])) $_GET['b']=2;
									if(!isset($_GET['c'])) $_GET['c']=1;
									$a=$_GET['a'];
									$b=$_GET['b'];
									$c=$_GET['c'];
									$h= round($a/($b+1+($c*$b)+$c),2);
									echo $h." hombres <br>";
									$m= round($h*$b,2);
									echo $m." mujeres <br>";
									$n= round($c*($h+$m),2);
									echo $n." niños"
								?>
							</div>
						</H2>
					</b>
			</center>
							
		</div>
		<div> 
		<center><H2>PROBLEMAS</H2></center>
		<center>
		<a href="lata_refresco.php"> <font color="black">LATA_REFRESCO</a><br/>	
		<a href="cesped.php"> <font color="black">cesped</a><br/>	
		<a href="volumen.php"> <font color="black">4_volumen</a><br/>
		</center>


		</div>
</body>
</html>