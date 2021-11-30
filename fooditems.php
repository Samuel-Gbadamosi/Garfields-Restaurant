<?php

require_once "./db/db.php";


function getFoodItem(){
    $conn = createConnection();

    $query = "SELECT * FROM food_item";
    $result = $conn->query($query);

    $foodItems = array();

    while($item = $result->fetch_assoc()){
        array_push($foodItems, new food_item($item["id"] , $item["food_name"] , $item["food_price"] , $item["food_description"] ,$item["food_image"]));
    }

    closeConnection($conn);

    return $foodItems;
}

class food_item{

    protected $id;
    protected $food_name;
    protected $food_price;
    protected $food_description;


    public function __construct(int $id , string $food_name , int $food_price , string $food_description)
    {
        $this->$id = $id;
        $this->$food_name = $food_name;
        $this->$food_price = $food_price;
        $this->$food_description = $food_description;
    }

    public function getFood_name() : string
    {
        return $this->getFood_name;
    }

    public function getFood_price() : int
    {
        return $this->getFood_price;
    }

    public function getFood_description() : string
    {
        return $this->getFood_description;
    }

    public function setFood_name(string $food_name){
        $this->food_name = $food_name;
    }

    public function setFood_price(string $food_price){
        $this->food_price = $food_price;
    }

    public function setFood_description(string $food_description){
        $this->food_description = $food_description;
    }


    
    

}










?>