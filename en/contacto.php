<div id="contacto">
<form>
	<h5>Please complete the information and send us your question</h5>
	
  	<div class="form-row">
  		<div class="form-group col-md-3">
  			 <label for="inputAddress">Name</label>
	    <input id="nombre" type="text" class="form-control" placeholder="Ej: Alex">  
  		</div>
    	<div class="form-group col-md-6">
	  		<label for="inputEmail4">Email</label>
	      	<input id="email" type="email" class="form-control" placeholder="Ej: alex@gmail.com">
  		</div>
  		<div class="form-group col-md-3">
	    	<label for="inputAddress2">Phone number</label>
	    	<input id="telefono" type="text" class="form-control" placeholder="Ej: +54 9 261 4000111">
	  	</div>
  	<div class="input-group-prepend btn-block">
		<span class="input-group-text">Your message</span>
		<textarea id="mensaje" class="form-control" aria-label="With textarea"></textarea>
	</div>
 
	<button id="enviarcontacto" type="submit" class="btn botoncustom">Send</button>

  
</form>
</div>

<script>
	
	$("#enviarcontacto").click(function(){
		var nombre = $("#nombre").val();
		
		var email = $("#email").val();
		var telefono = $("#telefono").val();
		var mensaje = $("#mensaje").val();

		$.ajax({

			url:"../controladores/enviaremail.php",
			data:{nombre:nombre,email:email,telefono:telefono,mensaje:mensaje},
			type:"post",
			success:function(data){
				if(data!="consultavacia")
	            {
	            	alert("¡¡¡Thanks for sending your message!!!");
	            }
			},
			error:function(e){
				alert("Error to send");
			}
		});
	});
	

</script>