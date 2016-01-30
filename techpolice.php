<?php
$input = file_get_contents("php://input"); 
$sJ = json_decode($input, true);

$t = $sJ['message']['text'];

switch(true) {
	case preg_match("/(mediatek)/i", $t, $out):
		$repL = $out[1];
		$repR = "MediaKek";
		break;
	
	case preg_match("/(microsoft)/i", $t, $out):
		$repL = $out[1];
		$repR = "Microshaft";
		break;
		
	case preg_match("/(ch23)/i", $t, $out):
		$repL = $out[1];
		$repR = "Jimmy";
		break;
		
	case preg_match("/(huawei)/i", $t, $out):
		$repL = $out[1];
		$repR = "Huewhy";
		break;

	default:
		die("true");
		break;
}

if(isset($repL) && isset($repR)) $text = "s/" . $repL . "/" . $repR . "/";
else die();

$reply['method'] = "sendMessage";
$reply['chat_id'] = $sJ['message']['chat']['id'];
$reply['text'] = $text;
$reply['reply_to_message_id'] = $sJ['message']['message_id'];

header("Content-Type: application/json");
echo json_encode($reply);
