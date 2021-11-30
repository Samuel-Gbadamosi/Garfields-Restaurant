<?php

include_once("./db/db.php");

$restaurant = getRestaurant();

$getimages = getfoodBooked();


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
        include("./header/header.php");
        ?>

    </header>
    <main>
        <div class="container" style="position: relative; left:163px;">
            <h3 style="padding-right:418px;" class="h3h">Food Booked</h3>



            <?php

            if ($getimages->num_rows > 0) {
                // output data of each row
                while ($row = $getimages->fetch_assoc()) {

            ?>
            <form action="delete.php" method="post">
                    <div class="card" style="width: 55rem;">
                        <img src="<?php echo "./images/" . $row['food_image']; ?>" class="card-img-top" alt="hotel_torino">
                        <div class="card-body">

                        <!-- created a function to get user name -->
                        <label  class="btn btn-primary" for=""> Customer Name : </label>
                   <label  class="btn btn-primary" for=""> <?=  getUserFromId($row["customer_id"])  ?></label>
                    
                   <div class="row mt-2">
                       <div class="col">
                       <h5 class="btn btn-primary text-white"> Food Name : <?= $row['food_name'] ?></h5>
                   <input type="hidden" class="btn btn-warning" name="food_name" value="<?php  echo 'Food name : ' . $row['food_name'] ?>"> 

                       </div>

                   </div>

                   <div class="row">
                       <div class="col">
                       <h5 class="card-title btn btn-primary "> Description : <?= $row['food_description'] ?> </h5>
                   <input type="hidden" class="btn btn-warning" name="food_description" value="<?php  echo 'Description : ' . $row['food_description'] ?>"> 

                       </div>

                   </div>
                  

 

                   <h5 class="card-title text-primary"> Price : <?= '€' . $row['food_price'] ?></h5>
                   <input type="hidden" class="" name="food_price" value="<?php $row['food_price'] ?>">

                   <h5 class="card-title text-primary"> Date : <?=   $row['date'] ?></h5>
                       <input  type="hidden" class="text-primary" name="date" value="<?php $row['date'] ?>">


                       <input type="hidden" name="id"  value="<?php echo $row['orderItemId'] ?>">
                    <input class="btn btn-danger" type="submit" name="submit" value="Remove">


                    <a class="btn btn-primary" href="editfoodBooked.php?id=<?php echo $row['id']; ?>">edit</a>


                   
            </form>



                            


                               






                        </div>
                    </div>

            <?php
                }
            } else {
                echo "0 results";
            }

            ?>






        </div>



    </main>
    <footer>
        <?php

        include("./footer/footer.php");
        ?>

    </footer>

</body>

</html>