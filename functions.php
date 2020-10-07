<?php 
function sendMessageToTelegramBot($message) 
{
	$token = "bot" . '1291112678:AAEcn-ka_ESg-rs71auR9M9YR6XiDl4cV2I';
	$chat_id = "-453685493";
	
	// using GET URL Parameter -> message
	$pesan = urlencode($message);

	$url = "https://api.telegram.org/$token/sendMessage?parse_mode=markdown&chat_id=$chat_id&text=$pesan";

	$ch = curl_init();
	$optArray = [
			CURLOPT_URL => $url,
			CURLOPT_HEADER => false,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_SSL_VERIFYPEER => false
		];  

	curl_setopt_array($ch, $optArray);
	$result = curl_exec($ch);

	$err = curl_error($ch);
	curl_close($ch);
}