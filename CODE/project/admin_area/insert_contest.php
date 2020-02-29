<?php
include('includes/db.php');
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta http-equiv ="Content-Type" content = "text/html;charset= UTF-8">
  <title>Mr. Backlogger</title>
  <link rel ="stylesheet" href ="styles/style.css" media = "all"/>
  <style>
	body{
		background:url("blog_images/jj.jpg") repeat;
	}
  </style>
  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
 </head>
 
 <body >
 <form method = "post" action = "insert_contest.php" enctype ="multipart/form-data" >
	<table style="color:white;" width=" 700" align ="center" border="1" background-color=rgba(0,0,0,1); >
		<tr align="ceneter">
			<td colspan="2" align="center" color="white"> <h2>Insert New Problem:</h2>
		</tr>
		<tr>
			<td>
				<select name="category">
					<option>Select a category</option>
					<?php
					$result = mysqli_query($con,"SELECT * FROM contests ");
					if($result)
					{
					while($row = mysqli_fetch_array($result))
					{
						$con_title=$row['contest_title'];
						$con_id=$row['contest_id'];
						echo "<option value ='$con_id'>$con_title</option>";
					
					}
					}
					else {
						echo 'Invalid query: ' . mysql_error() . "\n";
					}
				?>
				
				</select>
			</td>
		</tr>
		
		<tr>
			<td align="right" color="white"><b>Problem no</b></td>
			<td><input type="text" name="problem_id" /></td>
		</tr>
		<tr>
			<td align="right" color="white"><b>Problem Title</b></td>
			<td><input type="text" name="problem_title" size="50"/></td>
		</tr>
		<tr>
			<td align="right" color="white"><b>Problem link</b></td>
			<td><input type="text" name="problem_link" size="50" /></td>
		</tr>
		<tr>
			<td align="right" color="white"><b>Problem Description</b></td>
			<td><textarea name="problem_desc" cols="35"rows="10" ></textarea></td>
		</tr>
		
		<tr>
			<td align="right"color="white"><b>Solution</b></td>
			<td><input type="file" name="solution" /></td>
			
		</tr>
		<tr>
			<td align="right"color="white"><b>Problem keys</b></td>
			<td><input type="text" name="problem_key" size="50"/></td>
			
		</tr>
		<tr align="center"color="white">
			<td colspan="2"><input type="submit" name="insert_problem" value="Insert Problem" /></td>
		</tr>
		
		</table>
 
 </body>
 </html>
 <?php
	if(isset($_POST['insert_problem'])){
		$problem_cat = $_POST ['category'];
		$problem_no = $_POST ['problem_id'];
		$problem_title = $_POST ['problem_title'];
		$problem_link = $_POST ['problem_link'];
		$problem_desc = $_POST ['problem_desc'];
		$problem_sol = $_FILES ['solution'];
		$problem_key = $_POST ['problem_key'];
		$status ='on'; 
		$problem_sol = $_FILES ['solution']['name'];
		$temp_sol = $_FILES ['solution']['tmp_name'];
		
		if($problem_cat=='' OR $problem_no=='' OR $problem_title=='' OR $problem_link=='' OR $problem_desc=='' OR 
		$problem_sol=='' OR $problem_key==''){
			echo "<script>alert('Please fill all fields!')</script>";
			exit();
		}
		else{
			move_uploaded_file($temp_sol,"blog_files/$problem_sol");
			$insert_problem ="insert into problems(problem_id,contest_id,date,problem_title,problem_link,problem_desc,solution,problem_key,status)
			values('$problem_no','$problem_cat',NOW(),'$problem_title','$problem_link','$problem_desc','$problem_sol','$problem_key','$status')";
			$run_problem = mysqli_query($con,$insert_problem);
			if($run_problem){
				echo "<script>alert('Problem inserted successfully!')</script>";
			}
		}
	}
 ?>
 
 
 
 
 
 
 
 
 