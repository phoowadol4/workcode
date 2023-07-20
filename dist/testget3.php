<?php
// API endpoint URL
$url = 'https://api.healthserv.gistnu.nu.ac.th/surveys';

$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6ImJvb256YTc3IiwiaWF0IjoxNjg5NzU2OTMyLCJleHAiOjE2ODk3NjA1MzJ9.Xm4mRQKsScTOq55hoMxWszoqTMNpN9bRHr03UiWi_0c'
  ]);

// Execute the request
$response = curl_exec($ch);

// Check for errors
if ($response === false) {
    echo 'Error: ' . curl_error($ch);
    exit();
}

// Close cURL
curl_close($ch);

// Decode JSON response to an array
$dataArray = json_decode($response, true);

// Check if JSON decoding was successful
if ($dataArray === null) {
    echo 'Error: Unable to parse JSON response.';
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Surveys Data</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h1>Surveys Data</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>เพศ</th>
                <th>answerer</th>
                <th>อายุ</th>
                <th>วันที่มาใช้บริการ</th>
                <th>ท่านมาใช้บริการที่นี่ครั้งแรก</th>
                <!-- Add more table headers for other fields in the JSON data -->
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($dataArray['result'] as $survey) {
                echo '<tr>';
                echo '<td>' . $survey['id'] . '</td>';
                echo '<td>' . $survey['sex'] . '</td>';
                echo '<td>' . $survey['answerer'] . '</td>';
                echo '<td>' . $survey['age'] . '</td>';
                echo '<td>' . $survey['date_time'] . '</td>';
                echo '<td>' . $survey['countEver'] . '</td>';
                // Add more cells for additional fields in the JSON data
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</body>
</html>
