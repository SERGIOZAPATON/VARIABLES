<?php
	if(!isset($_GET['a'])) $_GET['a']=8;
?>


<CENTER> 
		<b>
			<H1>
				PROBLEMA PROPUESTO
			</H1>
		</b>
</CENTER> 

<CENTER>
		De entre todos los triánculos rectángulos de área 8 cm2, determina las dimensiones del que tiene la hipotenusa de menor longitud
</CENTER>

<CENTER> 
		<b> 
			SOLUCIÓN 
		</b> 
</CENTER> 

<CENTER> 
		Para calcular el las dimensiones del triangulo que tiene la menor hipotenusa para un área dado, introduce el área en cm<sup>2</sup>
		en la casilla indicada más abajo.
</CENTER>

<div style=" padding:10px; background-color:yellow;">
		<center>
				<b>
					<H2>
						JavaScript
					</H2>
				</b>
		</center>
		
<form>
	<div>
		<input id='a' name="a" placeholder='área del triángulo' onkeyup="calcular()"/>
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
b=Math.round((Math.sqrt(2*a))*100)/100;
document.getElementById('resultado 1'). innerHTML=b+' cm de base';
y=Math.round(((a*2)/b)*100)/100;
document.getElementById('resultado 2'). innerHTML=y+' cm de altura';
h=Math.round((Math.sqrt(b**2+y**2))*100)/100;
document.getElementById('resultado 3'). innerHTML=h+' cm de hipotenusa';
}

</script>

<div style=" padding:10px; background-color:green;">
	<center>
			<b>
				<H2>
					php
					
					<div style=" padding:10px; background-color:lightpink;">

						<?php
							$a=$_GET['a'];
							$b= round(sqrt (2*$a),2);
							echo $b." cm de base <br>";
							$y= round(((2*$a)/$b),2);
							echo $y." cm de altura <br>";
							$h= round(sqrt ($b*$b+$y*$y),2);
							echo $h." cm de hipotenusa"
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