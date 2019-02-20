var gen= new Vue({
    el:'#contenido',
    data:{
        nombre:"",
        apellidos:"",
        user:"",
        caracteres: ['.','-','_','@','+','#','/','(',')']
    },
    methods:{
        generar:function(){
            var anchoArreglo= this.caracteres.length;
            numcaracter=Math.floor(Math.random()* anchoArreglo);
            var caracter = this.caracteres[numcaracter];
            var name= this.nombre.substring(0,2);
            var ape= this.apellidos.substring(0,2);
            var num = Math.floor(Math.random() * (1000 - 100)) + 100;
            var cadena= name + ape + caracter+ num;
            this.user= cadena;
        }
        
    },
    computed:{
        reglaLetras: function(){
         return "[a-zA-ZáéíóúÁÉÍÓÚñ]{1,100}";   
        },
        reglaEmail: function(){
            return "^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$";
        }
    }
});