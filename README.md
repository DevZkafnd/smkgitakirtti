# Sistem Informasi Akademik & Pembayaran SPP - SMK Gita Kirtti

Proyek ini adalah sistem informasi berbasis web yang dibangun menggunakan framework **CodeIgniter 3**. Sistem ini dirancang untuk memfasilitasi kegiatan akademik dan administrasi sekolah, termasuk Penerimaan Peserta Didik Baru (PPDB), manajemen data siswa, penjadwalan, serta pembayaran SPP online yang terintegrasi dengan Payment Gateway (Midtrans).

## 🚀 Fitur Utama

### 1. Halaman Publik (Landing Page)
Dapat diakses oleh masyarakat umum/calon siswa.
*   **Beranda:** Informasi umum sekolah.
*   **Artikel & Berita:** Update kegiatan dan informasi sekolah.
*   **Galeri:** Dokumentasi kegiatan sekolah.
*   **Tentang Kami & Kontak:** Profil dan informasi kontak sekolah.
*   **PPDB (Penerimaan Peserta Didik Baru):** Formulir pendaftaran siswa baru secara online.

### 2. Panel Admin
Dikelola oleh administrator sekolah.
*   **Dashboard:** Ringkasan statistik (Total Siswa, Transaksi, dll).
*   **Manajemen Data Admin:** Tambah, edit, hapus data administrator.
*   **Manajemen Data Siswa:** Pengelolaan data siswa aktif.
*   **Manajemen Jadwal:** Pengaturan jadwal pelajaran sekolah.
*   **Riwayat Transaksi:** Monitoring seluruh transaksi pembayaran masuk.

### 3. Panel Siswa
Area khusus untuk siswa yang telah login.
*   **Dashboard Siswa:** Informasi status siswa.
*   **Jadwal Pelajaran:** Melihat jadwal pelajaran pribadi.
*   **Pembayaran SPP Online:** Melakukan pembayaran SPP menggunakan berbagai metode (Transfer Bank, E-Wallet, Retail) melalui integrasi **Midtrans**.
*   **Riwayat Pembayaran:** Melihat histori pembayaran yang telah dilakukan.
*   **Cetak Invoice:** Mencetak bukti pembayaran.
*   **Profil:** Mengelola data diri siswa.

## 🛠️ Teknologi yang Digunakan

*   **Backend:** PHP (CodeIgniter 3 Framework)
*   **Database:** MySQL
*   **Frontend:** 
    *   HTML5, CSS3
    *   Bootstrap 5 (Template Admin: Sneat)
    *   jQuery
    *   DataTables (untuk tabel interaktif)
*   **Payment Gateway:** Midtrans API
*   **Server:** Apache (XAMPP/Laragon)

## 📦 Instalasi & Konfigurasi

Ikuti langkah-langkah berikut untuk menjalankan proyek di komputer lokal Anda:

### Prasyarat
*   PHP >= 7.4 (Disarankan PHP 8.0 atau 8.1, kompatibel dengan PHP 8.2 dengan konfigurasi tertentu).
*   Web Server (Apache/Nginx).
*   MySQL Database.
*   Composer (Opsional).

### Langkah Instalasi
1.  **Clone atau Download** repositori ini ke folder web root Anda (misal: `htdocs` di XAMPP).
    ```bash
    git clone https://github.com/username/smkgitakirtti.git
    ```
2.  **Import Database:**
    *   Buat database baru di phpMyAdmin dengan nama `client1` (atau sesuaikan konfigurasi).
    *   Import file SQL yang disertakan (biasanya bernama `smk_giki.sql` atau `db_smk.sql`) ke dalam database tersebut.
3.  **Konfigurasi Database:**
    *   Buka file `application/config/database.php`.
    *   Sesuaikan `hostname`, `username`, `password`, dan `database` dengan server lokal Anda.
    ```php
    $db['default'] = array(
        'dsn'   => '',
        'hostname' => 'localhost',
        'username' => 'root',
        'password' => '',
        'database' => 'client1', // Sesuaikan nama database
        // ...
    );
    ```
4.  **Konfigurasi Base URL:**
    *   Buka file `application/config/config.php`.
    *   Set `base_url` sesuai alamat lokal Anda.
    ```php
    $config['base_url'] = 'http://localhost/smkgitakirtti/'; // Atau http://localhost:8000/
    ```
5.  **Jalankan Project:**
    *   Jika menggunakan XAMPP, akses melalui browser: `http://localhost/smkgitakirtti/`
    *   Atau gunakan PHP Built-in Server:
    ```bash
    cd /path/to/project
    php -S localhost:8000
    ```
    Lalu buka `http://localhost:8000` di browser.

## 🔑 Akun Demo (Default)

*(Silakan sesuaikan dengan data di database Anda)*

*   **Admin:**
    *   Email: `admin@gmail.com`
    *   Password: `test` (sesuai hash MD5 di database)
*   **Siswa:**
    *   Email: `siswa@gmail.com` (Contoh, lihat tabel siswa)
    *   Password: `test`

## ⚠️ Catatan Penting
*   **Midtrans:** Pastikan `Server Key` dan `Client Key` Midtrans sudah dikonfigurasi di file konfigurasi atau controller terkait jika ingin mencoba fitur pembayaran secara live/sandbox.
*   **PHP 8.2+:** Jika menggunakan PHP versi terbaru, pastikan error reporting disesuaikan untuk menangani *Deprecation Warning* atau tambahkan atribut `#[AllowDynamicProperties]` pada core class CodeIgniter jika diperlukan.

---
Dibuat dengan ❤️ untuk kemajuan pendidikan SMK Gita Kirtti.
