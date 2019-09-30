<?php
include '../global/config.php';
 include '../global/conexion.php';
 include     '../carrito.php';
// include 'templates/cabecera.php';
?>

<?php
if($_POST){
    $total=0;
    $SID=session_id();
    $Correo=$_POST['email'];

    foreach($_SESSION['CARRITO'] as $indice=>$producto){

        $total=$total+($producto['PRECIO']*$producto['CANTIDAD']);


    }
    $sentencia=$pdo->prepare("INSERT INTO `tienda`.`tblVentas`
     (`ClaveTransaccion`,
     `PaypalDatos`, `Fecha`, `Correo`, `Total`, `status`)
     VALUES (:ClaveTransaccion, '', NOW(),:Correo,:Total, 'pen');");

                $sentencia->bindParam(":ClaveTransaccion",$SID);
                $sentencia->bindParam(":Correo",$Correo);
                $sentencia->bindParam(":Total",$total);
                $sentencia->execute();
                $idVenta=$pdo->lastInsertId();
             //`tienda`.`tblVentas` 

        foreach($_SESSION['CARRITO'] as $indice=>$producto){ 

            $sentencia=$pdo->prepare("INSERT INTO `tienda`.`tblDetalleVenta`
             (`ID`, `IDVENTA`, `IDPRODUCTO`, `PRECIOUNITARIO`, `CANTIDAD`)
              VALUES (:IDVENTA, :IDPRODUCTO,:PRECIOUNITARIO, :CANTIDAD, '6');") ;

            $sentencia->bindParam(":IDVENTA",$idVenta);
            $sentencia->bindParam(":IDPRODUCTO",$producto['ID']);
            $sentencia->bindParam(":PRECIOUNITARIO",$producto['PRECIO']);
            $sentencia->bindParam(":CANTIDAD",$producto['CANTIDAD']);

             $sentencia->execute();
    
        }

    // echo '<h3>'.$total.'</h3>';
    
}
?>
<script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD"></script>


<div class="jumbotron text-center">
    <h1 class="display-4"></h1>PASO FINAL</h1>
    <hr class="my-4">
    <p class="lead">Estas a punto de pagar con paypal la cantidad de :
        <h4><?php echo number_format($total,2); ?>€ </h4>
    </p>
    <p>el servicio se realizara una vez que se procese el pago</p>
    <strong>(para aclaraciones :itain.sys@gmail.com)</strong>
</div>
<?php 

 ?>
<?php include 'templates/pie.php';

?>
