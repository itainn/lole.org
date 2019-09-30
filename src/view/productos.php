<?php
// include '../global/config.php';
include '../global/conexion.php';
include     '../carrito.php';
include 'templates/cabecera.php';
?>
   <div class="container">
        <br/>
        <?php if($mensaje!="") {?>
          
        
        <div class="alert alert-success">
              
        <!-- <h4 class="alert-heading">Header</h4> -->
           <!-- print_r($ listaProductos);  -->
           <?php echo $mensaje;  ?>                                   
                <a href="mostrarCarrito" class="badge badge-success">ver carrito</a>
            </div>
        <
        <?php } ?>
        <div class="row">
            <?php
            $sentencia=$pdo->prepare("SELECT * FROM `tienda`.`tblproductos`");
            $sentencia->EXECUTE();
            $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            
            ?>
           <?php foreach ($listaProductos as $producto) {?>
              
          
            <div class="col-3">
                <div class="card">
                    <img 
                    id="pizza"
                    title="<?php echo $producto['Nombre'];?>"
                    alt="<?php echo $producto['Nombre'];?>"
                    class="card-img-top"
                    src="<?php echo $producto['imagen'];?>"
                    
                   
                    data-toggle="popover"
                    data-trigger="hover"
                    data-content="<?php echo $producto['Descripcion'];?>"                   
                    
                    /> 
                    <div class="card-body">
                    <span><?php echo $producto['Nombre'];?></span>
                        <h5 class="card-title"><?php echo $producto['Precio'];?>€</h5>
                        <p class="card-text">descripcion</p>
                    
                        

                       
                    <form action="" method="post">
                   
                        <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY) ;?>">
                        <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY) ;?>">
                        <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY) ;?>">
                        <input type="number" name="cantidad" id="cantidad"  min="6"value="<?php echo $producto['cantidad'] ?>"required>
                       
                    <button class="btn btn-primary"
                        name="btnAccion"
                        value="Agregar" 
                        type="submit"
                        >
                        agregar al carrito
                        </button>
                    </form>

                    </div> <!-- cierre car body -->
                </div><!-- cierre car  --> 
           </div><!-- div cierre col-sm -->
           
            <?php }  ?>
                     
        </div> <!-- cierre div row -->

    </div><!-- cierre div main -->
    <?php include 'templates/pie.php';
    ?>
   