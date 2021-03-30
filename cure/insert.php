

<!DOCTYPE html>
<html>

<head>
	<title>Cure || Thankyou </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body>
	<center>
	<h3 class="mt-5">	<a href="index.php">Go back to site</a></h3>
	</center>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => inquiry
		$conn = mysqli_connect("localhost", "root", "", "inquiry");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$message = $_REQUEST['message'];
		
		// Performing insert query execution
		// here our table name is inquiry_field
		$sql = "INSERT INTO inquiry_field VALUES ('$name',
			'$email','$message')";
		
		if(mysqli_query($conn, $sql)){
			
			echo '<img src="images/check.png" width="80" height="80" >';
			echo "<h3 class='alert alert-primary mt-5'>Thankyou , your messsage is sent.
				
				</h3>";
				
        } 
		else{
			echo "<h3 class='alert alert-danger mt-5'>Please fill your form again.
				
			</h3>
				. mysqli_error($conn)";
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
