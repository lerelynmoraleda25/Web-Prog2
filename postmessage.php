

<?php 
	include "utilities.php";
	
	if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$action = 'N';

		post_message($name,$email,$message,$action);
		header("location:showmess.php");
	}else{
		header("location:home.php");
	}
	
?>
