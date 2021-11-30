<?php

require_once "./db/db.php";

$formPopup = "false";

//sending mail though php on localserver

//edo confirmed it will work to send a contact me

if (isset($_POST['email'])) {
	$to = "damosisamuel@gmail.com"; // this is your Email address
	$from = $_POST['email']; // this is the sender's Email address
	$name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $description = $_POST['description'];
	$phone = $_POST["phone"];
	$subject = "form da Garfield's Restaurant";
	$message = $name . " - " . $surname. " ".  $description . " " . $from . " " . $phone .  " " . $email ;
      //headers
	$headers = "From:garfieldresto.it";
	mail($to, $subject, $message, $headers);

	$formPopup = "true";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us Page</title>
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
        <div style="margin-right:-103px;" class="container mt-4 ">

        <h2 class="mb-3 " style="color: lightsalmon;">Contact Us </h2>

        <form method="post" action="" id="contactform">
        <div class="col-md-4" >
                        <label for="" class="form-label">Name</label>
                        <input type="text" required class="form-control" id="name" name="name" >
                    </div>
                    <div class="col-md-4" >
                        <label for="" class="form-label">Surname</label>
                        <input type="text" required class="form-control" id="surname" name="surname" >
                    </div>
                    <div class="col-md-4" >
                        <label for="" class="form-label">Email</label>
                        <input type="text" required class="form-control" id="email" name="email">
                    </div>

                    <div class="col-md-4">
                        <label for="" class="form-label">Phone Number</label>
                        <input type="text" required class="form-control" id="phone" name="phone">
                    </div>
                  
                    <div class="col-md-4">
                        <label for="" class="form-label">Description</label>
                        
                         <textarea class="form-control" aria-live="rtrim" name="description" id="description" cols="30" rows="5"></textarea>
                    </div>

                  
                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form> 





        </div>

        
        <div class="container mt-4" style="width:834px;">

        <div>
            <p ><i style="font-size: 60px; margin-left:350px; color:bisque;" class="fas fa-arrow-circle-down"></i> </p>
        </div>


        <iframe style="border-radius: 30px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.6644001562645!2d9.026447622871318!3d45.48839170632585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786ebeaee94cec1%3A0xc3cc454a3cd24758!2sVia%20Milano%2C%2045%2C%2020010%20Cornaredo%20MI!5e0!3m2!1sen!2sit!4v1638185385780!5m2!1sen!2sit" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        </div>

    </main>
    <footer>
        <?php
        
        include("./footer/footer.php");
        ?>

    </footer>
    
</body>
</html>