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
		background:url("images/ddd.jpg") repeat;
	}
  </style>
  
</head>

<body id="body">

	<div class="main_wrapper">
		
		
		<div class="header_wrapper">
			<img src="images/banner_c.png"   >
		</div>
		
		<div id="navbar">
			<ul>
				<li><a href="home.php"><!--img src="images/house.png"/-->home</a></li>
				<li><a href="About.php" class="dropbtn">[About]</a></li>
				<li class="dropdown">
				<a href="#" class="dropbtn">[Contests]</a>
					<div class="dropdown-content">
					  <a href="#">[ Uva ]</a>
					  <a href="#">[ Light Oj ]</a>
					  <a href="#">[ Hacker Rank ]</a>
					  <a href="#">[ Codeforces ]</a>
					</div>
				</li>
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
						<a href="#">[ HTML ]</a>
						<a href="#">[ CSS ]</a>
						<a href="#">[ JAVASCRIPT ]</a>
						<a href="#">[ PHP ]</a>
						<a href="#">[ C ]</a>
						<a href="#">[ C++ ]</a>
						<a href="#">[ Java ]</a>
						<a href="#">[ Discrete Mathematics ]</a>
						<a href="#">[ Data Structures ]</a>
					</div>
				
				</li>
				
				<li class="dropdown">
				<a href="#" class="dropbtn">[Programming]</a>
					<div class="dropdown-content">
					  <a href="#">[ C ]</a>
					  <a href="#">[ C++ ]</a>
					  <a href="#">[ Java ]</a>
					  <a href="#">[ Assembly ]</a>
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
				<div id="sidebar_title">Categories</div>
				
					<a href="#">Class lectures</a><br><br>
					<a href="#">Lab</a><br><br>
					<a href="#">Quizes</a><br><br>
					<a href="#">Projects</a><br><br>
					<a href="#">Written Questions</a><br><br>
					<a href="#">Thesises</a><br><br>
				
				
				
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
			 <a href="#">post 1</a><br><br>
			 <a href="#">post 2</a><br><br>
			 <a href="#">post 3</a><br><br>
			 <a href="#">post 4</a><br><br>
			 <a href="#">post 5</a><br><br>
			 <div id="sidebar_title">Archives</div>
		<select name="Date">
			<option value="September 2016"><a href="#">September 2016</a></option>
			<option value="October 2016"><a href="#">October 2016</a></option>
			<option value="November 2016" selected><a href="#">November 2016</a></option>
			<option value="December 2016"><a href="#">December 2016</a></option>
			<option value="December 2016"><a href="#">January 2017</a></option>
			<option value="December 2016"><a href="#">February 2017</a></option>
			<option value="December 2016"><a href="#">March 2017</a></option>
			<option value="December 2016"><a href="#">April 2017</a></option>
			<option value="December 2016"><a href="#">May 2017</a></option>
		</select><br><br>
		<div id="sidebar_title">Recent comments</div>
			 <a href= "#">comment 1</a><br><br>
			 <a href= "#">Comment 2</a><br><br>
			 <a href= "#">Comment 3</a><br><br>
			 <a href= "#">Comment 4</a><br><br>
			 <a href= "#">Comment 5</a><br><br>
		
		</div>
		<div id="right_content">
			Abstract
			<p>I create this blog for storing my personal experiences with my academic studies.Here I include only my departmental courses.
				And also mention several useful resources that can be useful for CSE fellows.</p>
		</div>
	</div>
	
	
	
	
	<div id="footer">
		<div id="footerblurb">
			<div id="footerblurb-inner">
				<div class="column">
					<h4><span>[ Important Websites: ]</span></h4>
						
							<a href= "http://stackoverflow.com/">Stack Overflow</a><br>
							<a href= "http://www.tutorialspoint.com/"> Tutorials Point</a><br>
							<a href= "https://github.com/">Github</a><br>
							<a href= "https://www.topcoder.com/">Topcoder</a><br>
							<a href= "http://codeforces.com/">Codeforces</a><br>
							<a href= "https://www.khanacademy.org/">KhanAcademy</a><br>
							<a href= "https://www.quora.com/">Quora</a><br>
							<a href= "http://www.w3schools.com/">W3school</a><br>
							<a href= "https://www.codecademy.com/">Code academy</a><br>
							<a href= "http://www.forbes.com/">Forbes</a><br>
							<a href= "http://www.geeksforgeeks.org/">GeeksforGeeks</a><br>
							<a href= "https://icpc.baylor.edu/">ACM-ICPC</a><br>
							<a href= "https://news.ycombinator.com/">Hacker-News</a><br>
							<a href= "https://www.hackerrank.com/">HackerRank</a><br>
						
				</div>				
				<div class="column">
					<h4><span>[ Important blogs: ]</span></h4>
						
							<a href="http://rizoantoufiq.blogspot.com/">Rizoan Toufiq sir's blog</a><br>
							<a href= "http://www.abuasifkhan.me/">Asif viar blog</a><br>
							<a href= "http://www.shafaetsplanet.com/planetcoding/">Shafaet's Planet</a><br>
							<a href= "http://zobayer.blogspot.com/">I,Me and Myself</a><br>
							<a href= "http://ami-alavola.rhcloud.com/">Alavolar blog</a><br>
							<a href="http://bongobani.blogspot.com/">Banglavashi</a><br>
							<a href="http://progkriya.org/">Progkriya</a><br>
							<a href="http://potasiyam.com/farsan/">Farsan's blog</a><br>
							<a href="http://www.computersciencestudent.com/">CS Student Resources</a><br>
							<a href="https://shikhorroy.wordpress.com/">Shikhorer blog</a><br>
						
				</div>
				<div class="column">
					<h4><span>[ About this blog: ]</span></h4>
					<p>This blog is a collection of some useful resources for CSE students.Here I'm sharing my various experiences also.Hope this is helpful.</p>
					
				</div>
				<div class="column">
				<br>[ Contact me: ]<br>
				<a href="#"><img src="images\g-icon.png" width="40" height="40" alt="google+"></a>
				<a href="#"><img src="images\face-book-icon.png" width="40" height="40" alt="facebook"></a>
				<a href="#"><img src="images\twitter-icon.png" width="40" height="40" alt="twitter"></a>
				<a href="#"><img src="images\linked-in-icon.png" width="40" height="40" alt="linked-in"></a>
				<a href="#"><img src="images\youtube-icon.png" width="40" height="40" alt="youtube"></a>
				<a href="#"><img src="images\blog-icon.png" width="40" height="40" alt="blogspot"></a>
				</div>
			</div>
		</div>
				
		<footer id="footer">
			<div id="footer_menu">
				<ul>
					<li ><a href="#home">[TOP]</a></li>
				
				</ul>
			</div>
			<div id="footer-inner">
				<p>&copy; Copyright <a href="#">Humayun Ahmed Ashik</a> &#124; <a href="#">CSE</a> &#124; <a href="http://ruet.ac.bd">RUET</a></p>
				<div class="clr"></div>
			</div>
		</footer>
	</div>
	
</body>

</html>