<?php 
	include "dbh.php";
	session_start();
 ?>


 <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
         
           
          <p class="navbar-brand">पारिवारीक विवरण</p>
        </div>
        
          <ul class="nav navbar-nav">
            <!-- Navbar Items here -->
          </ul>

          
       
      </div>
    </nav>


 <?php 

 $house_number = $_SESSION['housenumber'];
 $head_name = $_SESSION['head_name'];

  ?>
<link href="bootstrap.min.css" rel="stylesheet">
   
 <link rel="stylesheet" type="text/css" href="style.css">



<?php
  
 

	$mem_name = $_POST['mem_name'];
  $mem_name_eng = $_POST['mem_name_eng'];
	$mem_gender = $_POST['mem_gender'];
	$mem_age = $_POST['mem_age'];
	$relation = $_POST['relation'];
	$mem_citizenship = $_POST['mem_citizenship'];
	$mem_occupation = $_POST['mem_occupation'];
	$mem_education = $_POST['mem_education'];
	

 ?>

 

  
  

 <?php 

 $sql = "INSERT INTO fam_mem(house_number, head_name, name, mem_name_eng, age, gender, relation, citizenship, occupation, education) VALUES('$house_number', '$head_name', '$mem_name', '$mem_name_eng', '$mem_age', '$mem_gender', '$relation', '$mem_citizenship', '$mem_occupation', '$mem_education')"; 
 		mysqli_query($conn, $sql);

  


 ?>

  <div class="alert alert-success" role="alert"><?php echo "घर नं ".$house_number." मा सदस्य थपियो।"; ?> <a class="gtn" href="addmem.php">थप सदस्य</a><span class="filler"></span><a class="gtn" href="economic.php">आर्थिक अवस्था</a>  </div>
  
  