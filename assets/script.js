// Menunggu seluruh halaman siap sebelum menjalankan kode
$(document).ready(function() {

    // --- KODE UNTUK SIDEBAR HAMBURGER ---
    const hamburgerBtn = $('#hamburger-btn');
    const sidebar = $('.sidebar');
    const overlay = $('#sidebar-overlay');

    // Fungsi untuk membuka sidebar
    function openSidebar() {
        sidebar.addClass('active');
        overlay.addClass('active');
    }

    // Fungsi untuk menutup sidebar
    function closeSidebar() {
        sidebar.removeClass('active');
        overlay.removeClass('active');
    }

    // Ketika tombol hamburger di-klik
    hamburgerBtn.on('click', function() {
        // Cek apakah sidebar sedang aktif atau tidak
        if (sidebar.hasClass('active')) {
            closeSidebar();
        } else {
            openSidebar();
        }
    });

    // Ketika overlay di-klik, tutup sidebar
    overlay.on('click', function() {
        closeSidebar();
    });

    // Ketika link di dalam sidebar di-klik, tutup sidebar
    $('.sidebar nav a').on('click', function(){
        closeSidebar();
    });
    // --- AKHIR KODE SIDEBAR ---

    // --- KODE UNTUK GENERATE AI PAGE (TEMPERATUR SLIDER) ---
    const temperaturSlider = $('#temperatur');
    const tempValueSpan = $('#temp-value');

    if (temperaturSlider.length && tempValueSpan.length) {
        // Set initial value
        tempValueSpan.text(temperaturSlider.val());

        // Update value on slider change
        temperaturSlider.on('input', function() {
            tempValueSpan.text($(this).val());
        });
    }
    // --- AKHIR KODE GENERATE AI PAGE ---


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
