<?php

$jsonUrl = 'https://example.com/data.json';

// Get the JSON content from the URL
$jsonContent = ($jsonUrl);

// Convert JSON string to PHP array
$data = json_decode($jsonContent);

// Initialize an empty array to store the data objects
$dataArray = [];

// Iterate through each object in the JSON data
foreach ($data as $object) {
    // Convert the object to an associative array
    $dataItem = (array) $object;
    
    // Add the array to the data array
    $dataArray[] = $dataItem;
}

// Access the data
foreach ($dataArray as $item) {
    echo $item['property1'];
    echo $item['property2'];
    // ...
}
?>
