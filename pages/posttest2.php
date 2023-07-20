<?php
session_start();
if (isset($_SESSION['gender'], $_SESSION['age'], $_SESSION['date'], $_SESSION['ever'])) {

      $url = 'https://api.healthserv.gistnu.nu.ac.th/surveys/submit-survey';  

      $dateTime = new DateTime($_SESSION['date']);
        $formattedDateTime = $dateTime ->format('Y-m-d\TH:i:s.000\Z');

    $data = [
        'sex' => $_SESSION['gender'],
        'answerer' => 'I am',
        'age' => (int)$_SESSION['age'],
        'date_time' => $formattedDateTime,
        'countEver' => $_SESSION['ever']
    ];

    // Sending JSON data using cURL

    $jsonData = json_encode($data);

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json'
    ]);

    $response = curl_exec($ch);

    if ($response === false) {
        echo 'Error: ' . curl_error($ch);
    } else {
        // echo 'Response from API:<br>';
        echo $response. "<br>";
        // echo $_SESSION['gender']. "<br>";
        // echo $_SESSION['age']. "<br>";
        // echo $_SESSION['date']. "<br>";
        // echo $_SESSION['ever'];

    }

    curl_close($ch);

    // Clear session data after processing
    session_unset();
    session_destroy();
} else {
    echo "Data is missing. Please go back and fill in all required fields.";
}

?>
