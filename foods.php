<?php

include_once('./db/db.php');

$foods = getfoodItem();



$msg = "";
 
  
// If upload button is clicked ...
if (isset($_POST['upload'])) {

  

  $image = $_FILES["uploadfile"]["name"];
  $tempname = $_FILES["uploadfile"]["tmp_name"];    
      $folder = __DIR__ . "\\images\\".$image;
        
  $db = mysqli_connect("localhost", "root", "", "restaurant");

      // Get all the submitted data from the form
      $sql = "INSERT INTO restaurant.food_item (food_image) VALUES ('$image')";

      // Execute query
      mysqli_query($db, $sql);
        
      // Now let's move the uploaded image into the folder: image
      if (move_uploaded_file($tempname, $folder))  {
          $msg = "Image uploaded successfully";
      }else{
          $msg = "Failed to upload image";
    }
}


//       ?>
<!-- // <img src="<?php echo $data['Filename']; ?>"> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our-Foods</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="icon" href="./images/gg.jpg" />


    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Pacifico&display=swap" rel="stylesheet">
            
    <!-- link  css -->
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    <!-- link -->
         <!-- link bootstrap -->
</head>
<body>
    <!-- header starts -->
    <header>
        <?php 
        
        include('./header/header.php');
        
        ?>

    </header>
        <!-- header ends -->

 <!-- main starts -->
    <main>
    <h2 style="text-align:center;" class="h3h" >Our Foods</h2>

        
        <div class="container" style="position:relative; left:195px; text-align:center">
                     
                
                        <?php

            if ($foods->num_rows > 0) {
            // output data of each row
            while ($row = $foods->fetch_assoc()) {

            ?>
            <div class="card" style="width: 55rem;">
            <img  src="<?php echo "./images/" . $row['food_image']; ?>" class="card-img-top" alt="">
            <div class="card-body" style="background-color: darkslateblue;">
            <h3 class="text-light">Book your Order in base of your ID Number</h3>
            <h5 class="card-title text-warning"><?= 'ID : ' . $row['id'] ?></h5>

            <h5 class="card-title text-warning"><?= 'Price : ' .'€ '. $row['food_price'] ?></h5>
                <h5 class="card-title text-light"><?= 'Title : ' . $row['food_name'] ?></h5>
                <h5 class="card-text text-light "><?= 'Description : ' .$row['food_description'] ?></h5>
                <a href="bookfood.php" class="btn btn-primary">Order Now</a>
                <!-- //this link above should take us to book food with a form -->
            </div>
            </div>
            <?php
                }
                } else {
                echo "0 results";
                }

                ?>

<!-- we can use this link below commented to upload picture to the database but we keep it hidden -->
            <!-- <div id="content" class="mt-3">
                <button class="btn btn-warning">Kindly use this to upload picture to the database if necessary</button>

                  <form method="POST" action="foods.php" enctype="multipart/form-data">
                    <input type="file" name="uploadfile" value=""/>
                      
                    <div>
                        <button class="btn btn-danger" type="submit" name="upload">UPLOAD</button>
                      </div>
                  </form>

            </div> -->
        </div>

        </div>

    </main>
  <!-- main ends -->

 <!-- footer starts -->

    <footer>
        <?php
        
        include('./footer/footer.php');
        ?>

    </footer>
 <!-- footer ends -->

    
</body>
</html>