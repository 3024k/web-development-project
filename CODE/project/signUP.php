
<?php
	include("head.php");
?>


 

		<div id="right_content">
			<div id="headline">
				<div id="headline_content">
					<b>Welcome to my blog!</b>
					<a href="signUP.php">Sign up </a>
					<a href="user_login.php">Log in </a>
				</div>
			</div>
			<br><br><br><br><br><br>
 <form method = "post" action = "signUp.php" enctype ="multipart/form-data" >
	<table style="color:white;" width=" 550" align ="center" border="1" background-color=rgba(0,0,0,0.25);>
		<tr align="ceneter" >
			<td colspan="2" align="center" > <h2>Please fill up this information to sign up:</h2>
		</tr>
		
		
		<tr>
			<td align="right" color="white"><b>First Name</b></td>
			<td><input type="text" name="first_name" size="70"/></td>
		</tr>
		<tr>
			<td align="right" color="white"><b>SurName</b></td>
			<td><input type="text" name="surname" size="70"/></td>
		</tr>
		<tr>
			<td align="right" color="white"><b>User Name</b></td>
			<td><input type="text" name="user_name" size="70"/></td>
		</tr>
		<tr>
			<td align="right" color="white"><b>Email</b></td>
			<td><input type="text"  name="email" size="70"></td>
		</tr>
		<tr>
			<td align="right" color="white"><b>Password</b></td>
			<td><input type="text" name="password" size="70" /></td>
		</tr>
		<tr>
			<td align="right" color="white"><b>Retype Password</b></td>
			<td><input type="text" name="retype_password" size="60" /></td>
		</tr>
		
	
		
		
		
		
		<tr align="center"color="white">
			<td colspan="2"><input type="submit" name="send" value="SEND" /></td>
		</tr>
		
		</table>
 
</div>
 <?php
	if(isset($_POST['send'])){
		$first_name = $_POST ['first_name'];
		$surname = $_POST ['surname'];
		$user_name= $_POST ['user_name'];
		$email = $_POST ['email'];
		$password = $_POST ['password'];
		$retype_password = $_POST['retype_password'];
		
		if($first_name=='' OR $surname=='' OR $user_name=='' OR $email=='' OR $password=='' OR 
		$retype_password==''){
			echo "<script>alert('Please fill all fields!')</script>";
			exit();
		}
		else{
			
			$send ="insert into users(first_name,surname,user_name,email,password,retype_password)
			values('$first_name','$surname','$user_name','$email ','$password','$retype_password ')";
			$run_problem = mysqli_query($con,$send);
			if($run_problem){
				echo "<script>alert('Problem inserted successfully!')</script>";
			}
			else{
			echo "error";
			}
		}
	}
 ?>

	</div>
		
	
	
	
	<?php
		include("tail.php");
	?>
	