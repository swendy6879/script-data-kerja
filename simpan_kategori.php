<?php
// Menerima data JSON dari JavaScript
$inputData = file_get_contents('php://input');

if ($inputData) {
    // Menyimpan data secara permanen ke dalam file text/JSON di server
    file_put_contents('kategori_tersimpan.json', $inputData);
    echo json_encode(["status" => "sukses"]);
} else {
    echo json_encode(["status" => "gagal", "pesan" => "Tidak ada data"]);
}
?>
