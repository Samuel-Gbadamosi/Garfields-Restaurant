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


//to add Customer
//take all 5 values from the form data


//to delete reservation only id;
$id = $_REQUEST["id"];






//perfor

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <!-- bootstrap -->
    <link rel="stylesheet" href="./css/styles.css">

    <title>Delete Page</title>
    <div class="container">
        <?php

        $sql2 = "DELETE FROM restaurant.order_item WHERE id = '$id'";
        $deletefood = $conn->query($sql2);

        if ($deletefood) {




            echo nl2br("\n  FOOD deleted  : $id\n   ");

            '<div class=" container mt-3 card text-center" style="width: 18rem;">
                <img src="https://cdn.pixabay.com/photo/2016/04/15/11/48/hotel-1330850__480.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">Food deleted successfully!</p>';

            header("location : foodbooked.php");
        } else {
            die("record is not deleted it is query error." . mysqli_error($id));
        }



        //close connection
        mysqli_close($conn);



        ?>
    </div>



</head>

<body>

</body>

</html>