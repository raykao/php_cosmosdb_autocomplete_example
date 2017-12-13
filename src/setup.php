<?php
require 'vendor/autoload.php'; // include Composer's autoloader

$client = new MongoDB\Client($_ENV["COSMOSDB_URI"]);
$db = $client->demo;
$collection = $db->beers;

$result = $collection->insertMany([
    [ 'name' => "Alexander Keith's IPA", 'brewery' => 'Labatt Breweries Ontario' ],
    [ 'name' => 'Labatt 50 Ale', 'brewery' => 'Labatt Breweries Ontario' ],
    [ 'name' => 'Lowenbrow', 'brewery' => 'Lowenbrau Breweries' ],
    [ 'name' => 'Molson Canadian', 'brewery' => 'Molson Brewery' ],
    [ 'name' => 'Molson Export', 'brewery' => 'Molson Brewery' ],
    [ 'name' => `Marlie's Own`, 'brewery' => 'Marlies Brewery' ],
]);

$doc_ids = $result->getInsertedIds();
?>

<ul>
    <?php foreach($doc_ids as $id):?>
        <li>Inserted with Object ID <?php echo $id; ?></li>
    <?php endforeach;?>
</ul>