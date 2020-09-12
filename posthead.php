<?php 
	include "dbh.php";
	session_start();

 ?>

<link href="bootstrap.min.css" rel="stylesheet">
   
 <link rel="stylesheet" type="text/css" href="style.css">

 <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          
            
          <p class="navbar-brand">पारिवारीक विवरण</p>
        </div>
        
          <ul class="nav navbar-nav">
            
            
            

          </ul>
        
      </div>
    </nav>


<?php 



	$house_number = $_POST['house_number'];
	$head_name = $_POST['head_name'];
    $head_name_eng = $_POST['head_name_eng'];
	$tole = $_POST['tole'];
	$religion = $_POST['religion'];
	$address = $_POST['address'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$head_citizenship = $_POST['head_citizenship'];
	$head_education = $_POST['head_education'];
	$mobile_number = $_POST['mobile_number'];
	$head_occupation = $_POST['head_occupation'];

	$_SESSION['housenumber'] = $house_number;
	$_SESSION['head_name'] = $head_name;

 ?>



 <?php 
 		$sql = "INSERT INTO fam_head(house_number, address, tole, religion, head_name, head_name_eng, head_age, head_gender, head_citizenship, head_occupation, education, mobile) VALUES('$house_number', '$address', '$tole', '$religion', '$head_name', '$head_name_eng', '$age', '$gender', '$head_citizenship', '$head_occupation', '$head_education', '$mobile_number') ";
     
 		mysqli_query($conn, $sql);


?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>पारिवारीक विवरण</title>
 </head>
 <body>
 		<div class="alert alert-success" role="alert">नयाँ परिवार थपियो। <a class="gtn" href="addmem.php">सदस्यको विवरण</a> <span class="filler"></div><a class="gtn" href="economic.php">आर्थिक विवरण</a> </div>
 	 	
 </body>
 </html>