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

      

  		$water_facility = $_POST['water_facility'];
  		$toilet_facility = $_POST['toilet_facility'];
  		$fuel_facility = $_POST['fuel_facility'];
  		$light_facility = $_POST['light_facility'];
  		

   ?>

   
   <?php 

 $sql = "INSERT INTO facilities(house_number, head_name, water_facility, toilet_facility, fuel_facility, light_facility) VALUES('$house_number', '$head_name', '$water_facility', '$toilet_facility', '$fuel_facility', '$light_facility')"; 
   mysqli_query($conn, $sql);



  ?>

<div class="alert alert-success" role="alert">घरायसि सुविधाको विवरण सुरक्षित भयो। <a class="gtn" href="others.php">विविध विवरण</a></div>



    