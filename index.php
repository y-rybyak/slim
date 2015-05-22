<?php
require 'vendor/autoload.php';
define('ROOT', __DIR__);

$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465)
    ->setUsername('yrybyak@gmail.com')
    ->setPassword('6710omne8864padmehuM')
    ->setEncryption('ssl')
;
$mailer = Swift_Mailer::newInstance($transport);
$app = new \Slim\Slim;

$app->config(array(
    'debug' => true,
    'templates.path', 'templates',
));

$app->get('/', function () use ($app) {
    $app->render('main.php');
});

$app->get('/hello', function () use ($app) {
    $request = $app->request();
    $name = $request->params('name');
    $app->render('hello.php', ["name"=>$name]);
});

$app->get('/rate', function () use ($app) {
    $request = $app->request();
    $rating = $request->params('stars');
    $app->render('rate.php', ["rating"=>$rating]);
});

$app->get('/database', function () use ($app) {
    require_once('lib/db.php');
    $app->render('database.php', ["users"=>all_users()]);
});

$app->get('/test', function () use ($app) {
    $app->render('test.php');
});

$app->post('/test', function () use ($app, $mailer) {

    $request = $app->request();
    $body = $request->getBody();
    $answers = explode("&", $body);

    //email block
    $welcomeEmail = $app->view->fetch('email/test.php');
    $message = Swift_Message::newInstance('Результат тестирования')
        ->setFrom(array('y.rybyak@gmail.com' => 'robomail'))
        ->setTo(array('y4@miritec.com' => 'You'))
        ->setBody($welcomeEmail)
        ->setContentType("text/html");
    //print $results =
    //$mailer->send($message);

    $app->render('test.php', ["answers"=>$answers]);
});

$app->run();