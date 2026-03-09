## Template Modul Linux Berbasis LPI

Gunakan template ini saat membuat atau melengkapi modul di `Linux/modules/`. Tujuannya supaya:

- Struktur antar modul konsisten.
- Keterkaitan dengan objektif **Linux Essentials** dan **LPIC-1 (101-500, 102-500)** selalu jelas.
- Peserta langsung melihat hubungan antara teori, lab, dan quiz.

### 1. Judul & Durasi

- **Format judul**: `# Modul X: Nama Modul`
- **Durasi**: singkat dan realistis, mis. `2 jam`, `4 jam`, atau `2 minggu` untuk modul fondasi.

Contoh:

```markdown
# Modul 2: Package Management

## Durasi
4 jam
```

### 2. Coverage LPI (Linux Essentials / LPIC-1)

- Cantumkan section khusus untuk menjelaskan keterkaitan ke objektif LPI.
- Sertakan tabel kecil bila modul memetakan lebih dari satu objektif.

Contoh:

```markdown
## Coverage LPI

- Linux Essentials:
  - Topic 2: Finding Your Way on a Linux System (2.1, 2.2, 2.3)
- LPIC-1:
  - Exam 101 — 103.1, 103.2, 103.3

| Kode | Judul Singkat                           |
|------|-----------------------------------------|
| 103.1 | Work on the command line               |
| 103.2 | Process text streams using filters     |
| 103.3 | Perform basic file management          |
```

### 3. Tujuan Pembelajaran

- Gunakan bullet list dengan bahasa Indonesia.
- Fokus ke kemampuan yang bisa didemonstrasikan (action verbs).

Contoh:

```markdown
## Tujuan Pembelajaran
- Menggunakan CLI untuk navigasi filesystem dan manajemen file.
- Menggunakan text processing tools (grep, sed, pipes, redirects).
- Menjelaskan struktur dasar filesystem Linux (FHS).
```

### 4. Materi / Topik

- Daftar berurutan dari berkas materi `.md` di dalam folder modul.
- Gunakan link relatif ke file materi.

Contoh:

```markdown
## Materi
1. [Dasar CLI & Navigasi](01-cli-basics.md)
2. [Manajemen File & Directory](02-file-management.md)
3. [Pipes, Redirects, dan Text Filters](03-text-processing.md)
```

### 5. Lab

- Rujuk ke lab praktikum yang relevan.
- Jika lab berada di folder modul, gunakan path relatif.
- Jika menggunakan lab umum di `Linux/labs/`, link-kan eksplisit.

Contoh:

```markdown
## Lab
- [Lab 1.1: Filesystem Navigation](labs/lab-1.1-filesystem.md)
- [Lab 04: LVM Setup](../../labs/lab-04/step-by-step.md)
```

### 6. Evaluasi (Quiz / Tugas)

- Selaraskan dengan file di `Linux/assessments/quizzes/`.
- Jelaskan bentuk evaluasi: jumlah soal, minimal nilai, dan/atau tugas praktis.

Contoh:

```markdown
## Evaluasi
- [Quiz 03: User & Permission](../../assessments/quizzes/quiz-03-users.md)
- Minimal nilai: 80%
- Selesaikan seluruh langkah pada lab yang dirujuk sebagai syarat lulus modul.
```

### 7. Sumber Belajar Tambahan

- Tautkan ke dokumen umum di `Linux/docs/` dan ke resources eksternal bila perlu.

Contoh:

```markdown
## Sumber Belajar
- [LPIC-1 Objectives](https://www.lpi.org/our-certifications/exam-101-102-objectives/)
- [LPI Learning Materials 101-500](https://learning.lpi.org/en/learning-materials/101-500/)
- [Panduan Troubleshooting](../troubleshooting.md)
```

### 8. Catatan Implementasi untuk Kontributor

- Setiap kali modul diperbarui:
  - Pastikan **Coverage LPI** di-update bila cakupan berubah.
  - Tambahkan atau perbarui link ke lab dan quiz yang relevan.
  - Gunakan gaya bahasa yang konsisten dengan modul lain (Indonesia + istilah teknis Inggris seperlunya).

