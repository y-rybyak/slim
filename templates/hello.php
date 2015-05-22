<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/img/favicon.ico" type="image/x-icon"/>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <title>Hello</title>
</head>
<body>
<?php include 'navbar.php' ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <?php
            if (isset($name) AND $name != "") {
                print "<h2>Hello, " . $name . "!</h2>";
            } else {
                print "<h2>Hello! What is your name?</h2>";
                include "nameForm.php";
            }
            ?>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>
</body>
</html>