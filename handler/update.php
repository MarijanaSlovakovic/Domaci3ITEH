<?php

require 'dbBroker.php';
require 'model/prijava.php';

if (isset($_POST['submit']) && $_POST['submit'] == "izmeni" && isset($_POST['id_predmeta'])) {
    // Preuzimanje podataka iz forme
    $id = $_POST['id_predmeta'];
    $predmet = $_POST['predmet'];
    $katedra = $_POST['katedra'];
    $sala = $_POST['sala'];
    $datum = $_POST['datum'];

    // Pozivanje update() funkcije iz modela prijava
    $status = Prijava::update($id, $predmet, $katedra, $sala, $datum, $conn);

    if ($status) {
        echo "Uspešno ažurirano!";
    } else {
        echo "Ažuriranje nije uspelo!";
    }
}

?>