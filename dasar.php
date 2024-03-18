<?php

    //variabel
    $nama = "Eggi";
    $umur = 16;
    $siswa = array('Ega', 'Eggi', 'Jendra'); //Array

    // petik 2 dianggap isi dari variabel yang ada di dalam tanda petik 2, petik 1 dianggap string

    echo "<h1>Nama saya : Eggi Mugi</h1>";
    echo '<br>';
    echo 'Nama saya: '.$nama;
    echo '<br>';
    echo "$umur";
    echo '<br>';

    // Array
    echo $siswa[0].'<br>'.$siswa[1].'<br>'.$siswa[2];
    echo '<br>';
    echo "$siswa[0]<br>$siswa[1]<br>$siswa[2]";
    echo '<br>';

    //Perulangan & kondisi
    for($i = 0; $i < count($siswa); $i++){
        if($siswa[$i] == 'Jendra'){
            echo $siswa[$i].'<br>';
        }
        else {
            echo 'Index ke-'.$i.' bukan Jendra<br>';
        }
    }

    // Function
    function cariSiswa($data, $nama){
        for($x = 0; $x < count($data); $x++){
            if($data[$x] == $nama){
                echo 'Data '.$data[$x].' ditemukan di index ke-'.$x;
                break;
            }
        }
    }

    // panggil fungsi 
    cariSiswa($siswa, "Jendra");    

?>
