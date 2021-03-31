<?php
    require 'Tabung.php';

    $Tabung = new Tabung ;
    // if (!empty($_POST)){
        // if (isset($_POST['Submit'])) {
        //     if (strlen($_POST['diameter']) > 0) {
        //         echo "login !";
        //     } else {
        //         echo "Diisi dahulu";
        //     }
        // }
    // }
    $luas=0;
    $volume=0;
    // if (isset($_POST['btn_submit'])) {
    //     $diameter=$_POST['diameter'];
    //     $tinggi=$_POST['tinggi'];

    //     $r=$diameter/2;
    //     $luas=2*3.14*$r*$tinggi;
    //     $volume=3.14*$r*$r*$tinggi;

    //     echo "Diameter $diameter <br/>";
    //     echo "Tinggi $tinggi <br/>";
    // }
    if (isset($_POST['btn_submit'])) {
        $tabung->setDiameter($_POST['diameter']);
        $tabung->setTinggi($_POST['tinggi']);
        $tabung->hitungLuas();

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="" method="POST">
        <input type="text" name="diameter" value="">
        <button name="Submit">Submit</button>
    </form> -->
    <form action="" method="POST">
        <label for="">Diameter Alas</label>
        <input type="text" name="diameter"> <br>
        <label for="">Tinggi Tabung</label>
        <input type="text" name="tinggi"> <br><br>
        <button name="btn_submit">Hitung</button>

        <hr>

    </form>
        <ul>
            <li>Luas Selimut : <?= echo $tabung->getLuasSelimut(); ?> </li>
            <li>Volume : <?= $volume ?></li>
        </ul>
</body>
</html>