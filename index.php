<?php 
	include('includes/db.php'); 
	include('includes/function_core.php');
?>
<!DOCTYPE html>
<html lang="hu">
	<head>
		<meta charset="UTF-8">
		<title>PCPARTS</title>
		<link rel="stylesheet" href="styles.css">
	</head>

	<body>
<?php
	$result = $db->prepare("SELECT id, name_cpu FROM part_cpu");
	$result->execute();
	print "\t\t<table>\r\n";
	print "\t\t\t<tr>\r\n";
	print "\t\t\t\t<th>id</th>\r\n";
	print "\t\t\t\t<th>CPU neve</th>\r\n";
	print "\t\t\t</tr>\r\n";
	while ($row = $result->fetch(PDO::FETCH_ASSOC))
	{
		print "\t\t\t<tr>\r\n";
		print "\t\t\t\t<td>" . $row['id'] . "</td>\r\n";
		print "\t\t\t\t<td>" . $row['name_cpu'] . "</td>\r\n";
		print "\t\t\t</tr>\r\n";
	}
	print "\t\t</table>\r\n";
?>
	</body>
</html>