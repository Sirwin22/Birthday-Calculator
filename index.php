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
				<button type="submit" name="calculate" class="btn btn-primary">Calculate</button>
			</form>

			 <?php
		if(isset($_POST['submit'])) {

			$day=$_POST['day'];
			$month=$_POST['month'];
			$year=$_POST['year'];
		 
			$dob=$day.'-'.$month.'-'.$year;

			$bday=new DateTime($dob);
			
			$age=$bday->diff(new DateTime);
			 
			$today=date('d-m-Y'); 
			
			echo '<br />';
			echo '<b>Your Birth date: </b>';
			echo $dob;
			echo '<br>';
			echo '<b>Your Age : </b> ';
			echo $age->y;
			echo ' Years, ';
			echo $age->m;
			echo ' Months, ';
			echo $age->d;
			echo ' Days';
		}
	   ?>
		</div>
	</div>
</div>
</body>
</html>
