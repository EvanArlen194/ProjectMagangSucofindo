# Sistem Informasi Puskesmas

![image](https://github.com/EvanArlen194/ProjectMagangSucofindo/assets/124815888/42a37112-7b36-4114-9c0e-cc87b0b96fe1)


Project ini adalah sebuah proyek **Sistem Informasi Puskesmas** yang dikembangkan oleh Evan Arlen Handy sebagai bagian dari seleksi magang di PT Sucofindo Cilacap.

## Status

Proyek sistem informasi ini telah selesai.

## Informasi Pengembang

- **Nama:** Evan Arlen Handy
- **NIM:** 220302082
- **Kelas:** TI 2D

## Teknologi

Proyek ini dikembangkan menggunakan Laravel 8.

## Kemampuan Sistem

1. **Multi-User**: Sistem ini mendukung banyak pengguna dengan peran yang berbeda, seperti admin, dokter, dan pasien.
2. **Login**: Pengguna dapat masuk ke sistem dengan menggunakan email dan kata sandi yang sesuai dengan peran mereka.
3. **Register**: Untuk pengguna baru, mereka dapat mendaftar dengan mengisi informasi yang diperlukan.
4. **CRUD (Create, Read, Update, Delete)**: Sistem ini memungkinkan operasi dasar CRUD untuk entitas-entitas utama seperti dokter, dan admin.
5. **Kalkulator BMI (Body Mass Index)**: Sistem ini menyediakan kalkulator BMI untuk menghitung indeks massa tubuh berdasarkan berat badan dan tinggi badan yang dimasukkan.
6. **Pencarian**: Terdapat fitur pencarian untuk mencari data tabel tertentu dalam sistem.

## Daftar Pengguna

### 1. Admin

- **Email:** admin@gmail.com
- **Password:** admin

### 2. Dokter

- **Email:** dokter@gmail.com
- **Password:** dokter

### 3. Pasien

Untuk pengguna jenis pasien, email dan password akan dihasilkan secara acak sesuai dengan informasi yang dimasukkan pada saat registrasi.

'''''Catatan'''''
Setelah melakukan migrasi database, disarankan untuk menjalankan proses seeding agar akun admin dan dokter bisa muncul di sistem. Anda dapat melakukan seeding dengan menjalankan perintah `php artisan db:seed` dari terminal setelah menjalankan migrasi.

