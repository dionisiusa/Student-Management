# 🎓 Student Management System

Sistem Manajemen Mahasiswa berbasis **Laravel** yang menyediakan fitur autentikasi dan pengelolaan data mahasiswa (CRUD). Project ini dibuat sebagai media pembelajaran dan pengembangan aplikasi web menggunakan Laravel.

---

## ✨ Fitur

- Login & Logout
- Registrasi User
- Dashboard
- CRUD Data Mahasiswa
- Validasi Form
- Session Authentication
- Responsive UI menggunakan Bootstrap 5
- Database MySQL
- Laravel Migration

---

## 🛠️ Teknologi

- Laravel 12
- PHP 8.2+
- MySQL
- Bootstrap 5
- HTML5
- CSS3
- JavaScript
- Laragon

---

## 📁 Struktur Project

```
student/
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
├── routes/
├── storage/
├── tests/
├── artisan
├── composer.json
└── README.md
```

---

## ⚙️ Instalasi

### 1. Clone Repository

```bash
git clone https://github.com/username/student.git
```

Masuk ke folder project

```bash
cd student
```

---

### 2. Install Dependency

```bash
composer install
```

Jika menggunakan Vite

```bash
npm install
npm run dev
```

---

### 3. Copy File Environment

```bash
cp .env.example .env
```

Windows

```bash
copy .env.example .env
```

---

### 4. Generate Application Key

```bash
php artisan key:generate
```

---

### 5. Buat Database

Buat database baru melalui phpMyAdmin dengan nama

```
dbstudent
```

---

### 6. Konfigurasi Database

Edit file `.env`

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dbstudent
DB_USERNAME=root
DB_PASSWORD=
```

---

### 7. Jalankan Migration

```bash
php artisan migrate
```

Jika ingin menghapus seluruh tabel dan membuat ulang

```bash
php artisan migrate:fresh
```

---

### 8. Jalankan Server

Menggunakan Laragon

```
http://student.test
```

atau

```bash
php artisan serve
```

kemudian buka

```
http://127.0.0.1:8000
```

---

## 📷 Tampilan

- Login
- Register
- Dashboard
- Data Mahasiswa
- Tambah Mahasiswa
- Edit Mahasiswa

---

## 📌 Pengembangan Selanjutnya

- Upload Foto Mahasiswa
- Search Data
- Filter Data
- Pagination
- Dashboard Statistik
- Chart.js
- Export PDF
- Export Excel
- Import Excel
- Activity Log
- Role Admin & User
- Dark Mode

---

## 🔒 Keamanan

Project menerapkan beberapa praktik keamanan Laravel:

- Password Hashing
- CSRF Protection
- Session Authentication
- Validation Request
- Eloquent ORM
- Prepared Statement

---

## 👨‍💻 Author

**Nama:** Nama Anda

GitHub:
https://github.com/username

---

## 📄 License

Project ini dibuat untuk keperluan pembelajaran dan bebas digunakan sebagai referensi.
