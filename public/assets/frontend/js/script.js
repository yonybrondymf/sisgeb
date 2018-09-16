$(document).ready(function(){

	$("#form-login").submit(function(e){
		e.preventDefault();
		data = $(this).serialize();
		$.ajax({
			url: base_url + "frontend/auth/login",
			type: "POST",
			data: data,
			success: function(resp){
				if (resp == "0") {
					$("#msg-error-login").css("display","block");
				}else{
					location.reload();
				}
			} 
		});
	});

	$(document).on("click",".btn-reservar", function(){


		libro = $(this).parent().parent().find("h2").text();
		valorBoton = $(this).val();
		infoBoton = valorBoton.split("*");
		idLibro = infoBoton[0];
		idEjemplar = infoBoton[1];
		$.ajax({
			url: base_url + "frontend/dashboard/checkSesion",
			type: "POST",
			success:function(resp){
				if (resp!="0") {
					swal({
					    title: "Mensaje de Confirmación",
					    text: 'Estas seguro de reservar el libro "'+libro+'"',
					    type: "warning",
				        showCancelButton: true,
				        confirmButtonClass: "btn-danger",
				        confirmButtonText: "Aceptar",
				        closeOnConfirm: false,
				        showLoaderOnConfirm: true,
					},
					function(isConfirm){

					   	if (isConfirm){
					     	$.ajax({
								url: base_url + "frontend/dashboard/reservar",
								type:"POST",
								data:{idLibro: idLibro, idEjemplar:idEjemplar},
								success:function(resp){
									window.location.href = base_url + resp;
								}
							});
					    } 
					 });
				}else{
					swal("Oops!", "Antes de reservar un libro es necesario que inicie sesión", "error");
				}
			}
		});
		
	});

});