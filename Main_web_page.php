<?php
require('connection.php'); 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Online Car Rental System</title>
	 <link rel="stylesheet" href="ss.css" />
    <link rel="stylesheet" href="style.css">
   
    
    
    
  </head>
  <style>
      aside{background-ccolr:cyan;
        text-align:center;}
      article{background-ccolr:cyan;
            float: left;}
      footer{background-ccolr:cyan;
        text-align:center;}
      </style>
  <body>
    <header id="myHeader">
      <h2>Car Rental</h2>
      <nav>
        <!--nav tag is navigation tag-->
        <a href="#">HOME</a>
        <a href="#Booking">BOOKING</a>
        <a href="forms.html">CONTACT</a>
        
        <a href="#About">ABOUT</a>
      </nav>
	<?php
	if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
	{
		echo"
		
    
      
	  <div class='sign'>
	    
		<button type='button' onclick=\"popup('LOGOUT')\">
		
		$_SESSION[username] - <a href='logout.php'>LOGOUT</a>
		
		</button>
		</div>
		</div>
		";
	}

	else
	{
		echo"
		<div class='sign-in-up'>
	  <button type='button' onclick=\"popup('register-popup')\">REGISTER</button>
      <button type='button' onclick=\"popup('login-popup')\">LOGIN</button>
	 
	       
     
    </div>
	";
		
	}
	?>
	</section>
     <!-- <div class="sign-in-up">
          <button type="button" onclick="popup('register-popup')">
              REGISTER
            </button>
        <button type="button" onclick="popup('login-popup')">LOGIN</button>
        
      </div>-->
    </header>

    <div class="popup-container" id="login-popup">
        <div class="popup">
          <form method="POST" action="login_register.php">
            <h2>
              <span>USER LOGIN</span>
			  <a href="index.php" class="btn">Admin</a>
			  
			   <!--<input type="submit" value="Cancel" onclick="this.form.onsubmit=function() { history.back(); return false; }" />-->
			     

  
              <button type="reset" onclick="popup('login-popup')">X</button>
            </h2>
            <input type="text" placeholder="E-mail or Username" name="email_username">
            <input type="password" placeholder="Password" name="password">
            <button type="submit" class="login-btn" name="login">LOGIN</button>
			
          </form>
        </div>
      </div>
    
      <div class="popup-container" id="register-popup">
        <div class="register popup">
          <form method="POST" action="login_register.php">
            <h2>
              <span>USER REGISTER</span>
			  
              <button type="reset" onclick="popup('register-popup')">X</button>
            </h2>
            <input type="text" placeholder="Full Name" name="fullname">
          
            <input type="text" placeholder="Username" name="username">
            <input type="email" placeholder="E-mail" name="email">
            <input type="password" placeholder="Password" name="password">
            <button type="submit" class="register-btn" name="register">REGISTER</button>
          </form>
        </div>
      </div>
	  
    
      <script>
        function popup(popup_name)
        {
          get_popup=document.getElementById(popup_name);
          if(get_popup.style.display=="flex")
          {
            get_popup.style.display="none";
          }
          else
          {
            get_popup.style.display="flex";
          }
        }
   </script>
      
    <article>
      <!--Article section-->
    <img src="Hyu.jpg" height="500" width="700"></img>
    </article>

    <aside>
      <!--Aside section-->
      <img src="key.jpg" height="180" width="180">
        <h2 >Welcome</h2><br>

        <div class="main">
        
          <ul class="option">
          <li><span>Drive Better</span></li>
          <li><span>Keep riding</span></li>
          <li><span>Easy Services</span></li>
          <li><span>Enjoy Your Tour</span></li>
          
          </ul>
          </div>
		  <div class="wo">
         <b><h3> The Wheels of Freedom!</h3></b>
		 </div>
     </aside>
     <br>
     <!---<div class="demoe">
       <h1><p><b><strong>The best place where you get luxury cars at cheapest rate</b><strong></p></h1>
        <h4>Collect the best moments of your life by joining us. Enjoy your holidays with us. Within a minute you will get a car for enjoy your life(holidays) at best price. Get a freedom of life by traveling</h4>
        </div>-->
    
        <div class="demo" >
           <img src="20.jpg" height="700px" width="100%">
            <div class="top-center"><br><h1>The best place where you get luxury cars at cheapest rate</h1>
            <h2>Collect the best moments of your life by joining us. Enjoy your holidays with us. Within a minute you will get a car for enjoy your life(holidays) at best price. Get a freedom of life by traveling</h2></div>
            </p>
          </div>
          </div>
        </div>
         <br>

     <div class="row">
       <h1>WE ARE PROVIDING THE BEST SERVICES <h1>
         <h2><b>You can get to your destination way easier and quicker than when you use public transportation.</b></h2><br>
      <div class="column">
        <img src="24.jpg " alt="Snow" height="300" width="300">
        <div class="desc">24/7 Service</div>
      </div>
      <div class="column">
        <img src="ch.jpg" alt="Forest" style="width:100%">
        <div class="desc">Choice Your Car</div>
      </div>
      <div class="column">
        <img src="lo.jpg" alt="Mountains" style="width:100%">
        <div class="desc">Maintance Anywhere</div>
      </div>
    
	</div>
	
<section class="Booking" id="Booking">
<div class="Book">
<div class="va">
<aside>
<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vehicle<span><br>
</aside>
</div>
<div class="B">
	<?php
//connect to mysql server with username password and database name
$connect = mysqli_connect("localhost", "root", "", "testing");
// Check connection
if ($connect === false) {
    die("Opps Unable to connect " . mysqli_connect_error());
}
// create query to select data
$sql = "SELECT * FROM vehicle";
if ($result = mysqli_query($connect, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        echo '<table border="1px">';
        echo "<tr>";
       echo "<th>Car Name</th>";
       echo "<th>Price/Day (INR)</th>";
       echo "<th>Seat</th>";
       echo "<th>Image</th>";
	   echo "<th>Image2</th>";
	   echo "<th>Booking</th>";
	   
	

        echo "</tr>";
	   
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['carname'] . "</td>";
            echo "<td>" . $row['price'] . "</td>";
            echo "<td>" . $row['seat'] . "</td>";
            echo "<td>" . "<img src=".$row['image'].' width=520px height="350px">' . "</td>";
			echo "<td>" . "<img src=".$row['image1'].' width=500px height="350px">' . "</td>";
			?>
			<div class='sign-in-up'>
	  <td><button><a href="booki.html" class="btn">Booking</a></button></td>
	 
	       
     
   </div>
			<?php
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else {
        echo "No records found";
    }
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
}
// Close connection
mysqli_close($connect);
?>
	</b>
</div>
</section>

    <!--About-->
    <section class="About" id="About">
      
        <div>
          <div class="about-text">
            <aside>
            <span>About</span><br>
            <img src="tw.png" alt="" height="200" width="500"></img>
            <h2>We are Sai Car Rental System <br>WE Trust and build trust</h2>
            <p> A Faster , More convenient exprience every timeyou rent a vehicle :<br>
              <a href="#" class="btn">Learn More</a></aside>
            </div>
            
          </section>
      
    <footer>
        <div class="foo">
    
      <marquee><h2>Car Rental Online Service -- If required Driver is Avilable</h2> </marquee>
        </div>
     </footer>
      <?php
       if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
        {
		echo"";
	}
 

   ?> 
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
