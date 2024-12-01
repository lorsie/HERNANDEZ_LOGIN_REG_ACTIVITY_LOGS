<?php require_once 'core/models.php'; ?>
<?php require_once 'core/dbConfig.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
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
</head>
<body>
	<a href="index.php">Back</a>
	<h1>Are you sure you want to Delete this Applicant?</h1>
	<?php $getApplicantByID = getApplicantByID($pdo, $_GET['id']); ?>
	<div class="container" style="border-style: solid; background-color: #FDE7BB; height: 480px;  padding-left: 15px">
		<h2>First Name: <?php echo $getApplicantByID['first_name']; ?></h2>
		<h2>Last Name: <?php echo $getApplicantByID['last_name']; ?></h2>
		<h2>Position: <?php echo $getApplicantByID['position']; ?></h2>
		<h2>Gender: <?php echo $getApplicantByID['gender']; ?></h2>
		<h2>Age: <?php echo $getApplicantByID['age']; ?></h2>
		<h2>Email: <?php echo $getApplicantByID['email']; ?></h2>
		<h2>Contact Number: <?php echo $getApplicantByID['contact_number']; ?></h2>
		<h2>Address: <?php echo $getApplicantByID['address']; ?></h2>
        <h2>Hire Date: <?php echo $getApplicantByID['hire_date']; ?></h2>

		<div class="deleteBtn" style="float: right; margin-right: 10px;">
			<form action="core/handleForms.php?id=<?php echo $_GET['id']; ?>" method="POST">
				<input type="submit" name="deleteApplicantBtn" value="Delete" style="background-color: #EFB6C8; border-style: solid;">
			</form>			
		</div>	

	</div>
</body>
</html>
