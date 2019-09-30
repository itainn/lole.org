
<?php
$servidor="mysql:dbname=".BD.";host=".SERVIDOR;
try{
   $pdo = new PDO($servidor,USUARIO,PASSWORD,
   array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8") 
);
//echo "<script>alert('conectado...')</script>"; 
}catch(PDOException $e){
   //echo "<script>alert('error...')</script>";
}

// $mysqli = new mysqli('localhost', 'root', '', BD);
// $mysqli->set_charset("utf8");
// $conexion=new (SERVIDOR,USUARIO,PASSWORD,BD);
// $pdo = new PDO($conexion,USUARIO,PASSWORD,
// array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
// $link = mysql_connect("localhost", "root", "");

// if (!$link) 
// {
//    die("No puedo conectar: " . mysql_error());
// }


// // PASO 2) SELECCIONAMOS LA BD

// mysql_select_db("tienda");




// $Conexion = mysql_connect(SERVIDOR, USUARIO, PASSWORD,BD) or die("No se pudo conectar al servidor");

// mysql_select_db('tienda', $Conexion) or die("No se ha podido seleccionar la base de datos");

//  $Conexion = mysql_connect(SERVIDOR, USUARIO, PASSWORD,BD) ;
      // Dirección o IP del servidor MySQL
      // $servidor = "localhost";
 
      // Puerto del servidor MySQL
      // $puerto = "3306";
 
      // Nombre de usuario del servidor MySQL
      // $usuario = "root";
 
      // Contraseña del usuario
      // $contrasena = "";
 
      // Nombre de la base de datos
      // $baseDeDatos ="tienda";
 
      // Nombre de la tabla a trabajar
      // $tabla = "`tblproductos`";
 
      // function Conectarse()
      // {
         // global $host, $puerto, $usuario, $contrasena, $baseDeDatos, $tabla;
//  if (!(
         // $servidor = "mysql:dbname=".BD.",host=".SERVIDOR;
         // $conexion = mysqli_connect( SERVIDOR, USUARIO, PASSWORD )or die ("No se ha podido conectar al servidor de Base de datos");
         // $conexion = mysqli_connect( $servidor, $usuario, $contrasena ) or die ("No se ha podido conectar al servidor de Base de datos");
         // try{
         //    // $pdo = new PDO(
         //    //    $servidor,
         //    //    USUARIO,PASSWORD,
         //    //    // $pdo->query("SET NAMES 'utf8'");               
         //    //    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
         //    // );
         //    echo "<script>alert('conectado...')</script>"; 
         //    //  $pdo= new PDO($servidor,USUARIO,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")
         //    // );
         //    //     // creamos una instancia pdo para la conexion a la base de datos
            
           
 
         // }catch(PDOException $e){
         //    echo "<script>alert('ERROR...')</script>";
         // }
         
      ?> 