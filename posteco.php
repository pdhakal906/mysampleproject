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
	
  
	$employment_status = $_POST['employment_status'];
	$income_source = $_POST['income_source'];
	$monthly_income = $_POST['monthly_income'];
	$dependent_members = $_POST['dependent_members'];


 ?>

 

 <?php 

 $sql = "INSERT INTO eco_status(house_number, head_name, employment_status, income_source, monthly_income, dependent_members) VALUES('$house_number', '$head_name', '$employment_status', '$income_source', '$monthly_income', '$dependent_members')"; 
 	 mysqli_query($conn, $sql);



  ?>

  <div class="alert alert-success" role="alert">आर्थिक विवरण सुरक्षित भयो। <a class="gtn" href="living.php">बसोबासको भौतिक अवस्था</a></div>
  <h3></h3>

  