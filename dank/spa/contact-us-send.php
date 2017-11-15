<?php
if(isset($_POST['submit']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {
	$msg = 'Name: ' .$_POST['name'] ."\n"
		.'Email: ' .$_POST['email'] ."\n"
		.'Message: ' .$_POST['message'];

	mail('rmvidaurre@gmail.com', 'COSSERPROS', $msg);
	header('location: contact-us-thank-you.php');

} else {
	header('location: contactanos.php');
	exit(0);
}
?>