<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/img/favicon.ico" type="image/x-icon"/>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <title>Test</title></head>
<body><?php include 'navbar.php'?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <?php
            if (isset($answers)) {
                include(__DIR__ . '../../lib/answers.php');
                //print"<pre>";
                //var_dump($answers);
                //print"</pre>";
                //print"<pre>";
                //var_dump($rightAnswers);
                //print"</pre>";
                $wronganswers = 0;
                $wrongquestions = [];
                foreach($rightAnswers as $key => $value) {
                    if($value != $answers[$key]) {
                        $wronganswers += 1;
                        $wrongquestions[] = $key;
                    }
                }
                print "Кол-во ошибок: " . $wronganswers . "<br />";
                print "Ошибки в ответах номер ";
                foreach ($wrongquestions as $value) {
                    print $value . ", ";
                }
            }
            else {
                include "answerForm.php";
            }
            ?>
        </div>
<?php include 'footer.php'?></body>
</html>