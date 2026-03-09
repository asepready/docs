## Proses Pengembangan – Agile/Scrum

Dokumen ini menjadi panduan cara mengembangkan LMS menggunakan pendekatan **Agile/Scrum** agar tim mudah berkolaborasi.

### 1. Struktur Backlog

- **Epic** (contoh):
  - `EPIC-AUTH-RBAC` – autentikasi, otorisasi, role.
  - `EPIC-COURSE-CONTENT` – course/module/lesson + integrasi Linux/BSD.
  - `EPIC-ASSESSMENT` – assignment, quiz, grading.
  - `EPIC-NOTIFICATION` – notifikasi & pengumuman.
  - `EPIC-SCALABILITY` – performa, caching, queue, monitoring.
- **User story**:
  - Format: `Sebagai <peran> saya ingin <tujuan> sehingga <manfaat>.`
  - Setiap story memiliki kriteria penerimaan (acceptance criteria) yang jelas.

### 2. Siklus Sprint

- **Durasi sprint**: 1–2 minggu.
- Untuk setiap sprint:
  - Pilih user story prioritas tertinggi dari backlog.
  - Breakdown menjadi tugas teknis (task) yang bisa selesai < 1 hari.
  - Definisikan *Definition of Done (DoD)*: kode + test lulus + dokumentasi singkat di `docs/` bila perlu.

### 3. Alur Kerja Git (Branching)

- **Branch utama**: `main` atau `master` (selalu stabil).
- **Branch pengembangan fitur**:
  - Penamaan: `feature/<epic>/<short-name>` contoh: `feature/course/module-lesson-crud`.
  - Satu branch untuk 1–2 user story yang saling terkait.
- **Pull Request (PR)**:
  - Wajib review minimal 1 orang lain.
  - Sertakan ringkasan perubahan, risiko, dan cara testing.

### 4. Dokumentasi Selama Pengembangan

- Untuk fitur baru yang signifikan:
  - Tambahkan catatan di folder `docs/`:
    - Misalnya `docs/features/assessment.md` (buat folder `features/` bila belum ada).
  - Isi singkat: tujuan fitur, model yang dipakai, flow utama, endpoint penting.
- Update `domain-model.md` bila skema tabel berubah.

### 5. Testing & Kualitas

- Minimal:
  - **Feature test** untuk alur utama (enrolment, akses lesson, submit tugas, kerjakan quiz).
  - Pastikan `php artisan test` lulus sebelum merge.
- Untuk perubahan besar:
  - Tambah test kinerja sederhana (load test eksternal seperti k6/JMeter, disimpan langkahnya di `docs/tests/`).

### 6. Rekomendasi Praktis

- Simpan semua keputusan arsitektur penting di `docs/architecture.md` atau dokumen turunan.
- Gunakan board (Kanban/Scrum board) dengan kolom `Backlog → Ready → In Progress → In Review → Done`.
- Jaga ukuran story agar bisa selesai dalam satu sprint, dan selalu kaitkan kode ke story (misalnya melalui ID issue di pesan commit).

