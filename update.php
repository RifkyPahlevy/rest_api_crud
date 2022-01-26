<?php
require_once('koneksi.php');
// karena put tidak ada maka harus import ini.
// $put bisa dinamakan apa saja

parse_str(file_get_contents('php://input'), $put);

$id = isset($put['id']) ? $put['id'] : '';
$note = isset($put['note']) ? $put['note'] : '';

$query = "UPDATE notes SET note = '$note' WHERE id = '$id'";
$sql = mysqli_query($connect, $query);

if ($sql) {


    echo json_encode(array('message' => 'UPDATED')); // mengubah ke dalam format json
} else {
    echo json_encode(array('message' => 'Error')); // mengubah ke dalam format json
}
