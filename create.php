<?php
require_once('koneksi.php');

$note = isset($_POST['note']) ? $_POST['note'] : '';
$query = "INSERT INTO notes(note) values('$note')";
$sql = mysqli_query($connect, $query);

if ($sql) {


    echo json_encode(array('message' => 'created')); // mengubah ke dalam format json
} else {
    echo json_encode(array('message' => 'Error')); // mengubah ke dalam format json
}
