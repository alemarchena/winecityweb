var intervalo = setInterval(Actualizar, 1000);


function Actualizar() {
	var fechaactual = new Date();
	var mesSiguiente;
	var dia;
	var anio;
	var ap;
	var hr;
	
	//calcula siempre sobre un mes a futuro
	fechafutura = CalculaFechaFutura(fechaactual);

	//calculo de la diferencia entre fechas	
	var msEntreFechas = new Date(fechafutura.getTime() - fechaactual.getTime());

	var diasEntreFechas = Math.round(msEntreFechas/ (1000*60*60*24));
	var hsEntreFechas = ( Math.round( msEntreFechas/(1000*60*60) ) );
	var minEntreFechas = ( Math.round( msEntreFechas/(1000*60) ) );
	var segEntreFechas = ( Math.round( msEntreFechas/(1000) ) );
	var random = Math.floor(Math.random() * 100) + 1;

	//muestra los resultados entre fechas
    document.getElementById("fechafutura").innerHTML = fechafutura;
	document.getElementById("clock").innerHTML = diasEntreFechas + " días " + hsEntreFechas + " hs " + minEntreFechas + " min: " + segEntreFechas + " seg";

    document.getElementById("posibleganador").innerHTML = random;


	//valida el ganador
	if(diasEntreFechas == 0 && hsEntreFechas == 0 && minEntreFechas == 0 && segEntreFechas == 0){
		clearInterval(intervalo);

		document.getElementById("ganador").innerHTML = random;
	}
}

function CalculaFechaFutura(fechaactual){

	dia= "01";
	anio = fechaactual.getFullYear();
	mesSiguiente= fechaactual.getMonth();
	mesSiguiente = mesSiguiente +2; //+2 porque los meses arrancan en cero
	if(mesSiguiente < 10){ mesSiguiente = "0" + mesSiguiente;}

	var fechafutura = new Date(anio + '-'+ mesSiguiente + '-' + dia + ':12:00:00'	);
	return fechafutura;
}
