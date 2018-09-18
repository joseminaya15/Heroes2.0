function ingresar() {
	correo	 = $('#correo').val();
	password = $('#password').val();
	if(correo == '') {
		toastr.remove();
		msj('error', 'Completar su correo');
		return;	
	}
	if(password == '') {
		toastr.remove();
		msj('error', 'Completar su password');
		return;	
	}
	$.ajax({
		data : {},
		url  : '',
		type : 'POST'
	}).done(function(data){
		try{
			data = JSON.parse(data);
			if(data.error == 0) {
				('.js-input').val('');
				location.href('');
			} else {
				toastr.remove();
				msj('error', data.error);
				return;
			}
		}catch(e) {
			toastr.remove();
			msj('error', e.message);
			return;
		}
	});
}
function registrar() {
	var nombre	= $('#nombre').val();
	var apellido= $('#apellido').val();
	var usuario	= $('#usuario').val();
	var email	= $('#email').val();
	var pass	= $('#pass').val();
	var confirm	= $('#confirm').val();
	var termino	= $('#terminos').parent().hasClass('is-checked');
	if(nombre == '') {
		toastr.remove();
		msj('error', 'Completar su nombre');
		return;	
	}
	if(apellido == '') {
		toastr.remove();
		msj('error', 'Completar su apellido');
		return;	
	}
	if(usuario == '') {
		toastr.remove();
		msj('error', 'Completar su usuario');
		return;	
	}
	if(email == '') {
		toastr.remove();
		msj('error', 'Completar su email');
		return;	
	}
	if(pass == '') {
		toastr.remove();
		msj('error', 'Completar su password');
		return;	
	}
	if(confirm == '') {
		toastr.remove();
		msj('error', 'Completar la confirmación de contraseña');
		return;	
	}
	if(pass != confirm) {
		toastr.remove();
		msj('error', 'Las contraseña no coinciden');
		return;	
	}
	if(termino == false) {
		toastr.remove();
		msj('error', 'Acepte los términos y condiciones');
		return;	
	}
	$.ajax({
		data : {nombre	 : nombre, 
				apellido : apellido, 
				usuario	 : usuario, 
				email	 : email, 
				pass	 : pass, 
				confirm	 : confirm,
				termino  : termino },
		url  : 'register/registrar',
		type : 'POST'
	}).done(function(data){
		try{
			data = JSON.parse(data);
			if(data.error == 0) {
				$('.mdl-textfield__input').val('');
				$('.mdl-textfield').removeClass('is-dirty');
				$('.mdl-checkbox').removeClass('is-checked');
				toastr.remove();
				msj('error', data.msj);
			} else {
				toastr.remove();
				msj('error', data.msj);
				return;	
			}
		} catch(e){
			toastr.remove();
			msj('error', e.message);
			return;
		}
	});
}