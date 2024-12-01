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
	<style>
		* {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Roboto', sans-serif;
      background-color: #FEFAE0;
      color: #333;
      padding: 20px;
    }

    .greeting {
      text-align: center;
      margin-bottom: 20px;
      background-color: #FDE7BB;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      border: 1px solid #798645;
    }

    .greeting h1 {
      color: #525B44;
      margin-bottom: 10px;
    }

    .greeting h3 a {
      color: #626F47;
      text-decoration: none;
      font-weight: 500;
    }

    .greeting h3 a:hover {
      text-decoration: underline;
      color: #798645;
    }

    form {
      margin: 20px auto;
      text-align: center;
    }

    form input[type="text"] {
      width: 250px;
      padding: 10px;
      font-size: 1em;
      border: 1px solid #BDC3C7;
      border-radius: 5px;
      background-color: #FDE7BB;
    }

    form input[type="submit"] {
      padding: 10px 15px;
      font-size: 1em;
      border: none;
      background-color: #798645;
      color: white;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    form input[type="submit"]:hover {
      background-color: #626F47;
    }

    form a {
      display: inline-block;
      margin-top: 10px;
      color: #626F47;
      text-decoration: none;
    }

    form a:hover {
      text-decoration: underline;
      color: #798645;
    }

    table {
      width: 100%;
      margin-top: 20px;
      border-collapse: collapse;
      text-align: center;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    table th, table td {
      padding: 12px;
      border: 1px solid #BDC3C7;
      font-size: 0.95em;
    }

    table th {
      background-color: #CDC1FF;
      color: #333;
      font-weight: 500;
    }

    table td {
      background-color: #F2EED7;
    }

    table tr:hover td {
      background-color: #FEFAE0;
    }

    table a {
      color: #798645;
      text-decoration: none;
    }

    table a:hover {
      text-decoration: underline;
      color: #626F47;
    }

    .message {
      margin: 20px auto;
      padding: 15px;
      font-size: 1.1em;
      border-radius: 5px;
      text-align: center;
    }

    .message.error {
      background-color: #F8D7DA;
      color: #721C24;
      border: 1px solid #F5C6CB;
    }

    .message.success {
      background-color: #D4EDDA;
      color: #155724;
      border: 1px solid #C3E6CB;
    }
	</style>
</head>
<body>
	<a href="login.php">Login page</a>
	<div class="register" style="border-style: solid; width: 35%; height: 0 auto; margin-top: 15px; background-color: #C9E6F0; margin: 0 auto; text-align: center;">
		<h1>Register Here to Create an Account!</h1>
		<?php  
		if (isset($_SESSION['message']) && isset($_SESSION['status'])) {

			if ($_SESSION['status'] == "200") {
				echo "<h3 style='color: green;'>{$_SESSION['message']}</h3>";
			}

			else {
				echo "<h3 style='color: red;'>{$_SESSION['message']}</h3>";	
			}
		}
		unset($_SESSION['message']);
		unset($_SESSION['status']);
		?>

		<form action="core/handleForms.php" method="POST">
			<p>
				<label for="username">Username</label>
				<input type="text" name="username">
			</p>
			<p>
				<label for="username">First Name</label>
				<input type="text" name="first_name">
			</p>
			<p>
				<label for="username">Last Name</label>
				<input type="text" name="last_name">
			</p>
			<p>
				<label for="username">Password</label>
				<input type="password" name="password">
			</p>
			<p>
				<label for="username">Confirm Password</label>
				<input type="password" name="confirm_password">
			</p>
			<p>
				<input type="submit" name="insertNewUserBtn" value="Register" style="background-color: #EFB6C8; 7 "width: 80px; height: 30px; padding: 5px; font-size:1em;">
			</p>
		</form>
	</div>
</body>
</html>