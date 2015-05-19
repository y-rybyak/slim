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
            <div class="centered-text">
                <h4>Don't have an account yet? Please <a href="/registration">create</a> one.</h4>
                <?= (isset($text)) ? '<div class="alert alert-danger" role="alert">' . $text . '</div>' : "" ?>
            </div>
            <form name="loginForm" method="POST" action="login.php">
                <div class="form-group">
                    <label for="login">Login</label>
                    <input type="text" class="form-control" placeholder="Enter your login" id="login"
                           name="login">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" placeholder="Enter your password" id="password"
                           name="password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default pull-left" id="submitLogin"
                            name="submitLogin">Sign in
                    </button>
                </div>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
<?php include 'footer.php' ?>
</body>
</html>