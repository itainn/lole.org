<!DOCTYPE html>
<html>
    <head>
        <title>Contacto</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/form.css">
        <!-- Framework Jquery-->
        <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="../js/index.js"></script>
        <script src="https://use.fontawesome.com/eaf3553229.js"></script>
    </head>
    <body>
        
            <div class="formulario">
        <form id="ajaxform" action="" method="get">
            <h2>Comentarios</h2><br>
        <div class="input-container">
            <i class="fa fa-user icon"></i>
            <input class="input-field" type="text" placeholder="Nombre" name="nombre" id="nombre">
        </div>
        <div class="input-container">
            <i class="fa fa-envelope icon"></i>
            <input class="input-field" type="text" placeholder="Email" name="email" id="email">
        </div>    
        <div class="text-container">
            <textarea id="comentario" name="mensaje" placeholder="Comentario" rows="10"></textarea>      
        </div>
        <input type="button"class="btn" id="btn" value="Enviar ">
        <div id="data"></div><!-- Caja de mensajes de validación y respuesta del serv -->
        </form>


           
    </body>
</html>