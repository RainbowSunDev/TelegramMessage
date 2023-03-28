<?php
require(__DIR__ . '/app/socket.php');
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use MyApp\Socket;

require dirname( __FILE__ ) . '/vendor/autoload.php';
require(__DIR__ . '/db-config.php');

$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new Socket($conn)
        )
    ),
    8080
);

$server->run();
?>