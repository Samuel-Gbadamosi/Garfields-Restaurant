<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration PAGE</title>
    <link rel="stylesheet" href="./css/styles.css"/>
      <!-- bootstrap link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- bootstrap link -->
</head>
<body>
<?php
include "config.php";

    require('./db/db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
       //USERSNAME AS (usersname)
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);

        //USERS NAME
        $name = stripslashes($_REQUEST['name']);
        $name = mysqli_real_escape_string($con,$name);

        //USERS SURNAME
        $surname = stripslashes($_REQUEST['surname']);
        $surname = mysqli_real_escape_string($con, $surname);

        //USERS ADDRESS
        $address = stripslashes($_REQUEST['address']);
        $address = mysqli_real_escape_string($con , $address);

        //USERS ZIPCODE
        $zipcode = stripslashes($_REQUEST['zipcode']);
        $zipcode = mysqli_real_escape_string($con , $zipcode);

        //USER PHONE NUMBER
        $phone = stripslashes($_REQUEST['phone']);
        $phone = mysqli_real_escape_string($con , $phone);

      //USERS PASSWORD
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
            
      //USERS EMAIL
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);

     


   $query  = "INSERT into `customer` (name , surname , address , zipcode , phone , email , username, password)
                     VALUES ('$name', '$surname', '$address' , '$zipcode'  , '$phone', '$email' ,  '$username'  ,'" . md5($password) . "')";
        $result   = mysqli_query($con, $query);
        var_dump($con->error);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='/index.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='/registeration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
   
    <section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <form class="mx-1 mx-md-4">

                <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example1c">Choose a user name :</label>
                    <input type="text" class="form-control" name="username" placeholder="Username" required />

                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example1c">Name :</label>
                    <input type="text" class="form-control" name="name" placeholder="Name" required />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example1c">Surname :</label>
                    <input type="text" class="form-control" name="surname" placeholder="Surname" required />
                    </div>
                  </div>


                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example3c"> Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Address" required />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example3c"> Zipcode</label>
                    <input type="text" class="form-control" name="zipcode" placeholder="Zipcode" required />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example3c"> Phone number :</label>
                    <input type="text" class="form-control" name="phone" placeholder="Phone" required />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example3c">Email :</label>
                    <input type="text" class="form-control" name="email" placeholder="Email" required />
                    </div>
                  </div>

                 

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example4c">Password</label>

                    <input type="password" class="form-control" name="password" placeholder="Password" required />
                    </div>
                  </div>

                


                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                     <input class="btn btn-primary" type="submit" name="submit" value="Register" class="login-button"> 

                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://media.istockphoto.com/photos/welcome-reception-picture-id623307916?b=1&k=20&m=623307916&s=170667a&w=0&h=2xhG60SL1TgYkxa94_sPCpeZ7eGlXplf-2qoucWvZ8E=" class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
    }
?>
</body>
</html>