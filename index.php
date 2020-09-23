<?php
include('inc/header.php');
?>

</head>
<title>Password Generator with Strength Checker with jQuery</title> 
<script src="validate.js"></script>

<style>
#strengthWrapper { 
 width:200px;
 height:35px;
 border-radius:3px;
}
</style>

<body>
<div class="container">
	<h2>Password Generator with Strength Checker with jQuery</h2>
	<br><br>
	<div class="row">			
		<div class="col-md-6">
			<div class="col-md-12">

				
				<?php
				if (isset($_POST['signup'])) {
					echo "<div class='alert alert-primary' role='alert'><pre>";
					print_r($_POST);
					echo "</pre></div>";
				}
				?>
				
				<form name="form" class="form" action="" method="post">
					<div class="row">
						<div class="form-group col-md-6" style="padding: 0px 2px 0px 15px">							
							<input type="email" name="email" id="email" class="form-control" placeholder="Email address..">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6" style="padding: 0px 2px 0px 15px">								
							<input type="text" name="password" id="password" class="form-control" placeholder="Password..">		
						</div>		
						<div class="form-group col-md-4" style="padding: 1px 2px 3px 1px">	
						<input type="button" id="generatePassword" class="btn btn-outline-primary" value="Generate Password">	
						</div>
					</div>
					<div class="row hidden" id="strengthSection">
						<div class="form-group col-md-6">	
							<div id="strengthWrapper">
								<div class="form-control" id="strength"></div>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="form-group col-md-6">	
							<input type="submit" name="signup" class="btn btn-primary btn-lg btn-block" value="Sign up">								
						</div>	
					</div>					
				</form>
			</div>
		</div>
	</div>
</div>
<?php include("inc/footer.php"); ?>