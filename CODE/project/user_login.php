<?php
include("includes/db.php");
$count=0;
session_start(); // Starting Session
 if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['user_name']);
      $mypassword = mysqli_real_escape_string($con,$_POST['password']); 
      
      $sql = "SELECT user_name FROM users WHERE user_name = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($con,$sql);
	 
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     // $active = $row['active'];
	  
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
	 
	  
		
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         echo  "Your Login Name or Password is invalid";
      }
   }
?>
<?php
		include("head.php");
	?>
	


		
		<div id="right_content">
			
			<br><br><br><br>
			
		<div align = "center">
         <div style = "width:400px; border: solid 1px #333333; " align = "left">
		 
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
			
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "user_name" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px">
				  
					
				</div>
				
			</div>
			
		</div>
		</div>
				
		</div>


	

  
</div>
	
	
	
	
	
	<?php
		include("tail.php");
	?>
 