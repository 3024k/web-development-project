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
		background:url("images/jj.jpg") repeat;
	}
  </style>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <link rel="apple-touch-icon" sizes="57x57" href="images/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="images/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="images/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="images/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="images/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
<link rel="manifest" href="images/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
  
</head>

<body id="body">

	<div class="main_wrapper">
		
		
		<div class="header_wrapper">
			<img src="images/banner_c.png" >
		</div>
		
		<div id="navbar">
			<ul>
				<li><a href="index.php"><img src="images/house.png"/></a></li>
				<li><a href="About.php" class="dropbtn">[About]</a></li>
				
				<li class="dropdown">
					<a href="#" class="dropbtn">[Semester]</a>
					<div class="dropdown-content">
					  <a href="#">[1<sup>st</sup>]</a>
					  <a href="#">[2<sup>nd</sup>]</a>
					  <a href="#">[3<sup>rd</sup>]</a>
					  <a href="#">[4<sup>th</sup>]</a>
					  <a href="#">[5<sup>th</sup>]</a>
					  <a href="#">[6<sup>th</sup>]</a>
					  <a href="#">[7<sup>th</sup>]</a>
					  <a href="#">[8<sup>th</sup>]</a>
					</div>
				</li>
				<li class="dropdown">
				<a href="#" class= "dropbtn">[Tutorials]</a>
					<div class="dropdown-content">
						<a href="html_tutorials.php">[ HTML&CSS ]</a>
						<a href="javascript_tutorial.php">[ JAVASCRIPT ]</a>
						<a href="php_tutorials.php">[ PHP ]</a>
						<a href="c_tutorials.php">[ C ]</a>
						<a href="c++_tutorials.php">[ C++ ]</a>
						<a href="java_tutorials.php">[ Java ]</a>
						<a href="mysql_tutorials.php">[ MYSQL]</a>
						<a href="datastructure-algo_tut.php">[ Data Structures <br>& Algorithm ]</a>
					</div>
				
				</li>
				
				<li class="dropdown">
				<a href="#" class="dropbtn">[Programming]</a>
					<div class="dropdown-content">
					  <a href="c_prog.php">[ C ]</a>
					  <a href="c++_prog.php">[ C++ ]</a>
					  <a href="java_prog.php">[ Java ]</a>
					  <a href="assembly_prog.php">[ Assembly ]</a>
					</div>
				</li>
				
				<li><a class="active" href="#">[FAQs]</a></li>
				
				
				<div id="form">
					<form method = "get" action =" results.php" enctype ="multipart/formdata">
					<input type="text" name="user_query" placeholder="Search this blog"/>
					<input type="submit" name="search" value="Search"/>
					</form>
				</div>
				
			</ul>
			
			
		</div>
		
		<div class="content_wrapper">
			<div id="left_sidebar"> 
				<div id="sidebar_title">Contests</div>
				<ul id="cats">
				<?php
					$result = mysqli_query($con,"SELECT * FROM contests ");
					if($result)
					{
					while($row = mysqli_fetch_array($result))
					{
						$con_title=$row['contest_title'];
						$con_id=$row['contest_id'];
						echo "<br>";
						echo "<li><a href='index.php?id=$con_id'>$con_title</a></li>";
						//echo "<br>";
					
					}
					
					}
					else{
						echo 'Invalid query: ' . mysql_error() . "\n";
					}
				?>
				
				
				</ul>
				<select name="courses">
					<option value="select" selected>Select a course</option>
					<option value="CSE 1100"><a href="#">Computer Fundamentals & Ethics</a></option>
					<option value="CSE 1101"><a href="#">Computer Programming</a></option>
					<option value="CSE 1200"><a href="#">Analytical Programming</a></option>
					<option value="CSE 1201"><a href="#">Data Structure</a></option>
					<option value="CSE 1203"><a href="#">Object Oriented Programming</a></option>
					<option value="CSE 2101"><a href="#">Software Development Project I</a></option>
					<option value="CSE 2103"><a href="#">Numerical Methods</a></option>
					<option value="CSE 2201"><a href="#">Computer Algorithm</a></option>
					<option value="CSE 2203"><a href="#">Digital Techniques</a></option>
					<option value="CSE 2205"><a href="#">Finite Automata Theory</a></option>
					<option value="CSE 3100"><a href="#">Web Based Application Project</a></option>
					<option value="CSE 3101"><a href="#">Database Systems</a></option>
					<option value="CSE 3103"><a href="#">Data Communication</a></option>
					<option value="CSE 3105"><a href="#">Software Engineering</a></option>
					<option value="CSE 3107"><a href="#">Applied Statistics & Queing Theory</a></option>
					<option value="CSE 3109"><a href="#">Microprocessor & Assembly Language</a></option>
					<option value="CSE 3112"><a href="#">Technical Writting & Presentation</a></option>
					<option value="CSE 3200"><a href="#">Software Development Project II</a></option>
					<option value="CSE 3201"><a href="#">Operating System</a></option>
					<option value="CSE 3203"><a href="#">Computer Architecture & Design</a></option>
					<option value="CSE 3205"><a href="#">Computer Networks</a></option>
					<option value="CSE 3207"><a href="#">Peripherals & Interfacings</a></option>
					<option value="CSE 3209"><a href="#">Artificial Intelligence</a></option>
					<option value="CSE 4100"><a href="#">Thesis I</a></option>
					<option value="CSE 4101"><a href="#">Compiler Design</a></option>
					<option value="CSE 4103"><a href="#">Digital Signal Processing</a></option>
					<option value="CSE 4105"><a href="#">Digital Image Processing</a></option>
					<option value="CSE 4200"><a href="#">Thesis II</a></option>
					<option value="CSE 4201"><a href="#">Computer Graphics & Animations</a></option>
					<option value="CSE 4203"><a href="#">Neural Networks & Fuzzy Systems</a></option>
				</select>
				<br><br>
				<div id="sidebar_title">Recent posts</div>
				<ul id="cats">
					 <a href="#">post 1</a><br><br>
					 <a href="#">post 2</a><br><br>
					 <a href="#">post 3</a><br><br>
					 <a href="#">post 4</a><br><br>
					 <a href="#">post 5</a><br><br>
					 </ul>
			 <div id="sidebar_title">Archives</div><br>
		<select name="Date">
			<option value="September 2016"><a href="#">September 2016</a></option>
			<option value="October 2016"><a href="#">October 2016</a></option>
			<option value="November 2016" selected><a href="#">Select month</a></option>
			<option value="December 2016"><a href="#">December 2016</a></option>
			<option value="December 2016"><a href="#">January 2017</a></option>
			<option value="December 2016"><a href="#">February 2017</a></option>
			<option value="December 2016"><a href="#">March 2017</a></option>
			<option value="December 2016"><a href="#">April 2017</a></option>
			<option value="December 2016"><a href="#">May 2017</a></option>
		</select><br><br>
		<div id="sidebar_title">Recent comments</div>
		<ul id="cats">
			 <a href= "#">comment 1</a><br><br>
			 <a href= "#">Comment 2</a><br><br>
			 <a href= "#">Comment 3</a><br><br>
			 <a href= "#">Comment 4</a><br><br>
			 <a href= "#">Comment 5</a><br><br>
			</ul>
			</div>
			
		