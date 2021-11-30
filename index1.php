<?php

require_once "./db/db.php";

require_once "./customer.php";


$restaurant = getRestaurant();


 $fooditems = getfoodItem();

var_dump($fooditems);

 




// foreach($restaurant as $res){
//     var_dump($res);
// }







?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- link  css -->
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="icon" href="./img/gg.jpg" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Pacifico&display=swap" rel="stylesheet">
        <link rel="icon" href="./images/gg.jpg" />

            
    <!-- link  css -->
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    <!-- link -->
         <!-- link bootstrap -->

</head>
<body>
    <!-- header -->
  <header>
      <div class="">

        <?php
        include('./header/header.php');
        ?>
      </div>
  </header>
  <h1 style="text-align: center; color:coral;" class="h3h" >Welcome to Garfield's Restaurant</h1>

      <!-- header end here -->
       <!-- main start here -->
  <main>
      <!-- first container -->
 <div class="container mt-3" style="display: flex;" >
      <div class="boxone">
       <div class="left-menu">

           <h2 class="h2b">Meet, Eat & Enjoy the true taste</h2>

           <p class="p2p">Making a reservation at a Delicious restaurant is easy and takes just couple of minutes</p>

           <button  class="btn btn-warning">Our Menu</button>
       </div>
      </div>
      <div class="boxtwo">

      <div>
          <img class="img" src="https://media.istockphoto.com/photos/food-for-indian-festival-diwali-picture-id867909720?b=1&k=20&m=867909720&s=170667a&w=0&h=Pn99GsyWeJ34k2Hib-YwqdwJFYFj3HjVlzen7K2qAIw=" alt="">
      </div>

      </div>
  
</div>
      <!-- end first container -->

<!-- start second container -->
<div class="container">

<div class="testing">

</div>
    <div class="secondsect">
   <div>
        <h3 class="h3h">Best way to eat healthy food</h3>
            <p style="text-align: center; color:#A583A3;" class="p2p">Making a reservation at Delicious restaurant is easy and takes just a couple of minutes.</p>

   </div>

   <div class="sect-menu pt-3" style="display: flex; justify-content:space-around; height:415px;" >
       <div class="box-menu">
           <div class="rt">
                    <img class="imagemeal" src="https://preview.colorlib.com/theme/restauco/assets/img/icon/services1.svg" alt="">

            <h4 class="h44">Healthy Meal</h4>

            <p>Making a reservation at delicious restaurant is easy and takes just a couple of minutes</p>

           </div>
          

       </div>
       <div class="box-menu">
           <div class="rt">

                    <img class="imagemeal" src="https://preview.colorlib.com/theme/restauco/assets/img/icon/services1.svg" alt="">

            <h4 class="h44" style="padding-left: 70px;">Fast Food</h4>

            <p>Making a reservation at delicious restaurant is easy and takes just a couple of minutes</p>


           </div>
               
           
       </div>
       <div class="box-menu">
           <div class="rt">

                    <img class="imagemeal" src="https://preview.colorlib.com/theme/restauco/assets/img/icon/services1.svg" alt="">

            <h4  class="h44">Delicious Coffee</h4>

            <p>Making a reservation at delicious restaurant is easy and takes just a couple of minutes</p>


           </div>
           
       </div>


     

   


    </div>
 
    

</div>
<!-- //new container added -->
<div class="">

     <div class="res">
        <div class="vexdisplay">
        <h3 class="h3h">Our Lobby </h3>

            <img class="picbelow" src="https://preview.colorlib.com/theme/restauco/assets/img/gallery/xinstra1.jpg.pagespeed.ic.virRQfsSPW.webp" alt="">
            <img class="picbelow"  src="https://preview.colorlib.com/theme/restauco/assets/img/gallery/xinstra3.jpg.pagespeed.ic.zEBAIp_Rmx.webp" alt="">
            <img class="picbelow"  src="https://preview.colorlib.com/theme/restauco/assets/img/gallery/xinstra4.jpg.pagespeed.ic.eO3g5zu8U0.webp" alt="">
        </div>

     </div>

 
</div>
<div class="container">
    <div>
      <img class="menuimage" src="./images/bgres.jpg" alt="img">

    </div>

 </div>

 <div class="container">
     <div class="boxChef" style="background-color: #FFF7F3; display:flex; height:350px;" >
     <div class="row">
         <div class="col-lg-4">
         <img style="justify-content: space-between; height:240px;" class="picbelow" src="https://media.istockphoto.com/photos/smiling-male-cook-on-gray-background-picture-id1300835557?b=1&k=20&m=1300835557&s=170667a&w=0&h=I4zIwBHR2MppJiL2w-uLl9AUEwQ2Llq3tXuOY6ha28g=" alt="">
              
            <p style="font-weight: bold; font-family:Georgia, 'Times New Roman', Times, serif; margin-left:70px; padding-top:10px;"> John Smooth</p>
              <small class="chef"> Restaurant Chef</small>

          
         </div>

     </div>
     <div class="row">
         <div class="col-lg-4">
         <img style="justify-content: space-between; height:240px;" class="picbelow" src="https://media.istockphoto.com/photos/beautiful-chef-working-in-a-kitchen-at-a-restaurant-picture-id1142230160?b=1&k=20&m=1142230160&s=170667a&w=0&h=EA0EwOAb0mQHhp0CWlZe4g3sVsAK3W__gIYb8jxTkJU=" alt="">
            <p style="font-weight: bold; font-family:Georgia, 'Times New Roman', Times, serif; margin-left:70px; padding-top:10px;"> Miley craighings</p>
              <small class="chef"> Head Chef</small>
         </div>

     </div>
     <div class="row">
         <div class="col-lg-4">
         <img style="justify-content: space-between; height:240px;" class="picbelow" src="https://media.istockphoto.com/photos/smiling-chef-with-cut-vegetables-in-kitchen-picture-id690761112?b=1&k=20&m=690761112&s=170667a&w=0&h=KyK7_6Up1HWeeWj7UI1D1jj3eKdtHjgIiW-43UXQY3o=" alt="">
            <p style="font-weight: bold; padding-left:10px; font-family:Georgia, 'Times New Roman', Times, serif; margin-left:70px; padding-top:10px;"> Jessy Jefferson</p>
              <small class="chef"> Lead Chef</small>

           
         </div>

     </div>

     
     
     

 </div>

<!-- end second container -->


     
    

        




  </main>
         <!-- main ends here -->
         <!-- footer -->
  <footer >
        <?php 
        
        include('./footer/footer.php'); 
        ?>

    </footer>
             <!-- footer -->

</body>
</html>