<?php
	mysql_connect('localhost','root') && mysql_select_db('message_db');

	session_start();

	function view_list(){
		$query = "SELECT * FROM msgs";
		$result = mysql_query($query);
		$msg_lists = array();
		if(mysql_num_rows($result)>0){
			while($row = mysql_fetch_assoc($result)){
					$msg_lists[] = $row;
			}
		}
		return $msg_lists;
	}

	function post_message($name,$email,$message,$action){
		$query = "INSERT INTO msgs(name,message,email,date_posted,is_approved) Values('$name','$message','$email',CURRENT_DATE,'$action')";
		$result = mysql_query($query);
		header("location:home.php");
	}
?>
