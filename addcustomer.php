<?php

require_once('./db/db.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="icon" href="./images/gg.jpg" />

            <!-- bootstrap link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- bootstrap link -->
</head>
<body>
    <header>
        <?php
        include('./header/header.php');
        ?>

    </header>
    <main>
        <div class="container" style="margin-right: -46px;">

        <form method="post" action="insertClient.php">
            <h2 style="color: lightsalmon;">Add Customer</h2>
                    <div class="col-md-4 mt-4" >
                      <!-- //room number would be getting through the id -->
                        <label for="" class="form-label">Name :</label>
                        <input type="text" required class="form-control" id="name" name="name">
                    </div>
                    <div class="col-md-4" >
                      <!-- //reservation id would be getting through the id  -->
                        <label for="" class="form-label">Surname :</label>
                        <input type="text" required class="form-control" id="surname" name="surname">
                    </div> 
                    <div class="col-md-4">
                      
                        <label for="" class="form-label"> Address :</label>
                        <input type="text" class="form-control" id="address" name="address">
                    </div>
                    <div class="col-md-4">
                        <label for="" class="form-label">Zipcode :</label>
                        <input type="text" required class="form-control" id="zipcode" name="zipcode">
                    
                      </div>
                    <div class="col-md-4">
                        <label for="" class="form-label">Phone number :</label>
                        <input type="text" required class="form-control" id="phone" name="phone">
                    </div>
                    <div class="col-md-4">
                        <label for="" class="form-label">Email</label>
                        <input type="text" required class="form-control" id="email" name="email">
                    </div>
                   

                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
         </form>



        </div>

    </main>
    <footer>
        <?php
        include('./footer/footer.php');
        ?>

    </footer>
    
</body>
</html>