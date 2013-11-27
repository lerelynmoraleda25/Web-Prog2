<?php 
	include "utilities.php";
	
	$view_message  = view_list();
?>
<html>
<head>
	<title>MESSAGES LISTS</title>
</head>
<body>
	<center>
	<br><h1>Messages :"> </h1>
	<table border = '2'>
		
		<tr>
			<td> Id No.</td>
			<td> Name</td>
			<td> Email</td>
			<td> Message</td>
			<td> Date Posted</td>
			<td> Approved</td>
			<td> Actions</td>
		</tr>
		<?php foreach ($view_message as $view_msg):?>
		<tr>
			<td><?php echo $view_msg['id'];?></td>
			<td><?php echo $view_msg['name'];?></td>
			<td><?php echo $view_msg['email'];?></td>
			<td><?php echo $view_msg['message'];?></td>
			<td><?php echo $view_msg['date_posted'];?></td>
			<td><?php echo $view_msg['is_approved'];?></td>
			<td>
				<form action = "message_approved.php?id=<?php echo $view_msg['id'];?>is_approved=<?php echo $view_msg['is_approved'];?>" method = 'POST'>
					<?php
					if($view_msg['is_approved'] == 'Y'){
						echo "<input type = 'submit' name = 'approved' value = 'Reject'>";
					}else{
						echo "<input type = 'submit' name = 'reject' value = 'Approve'>";
					}
					?>
					</form>

			</td>
			<td>	
				<form action = "message_deleted.php?id=<?php echo $view_msg['id'];?>" method = 'POST'>
					<input type = 'submit' name = 'delete' value = "DELETE"></form>
			</td>
		</tr>
		<?php endforeach;?>
	</table>
	<form method = 'post' action = 'home.php'>
			<tr>
			<td><input type="submit" value="Home"></td>
		</tr>
		</form>
	</center>
</body>
</html>   
