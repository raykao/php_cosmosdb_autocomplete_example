<?php
require 'vendor/autoload.php'; // include Composer's autoloader

$client = new MongoDB\Client($_ENV["COSMOSDB_URI"]);
$db = $client->demo;
$collection = $db->beers;

parse_str($_SERVER['QUERY_STRING'], $query);

$results = $collection->find([
    'brewery' => new MongoDB\BSON\Regex('^' . $query['hello'], 'i')
]);

foreach($results as $brewery => $row){
    // echo $document["brewery"], "\n";
    echo json_encode($row);
}
?>