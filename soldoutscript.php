<?php 
    if(!array_key_exists('submit', $_POST)){
        header('Location: insertsoldout.php');
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
    
    if(!$valid){
        $postBack = $_POST;
        require 'insertsoldout.php';
    }
    
    
    
    
    else{
        $query = "INSERT INTO soldoutproduct(name, price) "
               . "VALUES (:name, :price);";
        $params = [
            'name' =>  $_POST['name'],
            'price'  =>  $_POST['price']
        ];
        
        require_once './protected/database.php';
        $success = insert($query, $params);
        
        if($success){
            header('Location: adminsoldout.php');
        }
        else{
            echo "Sikeretelen rögzítés!";
        }
    }