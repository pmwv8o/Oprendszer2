<?php
require_once './protected/database.php';
    $query = "SELECT * FROM soldoutproduct ORDER BY id;";
    $records = select($query);
    $delivery = "SELECT * FROM delivery ORDER BY id;";
    $szallitas = select($delivery);
    ?>
<html>
<head>
<meta charset ="UTF-8"/>
</head>
<title>Főoldal</title>
<link href="style.css" rel="stylesheet">
<body>
    <!-- <div style="background-image: url('hatter.png');"> -->
<ul>
	<li><a href="home.php" href="#home">Főoldal</a></li>
	<li><a href="alcohols.php">Alkoholok</a></li>
        <li><a href="discount.php">Kedvezményes Termékek</a></li>
        <li><a class="active">Elfogyott Termékek</a></li>
	<li><a href="softdrinks.php">Üdítők</a></li>
        <li><a href="index.php?logout">Kijelentkezés</a></li>
</ul>
        <div style="margin-left:25%; margin-right:10%; padding:1px 16px;height:1000px;">
            <h1>Elfogyott Termékek</h1>
            <br>
            <center>
        <table class="italok">
        <thead>
            <tr>
                <th>Név</th>
                <th>Ár</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($records as $record): ?>
            <tr>
                <td><?=$record['name']?></td>
                <td><?=$record['price']?> Ft</td>
            </tr>
            <?php endforeach;?>
        </tbody>
        </table>
              
      <table class="szallitas">
        <thead>
            <th colspan="10">Szállítás</th>
            <tr>
                <th>Név</th>
                <th>Ár</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($szallitas as $record): ?>
            <tr>
                <td><?=$record['name']?></td>
                <td><?=$record['price']?> Ft</td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
                </center>
        </div>
</body>
</html>

