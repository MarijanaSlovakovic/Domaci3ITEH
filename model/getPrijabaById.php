<?php
require 'dbBroker.php';
require 'model/prijava.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $prijava = Prijava::getById($id, $conn);
    echo json_encode($prijava);
}
?>