<?php

$Hewan = [
    [
      "NAMA HEWAN" => "SINGA",
      "POSTUR TUBUH" => "BESAR",
      "TEMPAT TINGGAL " => "AFRIKA",
      "MAKANAN YANG DISUKAI" => "DAGING",
      "WATAK" => "GALAK DAN SOMBONG"
      "gambar" => "OIP.jpg"
    ]
 ];

$Film = [
    [
        "JUDUL FILM" => "DARAH BIRU AREMA",
        "SUTRADARA" => "TAUFAN AGUSTYAN",
        "ASAL FILM" => "MALANG,JAWA TIMUR",
        "PEMAIN FILM" => "JABAL NUR FATHI(DONI),ANAMDA ANGUN LESTRAI(LESTARI),DLL",
        "PENAYANGAN" => "BIOSKOP DAN MEDIA ONLINE FILM",
        "gambar" => "donwload.jpg"
    
    ]

];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEWAN</title>
</head>

<body>
    <h1>hewan</h1>
    <?php foreach ($hewan as $hwn) : ?>
    <ul>
        <li>
            <img src="img/<?= $hwn["gambar"] ;?>">
        </li>
        <li>NAMA HEWAN : <?= $hwn["NAMA HEWAN"]; ?></li>
        <li>POSTUR TUBUH : <?= $hwn["POSTUR TUBUH"]; ?></li>
        <li>TEMPAT TINGGAL : <?= $hwn["TEMPAT TINGGAL"]; ?></li>
        <li>MAKANAN YANG DISUKAI : <?= $hwn["MAKANAN YANG DISUKAI"]; ?></li>
        <li>WATAK : <?= $hwn["WATAK"]; ?></li>
    
</body>
<h1>hewan</h1>
    <?php foreach ($FILM as $filem) : ?>
    <ul>
        <li>
            <img src="img/<?= $filem["gambar"] ;?>">
        </li>
        <li>JUDUL FILM : <?= $filem["JUDUL FILM"]; ?></li>
        <li>SUTRADARA : <?= $filem["SUTRADARA"]; ?></li>
        <li>ASAL FILM : <?= $filem["ASAL FILM"]; ?></li>
        <li>PEMAIN FILM : <?= $filem["PEMAIN FILM"]; ?></li>
        <li>PENAYANGAN : <?= $filem["PENAYANGAN"]; ?></li>
</html>