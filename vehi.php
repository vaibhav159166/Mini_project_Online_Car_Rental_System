<?php
    $name = $_POST['carname'];
	$brand = $_POST['brand'];
	$colour = $_POST['colour'];
    $model = $_POST['model'];
	$price = $_POST['price'];
	$seat = $_POST['seat'];
	$image = $_POST['av'];
	$image1 = $_POST['avv'];
	$fuel = $_POST['fuel'];
	$fea = $_POST['fea'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','testing');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into vehicle(carname,brand,colour,model,price,seat,image,image1,fuel,fea) values(?, ?, ?, ?, ?, ?, ?, ? , ?, ?)");
		$stmt->bind_param("ssssiissss", $name, $brand, $colour, $model, $price, $seat, $image, $image1, $fuel, $fea);
		$execval = $stmt->execute();
		echo $execval;
		echo "
				          <script>
			         alert('Querry Submitted Successfull');
			         window.location.href='adminpa.php';
			      </script>
				  ";
		$stmt->close();
		$conn->close();
	}
?>