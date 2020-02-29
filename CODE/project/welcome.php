<?php
   include('session.php');
?>
<?php
		include("head.php");
	?>


		
		<div id="right_content">
			<div id="headline">
				<div id="headline_content">
					<a href="logout.php">Sign out</a>
				</div>
				<h1>Welcome <?php echo $login_session; ?></h1> 
			</div>
			
			<h4>Abstract</h4>
			<p>I create this blog for storing my personal experiences with my academic studies.Here I include only my departmental courses.And also mention several useful resources that can be useful for CSE fellows.I create this blog for storing my personal experiences with my academic studies.Here I include only my departmental courses.
				And also mention several useful resources that can be useful for CSE fellows.I create this blog for storing my personal experiences with my academic studies.Here I include only my departmental courses.
				And also mention several useful resources that can be useful for CSE fellows.</p>
				<p>I create this blog for storing my personal experiences with my academic studies.Here I include only my departmental courses.And also mention several useful resources that can be useful for CSE fellows.I create this blog for storing my personal experiences with my academic studies.Here I include only my departmental courses.
				And also mention several useful resources that can be useful for CSE fellows.I create this blog for storing my personal experiences with my academic studies.Here I include only my departmental courses.
				And also mention several useful resources that can be useful for CSE fellows.</p>
				<div id= "comment">
				<?php
					include("comment.php");
				?>
			</div>
				
		</div>
		
	</div>
	
	
	
	
	
	<?php
		include("tail.php");
	?>
<!--html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $login_session; ?></h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html-->