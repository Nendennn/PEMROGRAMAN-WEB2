<?php
    $mahasiswa = ['Nenden', 'Nur', 'Himami'];
    echo $mahasiswa[0];
    echo '_';
    echo $mahasiswa[1];
    echo '_';
    echo $mahasiswa[2];
    echo '<br>';
    echo '<br>';
    //foreach
    foreach($mahasiswa as $nama){
        echo $nama;
    }
    //multidimention
    $mahasiswa = [
        ["nama" => "Nenden", "nim" => "0110221214", "Uts" => 100, "Uas" => 80],
        ["nama" => "Nur", "nim" => "0110221215", "Uts" => 70, "Uas" => 50]
    ];

    foreach($mahasiswa as $mhs){
        echo $mhs["nama"];
    };

?> 