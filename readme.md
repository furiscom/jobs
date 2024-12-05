# Jobs Ar-Raudhoh - Aplikasi Untuk memposting dan mencari Pekerjaan

**Jobs Ar-Raudhoh** adalah aplikasi web yang memfasilitasi pencarian pekerjaan untuk para pencari kerja dan perusahaan. Dibangun menggunakan PHP, aplikasi ini menyediakan berbagai fitur yang mendukung proses registrasi, login, pencarian pekerjaan, serta informasi perusahaan.

---

## Daftar Isi

- [Pendahuluan](#pendahuluan)
- [Fitur](#fitur)
- [Teknologi](#teknologi)
- [Struktur Direktori](#struktur-direktori)
- [Instalasi dan Penggunaan](#instalasi-dan-penggunaan)
- [Lisensi](#lisensi)
- [Kontribusi](#kontribusi)

---

## Pendahuluan

Aplikasi **Jobs Ar-Raudhoh** dirancang untuk mempermudah pencarian pekerjaan bagi para pencari kerja dan memberi perusahaan platform untuk memposting lowongan pekerjaan mereka. Aplikasi ini dilengkapi dengan berbagai fitur penting seperti registrasi pengguna, login, dashboard terpisah untuk pengguna dan perusahaan, serta pencarian pekerjaan berdasarkan kategori dan lokasi.

---

## Fitur

- **Login dan Registrasi Pengguna**: Pengguna dapat mendaftar dan masuk ke dalam aplikasi untuk mengakses fitur-fitur.
- **Dashboard Pengguna**: Setiap pengguna memiliki halaman dashboard untuk melihat lowongan pekerjaan dan melamar pekerjaan.
- **Dashboard Perusahaan**: Perusahaan dapat mengelola dan memposting lowongan pekerjaan di dashboard mereka.
- **Pencarian Kerja**: Fitur pencarian pekerjaan yang dapat difilter berdasarkan kategori dan lokasi.
- **Detail Lowongan dan Informasi Perusahaan**: Setiap lowongan pekerjaan dilengkapi dengan detail dan informasi perusahaan.

---

## Teknologi

Aplikasi ini dibangun menggunakan teknologi berikut:

- **PHP**: Bahasa pemrograman untuk logika backend.
- **MySQL**: Sistem manajemen basis data untuk menyimpan data pengguna, pekerjaan, dan perusahaan.
- **HTML, CSS, dan JavaScript**: Teknologi frontend untuk tampilan aplikasi yang interaktif dan responsif.

---

## Struktur Direktori

- **`index.php`**: Halaman utama aplikasi yang menampilkan informasi umum dan link navigasi.
- **`login.php`**: Halaman untuk login pengguna yang sudah terdaftar.
- **`sign-up.php`**: Halaman untuk registrasi pengguna baru.
- **`user/`**: Direktori untuk pengguna.
  - **`index.php`**: Halaman dashboard pengguna untuk melihat dan melamar pekerjaan.
- **`company/`**: Direktori untuk perusahaan.
  - **`index.php`**: Halaman dashboard perusahaan untuk mengelola lowongan pekerjaan.
- **`jobs.php`**: Halaman pencarian pekerjaan yang memungkinkan pencarian berdasarkan kategori dan lokasi.
- **`read-mail.php`**: Halaman untuk membaca email terkait aplikasi kerja.

---

## Instalasi dan Penggunaan

Ikuti langkah-langkah di bawah ini untuk menginstal dan menjalankan aplikasi:

1. **Clone Repositori**  
   Clone repositori ini ke direktori lokal Anda dengan menjalankan perintah berikut:
   ```bash
   git clone https://github.com/username/jobs-ar-raudhoh.git
   ```

2. **Buat Database MySQL**  
   Buat database baru di MySQL dan impor file `db.sql` yang terdapat dalam repositori untuk membuat struktur tabel yang dibutuhkan.

3. **Konfigurasi Koneksi Database**  
   Edit file `db.php` dan sesuaikan kredensial database (username, password, nama database) agar aplikasi dapat terhubung dengan database Anda.

4. **Jalankan Aplikasi**  
   Akses aplikasi melalui browser dengan membuka `index.php` di server lokal Anda. Anda akan diarahkan ke halaman utama aplikasi.

---

## Lisensi

Proyek ini dilisensikan di bawah **MIT License**. Anda bebas untuk menggunakan, memodifikasi, dan mendistribusikan aplikasi ini sesuai dengan ketentuan lisensi.

---

## Kontribusi

Kami menyambut kontribusi dari siapa saja yang ingin membantu mengembangkan aplikasi ini. Berikut cara untuk berkontribusi:

1. **Fork Repositori**  
   Klik tombol "Fork" di GitHub untuk membuat salinan repositori ini di akun Anda.

2. **Buat Cabang Baru**  
   Setelah melakukan fork, buat cabang baru untuk mengembangkan fitur atau memperbaiki bug.
   ```bash
   git checkout -b fitur-baru-anda
   ```

3. **Lakukan Perubahan**  
   Lakukan perubahan yang diperlukan, lalu uji aplikasi secara lokal.

4. **Kirim Pull Request**  
   Setelah selesai, kirim pull request untuk menggabungkan perubahan Anda ke repositori utama. Pastikan untuk memberikan deskripsi singkat tentang perubahan yang dilakukan.

---

Terima kasih telah menggunakan **Jobs Ar-Raudhoh**! Jika ada pertanyaan atau saran, jangan ragu untuk membuka *issue* di GitHub.
