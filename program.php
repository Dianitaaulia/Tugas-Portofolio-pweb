<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    echo "<h2 style='text-align: center;'>Informasi yang Anda Masukkan:</h2>";
    echo "<table border='1' style='width: 50%; margin: 20px auto; border-collapse: collapse;'>";
    $inputs = [
        "Bahasa Pemrogramman Yang Dikuasai" => htmlspecialchars($_POST['program']),
        "Kemahiran Perangkat Lunak" => htmlspecialchars($_POST['lunak']),
        "Kemahiran Bahasa Pemrogramman" => htmlspecialchars($_POST['bahasa']),
        "Lama Anda Mempelajari Bahasa Tersebut" => htmlspecialchars($_POST['lama']),
        "Skill Lain" => htmlspecialchars($_POST['lain']),
    ];

    foreach($inputs as $label => $value){
        echo "<tr><td style='padding: 10px; border: 1px solid #ccc;'>$label</td><td style='padding: 10px; border: 1px solid #ccc;'>$value</td></tr>";
    }
    echo "</table>";
    echo "<div style='text-align: center;'><a href='index.html'>Klik Disini</a> Kembali Ke Menu Awal</div>";
}
?>
