@if(session('success'))
         <script>
                           swal({
            title: "EXITO!",
            text: "Los datos del deudor han sido guardados correctamente",
            icon: "error",
            }); 
</script>
@elseif(session('status'))
 <script>
    swal({
            title: "ERROR!",
            text: "Ocurrieron algunos problemas en el proceso, intentelo de nuevo.",
            icon: "error",
            });
 </script>                   
@endif