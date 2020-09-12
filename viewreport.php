<?php 
	include "dbh.php";
 ?>

<link href="bootstrap.min.css" rel="stylesheet">
   
<link rel="stylesheet" type="text/css" href="style.css">



<?php 

$house_number = $_GET['id'];

?>







<nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.php">पारिवारीक विवरण</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          
          <ul class="nav navbar-nav navbar-right">
            
            <li><a href="viewfam.php">पछाडी</a><br></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>






 		
 <table class = "table table-striped table-bordered table-hover table-condensed">
	<tr class="thead">
		
		<th>घरमूलीको नाम</th>
		<th>लिङ्ग</th>
		<th>उमेर</th>
		<th>पेशा</th>
		<th>नागरिकता नम्बर</th>
		<th>शैक्षिक योग्यता</th>
		<th>फोन नम्बर</th>
	</tr>

		<?php 
		$sql = "SELECT * FROM fam_head WHERE house_number = '$house_number'";
 		$result = mysqli_query($conn, $sql); //$result =$conn-> query($sql); 
 		$resultCheck = mysqli_num_rows($result); 	

		?>


 		<?php


 		if ($resultCheck > 0) {
 								// while($row = $result-> fetch_assoc())
 			while ($row = mysqli_fetch_assoc($result)) {

 			echo "<header id='header'>
      				<div class='container'>
        				<div class='row'>
          					<div class='col-sm-12'>
           						<h4 class='text-center'> घर नंः ".$row['house_number']."</h4>
           						<h4 class='text-center'> ठेगानाः ".$row['address']."</h4>
           						<h4 class='text-center'> टोलः ".$row['tole']."</h4>
           						<h4 class='text-center'> धर्मः ".$row['religion']."</h4>
          					</div>

     
        				</div>
     				 </div>
    			</header>
    			<br>
";

 	
	 			echo "<tr><td>".$row['head_name']."</td><td>".$row['head_gender']."</td><td>".$row['head_age']."</td><td>".$row['head_occupation']."</td><td>".$row['head_citizenship']."</td><td>".$row['education']."</td><td>".$row['mobile']."</a></td></tr>";
 			}
 		echo "</table>";


 	}
 		else {

 		echo "No result";
 	}

 	 ?>

<h3>सदस्यको विवरण</h3>

<table class = "table table-striped table-bordered table-hover table-condensed">
	<tr class="thead">
		
		<th>नाम</th>
		<th>लिङ्ग</th>
		<th>उमेर</th>
		<th>पेशा</th>
		<th>नागरिकता</th>
		<th>शैक्षिक योग्यता</th>
		<th>घरमूलीसँगको नाता</th>
	</tr>

<?php 

$sql = "SELECT * FROM fam_mem WHERE house_number = '$house_number'";
 	$result = mysqli_query($conn, $sql); //$result =$conn-> query($sql); 
 	$resultCheck = mysqli_num_rows($result);


 	if ($resultCheck > 0) {
 								// while($row = $result-> fetch_assoc())
 			while ($row = mysqli_fetch_assoc($result)) {

	 			echo "<tr><td>".$row['name']."</td><td>".$row['gender']."</td><td>".$row['age']."</td><td>".$row['occupation']."</td><td>".$row['citizenship']."</td><td>".$row['education']."</td><td>".$row['relation']."</td></tr>";
 			}
 		echo "</table>";


 	}
 		else {

 		echo "No result";
 	}

 	 ?>

<h3>आर्थिक विवरण</h3>

<table class = "table table-striped table-bordered table-hover table-condensed">
	<tr class="thead">
		
		<th>रोजगारीको अवस्था</th>
		<th>आम्दानिको श्रोत</th>
		<th>अनुमानित मासिक आम्दानि</th>
		<th>परिवारमा आश्रीत व्यक्तिको संख्या</th>
	</tr>

<?php 

$sql = "SELECT * FROM eco_status WHERE house_number = '$house_number'";
 	$result = mysqli_query($conn, $sql); //$result =$conn-> query($sql); 
 	$resultCheck = mysqli_num_rows($result);


 	if ($resultCheck > 0) {
 								// while($row = $result-> fetch_assoc())
 			while ($row = mysqli_fetch_assoc($result)) {

	 			echo "<tr><td>".$row['employment_status']."</td><td>".$row['income_source']."</td><td>".$row['monthly_income']."</td><td>".$row['dependent_members']."</td></tr>";
 			}
 		echo "</table>";


 	}
 		else {

 		echo "No result";
 	}

 	 ?>

<h3>बसोबासको भौतिक अवस्था</h3>

