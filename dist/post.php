<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['gender']) && isset($_POST['age']) && isset($_POST['date']) && isset($_POST['ever'])) {
    $_SESSION['gender'] = $_POST['gender'];
    $_SESSION['age'] = $_POST['age'];
    $_SESSION['date'] = $_POST['date'];
    $_SESSION['ever'] = $_POST['ever'];

    $dateTime = new DateTime($_POST['date']);
    $formattedDateTime = $dateTime->format('Y-m-d\TH:i:s.000\Z');

    $url = 'https://api.healthserv.gistnu.nu.ac.th/surveys/submit-survey';
    $data = [
      'sex' => $_POST['gender'],
      'answerer' => 'I am',
      'age' => (int)$_POST['age'],
      'date_time' => $formattedDateTime,
      'countEver' => $_POST['ever']
    ];

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
    }

    curl_close($ch);

    if ($response) {
      echo $response;
    }
  }
}
?>
