<?php
	if(!isset($_GET['r'])) $_GET['r']=5;
	if(!isset($_GET['a'])) $_GET['a']=90;
	?>

</br>
	<CENTER> <b>PROBLEMA PROPUESTO</b> </CENTER> 
</br>
	<CENTER>
	Se quiere poner césped artificial en un sector de una pista circular de lanzamiento de jabalina . El ángulo del sector es de 90 grados y 
	el radio 5 metros.
	</br>
	<b> ¿Qué superficie será necesario cubrir? </b>
	</CENTER>
</br>
</br>
	<CENTER> <b> SOLUCIÓN </b> </CENTER> 
</br>
Para calcular los metros cuadrados de cesped que necesitas para cubrir tu pista circular de lanzamiento de jabalina introduce el radio y los 
grados de la pista en las casillas indicadas más abajo.
</br>
</br>
<div style=" 
padding:10px;
background-color:green;
">
<center><b><H2>JavaScript</H2></b></center>
<form>
	<input id='r' name="r" placeholder='radio' onkeyup="calcular()"/>
	</br>
	</br>
	<input id='a' name="a" placeholder='ángulo' onkeyup="calcular()"/>
	</br>
	</br>
	<button onclick="calcular()")> Calcular en php </button>
</form>
<center><b><H2>
<div 
id='resultado'
style=" padding:10px;	background-color:lightgreen;
">
</H2></b></center>
</div>
</div>

<script>

console.log("vamos a calcular LOS METROS CUADRADOS DE CESPED");

function calcular(){
r= document.getElementById('r').value;
a= document.getElementById('a').value;
i=Math.round((Math.PI*Math.pow(r,2)/(360/a))*10000)/10000;
document.getElementById('resultado'). innerHTML=i+' metros cuadrados';
}

</script>

<div style=" 
padding:10px;
background-color:red;
">
<center><b><H2>PHP
<br/>
<div style=" 
padding:10px;
background-color:lightpink;
">
<?php
	$r=$_GET['r'];
	$a=$_GET['a'];
	echo round($r*$r*M_PI/(360/$a),2);
	echo " m2"
?>
</H2></b></center>
</div>
</div>