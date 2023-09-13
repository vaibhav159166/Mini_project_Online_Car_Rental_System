

<?php
	$name=$_POST['name'];
  $email=$_POST['email'];
	$phone=$_POST['phone'];
	$num=$_POST['num'];
  $pick=$_POST['date'];
  $street=$_POST['street'];
	$city=$_POST['city'];
  $zip_code=$_POST['zip_code'];
  $cname=$_POST['cname'];
  $brand=$_POST['brand'];
  $no=$_POST['no'];
 

	// Database connection
	$conn = new mysqli('localhost','root','','testing');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into booking(name, email, phone,num,date,street,city,Zip_code,cname,brand,no) values(?, ?, ?, ?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("ssisssssssi", $name, $email, $phone, $num,$pick,$street,$city,$zip_code,$cname,$brand,$no);
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