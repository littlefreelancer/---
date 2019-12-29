<?php

	header("Content-Type: text/html; charset=utf-8");

	$user_ip = $_SERVER["REMOTE_ADDR"];
	$user_info = file_get_contents("http://ip-api.com/json/".$user_ip);
	$user_info = json_decode($user_info);
	$user_city = $user_info->country;
	if ($user_city != "Russia")
	{
		echo "Только для РФ";
		exit;
	}
?>
