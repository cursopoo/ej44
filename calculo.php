<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Calcular</title>
	<link rel="stylesheet" href="style.css">

	<script>
	function calcular(array){
		var n = array.length;
		var promedio = 0;
		var sumatoria = 0;
		var exp = 0;
		for (var i = 0; i < n; i++){
			promedio += +array[i];
		}
		promedio = promedio/n;
		for (i=0; i < n; i++){
			exp = +array[i]-promedio;
			sumatoria += Math.pow(exp,2);
		}
		sumatoria = sumatoria/n;
		return sumatoria;
	}


		var num = prompt("Cuántos números va a introducir?");
		var array = [];
		for (var i = 0; i < num; i++){
			array[i] = prompt("Introduzca un número");
		}
		if(array.length > 0){
			var resultado = calcular(array);
			alert("Varianza: "+resultado);
		}
	</script>
</head>
<body>

</body>
</html>