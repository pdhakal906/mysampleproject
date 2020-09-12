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

          <ul class="nav navbar-nav navbar-right">
            
           
          </ul>
        
      </div>
    </nav>

        


 <?php 

 $house_number = $_SESSION['housenumber'];
 $head_name = $_SESSION['head_name'];

  ?>

  <?php

       

  		$vehicle_status = $_POST['vehichle_status'];
  		$communication_facility = $_POST['communication_facility'];
  		$domestic_animals = $_POST['domestic_animals'];
  		$domestic_birds = $_POST['domestic_birds'];
      $fridge = $_POST['fridge'];
  		

   ?>

   
   <?php 

 $sql = "INSERT INTO property(house_number, head_name, vehicle, communication, fridge, domestic_animals, domestic_birds) VALUES('$house_number','$head_name','$vehicle_status','$communication_facility','$fridge','$domestic_animals','$domestic_birds')"; 
 	 mysqli_query($conn, $sql);



  ?>

<div class="alert alert-success" role="alert">घरायसी सम्पतिको विवरण सुरक्षित भयो। <a class="gtn" href="facilities.php">घरायसी सुविधा</a></div>

