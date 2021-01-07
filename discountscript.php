<?php 
    if(!array_key_exists('submit', $_POST)){
        header('Location: http://localhost/beadando/insertdiscount.php');
    }
    
    $valid = true;
    if(!array_key_exists('name', $_POST) || empty($_POST['name'])){
        $valid = false;
        echo "A név mező üres!";
    }

    if(!array_key_exists('price', $_POST) || empty($_POST['price'])){
        $valid = false;
        echo "Az ár mező üres!";
    }
    
    if(!array_key_exists('offer', $_POST) || empty($_POST['offer'])){
        $valid = false;
        echo "Az kedvezmény mező üres!";
    }

    if(!array_key_exists('discountprice', $_POST) || empty($_POST['discountprice'])){
        $valid = false;
        echo "A kedvezményes ár mező üres!";
    }
    
    if(!$valid){
        $postBack = $_POST;
        require 'insertdiscount.php';
    }
    
    
    
    
    else{
        $query = "INSERT INTO specialofferproduct(name, price, offer, discountprice) "
               . "VALUES (:name, :price, :offer, :discountprice);";
        $params = [
            'name' =>  $_POST['name'],
            'price'  =>  $_POST['price'],
            'offer'  =>  $_POST['offer'],
            'discountprice'  =>  $_POST['discountprice'],
            
        ];
        require_once './protected/database.php';
        $success = insert($query, $params);
        
        if($success){
            header('Location: http://localhost/beadando/admindiscount.php');
        }
        else{
            echo "Sikeretelen rögzítés!";
        }
    }