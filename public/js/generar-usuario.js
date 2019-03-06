var gen= new Vue({
    el:'#contenido',
    data:{
        nombre:"",
        apellidos:"",
        user:"",
        caracteres: ['.','-','_','@','*','#','/','(',')']
    },
    methods:{
        generar:function(){
            if(this.nombre == "" && this.apellidos == ""){
               swal({
            title: "¡ERROR!",
            text: "Falta agregar el nombre y los apellidos para generar el usuario",
            icon: "error",
            });
               }
            else if(this.nombre == ""){
               swal({
            title: "¡ERROR!",
            text: "Falta agregar el nombre para generar el usuario",
            icon: "error",
            });
               }
            else if(this.apellidos == ""){
               swal({
            title: "¡ERROR!",
            text: "Falta agregar los apellidos para generar el usuario",
            icon: "error",
            });
               }
            else{
            var anchoArreglo= this.caracteres.length;
            numcaracter=Math.floor(Math.random()* anchoArreglo);
            var caracter = this.caracteres[numcaracter];
            var name=this.nombre.trim().substring(0,2).toUpperCase();
            var ape= this.apellidos.trim().substring(0,2).toUpperCase();
             
            var num = Math.floor(Math.random() * (1000 - 100)) + 100;
            var cadena= name + ape + caracter+ num;
            this.user= cadena;
            }
        }
        
    },
    computed:{
        reglaLetras: function(){
         return "[a-zA-ZáéíóúÁÉÍÓÚñ ]{1,100}";   
        },
        reglaEmail: function(){
            return "^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$";
        }
    }
});