<?php 
	include "utilities.php";
	
	$view_message  = view_list_message();
?>
<html>
<head>
	<title>MESSAGES LISTS</title>
</head>
<body>
	<br><h1>Messages Lists</h1>
	<table border = '1'>
		
		<tr>
			<td> Id No.</td>
			<td> Name</td>
			<td> Email</td>
			<td> Message</td>
			<td> Date Posted</td>
			<td> Approved</td>
			<td> Actions</td>
		</tr>
		<?php foreach ($view_message as $view_messages):?>
		<tr>
			<td><?php echo $view_messages['id'];?></td>
			<td><?php echo $view_messages['name'];?></td>
			<td><?php echo $view_messages['email'];?></td>
			<td><?php echo $view_messages['message'];?></td>
			<td><?php echo $view_messages['date_posted'];?></td>
			<td><?php echo $view_messages['is_approved'];?></td>
			<td>
				<form action = "message_approved.php?id=<?php echo $view_messages['id'];?>is_approved=<?php echo $view_messages['is_approved'];?>" method = 'POST'>
					<?php
					if($view_messages['is_approved'] == 'Y'){
						echo "<input type = 'submit' name = 'approved' value = 'Reject'>";
					}else{
						echo "<input type = 'submit' name = 'reject' value = 'Approve'>";
					}
					?>
					</form>
			</td>
			<td>	
				<form action = "message_deleted.php?id=<?php echo $view_messages['id'];?>" method = 'POST'>
					<input type = 'submit' name = 'delete' value = "DELETE"></form>
			</td>
		</tr>
		<?php endforeach;?>
	</table>
	<form method = 'post' action = 'createmessage.php'>
			<tr>
			<td><input type="submit" value="Back to Front Page"></td>
		</tr>
		</form>
</body>
</html>
