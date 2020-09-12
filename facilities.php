<?php 
	session_start();

 ?>

<link href="bootstrap.min.css" rel="stylesheet">
   
<link rel="stylesheet" type="text/css" href="style.css">

<nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          
          <p class="navbar-brand">पारिवारीक विवरण</p>
        </div>
        
      </div>
    </nav>


<header id="header">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="text-center">घरायसी सुविधा  ‍</h1>
          </div>

     
        </div>
      </div>
    </header>

<?php 

	
 $house_number = $_SESSION['housenumber'];
 $head_name = $_SESSION['head_name'];

 echo "<p id = 'houseNumber' class= 'hidden'>".$house_number."</p>";
 echo "<p id='headName' class= 'hidden'>".$head_name."</p>";

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>घरायसी सुविधा</title>
</head>
<body>

<div class="col-lg-8 col-lg-offset-2">

	<form class="well" method="POST" action="postfac.php">
		
		<label>घर नम्बरः </label><input disabled="true" id="house_number" type="text" class="form-control" name="house_number" required><br>
		<label>घरमूलीको नामः </label><input disabled="true" id="head_name" type="text" class="form-control" name="head_name" required><br>
		<label>खानेपानीको उपलब्धता </label><input type="text" value="ट्युबेल" class="form-control" name="water_facility" required><br>
		<label>शौचालयः </label><input type="text" class="form-control" name="toilet_facility" required><br>
		<label>खाना पकाउने इन्धनः </label><input type="text" class="form-control" name="fuel_facility" required><br>
		<label>विजुलि श्रोतः </label><input type="text" class="form-control" name="light_facility" required><br>
		
			
		<button class="btn btn-primary btn-block" >सबमिट</button><br>
	</form>

</div>

</body>

<script type="text/javascript" src="app.js"></script>
</html>