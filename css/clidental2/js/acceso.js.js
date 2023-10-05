(function(){
    var armella = document.getElementsByName("armella")[0];
    var elementos = document.elements;
    var btn = document.getElementById("btn");
    
    function Correo(e) {
        var correo = document.armella.correo.value;
        var expresion = /[A-Za-z0-9]+@+[a-z]+\.[A-Za-z]/;
        if (correo == false) {
            alert("Completa este campo Correo");
            e.preventDefault();
        } else {
            if (!expresion.test(correo)) {
                alert("Ingresa un correo válido");
                e.preventDefault();
            }
        }
    };
    function Clave(e) {
        var clave = document.armella.clave.value;
        if (clave == false) {
            alert("Complete el campo clave");
            e.preventDefault();
        }
    }; function codigo(e) {
        var codigo = document.armella.codigo.value;
        if (codigo == false) {
            alert("Complete el campo codigo de verificacion");
            e.preventDefault();
        }
    };
    function enviar(e){
        document.armella.action=menu.html;
        document.armella.submit();
    };
     
    function cifrar(e){
      var claves = document.getElementById("clave");
      claves.value = sha1(claves.value);
    };
    function validar(e) {
        Correo(e);
        Clave(e);
        codigo(e);
        enviar(e);
        cifrar(e);
    
    };
    
    document.armella.addEventListener("submit", validar);
})()