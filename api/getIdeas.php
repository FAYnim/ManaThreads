<?php
// api/getIdeas.php

header('Content-Type: application/json');

// Ambil niche yang dikirim dari form
$niche = $_POST['niche'] ?? 'topik umum';

// Daftar ide bohongan
$dummy_ideas = [
    "3 tips memulai di bidang $niche.",
    "Kesalahan umum yang harus dihindari saat mendalami $niche.",
    "Review singkat tentang hal baru di dunia $niche.",
    "Mitos vs Fakta seputar $niche.",
    "Ceritakan pengalaman pribadimu terkait $niche."
];

// Kirim respons sukses beserta ide-ide di atas
echo json_encode([
    'status' => 'success',
    'ideas' => $dummy_ideas
]);
?>
