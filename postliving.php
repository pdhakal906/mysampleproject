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

        

 <?php 

 $house_number = $_SESSION['housenumber'];
 $head_name = $_SESSION['head_name'];

  ?>

<?php 

  
	
	$property_status = $_POST['property_status'];
	$land_area = $_POST['land_area'];
	$house_type = $_POST['house_type'];
	$room_numbers = $_POST['room_numbers'];
	
 ?>

 
  <?php 

 $sql = "INSERT INTO living_status(house_number, head_name, property_status, land_area, house_type, room_number) VALUES('$house_number', '$head_name', '$property_status', '$land_area', '$house_type', '$room_numbers')"; 
 	 mysqli_query($conn, $sql);



  ?>


<div class="alert alert-success" role="alert">बसोबासको भौतिक अवस्थाको विवरण सुरक्षित भयो। <a class="gtn" href="property.php">घरायसी सम्पति</a></div>
 
