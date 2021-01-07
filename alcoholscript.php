<?php 
    if(!array_key_exists('submit', $_POST)){
        header('Location: http://localhost/beadando/insertalcohol.php');
    }
    
    $valid = true;
    if(!array_key_exists('name', $_POST) || empty($_POST['name'])){
        $valid = false;
        echo "A név mező üres!";
    }

    if(!array_key_exists('stock', $_POST) || empty($_POST['stock'])){
        $valid = false;
        echo "Az darabszám mező üres!";
    }
    
    if(!array_key_exists('price', $_POST) || empty($_POST['price'])){
        $valid = false;
        echo "Az ár mező üres!";
    }
    
    if(!$valid){
        $postBack = $_POST;
        require 'insertalcohol.php';
    }
    
    
    
    
    else{
        $query = "INSERT INTO alcohols(name, stock, price) "
               . "VALUES (:name, :stock, :price);";
        $params = [
            'name' =>  $_POST['name'],
            'stock'  =>  $_POST['stock'],
            'price'  =>  $_POST['price']
        ];
        
        require_once './protected/database.php';
        $success = insert($query, $params);
        
        if($success){
            header('Location: http://localhost/beadando/adminalcohols.php');
        }
        else{
            echo "Sikeretelen rögzítés!";
        }
    }
