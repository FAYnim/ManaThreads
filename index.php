<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ManaThreads</title>
    <!-- Hubungkan ke file CSS -->
    <link rel="stylesheet" href="assets/style.css">
    <script src="https://kit.fontawesome.com/6ae1bb73d0.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="app-container">
        <div class="sidebar-overlay" id="sidebar-overlay"></div>
        <?php include 'includes/header.php'; ?>
        <?php include 'includes/sidebar.php'; ?>
        
        <main class="content">
            <?php
            // Logika untuk menampilkan halaman berdasarkan URL
            // Contoh: localhost/manathreads/index.php?page=draft
            $page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

            // Daftar halaman yang diizinkan
            $allowed_pages = ['dashboard', 'draft', 'ide', 'generate'];

            if (in_array($page, $allowed_pages)) {
                // Jika halaman ada di daftar, muat filenya
                include 'views/' . $page . '.php';
            } else {
                // Jika tidak, tampilkan halaman utama (dashboard)
                include 'views/dashboard.php';
            }
            ?>
        </main>

        <?php include 'includes/footer.php'; ?>
    </div>

    <!-- Hubungkan ke jQuery dan file JavaScript -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="assets/script.js"></script>
</body>
</html>
