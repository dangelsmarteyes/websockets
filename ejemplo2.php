<?php

$direccion = gethostbyname("192.168.1.10");
// Creamos la conexión socket:
$cliente = stream_socket_client("tcp://$direccion:5025", $errno, $errorMessage);
if ($cliente === false) {
    throw new UnexpectedValueException("Failed to connect: $errorMessage");
}
// Escribimos en el socket la petición HTTP:
// fwrite($cliente, "GET / HTTP/1.0\r\nHost: 127.0.0.1\r\nAccept: /\r\n\r\n");
fwrite($cliente, "hola desde php");
echo stream_get_contents($cliente);
// fclose($cliente);

?>