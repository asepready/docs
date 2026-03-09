# Modul 1: Linux Fundamentals & CLI Mastery

## Durasi
2 Weeks

## LPIC-1 Alignment (Objectives)
Modul ini mencakup **Exam 101** Topic 103 (GNU and Unix Commands), **Topic 104** (Devices, Linux Filesystems, FHS), serta dasar **Topic 107.1** (user/group). Pemetaan lengkap: [LPIC-OBJECTIVES-MAPPING.md](../../assessments/certifications/LPIC-OBJECTIVES-MAPPING.md).

| LPIC-1 | Objective | Cakupan di modul ini |
|--------|-----------|----------------------|
| 103.1 | Command line, history, environment | CLI, PATH, man, which |
| 103.2–103.4 | Text filters, file management, pipes | File ops, grep, sed, redirects |
| 103.7 | Regular expressions | grep, sed |
| 103.8 | vi/vim basics | Awareness (latihan di lab) |
| 104.3, 104.5–104.7 | Mount, permission, links, FHS | FHS, permission, ln, find, locate |

## Coverage Linux Essentials

Modul ini juga menyelaraskan materi dengan **Linux Essentials (Exam 010-160)**:

- **Topic 2: Finding Your Way on a Linux System**
  - 2.1 Command Line Basics
  - 2.2 Using the Command Line to Get Help
  - 2.3 Using Directories and Listing Files
  - 2.4 Creating, Moving and Deleting Files
- **Topic 3: The Power of the Command Line**
  - 3.1 Archiving Files on the Command Line
  - 3.2 Searching and Extracting Data from Files
  - 3.3 Turning Commands into a Script (pengenalan)
- **Topic 4: The Linux Operating System** (bagian filesystem & proses)
- **Topic 5: Security and File Permissions** (permission & user dasar)

## Learning Objectives
- Menggunakan shell dan CLI untuk navigasi filesystem dan manajemen file sehari-hari.
- Menemukan bantuan dan dokumentasi perintah (`man`, `--help`, `info`, `apropos`).
- Mengelola user, group, dan permission dasar untuk skenario multi-user.
- Menggunakan text processing tools (`cat`, `less`, `head`, `tail`, `grep`, `sort`, `wc`, `sed`) untuk analisis log dan file konfigurasi.
- Memahami struktur filesystem Linux (FHS) dan lokasi umum berkas sistem.

## Topics
1. Linux Architecture & Filesystem Hierarchy (FHS)
2. File & Directory Operations (create, move, delete, globbing)
3. User & Group Management (gambaran dasar)
4. Permission & Ownership (read/write/execute, umask, special bits secara ringkas)
5. Text Processing & Pipelines (filter, pipes, redirects)

## Ringkasan Konsep & Contoh Perintah

### Navigasi & manajemen filesystem (Linux Essentials Topic 2)

- Konsep:
  - Struktur direktori root `/`, `home`, `etc`, `var`, `tmp`.
  - Path absolut vs relatif.
  - Hidden files dan penggunaan wildcard.
- Contoh perintah:
  - Navigasi: `pwd`, `cd`, `ls -la`, `tree`
  - Manajemen file: `touch`, `cp -r`, `mv`, `rm -r`
  - Pencarian: `find`, `locate`, `which`, `whereis`

### Power of the command line (Linux Essentials Topic 3)

- Konsep:
  - Redirection `>`, `>>`, `<` dan pipelines `|`.
  - Konsep *text streams* (STDIN, STDOUT, STDERR).
  - Arsip dan kompresi untuk backup sederhana.
- Contoh perintah:
  - Redirection & pipe: `ls /var/log | grep syslog > logs.txt`
  - Arsip & kompresi: `tar -czf backup-home.tar.gz /home/student`
  - Filter: `grep -i error /var/log/syslog`, `sort`, `uniq`, `wc -l`

### Users, permissions & keamanan dasar (Linux Essentials Topic 5)

- Konsep:
  - User vs group, UID/GID, file ownership.
  - Mode permission `rwx` untuk owner, group, others.
  - Pentingnya akses minimal (principle of least privilege).
- Contoh perintah:
  - Identitas: `id`, `whoami`, `groups`
  - Permission: `ls -l`, `chmod 640 file.txt`, `chown root:staff file.txt`
  - Switching user (awareness): `su -`, `sudo -l`

### Proses & sistem (cuplikan Linux Essentials Topic 4)

- Konsep:
  - Proses foreground/background.
  - Monitoring resource dasar.
- Contoh perintah:
  - Listing proses: `ps aux`, `top`, `htop` (opsional)
  - Manajemen proses: `kill`, `killall`, `jobs`, `bg`, `fg`

## Labs
- [ ] Lab 1.1: Filesystem Navigation
- [ ] Lab 1.2: User Management
- [ ] Lab 1.3: Permission Exercise
- [ ] Lab 1.4: Text Processing Challenge
- Lihat juga lab umum: [lab-01](../../labs/lab-01/README.md) dan [lab-02](../../labs/lab-02/README.md) untuk latihan tambahan CLI & manajemen paket dasar.

## Assessment
- Quiz: 20 questions (min 80%)
- Practical: Complete all labs
- Documentation: Submit lab report

## Resources
- [Linux Journey](https://linuxjourney.com)
- [OverTheWire Bandit](https://overthewire.org)
- [LPI Linux Essentials 010-160 Objectives](https://www.lpi.org/our-certifications/linux-essentials-overview)
- [LPI LPIC-1 101/102 Objectives](https://www.lpi.org/our-certifications/exam-101-102-objectives/)
