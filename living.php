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
            <h1 class="text-center">बसोबासको भौतिक अवस्था  ‍</h1>
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
	<title>बसोबासको भौतिक अवस्था</title>
</head>
<body>

	<div class="col-lg-8 col-lg-offset-2">

	<form class="well" method="POST" action="postliving.php">
		
		<label>घर नम्बरः </label><input disabled="true" id="house_number" type="text" class="form-control" name="house_number" required><br>
		<label>घरमूलीको नामः </label><input type="text" disabled="true" id="head_name" class="form-control" name="head_name" required><br>
		<label>घर जग्गाको स्वामित्व</label><select class="form-control" name="property_status" required>
			<option value="लालपुर्जा भएको">लालपुर्जा भएको</option>
			<option value="सुकुम्बासी">सुकुम्बासी</option>
			<option value="बहालमा बसेको">बहालमा बसेको</option>			
		</select><br>
		<label>क्षेत्रफल </label><input type="text" class="form-control" name="land_area" required><br>
		<label>घरको प्रकार </label><select class="form-control" name="house_type" required>
			<option value="पक्की">पक्की</option>
			<option value="अर्धपक्की">अर्धपक्की</option>
			<option value="काठ">काठ</option>
			<option value="कच्ची">कच्ची</option>
		</select><br>
		<label>कोठा संख्या </label><input type="text" class="form-control" name="room_numbers" required><br>
			
		<button class="btn btn-primary btn-block">सबमिट</button><br>
	</form>

</div>

</body>

<script type="text/javascript" src="app.js"></script>
</html>