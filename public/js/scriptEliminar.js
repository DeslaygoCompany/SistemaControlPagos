$(document).ready(function(){
    
$('#modalEliminarDeudor').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // botón que activo el modal
   //extrae la informacion de los data-
  var id = button.data('id')
  var nombre = button.data('nombre')
  var apellidos = button.data('apellidos')
  
  /*Actualiza el contenido y pasa los valores que recibio de la tabla todo esto lo pasa al modal*/
  var modal = $(this)
  modal.find('.modal-body #id').val(id)
  modal.find('.modal-body #nombre').val(nombre + " " + apellidos)
});

$('#modalEliminarFactura').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // botón que activo el modal
   //extrae la informacion de los data-
  var id = button.data('id')
  var folio = button.data('folio')
  
  /*Actualiza el contenido y pasa los valores que recibio de la tabla todo esto lo pasa al modal*/
  var modal = $(this)
  modal.find('.modal-body #id').val(id)
  modal.find('.modal-body #folio').val(folio)
});
	$('#modalEliminarUser').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // botón que activo el modal
   //extrae la informacion de los data-
  var id = button.data('id')
  var username = button.data('username')
  
  /*Actualiza el contenido y pasa los valores que recibio de la tabla todo esto lo pasa al modal*/
  var modal = $(this)
  modal.find('.modal-body #id').val(id)
  modal.find('.modal-body #username').val(username)
});
    
});