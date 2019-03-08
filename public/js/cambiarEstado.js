$(document).ready(function(){
$('#modalCambiar').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // botón que activo el modal
   //extrae la informacion de los data-
  var id = button.data('id')
  var estado = button.data('estado')
  //Selecciona un item del select de acuerdo al valor de la fila
  $("#estado option[value="+estado+"]").attr("selected",true)
  /*Actualiza el contenido y pasa los valores que recibio de la tabla todo esto lo pasa al modal*/
  var modal = $(this)
  modal.find('.modal-body #id').val(id)
});
    
});