<?php 
include 'config.php';
echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Customers</title>

    <!-- Link our CSS file -->
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

?>

<?php
if(isset($_POST['submit']))
                {
                    // Get all the details from the form

                    $from = $_POST['firstname1'];
                    $to = $_POST['firstname2'];
                    $amt = $_POST['amount'];


                    //Save the Order in Databaase
                    //Create SQL to save the data
                    $sql2 = "INSERT INTO history SET 
                        
                        sender = '$from',
                        receiver = '$to',
                        amt = '$amt'
                    ";
                    //Execute the Query
                    $res2= mysqli_query($conn, $sql2);

                    //Check whether query executed successfully or not
                    if($res2==true)
                    {
                        //Query Executed and registered
                        $_SESSION['order'] = "<div class='success text-center'>Data added</div>";
                        //header('location:'.SITEURL);
                    }
                    else
                    {
                        //Failed to register
                        $_SESSION['order'] = "<div class='error text-center'>Failed to insert data</div>";
                        //header('location:'.SITEURL);
                    }

                }
                ?>


<?php
$sql="update customers set balance=balance+".$_REQUEST['amount']." where accId=".$_REQUEST['accountno2']."";
if (mysqli_query($conn, $sql)) 
{
    echo '<script>alert("Money transferred successfully")</script>';
    echo "<div class='container'><h1 class='mt-5'>Money Transferred Successfully</h1>";
    echo "<a href='index.html'><button class='btn btn-success'>Go back</button></a>";
    echo "<a href='transactions.php'><button class='btn btn-info'>View History</button></a>";

    //header('location:'.SITEURL);
} 
else 
{
 echo "Error updating record: " . mysqli_error($conn);
}

$sql1="update customers set balance=balance-".$_REQUEST['amount']." where accId=".$_REQUEST['accountno1']."";
//echo "<div class='container'><h1 class='mt-5'>Money Transferred Successfully</h1>";
?>