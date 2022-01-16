<?php
//including the database connection file
include_once("config.php");


$result = mysqli_query($mysqli, "SELECT * FROM borrowers ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
<a href="add.html">Add New Data</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Nombre</td>
		<td>Apellido</td>
		<td>userId</td>
		
	</tr>
	<?php 
	
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['surname']."</td>";
		echo "<td>".$res['firstname']."</td>";
		echo "<td>".$res['userid']."</td>";			
	}
	?>
	</table>
</body>
</html>
