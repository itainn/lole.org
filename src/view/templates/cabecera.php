<!DOCTYPE html>
<html lang="es">
<head>
  <?php include 'meta.php' ; ?> 
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <h1>EMPANADITAS DE LOLE</h1>
    <a class="navbar-brand"></a>
     <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" ><!--aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation" -->
        <span class="navbar-toggler-icon"></span>
    </button>
    
    
    <div id="my-nav" class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="home">home </a>
           </li>
           <li class="nav-item active">
                <a class="nav-link" href="mostrarCarrito">Carrito(<?php
                    echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
                    
               ?> )</a>
           </li>
            <li class="nav-item"> 
                 <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Item 2</a>
                
        </ul>
    </div>
    
    </nav>
    
    
</header>
