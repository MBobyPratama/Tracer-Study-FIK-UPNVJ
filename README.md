# Panduan Menjalankan Proyek Tracer Study FIK UPNVJ

Selamat datang di proyek Tracer Study Fakultas Ilmu Komputer UPN Veteran Jakarta! Berikut adalah langkah-langkah untuk menjalankan proyek ini di komputer Anda.

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


Gantilah `username` dan `repo-name` dengan nama pengguna dan nama repository Anda.

### 2. Masuk ke Direktori Proyek

Setelah cloning selesai, masuk ke direktori proyek:

```bash
    cd repo-name
```

### 3. Instal Dependensi PHP

Jalankan perintah berikut untuk menginstal dependensi PHP menggunakan Composer:

```bash
    composer install
```

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

### 5. Generate Kunci Aplikasi

Jalankan perintah berikut untuk menghasilkan kunci aplikasi:

```bash
    php artisan key:generate
```

### 6. Migrasi Database

Setelah mengatur database, jalankan migrasi untuk membuat tabel yang diperlukan:

```bash
    php artisan migrate
```

Jika Anda ingin mengisi database dengan data awal, Anda dapat menjalankan seeder:

```bash
    php artisan db:seed
```

### 7. Instal Dependensi Frontend

Jalankan perintah berikut untuk menginstal dependensi frontend menggunakan npm:

```bash
    npm install
```

### 8. Build Aset Frontend

Setelah menginstal dependensi, jalankan perintah berikut untuk membangun aset frontend:

```bash
    npm run dev
```

### 9. Menjalankan Server

Sekarang Anda siap untuk menjalankan server lokal. Gunakan perintah berikut:

```bash
    php artisan serve
```

Server akan berjalan di `http://localhost:8000`. Anda dapat mengakses aplikasi melalui browser dengan membuka URL tersebut.

### 10. Mengakses Aplikasi

Buka browser Anda dan masukkan URL berikut:

```plaintext
    http://localhost:8000
```

Anda sekarang dapat menggunakan aplikasi Tracer Study FIK UPNVJ!

## Penutup

Jika Anda mengalami masalah atau memiliki pertanyaan, silakan buka isu di repository ini atau hubungi pengembang.

Terima kasih telah menggunakan proyek ini!

## Our Team

Haidar Fadhillah Arasy - 2310512046
Yoga Aditya Ramasahdan - 2310512053
Muhammad Boby Pratama - 2310512056
Naflah Thifal Afaf - 2310512063
Annabelle Evrilya Savhisnu - 2310512083