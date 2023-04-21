<?php
    include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmL.cssASjC" crossorigin="anonymous">
    <style>
    .success{
    padding: 2%;
    color: green;
    }
    </style>    
</head>

<body>   
    <script>
        function fun()
        {
        alert("Are you sure you want to transfer money to this account?");
        }
        </script>
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
	</div>

    <div class="container">
		<p class="h3 m-4">Make A Transaction</p>
		<form class="text-center border border-light p-5" action="logic.php" method="post">
		<div class="row">
        <div class="col-md-6">
        <p class="h3 mb-4">Sender</p>
            <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Name" name="firstname1" required>
            <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Account No" name="accountno1" required>
            <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Amount" name="amount" required>
        </div>
        <div class= col-md-6>
        <p class="h3 mb-4">Reciever</p>
            <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Name" name="firstname2" required>
            <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Account No" name="accountno2"required>
        </div>
    
        <input type="submit" name="submit" class="btn btn-info my-4" onclick="fun()"></input>
        <button class="btn btn-danger my-4" type="Transfer">Cancel</button>
        </form>
    </div>
    </body>
</html>

