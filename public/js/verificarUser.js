$(document).ready(function () {
$("#btnGenerarUser").on("click",function(event){
            event.preventDefault();
    var username = $("#username").val();
    $.getJSON("validarUser?username="+username,function(data){       
        if(JSON.stringify(data) == '{}'){
            console.log("username = false");
        }else{
             swal({
            title: "¡ERROR!",
            text: "El nombre de usuario ya existe, favor de generar uno nuevamente",
            icon: "error",
            });
            console.log("username=true");
        }
    });
});
});
