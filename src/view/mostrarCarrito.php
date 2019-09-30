<?php
// include '../global/config.php';
include '../global/conexion.php';
include     '../carrito.php';
//  include 'templates/cabecera.php';
?>
<br>
<h3>lista del carrito</h3>
<?php if(!empty($_SESSION['CARRITO'])) { ?>   

     
<table class=" table table-dark table-bordered">
    <tbody>
        <tr>
            <th width='40%'>Descripcion</th> 
            <th width='15%' class="text-center">Cantidad</th>
            <th width='20%' class="text-center">Precio</th>
            <th width='20%' class="text-center">SubTotal</th>
            <th width='5%'>--</th>
           
        </tr>
        <?php $total=0; ?>
        <?php foreach($_SESSION['CARRITO'] as $indice=>$producto){?>
        <tr>
            
            <td width='40%'><?php echo $producto['NOMBRE']?></td>
            <td width='15%'class="text-center"><?php echo $producto['CANTIDAD']?></td>
            <td width='20%'class="text-center"><?php echo $producto['PRECIO']?></td>
            <td width='20%'class="text-center"><?php echo number_format($producto['PRECIO']*$producto['CANTIDAD'],2); ?></td>
            <td width='5%'>

                <form action="" method="post">

                   <input type="hidden"
                    name="id"
                     id="id" 
                     value="<?php echo openssl_encrypt($producto['ID'],COD,KEY) ;?>">

                
                <button 
                class="btn btn-danger"
                type="submit"
                name="btnAccion"
                value="Eliminar"
                >Eliminar</button></td>
           </form>

        </tr>
        <?php $total=$total+($producto['PRECIO']*$producto['CANTIDAD']); ?>
        <?php } ?>
        <tr>
            <td colspan="3" align="right"><h3>Total</h3></td>
            <td align="right"><h3><?php echo number_format($total,2);?>€</h3></td>
            <td></td>          
           
        </tr> 
        <tr> 
          <td colspan="5"/> 
            <form action="pagar" method="post">
            <!-- bootstrap    b-form-group -->
            <div class="alert alert-success">
                
            
                <div class="form-group">
                    <label  for="my-input">CORREO DE CONTACTO</label>
                    <input  id="email" 
                            class="form-control"
                            type="email"
                            name="email"
                            placeholder="escribe tu correo"
                            required>                
                </div>
                    <small id="emailHelp"
                        class="form-text text-muted">
                        Los productos se enviaran a este correo
                    </small>
                <!-- </div>
                <div class="form-group">
                    <label for="nombre">NOMBRE DE CONTACTO</label>
                    <input id="nombre"
                            class="form-control"
                            type="text" 
                            name="nombre"
                            placeholder="nombre y apellido"
                            required>           
                </div>
                <div class="form-group">
                    <label for="direccion">DIRECCION DE ENTREGA</label>
                    <input id="direccion"
                             class="form-control" 
                            type="text" 
                            name="direccion" 
                            placeholder="direccion,codigo postal,ciudad,provincia"
                            required>
                </div>
                <div class="form-group">
                    <label for="DiaEntrega">DIA DE ENTREGA</label>
                    <input id="DiaEntrega" 
                            class="form-control" 
                             type="month"   
                            name="DiaEntrega"
                            required>                    
                </div> -->
                
                <!-- datetime-hour no tendra soporte pasado diciembre 2019 -->
                <!-- datetime no es soportado por chrome -->
                <!-- soportes hasta la fecha input[type=email/number/password/tel
                /text/url/date/datetime-local/month/time/week -->
                <!-- d-time -->
                <!-- <div class="form-group">
                    <label for="HoraEntrega">HORA DE ENTREGA</label>
                    <select id="HoraEntrega" class="form-control" name="HoraEntrega">
                        <option> 8 H</option>
                        <option> 9 H</option>
                        <option>10 H</option>
                        <option>11 H</option>
                        <option>12 H</option>
                        <option>13 H</option>
                        <option>14 H</option>
                        <option>15 H</option>
                        <option>16 H</option>
                        <option>17 H</option>
                        <option>18 H</option>
                        <option>19 H</option>
                        <option>20 H</option>
                        <option>21 H</option>
                        <option>22 H</option>                        
                    </select>
                </div> -->
                <button class="btn btn-primary btn-lg btn-block " type=" submit"
                name="btnAccion"
                value="proceder">
                proceder a pagar >>
                </button>
                    
                </div>
            </form>
        </tr>
        
    </tbody>
</table>
<?php }else{  ?>
    
 <div class="alert alert-success">
    No hay Productos en el carrito
</div>

<?php } ?>
    

<?php //include 'templates/pie.php'; ?>