<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Chinese Zodiac - Which Year is Yours? | Damian Archer</title>
		<!-- Description Meta Tag -->
		<meta name="description" content="A PHP Code Demonstration by Diana Kokoska, a student web designer."/>

    		<!-- Viewport Meta Tag -->
		 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- links to Bootstrap.css
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<!-- links to a child stylesheet all style changes made in cz_styles.css -->
		<link href = "css/cz_child_styles.css" rel = "stylesheet" type = "text/css" />
	</head>
	<body> 	 
	<!--PLEASE CHANGE THIS BANNER TEXT TO SOMETHING UNIQUE -->
	<div class="container">
		<div class="jumbotron"> 
		<br />
			<a class = "float-right" href="http://php.net" title = "Official PHP site"><img src="images/dragonImg.png" class="img-fluid-rounded"  alt="chinese dragon links to PHP resource site" title = "chinese dragon links to PHP resource site"></a> 
		
				<h2 class = "text-center">Chinese Zodiac - Which Year is Yours?</h2> 
						
				<p  class = "top">Raise your hand if you like quick, easy, and awesome.  Using the Bootstrap front-end framework and PHP, you can finally design dynamic, mobile-friendly Web applications without writing a single media query.  Sit back, relax, grab another cup of decaf and a jelly doughnut or two and click the <span>Test the Script</span> links to see my Web applications in action and the <span>View the Source Code</span> links to see my behind-the-scenes PHP script.</p>
				
				<p>PHP and Bootstrap add a whole new meaning to DYNAMIC DUO!</p> 			
	   </div><!--ends the div with a class of jumbotron -->
	<!-- END OF BANNER TEXT -->
	
	<!-- STARTS NAVIGATION SECTION -->
	</div> <!-- ends the container div -->
<div class="container">
<nav class="navbar navbar-expand-sm navbar-dark bg-faded bg-dark">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<!-- Links -->
<?php
include('includes/inc_buttonnav.html');
?>

</nav><!-- end navbar -->
</div><!--end container -->

	<!-- END OF NAVIGATION SECTION -->
<div class = "container">
	<!-- add a card with header, body, and footer -->
		<div class="card">
		
		<!-- BEGIN DYNAMIC SECTION -->
		<!-- begin panel heading -->
			<div class="card-header">

			</div><!-- end panel heading -->
			<!-- begin card body -->
			<div class="card-body">
				<div class="row">
					<div class="col-md-12">
					<?php
						include("includes/inc_home_links_bar.php");
					?>
				<?php
					if(isset($_GET['page'])) {
						switch($_GET['page']) {
							
							case 'php':
								include ('includes/inc_php_info.php');
								break;
							case 'chinese_zodiac':
								include ('includes/inc_chinese_zodiac.php');
								break;
							case 'site_layout':
								include('includes/inc_site_layout.php');
								break;
							case 'control_structures':
								include('includes/inc_control_structures.php');
								break;
							case 'string_functions':
								include('includes/inc_string_functions.php');
								break;
							case 'web_forms':
								include('includes/inc_web_forms.php');
								break;
							case 'final_project':
								include('includes/inc_final_project.php');
								break;
							case 'home':
								default:
									include('includes/inc_home.php');
									break;
						}
					}
					else
					{	
						include('includes/inc_php_info.php');
					}
				?>
					</div>
				</div>
			</div> <!-- ends card body -->
			<!-- END DYNAMIC SECTION -->
		</div>
</div>


  <!-- BEGIN FOOTER SECTION -->
	  <!-- begin panel footer --> 
	 <div class="card-footer">
		 <div class="row">
			<?php
			include("includes/inc_footer.php");
			?>
		</div>
		</div> <!--end card row -->
		<!-- end card footer -->
	  <!-- END FOOTER SECTION -->
	  
	</div><!--ends card -->
	</div><!--ends the container div -->
	 <!-- JavaScript: placed at the end of the document so the pages load faster -->
        <!-- jQuery library -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <!-- Popper -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <!-- Latest compiled and minified Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>                                		