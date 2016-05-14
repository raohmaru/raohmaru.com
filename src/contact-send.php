<?php
require 'inc/bootstrap.php';
require 'inc/class/Contact.php';

$contact = new Contact();

if( $contact->Send($_POST) )
{
	if( isset($_POST['ajax']) )
		echo "0000";
	else
		header('Location: /contact?ok');
}
else
{
	if( isset($_POST['ajax']) )
		echo "1000";
	else
		header('Location: /contact?error');
}

?>