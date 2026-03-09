# Modul 3: User Management

## Durasi
4 jam

## LPIC-1 Alignment (Objectives)
Modul ini mencakup **Exam 101** 104.5 (permission & ownership), **Exam 102** 107.1 (user/group accounts), 110.1 (security administration — sudo, passwd, chage). Lihat [LPIC-OBJECTIVES-MAPPING.md](../../assessments/certifications/LPIC-OBJECTIVES-MAPPING.md).

## Tujuan Pembelajaran
- Administrasi user dan group (useradd, usermod, groupadd)
- Permission, umask, ACL
- Konfigurasi sudo

## Ringkasan Konsep & Contoh Perintah

### Berkas akun sistem (Exam 102 — 107.1)

- Konsep:
  - Struktur `/etc/passwd`, `/etc/shadow`, `/etc/group`, `/etc/gshadow`.
  - Perbedaan user normal, system user, dan root.
- Contoh perintah:
  - `getent passwd username`
  - `sudo useradd -m alice`
  - `sudo usermod -aG sudo alice`
  - `sudo userdel -r alice`

### Permission & ownership (Exam 101 — 104.5, recap untuk 102)

- Konsep:
  - Notasi `rwxr-x---` dan mode oktal (`640`, `755`).
  - `umask` sebagai default permission.
- Contoh perintah:
  - `ls -l file.txt`
  - `chmod 640 file.txt`
  - `chown root:dev file.txt`
  - `umask 027`

### Password policy & sudo (Exam 102 — 110.1)

- Konsep:
  - Kebijakan masa berlaku password (`chage`).
  - Konsep prinsip *least privilege* dengan `sudo`.
- Contoh perintah:
  - `passwd username`
  - `sudo chage -M 90 username`
  - `sudo visudo` untuk mengedit `/etc/sudoers` secara aman
  - Contoh rule (dibahas detail di materi): `alice ALL=(ALL) NOPASSWD: /usr/bin/systemctl`

## Materi
1. [User Administration](01-user-administration.md)
2. [Permissions](02-permissions.md)
3. [Sudo Configuration](03-sudo-configuration.md)
4. [ACL](04-acl.md)

## Lab
- [Lab 03: Create Users](lab-03-create-users.md)
- Lab umum user & group: [lab-03](../../labs/lab-03/README.md)

## Evaluasi
- [Quiz 03](quiz-03.md)
- Quiz LPIC-style terkait: [Quiz 03 Users](../../assessments/quizzes/quiz-03-users.md)

## Proyek Terkait

- [Proyek 1: Web Server Production](../../projects/project-01-web-server/README.md) — manajemen akun admin & service.
