# Panduan Menjalankan Proyek Tracer Study FIK UPNVJ

Selamat datang di proyek Tracer Study Fakultas Ilmu Komputer UPN Veteran Jakarta! Berikut adalah langkah-langkah untuk menjalankan proyek ini di komputer Anda.

## Our Team

Haidar Fadhillah Arasy - 2310512046 <br>
Yoga Aditya Ramasahdan - 2310512053 <br>
Muhammad Boby Pratama - 2310512056 <br>
Naflah Thifal Afaf - 2310512063 <br>
Annabelle Evrilya Savhisnu - 2310512083 <br>

## Prasyarat

Sebelum memulai, pastikan Anda telah menginstal perangkat lunak berikut:

1. **PHP** (versi 8.0 atau lebih baru)
2. **Composer** (untuk mengelola dependensi PHP)
3. **Node.js** dan **npm** (untuk mengelola dependensi frontend)
4. **MySQL** atau **MariaDB** (sebagai database)

## Langkah-langkah

### 1. Clone Repository

Pertama, clone repository ini ke komputer Anda menggunakan perintah berikut:

```bash
https://github.com/MBobyPratama/Tracer-Study-FIK-UPNVJ.git
```
<br>

### 2. Masuk ke Direktori Proyek

Setelah cloning selesai, masuk ke direktori proyek:

```bash
cd repo-name
```
<br>

### 3. Instal Dependensi PHP

Jalankan perintah berikut untuk menginstal dependensi PHP menggunakan Composer:

```bash
composer install
```
<br>

### 4. Konfigurasi File `.env`

Salin file `.env.example` menjadi `.env`:

```bash
cp .env.example .env
```

Kemudian, buka file `.env` dan sesuaikan konfigurasi database Anda:

```plaintext
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=username_database
DB_PASSWORD=password_database
```

Gantilah `nama_database`, `username_database`, dan `password_database` sesuai dengan pengaturan database Anda.

<br>

### 5. Generate Kunci Aplikasi

Jalankan perintah berikut untuk menghasilkan kunci aplikasi:

```bash
php artisan key:generate
```
<br>

### 6. Migrasi Database

Setelah mengatur database, jalankan migrasi untuk membuat tabel yang diperlukan:

```bash
php artisan migrate
```

Jika Anda ingin mengisi database dengan data awal, Anda dapat menjalankan seeder:

```bash
php artisan db:seed
```
<br>

### 7. Instal Dependensi Frontend

Jalankan perintah berikut untuk menginstal dependensi frontend menggunakan npm:

```bash
npm install
```
<br>

### 8. Build Aset Frontend

Setelah menginstal dependensi, jalankan perintah berikut untuk membangun aset frontend:

```bash
npm run dev
```
<br>

### 9. Menjalankan Server

Sekarang Anda siap untuk menjalankan server lokal. Gunakan perintah berikut:

```bash
php artisan serve
```

Server akan berjalan di `http://localhost:8000`. Anda dapat mengakses aplikasi melalui browser dengan membuka URL tersebut.

<br>

### 10. Mengakses Aplikasi

Buka browser Anda dan masukkan URL berikut:

```plaintext
http://localhost:8000
```

Anda sekarang dapat menggunakan aplikasi Tracer Study FIK UPNVJ!

<br>

## Penutup

Jika Anda mengalami masalah atau memiliki pertanyaan, silakan buka isu di repository ini atau hubungi pengembang.

Terima kasih telah menggunakan proyek ini!
<br>
