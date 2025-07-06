<?php
// api/saveDraft.php

// Set header agar browser tahu bahwa ini adalah respons JSON
header('Content-Type: application/json');

// Cek apakah ada data yang dikirim dengan metode POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil konten yang dikirim dari JavaScript
    $konten = $_POST['content'] ?? '';

    if (!empty($konten)) {
        $file_path = '../data/drafts.json';
        
        // Baca data lama dari file
        $drafts_json = file_get_contents($file_path);
        // Ubah teks JSON menjadi array PHP
        $drafts_array = json_decode($drafts_json, true);

        // Buat draft baru
        $new_draft = [
            'id'        => uniqid(), // ID unik untuk setiap draft
            'content'   => $konten,
            'timestamp' => date('Y-m-d H:i:s') // Waktu saat draft dibuat
        ];

        // Tambahkan draft baru ke dalam array
        $drafts_array[] = $new_draft;

        // Ubah kembali array PHP menjadi teks JSON yang rapi
        $new_drafts_json = json_encode($drafts_array, JSON_PRETTY_PRINT);

        // Simpan kembali ke file
        file_put_contents($file_path, $new_drafts_json);

        // Kirim respons sukses ke JavaScript
        echo json_encode(['status' => 'success', 'message' => 'Draft berhasil disimpan!']);
    } else {
        // Kirim respons error jika tidak ada konten
        echo json_encode(['status' => 'error', 'message' => 'Konten tidak boleh kosong.']);
    }
} else {
    // Kirim respons error jika metode bukan POST
    echo json_encode(['status' => 'error', 'message' => 'Metode tidak diizinkan.']);
}
?>
