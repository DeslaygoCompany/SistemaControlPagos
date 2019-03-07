$(document).ready(function(){
    $("#deudor").bind("change",function(event){
        //se obtiene el valor del select
        var idDeudor=event.target.value;
        if(idDeudor == ""){
            $("#no_pago").val("");
            $("#concepto").val("");
            $("#total").val("");
        }
        
        $.getJSON("/seleccionarDeudor?idDeudor=" + idDeudor,function(deudor){
            //se guardan los datos obtenidos de la consulta
            var no_pago= deudor.numFacturas;
            var concepto = deudor.concepto;
            var total = deudor.total;
            
            
            //se limpian los valores qeu tengan los input
            $("#no_pago").val("");
            $("#concepto").val("");
            $("#total").val("");
            
            //Se aignan los datos a los input
            $("#no_pago").val(no_pago);
            $("#concepto").val(concepto);
            $("#total").val(total);
            
        });
        
        
    });
});