<?php
    $email = $_POST['email'];
    $message = $_POST['message'];
    $headers = "FROM: user <" . $email . ">\r\n";
    mail("lee@boyles.com", "message subject " . $headers, $message);
    header("Location: https://boyles.com");
?>
	