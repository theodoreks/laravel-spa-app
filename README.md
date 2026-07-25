# Hijau Spa - Sistem Informasi Operasional Spa Kecantikan

Aplikasi berbasis web untuk mengelola operasional usaha **Spa Kecantikan** secara efisien, modern, dan terorganisir. Proyek ini hadir sebagai solusi digital untuk menggantikan pencatatan manual yang rentan terhadap kesalahan (*human error*) serta sulit diakses secara *real-time*.

Aplikasi **Hijau Spa** dibangun menggunakan *framework* **Laravel 12** dan dirancang untuk memenuhi kebutuhan berbagai tingkat pengguna dalam ekosistem bisnis spa.

---

##  Fitur Utama Berdasarkan Peran

Sistem ini mendukung 3 peran utama (*user roles*):

*   **Customer (Pelanggan)**
    *   Melakukan pemesanan (*booking*) layanan spa.
    *   Melihat promo dan penawaran menarik.
    *   Memberikan kritik dan saran untuk peningkatan layanan.
*   **Karyawan**
    *   Mengelola jadwal dan data pemesanan (*booking*).
    *   Membuat dan mengonfigurasi promo.
    *   Mencatat absensi harian.
    *   Mengatur dan memantau stok inventaris.
*   **Owner (Pemilik Usaha)**
    *   Memantau laporan *booking* dan pendapatan.
    *   Pengawasan menyeluruh (*overview*) aktivitas dan strategi bisnis secara tepat.

---

##  Tahapan Pengembangan

Proses pengembangan proyek ini dilakukan secara terstruktur melalui beberapa tahapan:
1. **Analisis Kebutuhan:** Mengidentifikasi alur kerja bisnis spa dan kebutuhan tiap peran.
2. **Perancangan Sistem:** Desain arsitektur basis data, *flowchart*, dan antarmuka pengguna (*UI/UX*).
3. **Implementasi:** Pengkodean modul menggunakan Laravel 12.
4. **Pengujian (*Testing*):** Pengujian seluruh fitur untuk memastikan kestabilan, akurasi data, dan keandalan sistem.

---

##  Panduan Instalasi & Pengaturan Lokal

Ikuti langkah-langkah berikut untuk menjalankan proyek ini di lingkungan lokal Anda:

### 1. Clone Repositori
Buka terminal / command prompt, lalu *clone* repositori dan masuk ke direktori proyek:
```bash
git clone <URL_REPOSITORI_ANDA>
cd nama-folder-proyek
2. Install Dependensi PHP
Jalankan Composer untuk mengunduh seluruh package PHP yang dibutuhkan:

Bash
composer install
3. Salin File Environment
Buat file .env baru dengan menyalin dari .env.example:

Bash
# Windows (CMD)
copy .env.example .env

# Linux / macOS / Git Bash
cp .env.example .env
4. Generate Application Key
Buat kunci enkripsi aplikasi Laravel baru:

Bash
php artisan key:generate
5. Konfigurasi Database & Migrasi
Buka file .env menggunakan editor teks (misal: VS Code).

Sesuaikan konfigurasi database berikut:

Code snippet
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_hijau_spa
DB_USERNAME=root
DB_PASSWORD=
Pastikan service database (seperti MySQL/MariaDB di XAMPP/Docker) sudah berjalan, lalu jalankan migrasi tabel:

Bash
php artisan migrate
(Opsional) Jika tersedia data awal / dummy:

Bash
php artisan db:seed
6. Install & Build Aset Frontend
Jika menggunakan Vite/Mix atau pustaka frontend (Tailwind/Bootstrap/Vue/React):

Bash
npm install
npm run dev
7. Jalankan Server Lokal
Jalankan server pengembangan Laravel:

Bash
php artisan serve
Buka alamat http://127.0.0.1:8000
