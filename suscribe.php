<head>
	<link rel="stylesheet" href="css/mpopup.css">
</head>
<div id="mpopupBox" class="mpopup fixed" style="display: none;">

	<div class="card mpopup-content" style="width: 18rem;">
    
	  	<button id="btncerrar" href="#" class="btn btn-outline-black">Cerrar</button>

	  	<img src="img/suscribete.png" class="card-img-top" alt="...">

	  	<div class="card-body mpopup-head">

		    <h5 class="card-title">Novedades y oportunidades</h5>
	    	<p class="card-text">Solo enviaremos una vez al mes, cosas de interés que sabemos recibirás con gusto.</p>
	    	<hr>
	    	<div class="form-group " align="center">
		    	<label for="emailsuscriptor">Dirección de correo</label>
		    		<input type="email" class="form-control" id="emailsuscriptor" aria-describedby="emailHelp" placeholder="Ingrese su email">
		    	<br>
		  		<button id="enviasuscripcion" type="submit" class="btn btn-success">Brindar correo</button>
		  		<hr>
		  		<button id="eliminasuscripcion" type="submit" class="btn btn-outline-danger">Dejar de recibir correo</button>
		    	<hr>
		    	<small id="emailHelp" class="form-text text-muted mpopup-foot">Sus datos están seguros y nunca serán distribuídos por nuestro equipo.</small>
	  		</div>
	  	</div>
	</div>
</div>

<script type="text/javascript">
	
	//verifica si la cookie esta creada
	checkCookie();

	$("#enviasuscripcion").click(function(){

		if($("#emailsuscriptor").val().indexOf('@', 0) == -1 || $("#emailsuscriptor").val().indexOf('.', 0) == -1) {
            alert('El correo electrónico introducido no es correcto.');
            return false;
        }

		setCookie("popDisplayed", 1, { expires: 7 });
		var email = $("#emailsuscriptor").val();
		var tipo="si";

		$.ajax({
			url: "controladores/suscribirse.php",
			data:{email,tipo},
			type:"post",
			success:function(data){
				alert("¡¡¡ Muchas gracias por suscribirse !!!")
			},
			error:function(e){
				console.log("Error " + e);
			}
		});
	});
	
	$("#btncerrar").click(function(){
		$("#mpopupBox").hide();
	});
	
	$("#eliminasuscripcion").click(function(){

		if($("#emailsuscriptor").val().indexOf('@', 0) == -1 || $("#emailsuscriptor").val().indexOf('.', 0) == -1) {
            alert('El correo electrónico introducido no es correcto.');
            return false;
        }

		setCookie("popDisplayed", 1, { expires: 7 });
		var email = $("#emailsuscriptor").val();
		var tipo="no";

		$.ajax({
			url: "controladores/suscribirse.php",
			data:{email,tipo},
			type:"post",
			success:function(data){
				alert("¡¡¡ Espero que vuelvas con nosotros, te extrañaremos !!!")
			},
			error:function(e){
				console.log("Error " + e);
			}
		});
	});
</script>