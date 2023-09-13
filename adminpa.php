<html>
<head>
<title>Admin Page</title>
   
<link rel="stylesheet" href="s.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
	<style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
		demand{
			font-size:20px;
			font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
		}
		h2 {
            text-align: center;
            color: #000000;
            font-size: xx-large;
            
        }
    </style>
</head>

<body>
<div class="sidebar">
    
      
   
    <!--profile image-->
    <div class="profile">
      <div class="profile-img">
        <img src="l.jpeg" alt="profile" />
		 
      </div>
      <div class="name">
        <h1>Car Rental</h1>
      </div>
    </div>
    <!-- Menu -->
    <div class="menu">
      <a href="#" class="active">
        <span class="icon">
          <i class="ri-function-line"></i>
        </span>
        Dashboard
      </a>
      <a href="#Post">
        <span class="icon">
          <i class="ri-notification-4-line"></i>
        </span>
        Post Vehicle
      </a>
      <a href="#Vehicles">
        <span class="icon">
          <i class="ri-car-fill"></i>
        </span>
        Vehicles
      </a>
      <a href="#">
        <span class="icon">
          <i class="ri-mail-unread-fill"></i>
        </span>
        Message
      </a>
      <a href="#Booking">
        <span class="icon">
          <i class="ri-send-plane-fill"></i>
        </span>
        Manage Booking
      </a>
      <a href="#Manage_contact">
        <span class="icon">
          <i class="ri-contacts-book-2-line"></i>
        </span>
        Manage contact
      </a>
      <a href="#Reg">
        <span class="icon">
          <i class="ri-user-received-2-line"></i>
        </span>
        Regegister User
      </a>
      <a href="inde.php">
        <span class="icon">
          <i class="ri-logout-box-r-line"></i>
        </span>
	
        Logout

      </a>
    </div>
  </div>
  
  
   <!-- Main Home-->
  <div class="main-home">
    <div class="header">
      <!-- Search -->
     <div class="search">
        <i class="ri-search-line"></i>
        <input type="text" name="" id="" placeholder="search" />
      </div>
	  <br>
      </div>
	  <div class="feed">
      <h1>Admin Page</h1>
      <div class="feed-text">
        <h2></h2>
        <span></span>
      </div>
    </div>

    <div class="main-post">
      <!-- Box 1 -->
      <div class="post-box">
        <img src="Ho.jpg" width="100%" height="500" alt="post" />
        <div class="post-info">
          <div class="post-profile">
            <div class="post-img">
            </div>
			<br>
			
 <section class="Post Vehicle" id="Post">
      
        <div class="post">
          <div class="postt">
            <aside>
			<div class="nam">
            <h2>Post Vehicles</h2><br>
			
			</div>
			<div class="pos">
			<form action="vehi.php" method="POST">
            <p>
            <label>Car name : <input type="text" name="carname"/></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<label>Brand : <input type="text" name="brand" /></label>
           </p>
		   <p>
		   <label>Model Year : <input type="text" name="model"/></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		   <label>Colour : <input type="text" name="colour"/></label>
		   
		   </p>
		   <p>
		   <label>price / Day : ₹<input type="number" name="price"/></label>&nbsp;&nbsp;&nbsp;
		   <label>Seating Capacity :<input type="number" name="seat" /></label>
		   </p>
		   <br>
		   <div class="up">
		   <h3>Upload Car image</h3><br>
		    </div>
			
			
		   <label for="av">Choose a picture:</label>
          <input type="file" id="image" name="av" accept="image/png, image/jpeg"><br>
		   <label for="av">Choose a picture:</label>
          <input type="file" id="image1" name="avv" accept="image/png, image/jpeg"><br>
		 
		  </div>
		  </div><br>
		 <div class="radio">
		   <h2>&nbsp;Select Fuel</h2>
		   <label>Petrol<input type="radio" name="fuel" value="Petrol" /></label>
		   <br>
           <label>Disel<input type="radio" name="fuel" value="Disel" /></label>
		   <br>
		   <label>CNG<input type="radio" name="fuel" value="CNG" /></label><br>
		   </div>
		   <div class="check">
		   <h2>Advance Feature</h2>
		   </div>
		   <div class="ck">
		   <ul style="list-style-type:none;">
      <li><input type="checkbox" name="fea" value="AC" />Air Conditionar</li>
      <li><input type="checkbox" name="fea" value="MS" />Music System</li>
      <li><input type="checkbox" name="fea" value="PS" />Power Steering</li>
	  <li><input type="checkbox" name="fea" value="AB" />Airbag</li>
    </ul>
	</div>
		  <br>

	  <div class="form-submit-button">	   
       <center><input type="submit" value="Submit"></center>
     </div>
		   
		   </form>
		   
		   
            </div>
			<div>
            
          </section>
			
 <section class="Vehicles" id="Vehicles">
      
        <div class="vehicle">
          <div class="about-text">
            <aside>
			<div class="nam">
            <h2>Manage Vehicles</h2><br>
			</div>
			<br>
            
	
			
	
		<?php
 
