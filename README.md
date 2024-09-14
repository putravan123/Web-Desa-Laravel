# 1. Prasyarat 
### Pastikan perangkat Anda telah memenuhi prasyarat berikut sebelum menginstal Laravel:

- PHP: Versi 8.1 atau lebih baru.
- Composer: Dependency Manager untuk PHP.
- MySQL/SQLite: Untuk database.
- Node.js & NPM: Untuk pengelolaan dependensi front-end.
- Git: Jika menggunakan Git untuk version control.

# 2. Langkah Instalasi Laravel 

### Langkah 1: Clone Repository 
```
git clone <url-repository-git>
```
### Langkah 2: Pindah ke Direktori Proyek 
```
cd nama-project
```
### Langkah 3: Instal Dependensi Backend
```
composer install
```
### Langkah 4: Buat File Konfigurasi Lingkungan (.env)

##### Salin file .env.example menjadi .env untuk mengatur variabel lingkungan atau Mengunkan Code berikut:

```
cp .env.example .env
```

### Langkah 5: Atur Konfigurasi .env

```
 DB_CONNECTION=mysql
 DB_HOST=127.0.0.1
 DB_PORT=3306
 DB_DATABASE=webdesa
 DB_USERNAME=root
 DB_PASSWORD=
```

### Langkah 6: Migrasi Database

```
php artisan migrate
```

### Langkah 7: Jalankan Server Pengembang


```
php artisan serve
```
