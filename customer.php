<?php


require_once "./db/db.php";

//getcustomers

//testing on how to create classes for customers with a get and a set
//non of this was used in this project, but this is complete way of creating a class in php without using orm

function getCustomers(){

    $conn = createConnection();

    $query = "SELECT * FROM customer";
    $result =  $conn->query($query);

    $customers = array();

    


    while($client = $result->fetch_assoc()){
        array_push($customers, new Customer($client["id"], $client["name"] , $client["surname"] , $client["address"] , $client["zipcode"] , $client["phone"] , $client["email"] , $client["username"] , $client["password"]));
    }


    closeConnection($conn);


    return $customers;
}

//class Customer
class Customer
{
    protected $id;
    protected $name;
    protected $surname;
    protected $address;
    protected $zipcode;
    protected $phone;
    protected $email;
    protected $username;
    protected $password;

    //constructor

    public function __construct(int $id ,string $name, string $surname , string $address , string $zipcode , string $phone , string $email , string $username , string $password)
    {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->address = $address;
        $this->zipcode = $zipcode;
        $this->phone = $phone;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
        
    }


//the get function
    public function getName() : string
    {
        return $this->name;
    }

    public function getSurname() : string
    {
        return $this->surname;
    }

    public function getAddress() : string
    {
        return $this->address;
    }

    public function getZipcode() : string
    {
        return $this->zipcode;
    }

    public function getPhone() : string
    {
        return $this->phone;
    }

    public function getEmail() : string
    {
        return $this->email;
    }

    public function getUsername() : string
    {
        return $this->username;
    }

    public function getPassword() : string
    {
        return $this->password;
    }

    //the set function
    public function setName(string $name){
        $this->name = $name;
    }

    public function setSurname(string $surname){
        $this->surname = $surname;
    }

    public function setAddress(string $address){
        $this->$address = $address;
    }

    public function setZipcode(string $zipcode){
        $this->$zipcode = $zipcode;
    }

    public function setPhone(string $phone){
        $this->$phone = $phone;
    }

    public function setEmail(string $email){
        $this->$email = $email;
    }

    public function setUsername(string $username){
        $this->$username = $username;
    }

    public function setPassword(string $password){
        $this->$password = $password;
    }





}





?>