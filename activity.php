<?php require_once 'core/models.php'; ?>
<?php require_once 'core/dbConfig.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
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
	<h1>Activity details:</h1>
	<table style="width:100%; margin-top: 10px; text-align: center;">
    <tr>
        <th style="background-color: #A59D84;">Added By User ID</th>
        <th style="background-color: #A59D84;">Date Added</th>
        <th style="background-color: #A59D84;">Modified By User ID</th>
        <th style="background-color: #A59D84;">Last Updated</th>
    </tr>
    <?php $getAppliByID = getAppliByID($pdo, $_GET['id']); ?>
    <?php foreach ($getAppliByID as $row) { ?>
    <tr>
        <td><?php echo $row['added_by']; ?></td>
        <td><?php echo $row['date_added']; ?></td>
        <td><?php echo $row['modified_by']; ?></td>
        <td><?php echo $row['last_updated']; ?></td>
    </tr>
    <?php } ?>
</table>
	
</body>
</html>
