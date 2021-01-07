<?php require_once './protected/config.php'; ?>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
    <title>Beadandó</title>
    </head>
    <body>
        <center>
            <button onclick="location.href = 'home.php';">FELHASZNÁLÓ</button><br>   
            <button onclick="location.href = 'admin.php';">ADMIN</button>
          
        </center>
    </body>
</html>
