<?php
	if(!isset($_GET['r'])) $_GET['r']=4;
	if(!isset($_GET['a'])) $_GET['a']=15;
	if(!isset($_GET['c'])) $_GET['c']=1000;
?>

</br>
	<CENTER> <b>PROBLEMA PROPUESTO</b> </CENTER> 
</br>
	<CENTER>
	Una lata de refresco tiene una altura de 15 cm y el diámetro de la base es de 8 cm. <b> ¿Cuál es el volumen de la lata? </b> 
	</br> Si queremos envasar 1000 l de refresco, <b> ¿cuántas latas necesitamos? </b>
	</CENTER>
</br>
</br>
	<CENTER> <b> SOLUCIÓN </b> </CENTER> 
</br>
Para calcular el volumen de la lata en litros introduce la altura y el diámetro de la lata en las casillas indicadas más abajo.
Para calcular cuantas de las latas anteriores necesitas para envasar los litros que precises introduce el número de litros a envasaren las casillas indicadas más abajo.
</br>
</br>
<div style=" 
padding:10px;
background-color:blue;
">
<center><b><H2>JavaScript</H2></b></center>
<form>
	<input id='r' name="r" placeholder='radio' onkeyup="calcular()"/>
	</br>
	</br>
	<input id='a' name="a" placeholder='altura' onkeyup="calcular()"/>
	</br>
	</br>
	<input id='c' name="c" placeholder='litros a envasar' onkeyup="calcular()"/>
	</br>
	</br>
	<button onclick="calcular()")> Calcular en php </button>
</form>
<center>
	<b>
	<H2>
		<div 
		id='resultado 1'
		style=" padding:10px;	background-color:lightblue;
		">
		</div>
	</H2>
	</b>
</center>

<center><b><H2>
<div 
id='resultado 2'
style=" padding:10px;	background-color:lightblue;
">
</div>
</H2></b></center>

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

</script>

<div style=" 
padding:10px;
background-color:green;
">
<center><b><H2>php
<br/>
<div style=" 
padding:10px;
background-color:lightpink;
">
<?php
	$r=$_GET['r'];
	$a=$_GET['a'];
	$c=$_GET['c'];
	$i= round((($r*$r*M_PI*$a)/1000),2);
	echo $i." l<br>";
	$j= round($c/$i,2);
	echo $j." latas"

?>
</H2></b></center>
</div>
</div>