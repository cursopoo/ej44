function hide_hora() {
	var elem = document.getElementById("diafranja");
	if (!elem.classList.contains("hidden")){
		elem.classList.toggle("hidden");
	}
}

function show_hora() {
	var elem = document.getElementById("diafranja");
	if (elem.classList.contains("hidden")){
		elem.classList.toggle("hidden");
	}
}

function hide_show_alerg() {
	var elem = document.getElementById("alerg");
	elem.classList.toggle("hidden");
}

function reserva() {
	var cantidad = document.getElementById("num_personas").value;
	var span_pers = document.getElementById("error_personas");
	var hora_min = document.getElementById("hora_min").value;
	var hora_max = document.getElementById("hora_max").value;
	var otros = document.getElementById("otros");
	var alerg = document.getElementById("alerg_list");
	var span_select = document.getElementById("error_select");

	var c = true;

	if(otros.checked){
		if (alerg.selectedOptions.length > 0){
			var select = [];
			for (var i=0; i < alerg.selectedOptions.length; i++){
				select[i] = alerg.selectedOptions[i].value;
			}
			if (!span_select.classList.contains("none")){
				span_select.classList.add("hidden");
				setTimeout(function(){span_select.classList.add("none")}, 500);
			}
		} else {
			span_select.classList.remove("none");
			setTimeout(function(){span_select.classList.remove("hidden")}, 50);
			c = false;
		}
	}
	if (isNaN(cantidad) || cantidad==null || cantidad==""){
		span_pers.classList.remove("none");
		setTimeout(function(){span_pers.classList.remove("hidden")}, 50);
		c = false;
	} else {
		if (!span_pers.classList.contains("none")){
				span_pers.classList.add("hidden");
				setTimeout(function(){span_pers.classList.add("none")}, 500);
		}
	}

	return c;
}