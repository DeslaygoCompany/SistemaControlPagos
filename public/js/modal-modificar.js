$(document).ready(function(){
$('#modalModificar').on('show.bs.modal', function (event) {
    console.log('Modal modificar');
  var button = $(event.relatedTarget) // botón que activo el modal
   //extrae la informacion de los data-
  var id = button.data('id')
  var idfact = button.data('idfact')
  var fecha = button.data('fecha')
  var metodo = button.data('metodo')
  var banco = button.data('banco')
  var estado = button.data('estado')
  var cantidad = button.data('cantidad')
  
  //Selecciona un item del select de acuerdo al valor de la fila
  $("#estado option[value="+estado+"]").attr("selected",true)
    $("#metodo_pago option[value="+metodo+"]").attr("selected",true)
  /*Actualiza el contenido y pasa los valores que recibio de la tabla todo esto lo pasa al modal*/
  var modal = $(this)
  modal.find('.modal-body #id').val(id)
    modal.find('.modal-body #idfact').val(idfact)
  modal.find('.modal-body #banco').val(banco)
  modal.find('.modal-body #fecha_pago').val(fecha)
  modal.find('.modal-body #cantidad').val(cantidad)
});
    
});