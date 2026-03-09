## LMS Laravel 12

**Tujuan**: LMS untuk ~120.000 siswa dan 200 guru/admin, terintegrasi dengan modul pembelajaran `Linux` dan `BSD` di repo dokumentasi Anda.

### Fitur Utama

- **Autentikasi & RBAC**: Laravel Breeze dengan role `student`, `teacher`, `admin`.
- **Manajemen Course**: `courses` dengan owner (guru/admin), aktif/nonaktif.
- **Module & Lesson**:
  - `modules` per `course` dengan field:
    - `doc_source`: `linux` / `bsd` / `custom`
    - `doc_path`: path relatif ke modul dokumentasi, misalnya `Linux/modules/module-01-introduction/README.md`.
  - `lessons` untuk tiap module (tipe: teks, link, video, file).
- **Enrollment & Progress**:
  - Siswa mendaftar course (`enrollments`).
  - Tracking progres per lesson (`lesson_progress`).
- **Tugas & Quiz**:
  - `assignments` + `submissions` untuk pengumpulan tugas.
  - `quizzes`, `questions`, `options`, `quiz_attempts` dengan perhitungan skor sederhana.
- **Pengumuman & Notifikasi**:
  - `announcements` per course.
  - Notifikasi in-app/email menggunakan `NewAnnouncement`.

### Alur Dasar Penggunaan

- **Admin**:
  - Login sebagai `admin@example.com` (password bawaan factory: `password`).
  - Membuat course dan mengelola guru/siswa (melalui seeding/manual untuk saat ini).
- **Guru**:
  - Login sebagai `teacher@example.com`.
  - Membuat course, module, lesson, assignment, dan quiz dari menu yang tersedia.
- **Siswa**:
  - Login sebagai `student@example.com` atau akun siswa lain.
  - Enroll ke course, baca lesson, kirim tugas, dan ikut quiz.

### Integrasi Modul `Linux` dan `BSD`

- Saat membuat module, pilih:
  - `doc_source = linux` atau `bsd`.
  - `doc_path` diisi dengan path relatif ke modul di folder dokumentasi (misalnya `Linux/modules/module-12-case-studies/README.md`).
- Admin/guru kemudian mengisi konten lesson berdasarkan modul tersebut.

### Menjalankan Aplikasi (Dev)

```bash
cd lms
php artisan migrate --seed
php artisan serve
```

Untuk build asset frontend (sudah pernah dijalankan oleh Breeze, jalankan ulang bila perlu):

```bash
npm install
npm run dev   # atau npm run build untuk produksi
```

