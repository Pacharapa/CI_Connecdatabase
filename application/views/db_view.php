<!DOCTYPE html>
<html>
<head>
<h1>VIEW</h1>
	<title></title>
</head>
<body>
<pre>
<table border="1">
	<tr>
		<td>
		ID::
		</td>
		<td>
		 nameMOVIE
		</td>
	</tr>

		<?php 
			foreach ($items as $key => $value) {
		?>
			<tr>
				<td><?=$value['id'] ?></td>
				<td><?=$value['namemovie']?></td>

			</tr>	
		<?php
			}
		?>	
</table>

</body>
</html>