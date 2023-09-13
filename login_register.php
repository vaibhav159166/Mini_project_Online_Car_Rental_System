<?php
   
require('conn.php');
session_start();

 if(isset($_POST['alogin'])){
	  
	   $query="SELECT `username`, `adpassword` FROM `admin` WHERE `username`='$_POST[username]' AND `password`='$_POST[adpassword]'";
	   $result=mysqli_query($con,$query);
	   
           if(mysqli_num_rows($result)==1)
		   {
				  
				  echo"<script>
			         alert('CORRECT CREDENTIALS');
			         window.location.href='admin.php';
			      </script>";
			  }
			  else{
				  
				  echo"
		          <script>
			         alert('Incorrect password');
			         window.location.href='inde.php';
			      </script>
		    ";
			  }
	   } 
   

    
if(isset($_POST['login']))
{
	$query="SELECT * FROM `registered_users` WHERE `email`='$_POST[email_username]' OR `username`='$_POST[email_username]'";
	$result=mysqli_query($con,$query);
	if($result)
	{
		if(mysqli_num_rows($result)==1)
		{
			$result_fetch=mysqli_fetch_assoc($result);
			if(password_verify($_POST['password'],$result_fetch['password']))
			{
				$_SESSION['logged_in']=true;
				$_SESSION['username']=$result_fetch['username'];
				header("location: inde.php");
				}
				else
				{
					echo"
					<script>
					alert('incorect password');
					window.location.href='inde.php';
					</script>
					"; 
					}
					}
					else
					{
						echo"
						<script>
						alert('Email or username not registerd');
			            window.location.href='inde.php';
						</script>
						"; 
						}
						}
	else
	{
		echo"
		<script>
		alert('cannot Run Query');
	    window.location.href='inde.php';
	    </script>
		"; 
		}
		}
  
   if(isset($_POST['register']))
   {
	   $user_exist_query="SELECT * FROM `registered_users` WHERE `username`='$_POST[username]' OR `email`='$_POST[email]'";
	   $result=mysqli_query($con,$user_exist_query);
       
	   if($result)
	   {
		   if(mysqli_num_rows($result)>0){
			  
			  $result_fetch=mysqli_fetch_assoc($result);
			  if($result_fetch['username']==$_POST['username']){
				  
				  echo"
		          <script>
			         alert('$result_fetch[username] - Username already Taken');
			         window.location.href='inde.php';
			      </script>
		   ";
			  }
			  
			  else{
				  echo"
		          <script>
			         alert('$result_fetch[email] - E-mail already Registered');
			         window.location.href='inde.php';
			      </script>
		    ";
			  }
		   }
		   
		   else{
                $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
			   $query="INSERT INTO `registered_users`(`full_name`,`username`, `email`, `password`) VALUES ('$_POST[fullname]','$_POST[username]','$_POST[email]','$password')";
			   
			   if(mysqli_query($con,$query)){
				 
				   echo"
		          <script>
			         alert('Registration Successfull');
			         window.location.href='inde.php';
			      </script>
		    ";
			   }
			   else{
				  echo"
		          <script>
			         alert('cannot Run Query');
			         window.location.href='inde.php';
			      </script>
		   "; 
			   }
		   }
	   }
	   
	   else{
		   echo"
		     <script>
			 alert('cannot Run Query');
			 window.location.href='inde.php';
			 </script>
		   ";
	   }


 }

?>