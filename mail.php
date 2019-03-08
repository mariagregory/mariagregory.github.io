<?php

$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'post') {
	
	
	echo 'Thanks for submitting the form.<br />';
	echo  . $_POST['name'];
	echo . '<br/>Your message was: ' . $_POST['comments'] . "<br/>";
	
}
?>

 <!--   $project_name = trim($_post["???????? ?????"]);
    $admin_email = trim($_post["admin_email"]);
    $form_subject = trim($_post["???? ?????????"]);

    // foreach ( $_post as $key => $value ) {
        // Skip the for hidden fields (input type="hidden") - don't show them in an email
        // if ( $value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject") {
            // $message .= "
            // " . ( ($c = !$c)) ?  '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
            // <td style='padding: 10px; border: #e9e9e9 11px solid;'><b>$key</b></td>
            // <td style='padding: 10px; border: #e9e9e9 11px solid;'>$value</td>
            // </tr>
        // ";   // the above code shapes a message as a table to show in the email
    // };
    // };
// }
/*
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
*/-->