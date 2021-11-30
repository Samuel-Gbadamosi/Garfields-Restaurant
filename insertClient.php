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

if($conn == false){
 die("ERROR : could not connect. "
  . mysqli_connect_error());
}





if(isset($_REQUEST["name"]))
{


       $name = $_REQUEST["name"];
       $surname = $_REQUEST["surname"];
       $address = $_REQUEST["address"];
       $zipcode = $_REQUEST["zipcode"];
       $phone = $_REQUEST["phone"];
       $email = $_REQUEST["email"];




        $sql = "INSERT INTO restaurant.customer ( name , surname , address , zipcode , phone , email ) VALUES
        ('$name' , '$surname' , '$address' , '$zipcode' , '$phone' , '$email' )";

            if(mysqli_query($conn, $sql)){
            
            
      $toReturn = 
                    '<div class=" container mt-3 card text-center" style="width: 18rem;">
            <img src="https://cdn.pixabay.com/photo/2016/10/16/21/30/halloween-1746354__340.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Name : '.$name.'</h5>
                <h5 class="card-title">Surname : '.$surname.'</h5>
                <h5 class="card-title">Address : '.$address.'</h5>
                <h5 class="card-title">Zipcode : '.$zipcode.'</h5>
                <h5 class="card-title">Phone number : '.$phone.'</h5>
                <h5 class="card-title">Email : '.$email.' </h5>





                <p class="card-text">User has been stored in Garfield Restaurant Database successfully</p>';
                //   redirects us to the homepage after adding customer

                 header("Location: index.php");
              



                    
            } else{
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