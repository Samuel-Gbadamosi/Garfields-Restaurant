<?php

require_once('./db/db.php');

$foodBooked = foodOrders();

//$getimages = getfoodBooked();





 if ($foodBooked->num_rows > 0) {
     // output data of each row
     while ($row = $foodBooked->fetch_assoc()) {
         $id = $row["id"];
         $id_orders = $row["id_orders"];
         $date = $row["date"];
         $customerId = $row["customer_id"];
         $fooditemId = $row["food_item_id"];
    
  
      
   ?>
    <?php
     }
   } else {
     echo "0 results";
   }
  


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
        <div class="container">

        <div class="container">

       

        <form method="post"  action="insertmodifybooked.php" style="position: relative; top:220px; font-size: 20px;">
        <div class="col-md-4 "  >
                        <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $id ?>">
                    </div>
        <div class="col-md-4 "  >
            
   
                       <div class="col-md-4" >
                        <label for="" class="form-label">Order Id</label>

                        <input type="text" class="form-control" id="id_orders" name="id_orders" value="<?php echo $id_orders ?>">
                    </div>
                    <div class="col-md-4" >
                        <label for="" class="form-label"> Date</label>
                        <input type="datetime-local" class="form-control" id="date" name="date" value="<?php echo $date ?>">
                    </div>
                  
                    <div class="col-md-4">
                        <label for="" class="form-label">CustomerId</label>
                        <input type="text" class="form-control" id="customer_id" name="customer_id" value="<?php echo $customerId ?>">
                    </div>
                    <div class="col-md-4">
                        <label for="" class="form-label">Food Item Id</label>
                        <input type="text" class="form-control" id="food_item_id" name="food_item_id" value="<?php echo $fooditemId ?>">
                    </div>
                 

                    <button type="submit" class="btn btn-primary mt-2">Submit</button>


                    <div style="position: relative; bottom:380px; " class="col-md-6 offset-md-6">
                      <img style="border-radius: 20px;" src="https://cdn.pixabay.com/photo/2017/06/06/22/36/eat-2378726__340.jpg" alt="">
                    </div>
               
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