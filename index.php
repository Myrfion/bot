<?php

	$output = json_decode(file_get_contents('php://input'),true);
	$id = $output['message']['chat']['id'];
	file_put_contents("https://api.telegram.org/bot408340680:AAG4FI5TDk45wzuSzib4oQpgCGqGFVCoWBo/sendMessage?chat_id" . $id."&text=pishov nahiu" );
	file_put_contents("logs.txt", $id);
