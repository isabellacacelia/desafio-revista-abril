<?php 
// Define o cabeçalho da requisição
$headers = array('Accept' =>
'application/json'); // Define os parâmetros a serem enviados $query =
array('foo' => 'hello', 'bar' => 'world'); // Executa a requisição, obtendo a
resposta $response =
Unirest\Request::post('https://public-api.wordpress.com/rest/v1.1/sites/109720969/posts?number=10&page=1',
$headers, $query); // A variável $response é um objeto com as seguintes
propriedades: $response->code; // Código HTTP do status da requisição
$response->headers; // Headers $response->body; // Dados retornados pela
requisição já "parseados" $response->raw_body; // Dados retornados pela
requisição em seu formato original ?>
