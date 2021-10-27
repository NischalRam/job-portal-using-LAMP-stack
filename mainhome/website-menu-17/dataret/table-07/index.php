<?php
error_reporting(0);

$db=new mysqli("localhost","root","","job");

if(isset($_POST['sf1'])){
    $filter=$_POST['filter'];
	$sear=$_POST['sear'];
	$result=$db->query("SELECT * FROM `students` where $filter='$sear'");
	
}


else{
	$result=$db->query("SELECT * FROM `students`");

}

 
?>
                   


<!doctype html>
<html lang="en">
  <head>
  	<title>Table 07</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
	

	</head>
	<body style= "background: linear-gradient(135deg, #71b7e6, #9b59b6);" >

	<!-- <section class="ftco-section"> -->
		<div class="container">
		
			<!-- <button onclick="window.location.href='../../index.html'" style="margin: 20px border-radius: 5px;" > back </button> -->
<div>
			<h1 style="color: aliceblue; text-align: center; " >Candidate's List</h1>
			<button type="button" onclick="window.location.href='../../../../index1.html'" class="btn btn-primary" style="float:right; background-color:#002f33;">Back</button>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
					
					<div class="input-group mb-3">
	<form action="index.php" method="post">
  
  <select class="custom-select" name="filter" id="inputGroupSelect01">
    <option value="branch">Branch</option>
    <option value="skills">Skills</option>
    <option value="college">College</option>
  </select>
</div>



  <div class="form-group">
    <input type="text" name="sear" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Search">
  </div>
  
  <button type="submit" name="sf1" class="btn btn-primary">Search</button>
</form>
						<table style= "background-color: #8162c2" class="table table-bordered table-dark table-hover">
						  <thead>
						    <tr>
						      <th>Name</th>
						      <th>College</th>
						      <th>Graduation</th>
						      <th>Branch</th>
						      <th>Email</th>
						      <th>Skills</th>
						      <th>Native Place</th>
						      <th>Mobile Number</th>
						      <th>Linkidin</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>

							<?php

while($res=mysqli_fetch_array($result)){

    
    echo '<tr>';

    echo '<td>'.$res['name'].'</td>';
    echo '<td>'.$res['college'].'</td>';
    echo '<td>'.$res['graduation'].'</td>';
    echo '<td>'.$res['branch'].'</td>';
    echo '<td>'.$res['emailid'].'</td>';
    echo '<td>'.$res['skills'].'</td>';
    echo '<td>'.$res['nativeplace'].'</td>';
    echo '<td>'.$res['phno'].'</td>';
    echo '<td>'.$res['link'].'</td>';


    echo '</tr>';
    

}



?>
							
						    </tr>
				
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