// Username is root
$user = 'root';
$password = '';
 
// Database name is geeksforgeeks
$database = 'testing';
include "dbConn.php";
 
// Server is localhost with
// port number 3306
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,
                $password, $database);
 
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
 
// SQL query to select data from database
$sql = " SELECT * FROM vehicle ";
$result = $mysqli->query($sql);
$mysqli->close();
$records = mysqli_query($db,"select * from vehicle");

?>

  <table>
            <tr>
                <th>id</th>
                <th>carname</th>
                <th>brand</th>
                <th>colour</th>
				<th>model</th>
				<th>price</th>
				<th>seat</th>
				<th>image</th>
				<th>image1</th>
				<th>fuel</th>
				<th>fea</th>
				<th>action</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
				 // Using database connection file here

                 // fetch data from database

                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
				<td><?php echo $rows['id'];?></td>
                <td><?php echo $rows['carname'];?></td>
                <td><?php echo $rows['brand'];?></td>
                <td><?php echo $rows['colour'];?></td>
                <td><?php echo $rows['model'];?></td>
				<td><?php echo $rows['price'];?></td>
				<td><?php echo $rows['seat'];?></td>
				<td><?php echo $rows['image'];?></td>
				<td><?php echo $rows['image1'];?></td>
				<td><?php echo $rows['fuel'];?></td>
				<td><?php echo $rows['fea'];?></td>
				<td><a href="delete.php?id=<?php echo $rows['id']; ?>">Delete</a></td>
				
				
            </tr>
            <?php
                }
            ?>
        </table>

			
			
           
            </div>
			<div>
            
          </section>
		  
		  <section class="Manage contact" id="Manage_contact">
		  <div class="manage">
		  <div class="nam">
            <h2>Manage Contact</h2><br>
			</div>
			<br>
		  
		  
		  
		  
		  <?php
 
// Username is root
$user = 'root';
$password = '';
 
// Database name is geeksforgeeks
$database = 'testing';
 
// Server is localhost with
// port number 3306
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,
                $password, $database);
 
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
 
// SQL query to select data from database
$sql = " SELECT * FROM registration ";
$result = $mysqli->query($sql);
$mysqli->close();
?>

  <table>
            <tr>
                <th>id</th>
                <th>firstname</th>
                <th>lastname</th>
                <th>country</th>
				<th>subject</th>
			
	
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
				<td><?php echo $rows['id'];?></td>
                <td><?php echo $rows['firstname'];?></td>
                <td><?php echo $rows['lastname'];?></td>
                <td><?php echo $rows['country'];?></td>
                <td><?php echo $rows['subject'];?></td>
				
            </tr>
            <?php
                }
            ?>
        </table>
		  
		  
		  </div>
		  </section>
		  
	<section class="Regegister User" id="Reg">
	<div class="reg">
		  <div class="nam">
            <h2>Regegister User</h2><br>
			</div>
			<br>
			
			  
		  <?php
 
// Username is root
$user = 'root';
$password = '';
 
// Database name is geeksforgeeks
$database = 'testing';
 
// Server is localhost with
// port number 3306
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,
                $password, $database);
 
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
 
