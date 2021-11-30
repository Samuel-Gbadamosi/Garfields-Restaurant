<?php

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

//create a variable in string
$toReturn = "NOT Added";



if (isset($_REQUEST["customer_id"])) {


    $ordersId = $_REQUEST["id_orders"];
    $date = $_REQUEST["date"];
    $customerId = $_REQUEST["customer_id"];
    $food_itemId = $_REQUEST["food_item_id"];


    $sql = "INSERT INTO order_item ( id_orders , date , customer_id , food_item_id ) VALUES
        ( '$ordersId' , '$date', '$customerId' , '$food_itemId' )";

    if (mysqli_query($conn, $sql)) {


       
        header("location : index.php");
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