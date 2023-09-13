
<?php
    $name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
    $Licence = $_POST['Licence'];
	$cname = $_POST['cname'];
	$number = $_POST['number'];
	$age = $_POST['age'];
	$Adde = $_POST['Adde'];
	$sdate = $_POST['sdate'];
	$edate = $_POST['edate'];
	$message = $_POST['message'];
	
	
	
	

	// Database connection
	$conn = new mysqli('localhost','root','','testing');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into res(name,email,phone,Licence,cname,number,age,Adde,sdate,edate,message) values(?,?, ?, ?, ?, ?, ?, ?, ? , ?, ?)");
		$stmt->bind_param("ssiisiissss", $name,$email,$phone,$Licence,$cname,$number,$age,$Adde,$sdate,$edate,$message);
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