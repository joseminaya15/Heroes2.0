function log(msj){
	console.log(msj);
}
function tocar(event){
	$(event).css("cursor", "move");
	$(event).mouseup(function(){
		$(event).css("cursor", "pointer");
	});
}
var CONFIG = (function(){
	var private = {
		'ANP' : 'Acci&oacute;n No permitida',
		'MSJ_ERR' : 'Comun&iacute;quese con alguna persona a cargo :(',
		'EST_INACTIVO' : 0,
		'CABE_ERR'   : 'Error',
		'EST_LLAMAR' : 'SU_TURNO',
		'EST_PERDID' : 'PERDIO_TURNO',
		'EST_ENTREV' : 'EN_ENTREVISTA',
		'TIPOS'      : 'image/*,video/*'
	};
	return {
		get : function(name){
			return private[name];
		}
	};
})();
function modal(idModal){
	$('#'+idModal).modal('toggle');
}
function msj(tipo, msj, cabecera){
	if (tipo == 'error'){
		toastr.error(msj, cabecera, {
			closeButton: true,
			positionClass: "toast-bottom-right",
			showDuration: 250,
		    hideDuration: 250,
			timeOut: 5000,
			showEasing: "swing",
			hideEasing: "swing",
			showMethod: "fadeIn",
			hideMethod: "fadeOut"
		});
	} else if (tipo == 'warning'){
		toastr.warning(msj, cabecera, {
			closeButton: true,
			positionClass: "toast-bottom-right",
			showDuration: 250,
		    hideDuration: 250,
			timeOut: 5000,
			showEasing: "swing",
			hideEasing: "swing",
			showMethod: "fadeIn",
			hideMethod: "fadeOut"
		});
	} else{
		toastr.success(msj, cabecera, {timeOut: 4000});
	}
}
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
	$('select').selectpicker('mobile');
} else {
    $('select').selectpicker();
}