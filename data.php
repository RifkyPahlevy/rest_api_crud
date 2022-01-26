<?php
require_once('koneksi.php');

$query = 'SELECT * FROM notes ORDER BY id DESC';
$sql = mysqli_query($connect, $query);

if ($sql) {
    $result = array();
    while ($row = mysqli_fetch_array($sql)) {
        array_push($result, array(

            'id' => $row['id'],
            'konten' => $row['konten']
        ));
    }

    echo json_encode(array('result' => $result)); // mengubah ke dalam format json
}
