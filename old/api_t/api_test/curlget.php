<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$ch=curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.healthserv.gistnu.nu.ac.th/surveys',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
      'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6ImJvb256YTc3IiwiaWF0IjoxNjg5NTc5MTkyLCJleHAiOjE2ODk1ODI3OTJ9.BqqeHoP9Us8xsRpUaiXxySJ3jfGJ4bGtiVdehqMyqDQ'
    ),
  
  ));
  $response = curl_exec($curl);
  if($e = curl_exec($ch)){
    echo $e;
}
else{
    $decoded =json_decode($resp, true);
    print_r($decoded);
}

curl_close($ch);

?>
</body>
</html>

