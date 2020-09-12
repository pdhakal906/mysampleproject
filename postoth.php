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
       
          <ul class="nav navbar-nav navbar-right">
            
            
          </ul>
        
      </div>
    </nav>


 <?php 

 $house_number = $_SESSION['housenumber'];
 $head_name = $_SESSION['head_name'];

  ?>

  <?php 

      

  		$geograpic_status = $_POST['geograpic_status'];
  		$health_facility = $_POST['health_facility'];
  		$land_value = $_POST['land_value'];
  		$road_facility = $_POST['road_facility'];
  		$remarks = $_POST['remarks'];
  		

   ?>


   
 <?php 

 $sql = "INSERT INTO others(house_number, head_name, geographic_status, health_facility, land_value, road_facility, remarks) VALUES('$house_number', '$head_name', '$geograpic_status', '$health_facility', '$land_value', '$road_facility', '$remarks')"; 
   mysqli_query($conn, $sql);



  ?>

<div class="alert alert-success" role="alert">विविध विवरण सुरक्षित भयो। <a class="gtn" href="newfam.php">अर्को परीवार</a></div>

