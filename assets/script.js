// Menunggu seluruh halaman siap sebelum menjalankan kode
$(document).ready(function() {

    // Kode JavaScript untuk interaktivitas akan ditambahkan di sini.
    // Contoh: meng-handle klik tombol, mengirim data ke server, dll.
    console.log("ManaThreads siap digunakan!");

    // Menandai menu aktif berdasarkan halaman saat ini
    const urlParams = new URLSearchParams(window.location.search);
    const page = urlParams.get('page') || 'dashboard';
    
    // Hapus class 'active' dari semua link
    $('.sidebar nav a').removeClass('active');
    
    // Tambahkan class 'active' ke link yang sesuai
    $('.sidebar nav a[href*="?page=' + page + '"]').addClass('active');

});
