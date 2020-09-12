<?php 
	include "dbh.php";
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

          <ul class="nav navbar-nav navbar-right">
            

          </ul>
        
      </div>
    </nav>


<header id="header">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="text-center">घरायसी सम्पति  ‍</h1>
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
	<title>घरायसी सम्पति</title>
</head>
<body>

<div class="col-lg-8 col-lg-offset-2">	

	<form class="well" method="POST" action="postprop.php">
		
		<label>घर नम्बरः </label><input disabled="true" id="house_number" type="text" class="form-control" name="house_number" required><br>
		<label>घरमूलीको नामः </label><input disabled="true" id="head_name" type="text" class="form-control" name="head_name" required><br>
		<label>सवारी साधन </label><input type="text" class="form-control" name="vehichle_status" required><br>
		<label>संचार सुविधा </label><input type="text" value="ईन्टरनेट, केबुल, टेलिभिजन" class="form-control" name="communication_facility" required><br>
		<label>रेफ्रीजेरेटर </label><select class="form-control" name="fridge" required>
			<option value="छ">छ</option>
			<option value="छैन">छैन</option>
		</select><br>
		<label>पशु चौपायाको संख्या </label><input type="text" class="form-control" name="domestic_animals" required><br>
		<label>पशुपंशीको संख्या </label><input type="text" class="form-control" name="domestic_birds" required><br>
			
		<button class="btn btn-primary btn-block">सबमिट</button><br>
	</form>

</div>

</body>

<script type="text/javascript" src="app.js"></script>
</html>