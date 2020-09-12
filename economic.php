<?php 
	session_start();

 ?>

<link href="bootstrap.min.css" rel="stylesheet">
   
<link rel="stylesheet" type="text/css" href="style.css">

<nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          
          <p class="navbar-brand" href="../index.php">पारिवारीक विवरण</p>
        </div>
        
          <ul class="nav navbar-nav">
            
           
            

          </ul>
          
        
      </div>
    </nav>


<header id="header">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="text-center">आर्थिक विवरण  ‍</h1>
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
	<title>आर्थिक अवस्था</title>
</head>
<body>

<div class="col-lg-8 col-lg-offset-2">	

	<form class="well" method="POST" action="posteco.php">
		
		<label>घर नम्बरः </label><input disabled="true" type="text" id="house_number" class="form-control" name="house_number" required><br>
		<label>घरमूलीको नामः </label><input type="text" disabled="true" id="head_name" class="form-control" name="head_name" required><br>
		<label>रोजगारीको अवस्थाः </label><input type="text" class="form-control" name="employment_status" required><br>
		<label>आम्दानीको श्रोतः </label><input type="text" class="form-control" name="income_source" required><br>
		<label>मासिक आम्दानी </label><input type="text" class="form-control" name="monthly_income" required><br>
		<label>आश्रीत व्यक्तिको संख्या </label><input type="text" class="form-control" name="dependent_members" required><br>
			
		<button class="btn btn-primary btn-block">सबमिट</button><br>
	</form>

</div>

</body>


<script type="text/javascript" src="app.js"></script>
</html>