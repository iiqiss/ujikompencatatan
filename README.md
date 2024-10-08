# Pencatatan Laporan APK

Website ini merupakan aplikasi pencatatan laporan membantu pengguna mengelola laporan dinas serta komunikasi dengan pengelola.

# Fitur Utama
## Halaman Awal 
- Menampilkan tabel laporan.
- Mengakses kontak karyawan (bagi yang belum login).
## Authentication
- login
- logout
## multi user
### 1.User (Belum login)
- melihat tabel data
### 2.karyawan (User)
- Menginput data laporan.
- Memperbarui data laporan.
- Melihat dan menghubungi kontak pengelola.

### 3. Pengelola (Admin)
- Menambah data dinas baru.
- Mengisi kontak pengelola.
- Menghapus data dinas.

## Akun
1.pengelola
- Email : pengelola@gmail.com
- Password : pengelola1234
2. karyawan
- Email : karyawan@gmail.com
- Password : karyawan1234

## Teknologi yang Digunakan

- **Frontend:** HTML, CSS,[SB-Admin2 Template](https://startbootstrap.com/theme/sb-admin-2)
- **Backend:** PHP (Laravel)
- **Database:** HeidiSQL (dengan **Laragon**)


## Instalasi


1.Clone Repositori
```
git clone https://github.com/iiqiss/ujikompencatatan.git
composer install
cp .env.example .env
```
2.Konfigurasi Database di file .env
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ujikompencatatan2
DB_USERNAME=root
DB_PASSWORD=
```
3.melakukan migrasi dan seed
```
php artisan key:generate
php artisan storage:link
php artisan migrate
php artisan db:seed UserTableSeeder
```
4.Running website
```
php artisan serve
```

# ERD & Relasi antar tabel
![image](https://github.com/user-attachments/assets/3bf9b699-16ed-4c75-aa86-f761f090e701)


# UML Diagram Use Case
![WhatsApp Image 2024-10-03 at 15 48 18_4fe00e0b](https://github.com/user-attachments/assets/7ac3ef98-417f-4cea-866e-161354db8b4b)

