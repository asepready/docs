## Domain Model & Database

### Entitas Utama

- **users**
  - Akun untuk siswa, guru, admin.
  - Kolom penting: `name`, `username`, `email`, `password`, `type` (`student|teacher|admin`), `is_active`.
- **roles** & **role_user**
  - RBAC tambahan selain kolom `type`.
  - Role standar: `admin`, `teacher`, `student`.
- **courses**
  - Kursus/mata pelajaran (contoh: *Linux Fundamental*).
  - Kolom: `code`, `title`, `description`, `owner_id`, `is_active`.
- **modules**
  - Modul di dalam course, dihubungkan ke dokumentasi Linux/BSD.
  - Kolom: `course_id`, `title`, `description`, `order`, `doc_source`, `doc_path`.
- **lessons**
  - Unit materi kecil di dalam module.
  - Kolom: `module_id`, `title`, `type` (`text|file|link|video`), `content`, `attachment_path`, `external_url`, `order`.
- **enrollments**
  - Relasi siswa–course.
  - Kolom: `user_id`, `course_id`, `status` (`active|completed|archived`), `enrolled_at`, `completed_at`.
- **lesson_progress**
  - Progres per lesson per enrollment.
  - Kolom: `enrollment_id`, `lesson_id`, `status`, `started_at`, `completed_at`.
- **assignments** & **submissions**
  - Tugas per module dan jawaban siswa.
- **quizzes**, **questions**, **options**, **quiz_attempts**
  - Quiz pilihan ganda/multiple choice dengan perhitungan skor otomatis.
- **grades**
  - Rekap nilai akhir per enrollment.
- **files**
  - Metadata file yang diunggah (owner polymorphic).
- **activity_logs**
  - Log aktivitas penting (login, submit tugas, update modul).
- **announcements**
  - Pengumuman per course yang dikirim ke siswa (notifikasi in-app/email).

### Catatan Skalabilitas

- Index ada di kolom relasi dan pencarian utama (`user_id`, `course_id`, `module_id`, `created_at`, dll.).
- Desain tabel memungkinkan pemecahan lanjut (sharding/partitioning) bila log aktivitas dan attempt quiz tumbuh sangat besar.

