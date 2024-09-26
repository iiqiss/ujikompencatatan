# Pencatatan Laporan APK

Website ini merupakan aplikasi pencatatan laporan membantu pengguna mengelola laporan dinas serta komunikasi dengan pengelola.

# Fitur Utama
## Halaman Awal 
-Menampilkan tabel laporan.
- Mengakses kontak karyawan (bagi yang belum login).
##Authentication
-login
-logout
##multi user


### 2.karyawan (User)
- Menginput data laporan.
- Memperbarui data laporan.
- Mengisi kontak karyawan.
- Melihat dan menghubungi kontak pengelola.

### 3. Pengelola (Admin)
- Menambah data dinas baru.
- Mengisi kontak pengelola.
- Melihat dan menghubungi kontak karyawan.
- Menghapus data dinas.

## Akun
-pengelola
--Email : pengelola@gmail.com
--Password : pengelola1234
-karyawan
--Email : karyawan@gmail.com
--Password : karyawan1234

## Teknologi yang Digunakan

- **Frontend:** HTML, CSS,[SB-Admin2 Template](https://startbootstrap.com/theme/sb-admin-2)
- **Backend:** PHP (Laravel)
- **Database:** HeidiSQL (dengan **Laragon**)


## Instalasi
1.Clone Repositori
```bash
git clone https://github.com/iiqiss/ujikompencatatan.git
composer install
cp .env.example .env
2.Konfigurasi Database di file .env(```) 
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ujikompencatatan2
DB_USERNAME=root
DB_PASSWORD=




![image](https://github.com/user-attachments/assets/3bf9b699-16ed-4c75-aa86-f761f090e701)

![image](https://github.com/user-attachments/assets/fa81897c-f4d1-4cac-b95e-2fa92f8d7630)
