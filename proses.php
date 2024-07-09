<?php

$formData = [];

function validateInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

echo "<table border='1' style='width: 50%; margin: 20px auto; border-collapse: collapse;'>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formData['nama'] = validateInput($_POST['nama']);
    $formData['alamat'] = validateInput($_POST['alamat']);
    $formData['nomor'] = validateInput($_POST['nomor']);
    $formData['email'] = validateInput($_POST['email']);
    $formData['message'] = validateInput($_POST['message']);

    echo "<h2 style='text-align: center;'>Data Terkirim:</h2>";
    echo "<tr><td><strong>Nama:</strong></td><td>" . $formData['nama'] . "</td></tr>";
    echo "<tr><td><strong>Alamat:</strong></td><td>" . $formData['alamat'] . "</td></tr>";
    echo "<tr><td><strong>Nomor Telepon:</strong></td><td>" . $formData['nomor'] . "</td></tr>";
    echo "<tr><td><strong>Email:</strong></td><td>" . $formData['email'] . "</td></tr>";
    echo "<tr><td><strong>Pesan:</strong></td><td>" . $formData['message'] . "</td></tr>";
} else {
    echo "<tr><td colspan='2' style='text-align: center;'>Tidak ada data yang dikirim!</td></tr>";
}
echo "</table>";

echo "<div style='text-align: center;'><a href='index.html'>Klik Disini</a> Kembali Ke Menu Awal</div>";

?>
