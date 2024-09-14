<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$tmdbApiKey = $_ENV['TMDB_API_KEY'];
$tmdbBaseUrl = 'https://api.themoviedb.org/3/';

$client = new Client(['base_uri' => $tmdbBaseUrl]);

$requestUri = $_SERVER['REQUEST_URI'];
$requestUri = empty($requestUri) || $requestUri === '/' ? 'movie/popular' : ltrim($requestUri, '/');

try {
    $response = $client->request('GET', $requestUri, [
        'query' => ['api_key' => $tmdbApiKey]
    ]);

    header('Content-Type: ' . $response->getHeaderLine('Content-Type'));
    echo $response->getBody();
} catch (GuzzleException $e) {
    header("HTTP/1.1 500 Internal Server Error");
    echo json_encode(['error' => 'Erreur lors de la requête à l\'API TMDB: ' . $e->getMessage()]);
}

