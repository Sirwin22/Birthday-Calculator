<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DICTCC3 Age Calculator</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Age Calculator</h1>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<form method="POST">
				<div class="form-group">
					<label>Birthday:</label>
					<input type="date" name="birthday" class="form-control" required>
				</div>
				<center><button type="submit" name="calculate" class="btn btn-primary">Calculate</button></center>
			</form>

			 <?php
				if(isset($_POST['calculate'])){
					$bday = $_POST['birthday'];
					$today = date('Y-m-d');
					$diff = date_diff(date_create($bday), date_create($today));
					?>
					<div class="alert alert-info text-center" style="margin-top:20px;">
						<?php echo 'Age is <b>'.$diff->format('%y').'</b> years,'<b>'.$diff->format('%m').'</b> months, and '<b>'.$diff->format('%d').'</b> days,'; ?>
					</div>
					<?php
				}
				
			?>
		</div>
	</div>
</div>
</body>
</html>