<table class = "table table-striped table-bordered table-hover table-condensed">
	<tr class="thead">
		
		<th>घर, जग्गाको स्वामित्व</th>
		<th>जग्गाको क्षेत्रफल</th>
		<th>घरको प्रकार</th>
		<th>कोठा संख्या</th>
		
	</tr>

<?php 

$sql = "SELECT * FROM living_status WHERE house_number = '$house_number'";
 	$result = mysqli_query($conn, $sql); //$result =$conn-> query($sql); 
 	$resultCheck = mysqli_num_rows($result);


 	if ($resultCheck > 0) {
 								// while($row = $result-> fetch_assoc())
 			while ($row = mysqli_fetch_assoc($result)) {

	 			echo "<tr><td>".$row['property_status']."</td><td>".$row['land_area']."</td><td>".$row['house_type']."</td><td>".$row['room_number']."</td></tr>";
 			}
 		echo "</table>";


 	}
 		else {

 		echo "No result";
 	}

 	 ?>

<h3>घरायसी सम्पति</h3>

<table class = "table table-striped table-bordered table-hover table-condensed">
	<tr class="thead">
		
		<th>गाडी,मोटरसाईकल</th>
		<th>ईन्टरनेट,केबुल,टेलिभिजन</th>
		<th>रेफ्रीजेरेटर</th>
		<th>पशु चौपायाको संख्या</th>
		<th>घरपालुवा पंक्षीको संख्या</th>
		
	</tr>

<?php 

$sql = "SELECT * FROM property WHERE house_number = '$house_number'";
 	$result = mysqli_query($conn, $sql); //$result =$conn-> query($sql); 
 	$resultCheck = mysqli_num_rows($result);


 	if ($resultCheck > 0) {
 								// while($row = $result-> fetch_assoc())
 			while ($row = mysqli_fetch_assoc($result)) {

	 			echo "<tr><td>".$row['vehicle']."</td><td>".$row['communication']."</td><td>".$row['fridge']."</td><td>".$row['domestic_animals']."</td><td>".$row['domestic_birds']."</td></tr>";
 			}
 		echo "</table>";


 	}
 		else {

 		echo "No result";
 	}

 	 ?>


<h3>घरायसी सुविधा</h3>
	
<table class = "table table-striped table-bordered table-hover table-condensed">
	<tr class="thead">
		
		<th>खानेपानीको श्रोत</th>
		<th>शौचालय</th>
		<th>खाना पकाउने इन्धन</th>
		<th>वत्ति श्रोत</th>
		
	</tr>

<?php 

$sql = "SELECT * FROM facilities WHERE house_number = '$house_number'";
 	$result = mysqli_query($conn, $sql); //$result =$conn-> query($sql); 
 	$resultCheck = mysqli_num_rows($result);


 	if ($resultCheck > 0) {
 								// while($row = $result-> fetch_assoc())
 			while ($row = mysqli_fetch_assoc($result)) {

	 			echo "<tr><td>".$row['water_facility']."</td><td>".$row['toilet_facility']."</td><td>".$row['fuel_facility']."</td><td>".$row['light_facility']."</td></tr>";
 			}
 		echo "</table>";


 	}
 		else {

 		echo "No result";
 	}

 	 ?>

<h3>विविध</h3>

<table class = "table table-striped table-bordered table-hover table-condensed">
	<tr class="thead">
		
		<th>भौगोलिक क्षेत्रगत अवस्था</th>
		<th>स्वास्थ सेवाको उपलब्धता</th>
		<th>जग्गाको अनुमानित मूल्य</th>
		<th>सडक सुविधा</th>
		
	</tr>

<?php 

$sql = "SELECT * FROM others WHERE house_number = '$house_number'";
 	$result = mysqli_query($conn, $sql); //$result =$conn-> query($sql); 
 	$resultCheck = mysqli_num_rows($result);


 	if ($resultCheck > 0) {
 								// while($row = $result-> fetch_assoc())
 			while ($row = mysqli_fetch_assoc($result)) {

	 			echo "<tr><td>".$row['geographic_status']."</td><td>".$row['health_facility']."</td><td>".$row['land_value']."</td><td>".$row['road_facility']."</td></tr>";
 			}
 		echo "</table>";


 	}
 		else {

 		echo "No result";
 	}

 	 ?>

<h3>कैफियत</h3>

<?php 

	$sql = "SELECT * FROM others WHERE house_number = '$house_number'";
 	$result = mysqli_query($conn, $sql); //$result =$conn-> query($sql); 
 	$resultCheck = mysqli_num_rows($result);


 	if ($resultCheck > 0) {
 								// while($row = $result-> fetch_assoc())
 			while ($row = mysqli_fetch_assoc($result)) {

	 			echo "<p>".$row['remarks'];

 			}
 		


 	}
 		else {

 		echo "No result";
 	}	

 ?> 	 


