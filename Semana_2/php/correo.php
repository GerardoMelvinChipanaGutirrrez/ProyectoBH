<?php
if(isset($_POST['enviar'])){
	if(!empty($_POST['name']) && !empty($_POST['msg']) && !empty($_POST['email']) && !empty($_POST['asunto'])){
		$name =$_POST['name'];
		$msg  =$_POST['msg'];
		$asunto  =$_POST['asunto'];
		$email=$_POST['email'];
		$header="From: gerardchcoor@gerardo.corpipsa.com" . "\r\n";
		$header.="Replay-To: gerardchcoor@gerardo.corpipsa.com" ."\rn";
		$header.="X-Mailer: PHP/" . phpversion();
		$mail=mail($email, $asunto, $msg, $header);
		if ($mail) {
			echo "<h4>Mail enviado</h4>";
		}
	}
	
}