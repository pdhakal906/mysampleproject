<?php 
	include "dbh.php";
 ?>

 <link href="bootstrap.min.css" rel="stylesheet">
   
<link rel="stylesheet" type="text/css" href="style.css">

<nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          
          <a class="navbar-brand" href="../index.php">पारिवारीक विवरण</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="newfam.php">नयाँ परिवार</a></li>
            <li class="active"><a href="viewfam.php">परिवारको विवरण</a>
            
            

          </ul>
         <ul class="nav navbar-nav navbar-right">
            <form class="form form-inline" action="search.php" method="GET">
              <input type="text" class="form-control" name="search" placeholder="नामले सर्च">
              <button class="btn btn-default">Search</button>
            </form>
          </ul>
          
        
      </div>
    </nav>


<header id="header">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="text-center"> घरमूलीहरु  ‍</h1>
          </div>

     
        </div>
      </div>
    </header>




<br>

<body>



<table class = "table table-striped table-bordered table-hover table-condensed">
	
	<tr class="thead">
		<th>घर नंबर</th>
		<th>घरमूलीको नाम</th>
		<th>ठेगाना</th>
		<th>टोल</th>
		<th>मोबाइल नंम्बर</th>

	</tr>




 <?php 

 	$sql = "SELECT * FROM fam_head";
 	$result = mysqli_query($conn, $sql);
 	$resultCheck = mysqli_num_rows($result);

 	if ($resultCheck > 0) {
 			while ($row = mysqli_fetch_assoc($result)) {
 			 	echo "<tr><td>".$row['house_number']."</td><td><a href ='viewreport.php?id={$row['house_number']}'>".$row['head_name']."</a></td><td>".$row['address']."</td><td>".$row['tole']."</td><td>".$row['mobile']."</td></tr>";
 			 } 
 	}

  ?>
</body>

  