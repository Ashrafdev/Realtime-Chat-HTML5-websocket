<?php
use Ratchet\Server\IoServer;
use MyApp\Chat;
use Ratchet\WebSocket\WsServer;
use Ratchet\Http\HttpServer;

require __DIR__ . '/../vendor/autoload.php';


$server = IoServer::factory(new HttpServer(new WsServer(new Chat())), 8080);
$server->run();