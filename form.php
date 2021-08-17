<?php


if ( $_POST ['SubmitButton'] ) {
	if ( !$_POST['g-recaptcha-respone'] )
		exit('Please, Enter reCaptcha')
	
	$url = 'https://www.google.com/recaptcha/api/siteverify'
	$key = '6LeB__MbAAAAAKV6evAHlmdjBw29suzTIJF1e9Ta'
	$query = $url, '?secret=',key,'&response=',$_POST['g-recaptcha-respone'],'remoteip=',$_SERVER['REMOTE_ADDR'];
	
	$data = json_decode(file_get_contents($query));
	
	if ( $data->success = false)
		exit('Enter reCaptcha incorrectly')
	
	exit("Login: $_POST[login]");
}


?>