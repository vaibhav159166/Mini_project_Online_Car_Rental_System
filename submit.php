<?php



   if(isset($_POST['submit'])){
	   
	   $query=mysqli_query($conn,"INSERT INTO `res`(`id`, `name`, `email`, `phone` , `Licence` ,`cname`, `number`, `age`, `Adde`, `sdate`, `edate`, `message`) VALUES('','$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[Licence]','$_POST[cname]','$_POST[number]','$_POST[age]','$_POST[Adde]','$_POST[sdate]','$_POST[edate]','$_POST[message]')");
	   
	   if($query){
		   
		echo"
		          <script>
			         alert('CAR BOOK Successfully');
			         window.location.href='inde.php';
			      </script>
		   "; 
		   
	   }
	   else{
		   
		   echo "fail";
	   }
   }
?>