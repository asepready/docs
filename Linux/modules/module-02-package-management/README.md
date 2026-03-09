# Modul 2: Package Management

## Durasi
4 jam

## LPIC-1 Alignment (Objectives)
Modul ini mencakup **Exam 101** Topic 102 (Linux Installation and Package Management): 102.3 (shared libraries), 102.4 (Debian/apt), 102.5 (RPM/YUM/DNF/Zypper). Lihat [LPIC-OBJECTIVES-MAPPING.md](../../assessments/certifications/LPIC-OBJECTIVES-MAPPING.md).

## Tujuan Pembelajaran
- Menggunakan apt (Debian/Ubuntu) dan dnf (RHEL/CentOS)
- Repository, update, install, remove
- Snap/flatpak (opsional)

## Coverage LPI 101-500 (Ringkasan)

- **102.3 Manage shared libraries**
  - Konsep library dinamis, `ldd`, `ldconfig`, dan direktori library.
- **102.4 Use Debian package management**
  - `dpkg`, `apt`, `apt-cache`, `apt-get`, berkas `sources.list`.
- **102.5 Use RPM and YUM package management**
  - `rpm`, `yum`, `dnf`, `zypper`, repository dan metadata paket.

## Ringkasan Konsep & Contoh Perintah

### Konsep paket & repositori

- Paket berisi file biner, konfigurasi, metadata, dan dependency.
- Perbedaan manajemen paket **Debian-based** (`.deb`) vs **RPM-based** (`.rpm`).
- Repositori resmi, third-party, dan local repo (overview).

### Debian/Ubuntu: dpkg & apt

- Inspect & install paket tunggal dengan `dpkg`:
  - `dpkg -i paket.deb`
  - `dpkg -L nama-paket` (daftar file)
  - `dpkg -s nama-paket` (status)
- Manajemen harian dengan `apt`:
  - `sudo apt update` (refresh index)
  - `sudo apt upgrade` (upgrade paket terinstal)
  - `sudo apt install nginx`
  - `sudo apt remove nginx` / `sudo apt purge nginx`
  - Pencarian: `apt search httpd`, `apt show nginx`

### RHEL/CentOS/Fedora: rpm & dnf

- Inspect paket dengan `rpm`:
  - `rpm -qi nama-paket`
  - `rpm -ql nama-paket`
  - `rpm -qf /path/to/file`
- Manajemen harian dengan `dnf` atau `yum`:
  - `sudo dnf check-update`
  - `sudo dnf install httpd`
  - `sudo dnf remove httpd`
  - `sudo dnf search httpd`

### Shared libraries (overview)

- Tujuan shared library: menghemat memori dan storage, memudahkan update.
- Contoh perintah:
  - `ldd /bin/ls` untuk melihat dependency library.
  - `sudo ldconfig` untuk refresh cache library.
  - Direktori umum: `/lib`, `/usr/lib`, `/usr/lib64`.

## Materi
1. [Dasar apt](01-apt-basics.md)
2. [Dasar dnf/yum](02-dnf-basics.md)
3. [Repository dan Pinning](03-repositories.md)

## Lab
- [Lab 02: Install Packages](lab-02-install-packages.md)
- Lab umum paket: [lab-02](../../labs/lab-02/README.md)

## Evaluasi
- [Quiz 02](quiz-02.md)
- Quiz LPIC-style terkait: [Quiz 02 Packages](../../assessments/quizzes/quiz-02-packages.md)

## Proyek Terkait

- [Proyek 1: Web Server Production](../../projects/project-01-web-server/README.md) — penggunaan apt/dnf nyata untuk stack web.