// SQL query to select data from database
$sql = " SELECT * FROM registered_users ";
$result = $mysqli->query($sql);
$mysqli->close();
?>

  <table>
            <tr>
                
                <th>full_name</th>
                <th>username</th>
                <th>email</th>
				
			
	
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
				
                <td><?php echo $rows['full_name'];?></td>
                <td><?php echo $rows['username'];?></td>
                <td><?php echo $rows['email'];?></td>
               
				
            </tr>
            <?php
                }
            ?>
        </table>
		  
		  
		  </div>
			
			
	
	</section>
	<section class="Manage Booking" id="Booking">
      
        <div class="vehicle">
          <div class="about-text">
            <aside>
			<div class="nam">
            <h2>Manage Booking</h2><br>
			</div>
			<br>
            
	
			
			
		<?php
 
// Username is root
$user = 'root';
$password = '';
 
// Database name is geeksforgeeks
$database = 'testing';
 
// Server is localhost with
// port number 3306
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,
                $password, $database);
 
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
 
// SQL query to select data from database
$sql = " SELECT * FROM res ";
$result = $mysqli->query($sql);
$mysqli->close();
?>

  <table>
            <tr>
                <th>name</th>
                <th>email</th>
                <th>phone</th>
                <th>Licence</th>
				<th>cname</th>
				<th>number</th>
				<th>age</th>
				<th>Adde</th>
				<th>sdate</th>
				<th>edate</th>
				<th>message</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
				<td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['phone'];?></td>
                <td><?php echo $rows['Licence'];?></td>
                <td><?php echo $rows['cname'];?></td>
				<td><?php echo $rows['number'];?></td>
				<td><?php echo $rows['age'];?></td>
				<td><?php echo $rows['Adde'];?></td>
				<td><?php echo $rows['sdate'];?></td>
				<td><?php echo $rows['edate'];?></td>
				<td><?php echo $rows['message'];?></td>
				
				
            </tr>
            <?php
                }
            ?>
        </table>

			
			
           
            </div>
			<div>
            
          </section>
<center><h1>Monthly Booking Report</h1>
		  <?php
// Execute the Python script to generate the bar graph
exec('python bar.py');

// Output the image in HTML
echo '<img src="bar.png" alt="Bar Graph">';
?>

<h1>Most demand Car</h1>
<div class='demand'>
<h2>
<?php

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "testing";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to count cars and find the car with the most bookings
$sql = "SELECT COUNT(*) as total_cars, cname
        FROM booking
        GROUP BY cname
        ORDER BY total_cars DESC
        LIMIT 1";

// Execute the query
$result = $conn->query($sql);

// Check if the query was successful
if ($result) {
    // Fetch the result
    $row = $result->fetch_assoc();
    $totalCars = $row['total_cars'];
    $carName = $row['cname'];

    // Print the count and car with most bookings
    echo "Total number of cars: " . $totalCars . "<br>";
    echo "Car with the most bookings: " . $carName;
} else {
    echo "Error executing query: " . $conn->error;
}

// Close the connection
$conn->close();

?>
</h2>
</div>
<!--------------------------------------------------------------------------------------------------->
<h1>Less demand Car</h1>
<div class='demand'>
<h2>
<?php

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "testing";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to count cars and find the car with the fewest bookings
$sql = "SELECT COUNT(*) as total_booking, cname
        FROM booking
        GROUP BY cname
        ORDER BY total_booking ASC
        LIMIT 1";

// Execute the query
$result = $conn->query($sql);

// Check if the query was successful
if ($result) {
    // Fetch the result
    $row = $result->fetch_assoc();
    $totalBookings = $row['total_booking'];
    $carName = $row['cname'];

    // Print the count and car with the fewest bookings
    echo "Total number of cars: " . $result->num_rows . "<br>";
    echo "Car with the fewest bookings: " . $carName . "<br>";
    echo "Number of bookings: " . $totalBookings;
} else {
    echo "Error executing query: " . $conn->error;
}

// Close the connection
$conn->close();

?>
</div>
</h2>
</center>

 <script>
        window.onscroll = function() {myFunction()};
        
        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;
        
        function myFunction() {
          if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
          } else {
            header.classList.remove("sticky");
          }
        }
        </script>
</body>
</html>