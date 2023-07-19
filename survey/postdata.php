<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['gender']) && isset($_POST['age'])&& isset($_POST['date'])&& isset($_POST['ever'])) {
      $_SESSION['gender'] = $_POST['gender'];    
      $_SESSION['age'] = $_POST['age'];
      $_SESSION['date'] = $_POST['date'];
      $_SESSION['ever'] = $_POST['ever'];

      echo $_POST['gender'];
      echo $_POST['age'];
      echo $_POST['date'];
      echo $_POST['ever'];

      $dateTime = new DateTime($_POST['date']);
      $formattedDateTime = $dateTime ->format('Y-m-d\TH:i:s.000\Z');

// API endpoint URL
$url = 'https://api.healthserv.gistnu.nu.ac.th/surveys/submit-survey';

// Data to send
$data = [
  'sex'=> $_POST['gender'],
  'answerer'=> 'I am',
  'age'=> (int)$_POST['age'],
  'date_time'=> $formattedDateTime,
  'countEver'=> $_POST['ever']
];

// Convert data to JSON
$jsonData = json_encode($data);

// Initialize cURL
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Set the Content-Type header to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, [
  'Content-Type: application/json'
]);

// Execute the request
$response = curl_exec($ch);

// Check for errors
if ($response === false) {
  echo 'Error: ' . curl_error($ch);
}

// Close cURL
curl_close($ch);

// Process the response
if ($response) {
  // Process the API response
  echo $response;
}
}
}
  ?>