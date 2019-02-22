<?php
if(!empty($_post['name']) AND !empty($_post['email']) AND !empty($_post['comments'])) {
	$headers = 'From : Maria \'Uralmasha\' Gregory'
			'Reply-To: gregorymaria83@gmail'
			'X-Mailer: PHP/'. phpversion();
	$theme = 'Message from Uralmasha.github.io';
	$letter = 'Message text\r\n';
	$letter .= '\r\nName: '.$_post['name'].'\r\n';
	$letter .= '\r\nE-mail: '.$_post['email'].'\r\n';
	$letter .= '\r\nComments: '.$_post['comments'].'\r\n';
	
	if (mail('gregorymaria83@gmail.com', $theme, $letter, $headers)) {
		header('Location: /thankyou.htm');
	} else {
		header('Location: /');
} else {
	header('Location: /');
}