<?php 
session_start();
$mensaje="";
if (isset($_POST['btnAccion'])) {

    switch($_POST['btnAccion']){
        case 'Agregar':
            if(is_numeric( openssl_decrypt($_POST['id'],COD,KEY))){
                $ID=openssl_decrypt($_POST['id'],COD,KEY);
                $mensaje.='OK ID correcto'.$ID."<br/>";

            }else {
            $mensaje.='Upsss.....ID incorrecto' .$ID;
        }

        if(is_string( openssl_decrypt($_POST['nombre'],COD,KEY))){
            $NOMBRE=openssl_decrypt($_POST['nombre'],COD,KEY);
            $mensaje.='OK NOMBRE correcto'.$NOMBRE."<br/>";
        }else{  $mensaje.='Upsss.....algo paso.NOMBRE incorrecto'."<br/>"; break;}

        if(is_numeric($_POST['cantidad'])){
            $CANTIDAD=($_POST['cantidad']);
            $mensaje.='OK CANTIDAD correcto'.$CANTIDAD."<br/>";
         }else{  $mensaje.='Upsss.....algo paso.CANTIDAD incorrecta'."<br/>"; break;}

        if(is_numeric( openssl_decrypt($_POST['precio'],COD,KEY))){
            $PRECIO=openssl_decrypt($_POST['precio'],COD,KEY);
            $mensaje.='OK PRECIO correcto'.$PRECIO."<br/>";//TEST DE CONEXIONES DE ENCRIPTACION//
        } //$mensaje.='Upsss.....algo paso.precio incorrecto'."<br/>"; //break;
        // if(is_string( openssl_decrypt($_POST['imagen'],COD,KEY))){
        //     $IMAGEN=openssl_decrypt($_POST['imagen'],COD,KEY);
        //     $mensaje.='OK IMAGEN correcto'.$IMAGEN."<br/>";
        // }else{  $mensaje.='Upsss.....algo paso.precio incorrecto'."<br/>"; break;}

    if(!isset($_SESSION['CARRITO'])){
        $producto=array(
            'ID'=>$ID,
            'NOMBRE'=>$NOMBRE,
            'CANTIDAD'=>$CANTIDAD,
            'PRECIO'=>$PRECIO,
            // 'IMAGEN'=>$IMAGEN
        );
        $_SESSION['CARRITO'][0]=$producto;
        $mensaje='Producto agregado al carrito';

    }else {

        $idProductos=array_column($_SESSION['CARRITO'],"ID");

        if (in_array($ID,$idProductos)) {
          echo "<script>alert('producto ya seleccionado');</script>";
        }else {

        $NumeroProductos=count($_SESSION['CARRITO']);
        $producto=array(
            'ID'=>$ID,
            'NOMBRE'=>$NOMBRE,
            'CANTIDAD'=>$CANTIDAD,
            'PRECIO'=>$PRECIO,
            // 'IMAGEN'=>$IMAGEN
            );
            $_SESSION['CARRITO'][$NumeroProductos]=$producto;
            $mensaje='Producto agregado al carrito';
        }
    } 
    // $mensaje=print_r($_SESSION,true);
        $mensaje='Producto agregado al carrito';
        

        break;
        case"Eliminar":
            if(is_numeric( openssl_decrypt($_POST['id'],COD,KEY))){
                    $ID=openssl_decrypt($_POST['id'],COD,KEY);
                    // $mensaje.='OK ID correcto'.$ID."<br/>";

                    foreach($_SESSION['CARRITO'] as $indice=>$producto){
                        if ($producto['ID']==$ID) {
                            unset($_SESSION['CARRITO'][$indice]);
                            echo "<script>alert('Elemento borrado...');</script>";

                            # code...
                        } 
                        

                    }



            }else {
                $mensaje.='Upsss.....ID incorrecto' .$ID."<br/>";
    }
    
    }
}
?>
