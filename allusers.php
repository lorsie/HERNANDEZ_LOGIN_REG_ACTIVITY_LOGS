<?php  
require_once 'core/models.php'; 
require_once 'core/handleForms.php'; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<style>
		body {
    	font-family: Arial, sans-serif;
    	background-color: #f8f4e4; 
    	margin: 0;
    	padding: 0;
	}

	a {
    	display: block;
    	margin: 10px 20px;
    	color: #5a4c35; 
		font-size: 14px;
    	text-decoration: none;
	}

	a:hover {
    	text-decoration: underline;
	}

	h1 {
    	text-align: center;
    	color: #5a4c35; 
    	font-size: 22px;
    	margin-top: 10px;
    	margin-bottom: 20px;
	}

	table {
    	width: 90%;
    	margin: 0 auto;
    	border-collapse: collapse;
    	background-color: #fff; 
    	box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
	}

	th {
    	background-color: #d9d7ae; 
    	color: #333; 
    	font-weight: bold;
    	text-align: center;
    	padding: 10px;
    	border: 1px solid #b5b59c; 
	}

	td {
    	border: 1px solid #b5b59c; 
    	padding: 8px 10px;
    	text-align: center;
    	color: #333; 
    	font-size: 14px;
	}

	tr:nth-child(even) {
    	background-color: #f2f2eb; 
	}

	tr:nth-child(odd) {
    	background-color: #fff; 
	}

	tr:hover {
    	background-color: #d9d7ae; 
    	color: #000; 
	}
	</style>
<body>
	<a href="index.php">Back</a>
	<h1>All Users of Starlit Oasis Hotel System:</h1>
	<div class="tableClass">
		<table style="width:100%; margin-top: 30px; text-align: center; background-color: #F1EBDA;">
		<tr>
			<th style="background-color: #A59D84;">Username</th>
			<th style="background-color: #A59D84;">User ID</th>
		</tr>
			<?php $getAllUsers = getAllUsers($pdo); ?>
			<?php foreach ($getAllUsers as $row) { ?>
			<tr>
				<td><?php echo $row['username']; ?></td>
				<td><?php echo $row['user_id']; ?></td>
			</tr>
			<?php } ?>
		</table>
</body>
</html>
