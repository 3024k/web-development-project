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
 
 <body color="white">
 <form method = "post" action = "insert_post.php" enctype ="multipart/form-data" >
	<table style="color:white;" width=" 700" align ="center" border="1" background-color=rgba(0,0,0,0.25);>
		<tr align="ceneter" >
			<td colspan="2" align="center" > <h2>Create New Post:</h2>
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
			<td align="right" color="white"><b>Post no</b></td>
			<td><input type="text" name="post_no" /></td>
		</tr>
		<tr>
			<td align="right" color="white"><b> Title</b></td>
			<td><input type="text" name="post_title" size="50"/></td>
		</tr>
		<tr>
			<td align="right" color="white"><b>Post Description</b></td>
			<td><textarea name="post_desc" cols="35"rows="10" ></textarea></td>
		</tr>
		<tr>
			<td align="right" color="white"><b>Image#1</b></td>
			<td><input type="file" name="Image1" size="50" /></td>
		</tr>
		<tr>
			<td align="right" color="white"><b>Image#2</b></td>
			<td><input type="file" name="Image2" size="50" /></td>
		</tr>
		<tr>
			<td align="right" color="white"><b>Image#3</b></td>
			<td><input type="file" name="Image3" size="50" /></td>
		</tr>
		
		
		
		<tr>
			<td align="right"color="white"><b>Post keys</b></td>
			<td><input type="text" name="post_key" size="50"/></td>
			
		</tr>
		<tr align="center"color="white">
			<td colspan="2"><input type="submit" name="create_post" value="Create post" /></td>
		</tr>
		
		</table>
 
 </body>
 </html>
 <?php
	if(isset($_POST['create_post'])){
		$post_cat = $_POST ['category'];
		$post_no = $_POST ['post_no'];
		$post_title = $_POST ['post_title'];
		$post_desc = $_POST ['post_desc'];
		$post_key = $_POST ['post_key'];
		$post_img1 = $_FILES['Image1']['name'];
		$post_img2 = $_FILES['Image1']['name'];
		$post_img3 = $_FILES['Image1']['name'];
		
		$temp_img1 = $_FILES['Image1']['tmp_name'];
		$temp_img2 = $_FILES['Image2']['tmp_name'];
		$temp_img3 = $_FILES['Image3']['tmp_name'];
		
		if($post_cat=='' OR $post_no=='' OR $post_title=='' OR $post_desc=='' OR $post_key=='' OR 
		$post_img1=='' OR $post_img2=='' OR $post_img3==''){
			echo "<script>alert('Please fill all fields!')</script>";
			exit();
		}
		else{
			move_uploaded_file($temp_img1,"blog_images/$post_img1");
			move_uploaded_file($temp_img2,"blog_images/$post_img2");
			move_uploaded_file($temp_img3,"blog_images/$post_img3");
			$insert_problem ="insert into problems(post_no,contest_id,date,post_title,post_desc,Image1,Image2,Image3,post_key)
			values('$post_no','$post_cat',NOW(),'$post_title','$post_desc','$post_img1','$post_img2','$post_img3','$post_key')";
			$run_problem = mysqli_query($con,$insert_problem);
			if($run_problem){
				echo "<script>alert('Problem inserted successfully!')</script>";
			}
		}
	}
 ?>
 
 
 
 
 
 
 
 
 