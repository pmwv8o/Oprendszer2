<?php
require_once PROTECTED_DIR.'helper.php';
require_once './protected/config.php'; 
if(item_Exists($_POST, 'login', 1)){
    $username =$_POST['username'];
    $password=$_POST['password'];
    
    if($username=='public' && $password =='public'){
        $_SESSION['uid'] = 1;
        $_SESSION['uname']= 'Publikus felhasználó';
        header('Location:./home.php');
    }
    
    if($username=='admin' && $password =='admin'){
        $_SESSION['uid'] = 1; 
        $_SESSION['uname']= 'Admin';
        header('Location:admin.php');
    }
    else{
        echo("Rossz felhasználónév vagy jelszó.");
    }
}
?>
<h1>Jelentkezz be!</h1>
<form action="" method="POST">
    <input type="text" name="username" placeholder="Felhasznalónév"/><br/>
    <input type="password" name="password" placeholder="Jelszó"/><br/>
    <br>
    <button type="submit" name="login" value="1">Bejelentkezés</button>
</form>