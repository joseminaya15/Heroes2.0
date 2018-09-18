function verificarDatos(e){
	if(e.keyCode === 13){
		e.preventDefault();
		buscadorPartner();
    }
}
// $(window).keyup(function (e) {
// 	var code = (e.keyCode ? e.keyCode : e.which);
//     var focus		 = $(document.activeElement);
//     var focusElement = null;
//     var focusType	 = null;
//     var colorElement = null;
//     var focusArea	 = null;
//     if ( code == 9 && ( focusElement.length > 0 )  ) {  
//     	focusAddIconColor(focusElement, focusType, colorElement);     	
//     }
//     if ( focusArea != null ) {
//     	if ( focusArea.closest('.js-input').find('.mdl-textfield__limit') != 0 ) {
//     		var idTextArea  	= focusArea.attr('id');
//         	var textAreaLength 	= focusArea.val().length;
//         	var spanValue		= $('.mdl-textfield__limit[for="'+idTextArea+'"]');
//         	var maxValText		= spanValue.attr('data-limit');
//         	spanValue.html(textAreaLength + "/" + maxValText);
//     	}
//     }
//     initLimitInputs()
// });
// //LIMIT INPUTS
// function initLimitInputs() {
// 	for(var i = 0; i < arguments.length; i++){
// 		var text 		= arguments[i];
// 		var textArea	= $('#'+text);
// 		var inputLength = null;
// 		if( textArea.val() != null || textArea.val() != undefined ){
// 			if ( textArea.val().length != 0 ) {
// 				inputLength	= textArea.val().length;
// 			} else {
// 				inputLength	= 0;
// 			}			
// 		} else {
// 			inputLength	= 0;
// 		}
// 		var spanValue	= $('.mdl-textfield__limit[for="'+text+'"]');
// 		var maxValInput = spanValue.attr('data-limit');
// 		spanValue.text(inputLength + "/" + maxValInput);
// 	}
// }