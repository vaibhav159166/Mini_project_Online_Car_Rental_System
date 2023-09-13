<?php
	$firstName = $_POST['firstname'];
	$lastName = $_POST['lastname'];
	$country = $_POST['country'];
	$subject = $_POST['subject'];

	// Database connection
	$conn = new mysqli('localhost','root','','testing');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstname, lastname, country,subject) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $firstName, $lastName, $country, $subject);
		$execval = $stmt->execute();
		echo $execval;
		echo "
				          <script>
			         alert('Querry Submitted Successfull');
			         window.location.href='inde.php';
			      </script>
				  ";
		$stmt->close();
		$conn->close();
	}
?>