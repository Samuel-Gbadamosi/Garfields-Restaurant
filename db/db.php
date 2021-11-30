<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant";



// Create connection database
function createConnection()
{
    
    global $servername,$username ,$password,$dbname ;
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
   
     return $conn;
}

//to fetch restaurant details
function getRestaurant()
 {

     $conn = createConnection();

     $sql2 = "SELECT * FROM ristorante";
     $restaurant =  $conn->query($sql2);

     closeConnection($conn);

     return $restaurant;

 }

 //to fetch all customers
 function getCustomer(){
     $conn = createConnection();

     $sql2 = "SELECT * FROM customer";
     $customer = $conn->query($sql2);

     closeConnection($conn);

     return $customer;
 }

 function getfoodItem(){
     
    $conn = createConnection();

    $sql2 = "SELECT * FROM food_item";

    $foodItem = $conn->query($sql2);

    
    closeConnection($conn);

    return $foodItem;

 }

 function foodOrders(){

    $conn = createConnection();

    $sql2 = "SELECT * FROM order_item ";

    $orderItem = $conn->query($sql2);
    closeConnection($conn);

    return $orderItem;
 }

 
 function deleteFoodBooked($id){

    $conn = createConnection();

    $sql2 = "SELECT * FROM order_item WHERE id = '$id'";

    $deletefood = $conn->query($sql2);

    if($deletefood){
        echo 'record deleted';
    }else{
        die('record is not dleeted isis query error.' .mysqli_error($id));
    }

    closeConnection($conn);

    return $deletefood;
 }


 function getfoodBooked(){

    $conn = createConnection();

    $sql2 = "SELECT *, order_item.id as orderItemId
     FROM order_item
    INNER JOIN food_orders
    on order_item.id_orders = food_orders.id
    INNER JOIN food_item
    on food_item.id = order_item.food_item_id";

    $jointables = $conn->query($sql2);

    closeConnection($conn);

    return $jointables;
 }

// when created an inner join and we want to get the name from the id, we have to check the inner joins and point it out there in html 'cutomer_id'
 function getUserFromId($id){

    $conn = createConnection();

    $sql2 = "SELECT name from customer Where id = $id";
    $user = $conn->query($sql2);

    $result = $user->fetch_row()[0];

    closeConnection($conn);

    return $result;
 }





function closeConnection($conn)
{
    $conn->close();
}



?>