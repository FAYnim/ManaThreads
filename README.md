# 📱 ManaThreads

ManaThreads adalah sebuah aplikasi web sederhana yang dirancang untuk membantu pengguna media sosial Threads dalam mengelola konten mereka. Aplikasi ini menyediakan fitur untuk membuat draft, mencari ide konten, hingga menghasilkan tulisan menggunakan bantuan AI (Gemini AI).

Proyek ini dibuat dengan fokus pada kesederhanaan, *mobile-first*, dan kemudahan bagi pemula untuk memahami alur kerja aplikasi web modern (Frontend + Backend + API).

## 📂 Struktur Proyek & Fungsi
```
Berikut adalah penjelasan struktur folder dan file utama dalam proyek ini:
/manathreads/
├── index.php             # File utama, sebagai "jantung" aplikasi yang memuat semua bagian.
│
├── /assets/              # Menyimpan file-file statis untuk tampilan (frontend).
│   ├── style.css         # Mengatur semua gaya (warna, tata letak, font).
│   └── script.js         # Mengatur semua interaksi (klik tombol, AJAX, dll).
│
├── /views/               # Berisi file-file untuk setiap halaman utama.
│   ├── dashboard.php     # Tampilan halaman utama (statistik).
│   ├── draft.php         # Tampilan halaman untuk melihat draft tersimpan.
│   ├── ide.php           # Tampilan halaman untuk form pencarian ide.
│   └── generate.php      # Tampilan halaman untuk form generator konten AI.
│
├── /includes/            # Berisi bagian-bagian yang dipakai berulang di setiap halaman.
│   ├── header.php        # Bagian kepala (judul) website.
│   ├── sidebar.php       # Bagian menu navigasi.
│   └── footer.php        # Bagian kaki (kredit) website.
│
├── /api/                 # "Otak" backend, berisi logika untuk memproses data.
│   ├── saveDraft.php     # Menerima data dari frontend & menyimpannya ke drafts.json.
│   ├── getIdeas.php      # Menghubungi AI untuk memberikan ide konten.
│   └── generateContent.php # Menghubungi AI untuk membuat konten utuh.
│
└── /data/                # "Database" sederhana berbasis file.
    └── drafts.json       # Tempat menyimpan semua draft dalam format JSON.
```


## ⚙️ Teknologi yang Digunakan

*   **Frontend**: HTML, CSS, JavaScript, jQuery (untuk mempermudah AJAX).
*   **Backend**: PHP (untuk memproses data dan sebagai perantara ke AI).
*   **Database**: File JSON (sebagai penyimpanan data yang ringan).
*   **AI**: Google Gemini AI (dihubungi melalui API).

## 🚀 Cara Instalasi & Menjalankan

Untuk menjalankan proyek ini di komputer lokal, Anda memerlukan server lokal seperti XAMPP.

1.  **Prasyarat**: Pastikan Anda sudah menginstal **XAMPP** atau aplikasi sejenis (WAMP, MAMP) yang sudah termasuk **Apache** dan **PHP**.

2.  **Unduh Proyek**:
    *   Unduh atau *clone* repositori ini ke komputer Anda.

3.  **Pindahkan Folder**:
    *   Pindahkan seluruh folder `manathreads` ke dalam folder `htdocs` di dalam direktori instalasi XAMPP Anda.
    *   Contoh path: `C:\xampp\htdocs\manathreads`.

4.  **Jalankan Server**:
    *   Buka **XAMPP Control Panel**.
    *   Klik **Start** pada modul **Apache**.

5.  **Buka di Browser**:
    *   Buka browser web Anda (misalnya Chrome atau Firefox).
    *   Ketik alamat berikut di address bar: `http://localhost/manathreads`

## 🔄 Alur Kerja Aplikasi (Workflow)

1.  **Pengguna Membuka Halaman**: Pengguna mengakses `index.php`, yang kemudian memuat `header`, `sidebar`, `footer`, dan konten halaman default (`dashboard.php`).
2.  **Pengguna Meminta Ide**:
    *   Pengguna membuka halaman "Cari Ide" dan mengisi form (misal: niche "teknologi").
    *   `script.js` mengambil data form dan mengirimkannya ke `api/getIdeas.php` menggunakan AJAX tanpa me-refresh halaman.
    *   `api/getIdeas.php` (nantinya) mengirim permintaan ke Gemini AI dan menerima hasilnya.
    *   Hasil ide dikirim kembali ke `script.js`, yang kemudian menampilkannya di halaman.
3.  **Pengguna Menyimpan Draft**:
    *   Setelah AI menghasilkan konten, pengguna menekan tombol "Simpan ke Draft".
    *   `script.js` mengirim isi konten ke `api/saveDraft.php`.
    *   `saveDraft.php` membaca file `data/drafts.json`, menambahkan draft baru, lalu menyimpannya kembali.
    *   API mengirim pesan sukses kembali ke `script.js`.

## 🛠️ Troubleshooting (Jika Terjadi Masalah)

*   **Halaman Putih atau Error 404 Not Found**:
    *   **Penyebab**: Server Apache belum berjalan atau Anda meletakkan folder proyek di lokasi yang salah.
    *   **Solusi**: Pastikan Apache sudah "Start" di XAMPP Control Panel dan folder `manathreads` berada tepat di dalam `htdocs`.

*   **Tombol Tidak Berfungsi**:
    *   **Penyebab**: Bisa jadi ada error pada JavaScript.
    *   **Solusi**: Tekan `F12` di browser untuk membuka Developer Tools, lalu klik tab `Console`. Lihat apakah ada pesan error berwarna merah.

*   **Draft Tidak Tersimpan**:
    *   **Penyebab**: PHP tidak memiliki izin untuk menulis file di folder `data`.
    *   **Solusi**: Pastikan folder `manathreads` dan isinya tidak diatur sebagai *read-only*.

## ✍️ Kredit

Dibuat dan dikembangkan oleh **Faris**.

*   **Instagram**: [@faris.a.y](https://instagram.com/faris.a.y)
*   **Threads**: [@faris.a.y](https://threads.net/@faris.a.y)
