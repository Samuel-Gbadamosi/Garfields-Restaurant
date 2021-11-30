<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once("./db/db.php");

$restaurant = getRestaurant();







?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book-Food</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="icon" href="./images/gg.jpg" />

        <!-- link bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    <!-- link -->
         <!-- link bootstrap -->
</head>
<body>
    <header>
        <?php 
        
        include("./header/header.php");
        ?>

    </header>
    <main>
        <div class="container">
        <h1 class="text-center text-bg-light ">Book your Food</h1>
        <div class="headerrip">
                <?php

          if ($restaurant->num_rows > 0) {
            // output data of each row
            while ($row = $restaurant->fetch_assoc()) {

          ?>
          
          
          

        <div class="words">

          <h2><?= $row["name"] ?></h2>
     

        </div>

        <?php
            }
          } else {
            echo "0 results";
          }

          ?>

        </div>


        <div class="container">

        <form method="post"  action="insert.php" style="position: relative; top:220px; font-size: 20px;">
  
                   
                    <div class="col-md-4" >
                        <label for="" class="form-label">Order Id</label>

                        <input type="text" class="form-control" id="id_orders" name="id_orders">
                    </div>
                    <div class="col-md-4" >
                        <label for="" class="form-label"> Date</label>
                        <input type="datetime-local" class="form-control" id="date" name="date">
                    </div>
                  
                    <div class="col-md-4">
                        <label for="" class="form-label">CustomerId</label>
                        <input type="text" class="form-control" id="customer_id" name="customer_id">
                    </div>
                    <div class="col-md-4">
                        <label for="" class="form-label">Food Item Id</label>
                        <input type="text" class="form-control" id="food_item_id" name="food_item_id">
                    </div>
                 

                    <button type="submit" class="btn btn-primary mt-2">Submit</button>


                    <div style="position: relative; bottom:380px; " class="col-md-6 offset-md-6">
                      <img style="border-radius: 20px;" src="https://media.istockphoto.com/photos/illustration-of-business-team-informal-greeting-happy-working-people-picture-id1314814370?b=1&k=20&m=1314814370&s=170667a&w=0&h=8tZlw-SXDFxXKZN7iTYjPTp_bLpEjq0PO3DzMwr5kIo=" alt="">
                    </div>
               
        </form>



        </div>

    </main>
    <footer>
        <?php
        
        include("./footer/footer.php");
        ?>

    </footer>
    
</body>
</html>