<?php
require 'vendor/autoload.php';
define('ROOT', __DIR__);

$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465)
    ->setUsername('yrybyak@gmail.com')
    ->setPassword('')
    ->setEncryption('ssl');
$mailer = Swift_Mailer::newInstance($transport);
$app = new \Slim\Slim;

$app->config([
    'debug' => true,
    'templates.path', 'templates',
]);

$app->get('/', function () use ($app) {
    $app->render('main.php');
});

$app->get('/hello', function () use ($app) {
    $request = $app->request();
    $name = $request->params('name');
    $app->render('hello.php', ["name" => $name]);
});

$app->get('/rate', function () use ($app) {
    $request = $app->request();
    $rating = $request->params('stars');
    $app->render('rate.php', ["rating" => $rating]);
});

$app->get('/database', function () use ($app) {
    require_once('lib/db.php');
    $app->render('database.php', ["users" => all_users()]);
});

$app->get('/test', function () use ($app) {
    $app->render('test.php');
});

$app->post('/test', function () use ($app, $mailer) {

    $request = $app->request();
    $body = $request->getBody();
    $answers = explode("&", $body);
    $app->render('test.php', ["answers" => $answers]);

    //email block
    $resultEmail = $app->view->fetch('email/test.php');
    $message = Swift_Message::newInstance('Результат тестирования')
        ->setFrom(['y.rybyak@gmail.com' => 'robomail'])
        ->setTo('y4@miritec.com')
        ->setBody($resultEmail)
        ->setContentType("text/html");
    $mailer->send($message);
});

$app->run();