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

	case preg_match("/(huawei)/i", $t, $out):
		$repL = $out[1];
		$repR = "Huewhy";
		break;

	case preg_match("/(duckduckgo)/i", $t, $out):
		$repL = $out[1];
		$repR = "FuckFuckNo";
		break;

	case preg_match("/(samsung)/i", $t, $out):
	  $repL = $out[1];
		$repR = "Samshit";
		break;

	case preg_match("/(touchwiz)/i", $t, $out):
	  $repL = $out[1];
		$repR = "TouchJizz";
		break;

	case preg_match("/(liberbot)/i", $t, $out):
	  $repL = $out[1];
		$repR = "Liberflop";
		break;

	case preg_match("/(otouto)/i", $t, $out):
	  $repL = $out[1];
		$repR = "slowtouto";
		break;

	case preg_match("/(teleseed)/i", $t, $out):
	  $repL = $out[1];
		$repR = "Telesquig";
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
