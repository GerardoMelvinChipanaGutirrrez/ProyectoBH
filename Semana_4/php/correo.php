<?php
if(isset($_POST['enviar'])){
	if(!empty($_POST['name']) && !empty($_POST['staff']) && !empty($_POST['day']) && !empty($_POST['turno']) && !empty($_POST['telefono']) && !empty($_POST['email'])){
		$name =$_POST['name'];
		$staff=$_POST['staff'];
		$day=$_POST['day'];
		$turno=$_POST['turno'];
		$msg  ="LA Sr(ta). ".$name." Hace efectivo su RESERVA EN EL SALÓN SPA&ESTETICA el díá ".$day." a las ".$turno." con el especialista ".$staff." Gracias por su preferencia.";
		$asunto  ="RESERVAS SALÓN SPA&ESTETICA Sr(ta). ".$name;
		$email=$_POST['email'];
		$header="From: gerardchcoor@gerardo.corpipsa.com" . "\r\n";
		$header.="Replay-To: gerardchcoor@gerardo.corpipsa.com" ."\r\n";
		$header.="X-Mailer: PHP/" . phpversion();
		$mail=mail($email, $asunto, $msg, $header);
		if ($mail) {
			echo "<h4>Mail enviado</h4>";
		}
	}
	
}