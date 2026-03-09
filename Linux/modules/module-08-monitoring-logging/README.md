# Modul 8: Monitoring & Logging

## Durasi
4 jam

## LPIC-1 Alignment (Objectives)

Modul ini menyelaraskan materi dengan **Exam 102** Topic 108 (Essential System Services) dan sebagian Topic 200 (LPIC-2 — capacity planning):

| LPIC | Objective | Cakupan di modul ini |
|------|-----------|----------------------|
| 108.1 | Maintain system time | Monitoring waktu & korelasi log (awareness) |
| 108.2 | System logging | journald, `journalctl`, rsyslog |
| 200.x | Capacity planning (LPIC-2) | `top`, `vmstat`, `iostat`, `ss` (overview) |

## Tujuan Pembelajaran
- journald (journalctl), rsyslog
- Monitoring: top, htop, vmstat, iostat, ss
- Rotasi log (logrotate)

## Ringkasan Konsep & Contoh Perintah

### Logging dengan journald & rsyslog (Exam 102 — 108.2)

- Konsep:
  - Peran `systemd-journald` dan integrasi dengan `rsyslog`.
  - Level log (priority) dan facility singkat.
- Contoh perintah:
  - `journalctl -xe` (lihat error terbaru)
  - `journalctl -u ssh.service` (log untuk satu service)
  - `journalctl --since "1 hour ago"`
  - Berkas konfigurasi rsyslog: `/etc/rsyslog.conf`, `/etc/rsyslog.d/*.conf`

### Monitoring resource dasar

- Konsep:
  - CPU, memori, disk I/O, dan network sebagai empat pilar pemantauan.
- Contoh perintah:
  - `top` atau `htop` untuk overview proses.
  - `vmstat 1` untuk memori dan CPU.
  - `iostat -xz 1` untuk I/O disk.
  - `ss -tulpn` untuk melihat port yang listening.

### Rotasi log

- Konsep:
  - Tujuan log rotation: membatasi ukuran file dan menjaga histori.
  - Peran `logrotate` dan konfigurasi per-app.
- Contoh:
  - Konfigurasi utama: `/etc/logrotate.conf`
  - Drop-in: `/etc/logrotate.d/`
  - Jalankan manual: `sudo logrotate -f /etc/logrotate.conf`

## Materi
1. [journald & journalctl](01-journald.md)
2. [rsyslog](02-rsyslog.md)
3. [System Monitoring](03-system-monitoring.md)
4. [Log Rotation](04-log-rotation.md)

## Lab
- [Lab 08: Setup Monitoring](lab-08-setup-monitoring.md)
- Lab umum monitoring & logging: [lab-08](../../labs/lab-08/README.md)

## Evaluasi
- [Quiz 08](quiz-08.md)
- Quiz LPIC-style terkait: [Quiz 08 Monitoring](../../assessments/quizzes/quiz-08-monitoring.md)

## Proyek Terkait

- [Proyek 1: Web Server Production](../../projects/project-01-web-server/README.md) — penguatan monitoring & log web server.
- [Proyek 5: High Availability](../../projects/project-05-high-availability/README.md) — monitoring node dan layanan HA.
