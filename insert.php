<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "fitstop");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all values from the form data(input)
		$nome = $_REQUEST['name'];
		$username = $_REQUEST['user_name'];
		$data = $_REQUEST['date'];
		$indirizzo = $_REQUEST['address'];
        $telefono = $_REQUEST['phone'];
		$email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO utente VALUES ('', '$nome', '$username','$data','$indirizzo', '$telefono', '$email', '$password')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>"; 

			echo nl2br("\n$nome\n $username\n "
				. "$data\n $indirizzo\n $telefono\n $email");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
