$(document).ready(function() {

   

    
    var elementos = document.querySelectorAll('.iconos-sociales a');

    for (var i = 0, l = elementos.length; i < l; i++) {
        elementos[i].style.right = (40 - 35 * Math.cos(-0.5 * Math.PI - 2 * (1 / l) * i * Math.PI)).toFixed(0) + "%";

        // elementos[i].style.top = (50 + 35 * Math.sin(-0.5 * Math.PI - 2 * (1 / l) * i * Math.PI)).toFixed(4) + "%";
        elementos[i].style.button = (40 + 35 * Math.sin(-0.5 * Math.PI - 2 * (1 / l) * i * Math.PI)).toFixed(0) + "%";
    }

    document.querySelector('.menu-button').onclick = function(e) {
        e.preventDefault();
        document.querySelector('.iconos-sociales').classList.toggle('abrir');
    }
    
$("#button").click(function(){
        $("#menu").slideToggle();
        }); 
$("#button").click(function(){
            $("#menu").slideToggle();
        });
        $("#formulario").submit(function () {  
            if($("#nombre").val().length < 4){  
                alert("El nombre debe tener más de 3 caracteres");
            }           
        });
        $("#formulario").submit(function () {  
            if($("#email").val().length < 8){  
                alert("El mail debe tener más de 8 caracteres");
            } 
        });
         $("#formulario").submit(function () {  
            if($("#comentario").val().length < 5){  
                alert("debe tener mas de 5  caracteres");
            } 
        }); 
$('#boton1').click(function() {
  window.location='categorias.html';
});
});