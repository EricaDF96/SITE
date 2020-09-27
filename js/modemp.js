Swal.fire({
	title:'Instrucciones:',
	
	icon: 'warning',
	//width:'90%',
	html:
    'Por favor lea cuidadosamente y conteste este cuestionario de la siguiente manera, según sea el caso:<br><br>' +
    '1.En el caso de preguntas cerradas, seleccione una opción de las que se le proporcionan.<br><br>' +
    '2.En las preguntas de valoración se utiliza la escala de 1 al 5 en la que 1 es "muy malo" y 5 es "muy bueno".<br><br>' +
    '3.En los casos de preguntas abiertas dejamos un espacio para que usted escriba con MAYÚSCULA una respuesta. <br><br>' +
    '4.Al final anexamos un espacio para comentarios y sugerencias, le agradeceremos anote ahí los temas que,<br>a su juicio, omitimos en el cuestionario.<br><br>',

	grow: 'colum',
	allowOutsideClick: false,
	allowEscapeKey: false,
	allowEnterKey: false,
	stopKeydownPropagation: false,
});