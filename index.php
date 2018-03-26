<?php
include 'functions.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>GSM Security App</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<h1 class="text-center">GSM Security</h1>
	<div class="row">
		<div class="col-lg-offset-4 col-md-offset-4 col-lg-4 col-md-4" style="background-color:#f2f2f2;margin-top:10px;padding:10px;">
			<form>
				<div class="form-group">
					<label for="msisdn">Mobile Number:</label>
						<div class="input-group">
							<div class="input-group-addon">+91</div>
							<input type="text" class="form-control" name="msisdn" id="msisdn" placeholder="Enter Mobile Number" required="required">
						</div>
				</div>
				<button class="btn btn-primary" id="submitButton">Authenticate</button>
			</form>
		</div>
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/functions.js"></script>
</body>
</html>