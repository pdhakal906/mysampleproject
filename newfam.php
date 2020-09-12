<!DOCTYPE html>
<html>
<head>
	<title>नयाँ परिविार</title>
	 <link href="bootstrap.min.css" rel="stylesheet">
   
 <link rel="stylesheet" type="text/css" href="style.css">
   
</head>
 
 <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          
            
          <p class="navbar-brand">पारिवारीक विवरण</p>
        </div>
        
          <ul class="nav navbar-nav">
            
            

          </ul>
          <ul class="nav navbar-nav navbar-right">
            
            <li><a href="../index.php">पछाडी</a><br></li>
          </ul>
        
      </div>
    </nav>

 <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="text-center">नयाँ परिवार ‍</h1>
          </div>

     
        </div>
      </div>
    </header>


<body>

 <div class="col-lg-8 col-lg-offset-2">

	<form  class="well" method="POST" action="posthead.php">
		
		<label>घर नंः </label><input type="text" class="form-control" name="house_number" required><br>
		<label>ठ‍ेगानाः </label><input type="text" class="form-control" value="सुनवर्षी, ३" name="address" required><br>
		<label>टोलः </label><input type="text" class="form-control" name="tole" required><br>
		<label>धर्म </label><input type="text" class="form-control" name="religion" required><br>
		<label>मोनंः </label><input type="text" class="form-control" name="mobile_number" required><br>
		<label>घरमूलीको नामः </label><input type="text" class="form-control" name="head_name" required><br>
    <label>Name in English </label><input type="text" class="form-control" name="head_name_eng" required><br>
		<label>लिङ्गः </label> <select class="form-control" name="gender" required>
			
								<option value="पुरुष">पुरुष</option>
								<option value="महिला">महिला</option>
								<option value="अन्य">अन्य</option>
		</select>
		<br>
		<label>उमेरः </label><input type="text" class="form-control" name="age" required><br>
		<label>नागरिकता नंः </label><input type="text" class="form-control" name="head_citizenship" required><br>
		<label>पेशाः </label><input type="text" class="form-control" name="head_occupation" required><br>
		<label>शैक्षिक योग्यता </label><input type="text" class="form-control" name="head_education" required><br>
		
		
		<button class="btn btn-primary btn-block">सबमिट</button>
		
	</form>
</div>
	
</body>

</html>