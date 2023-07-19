<?php

$url="https://reqres.in/api/users";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //   if (isset($_POST['gender']) && isset($_POST['age']) && isset($_POST['date']) && isset($_POST['ever'])) {
    //     $_SESSION['gender'] = $_POST['gender'];
    //     $_SESSION['age'] = $_POST['age'];
    //     $_SESSION['date'] = $_POST['date'];
    //     $_SESSION['ever'] = $_POST['ever'];
    
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $date = $_POST['date'];
        $ever = $_POST['ever'];
$data_array = array(

    'gender' => $gender,
    'age' =>  $age,
    'date'=> $date ,
    'ever'=>$ever,
    
);

$data= http_build_query($data_array);

$ch=curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$resp =curl_exec($ch);
if($e =curl_exec($ch)){
    echo $e;
}else{
    $decoded =json_decode($resp);
    foreach($decoded as $key =>$val ){
        echo $key . ':'. $val . '<br>';
    }
}
curl_close($ch);
