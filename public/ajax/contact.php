<?php
sleep(2); //simula un retardo (3sec) para ver el funcionamiento de beforeSend de ajax
//recibo por POST el email del form
$email = $_POST['email'];

if(!empty($email)){ //si la variable NO está vacía
	echo json_encode("Email recibido OK");
}else{
	echo json_encode("Email recibido OK");
}

