<?php  
require_once 'core/models.php'; 
require_once 'core/handleForms.php'; 

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
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
	<h1>Search History:</h1>
    <div class="tableClass">
        <table style="width:100%; margin-top: 30px; text-align: center; background-color: #F1EBDA;">
            <tr>
                <th style="background-color: #A59D84;">Search History ID</th>
                <th style="background-color: #A59D84;">Search Query</th>
                <th style="background-color: #A59D84;">Username</th>
                <th style="background-color: #A59D84;">Date Searched</th>
            </tr>
            <?php 
            $getSearchHistory = getSearchHistory($pdo); 
            foreach ($getSearchHistory as $row) { ?>
            <tr>
                <td><?php echo $row['search_id']; ?></td>
                <td><?php echo $row['keyword']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['date_searched']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
