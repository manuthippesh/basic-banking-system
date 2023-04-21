<?php
include 'config.php';
 
echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmL.cssASjC" crossorigin="anonymous">
    <style type="text/css">
		@media (min-width: 992px) {
			.tabl{
                /*margin: 0px 50px 0px 250px;*/
                margin-left: auto;
                margin-right: auto;
            }
        }
	</style>
</head>

<body>   
    <div>
	    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="index.html">BASIC BANKING SYSTEM</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav d-flex ms-auto mb-2 mb-lg-1">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">About</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Contact Us</a>
            </li>
        </ul>
        </div>

        </div>
        </nav>
	  </div>';


		$sql="select * from history";
		$result=mysqli_query($conn,$sql);


  echo  '<div class="container">
		<br>
		<br>
		<div class="tabl col-lg-10 col-md-12 col-sm-12">
			<table class="table table-bordered table-striped">
				 <thead class="table-dark text-center">
				   <tr>
				     <th scope="col">Sender</th>
				     <th scope="col">Receiver</th>
					   <th scope="col">Amount Transferred</th>
				   </tr>
				 </thead>' ;

				while($rows=mysqli_fetch_assoc($result))
		{
			echo '<tbody>
			<tr>
			<td>'.$rows['sender'].'</td>
			<td>'.$rows['receiver'].'</td>
			<td>'.$rows['amt'].'</td>
			</tr>
			';
			}	




?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>