<?php
header('Content-Type: application/json;');
$url = 'https://www.cskh.evnspc.vn/TraCuu/GetThongTinLichNgungGiamMaKhachHang?tuNgay=29-05-2023&denNgay=04-07-2023&ChucNang=MaDonVi&madvi=PB0501';

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

$html = curl_exec($ch);

if(curl_errno($ch)) {
    echo 'Lỗi: ' . curl_error($ch);
}

curl_close($ch);

$dom = new DOMDocument();

libxml_use_internal_errors(true);

// Load chuỗi HTML
$dom->loadHTML($html);

$table = $dom->getElementsByTagName('table')->item(0);
$thead = $table->getElementsByTagName('thead')->item(0);
$tbody = $table->getElementsByTagName('tbody')->item(0);

$headers = array();
foreach ($thead->getElementsByTagName('th') as $header) {
    $headers[] = $header->textContent;
}

$rows = array();
foreach ($tbody->getElementsByTagName('tr') as $row) {
    $rowData = array();
    foreach ($row->getElementsByTagName('td') as $key => $cell) {
        $rowData[$headers[$key]] = $cell->textContent;
    }
    $rows[] = $rowData;
}

$data['items'] = $rows;

$json = json_encode($data, JSON_UNESCAPED_UNICODE);

echo $json;
?>