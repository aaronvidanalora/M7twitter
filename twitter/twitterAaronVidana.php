<?php
ini_set('display_errors', 1);
require_once('TwitterAPIExchange.php');
require_once('database_connection.php');
require_once('class.twitterData.php');

$settings = array(
    'oauth_access_token' => "",
    'oauth_access_token_secret' => "",
    'consumer_key' => "",
    'consumer_secret' => ""
);

$url = 'https://publish.twitter.com/oembed';
$getfield = '?url=https://twitter.com/Interior/status/507185938620219395';
$requestMethod = 'GET';

$twitter = new TwitterAPIExchange($settings);
$respuesta = $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();

$data = json_decode($respuesta, true);
$Information1 = $data['url']; // Accede a la clave 'url' para obtener la información 1
$Information2 = $data['author_name']; // Accede a la clave 'author_name' para obtener la información 2
$Information3 = $data['author_url']; // Accede a la clave 'author_url' para obtener la información 3
$type = $data['type']; // Accede a la clave 'type' para obtener el tipo

$objDatos = new TwitterData($connect);
$objDatos->setInformation1($Information1);
$objDatos->setInformation2($Information2);
$objDatos->setInformation3($Information3);
$objDatos->setPhoto($type);
$objDatos->save();

echo "URL: $Information1 <br>";
echo "Author Name: $Information2 <br>";
echo "Author URL: $Information3 <br>";
echo "HTML: $type <br>";
?>
