<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/img/favicon.ico" type="image/x-icon"/>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <title>Rate</title>
</head>
<body>
<?php include 'navbar.php' ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h2>Please rate the application.</h2>
            <?php
            print (isset($rating)) ? "Your rate is $rating. Thank you." : "";
            ?>
            <form name="nameForm" method="GET" action="/rate">
                <div class="radio">
                    <label>
                        <input type="radio" name="stars" id="1" value="1">
                        1 star
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="stars" id="2" value="2">
                        2 stars
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="stars" id="3" value="3">
                        3 stars
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="stars" id="4" value="4">
                        4 stars
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="stars" id="5" value="5">
                        5 stars
                    </label>
                </div>
                <button type="submit" class="btn btn-default">Rate</button>
            </form>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>
</body>
</html>