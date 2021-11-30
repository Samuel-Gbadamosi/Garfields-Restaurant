<?php

define('WP_DEBUG', true); define('WP_DEBUG_LOG', true);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "./db/db.php";


date_default_timezone_set('Europe/Rome');


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn == false) {
    die("ERROR : could not connect. "
        . mysqli_connect_error());
}







if (isset($_POST["date"])) {

    $id = $_POST["id"];
    $id_orders = $_POST["id_orders"];
    $date = $_POST["date"];
    $customerId = $_POST["customer_id"];
    $fooditemId = $_POST["food_item_id"];

 


    
        $sql = "UPDATE restaurant.order_item SET id_orders = '$id_orders',
         date = '$date',
          customer_id = '$customerId' ,
           food_item_id = '$fooditemId'
           where id = '$id' ";
            

            

        if (mysqli_query($conn, $sql)) {


            $toReturn =
        
            '<div class=" container mt-3 card text-center" style="width: 18rem;">
                <img src="https://cdn.pixabay.com/photo/2016/04/15/11/48/hotel-1330850__480.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title"> Id : '.$id.' </h5>
                <h5 class="card-title"> Order Id :'. $id_orders .' </h5>
                <h5 class="card-title"> date : '.$date.'</h5>
                <h5 class="card-title"> Customer Id: '.$customerId.'</h5>
                <h5 class="card-title"> food item id : '.$fooditemId.'</h5>






                    <p class="card-text">Food Reservation has been modified successfully</p>';
                    if($toReturn == true){
                    header("location: foodbooked.php");

                    }


        } else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }



        //close connection
        mysqli_close($conn);
    }





?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- bootstrap link -->
    <link rel="stylesheet" href="./css/styles.css">

    <title>Document</title>
    <div class="container">
        <?php 
        
        echo $toReturn;
        
        ?>


       
    </div>



</head>

<body>

</body>

</html>