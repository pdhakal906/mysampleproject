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
            <!-- Nabbar items here -->
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            
            
          </ul>
        
      </div>
    </nav>


<header id="header">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="text-center">सदस्यको विवरण ‍</h1>
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
	<title>सदस्यको विवरण</title>

</head>
<body>

<div class="col-lg-8 col-lg-offset-2">	

	<form class="well" method="POST" action="postmem.php">
		
		<label>घर नम्बरः </label><input disabled="true" type="text" id="house_number" class="form-control" name="house_number">
		<label>घरमूलीको नामः </label><input disabled="true" class="form-control" type="text" id="head_name" name="head_name">
		<label>सदस्यको नामः </label><input type="text" class="form-control" name="mem_name" required>
    <label>Name in English </label><input type="text" class="form-control" name="mem_name_eng" required>
		<label>लिङ्गः </label><select name="mem_gender" class="form-control" required>
			
								<option value="पुरुष">पुरुष</option>
								<option value="महिला">महिला</option>
								<option value="अन्य">अन्य</option>
		</select>
		<label>उमेरः </label><input type="text" class="form-control" name="mem_age" required>
		<label>घरमूलीसँगको नाताः </label><input type="text" class="form-control" name="relation" required>
		<label>नागरिकताः </label><input type="text" class="form-control" name="mem_citizenship" required>
		<label>पेशाः </label><input type="text" class="form-control" name="mem_occupation" required>
		<label>शैक्षिक योग्यताः </label><input type="text" class="form-control" name="mem_education" required>	
		<button class="btn btn-primary btn-block">सबमिट</button><br>
	</form>

</div>
</body>
<div>

</div>
<script type="text/javascript" src="app.js"></script>
</html>