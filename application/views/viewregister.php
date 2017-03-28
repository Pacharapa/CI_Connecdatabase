<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<tr>
			<td>user id</td>
			<td>user name</td>

		</tr>
		<?php 
			foreach ($items as $key => $value) {
		?>
			<tr>
				<td><?=$value['user_id'] ?></td>
				<td><?=$value['user_name']?></td>

			</tr>	
		<?php
			}
		?>	


	</table>
</body>
</html>