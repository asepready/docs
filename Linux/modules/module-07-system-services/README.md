# Modul 7: System Services (systemd)

## Durasi
4 jam

## LPIC-1 Alignment (Objectives)

Modul ini menyelaraskan materi dengan **Exam 102**:

| LPIC-1 | Objective | Cakupan di modul ini |
|--------|-----------|----------------------|
| 107.2 | Automate system administration tasks by scheduling jobs | systemd timer (alternatif cron/at) |
| 107.3 | Localisation and internationalisation | Timezone & locale (awareness, via `timedatectl`) |
| 108.1 | Maintain system time | `timedatectl`, NTP/chrony (overview) |
| 108.x | Essential system services (systemd) | Manajemen service & target |

## Tujuan Pembelajaran
- systemd: unit, service, enable/start, dependencies
- Timer (pengganti cron), target
- Buat unit file custom

## Ringkasan Konsep & Contoh Perintah

### Manajemen service dengan systemd

- Konsep:
  - Unit types: `service`, `socket`, `timer`, `target`.
  - Status lifecycle: `start`, `stop`, `restart`, `enable`, `disable`.
- Contoh perintah:
  - `systemctl status ssh`
  - `sudo systemctl restart nginx`
  - `sudo systemctl enable nginx --now`
  - `systemctl list-units --type=service`

### Target & boot

- Konsep:
  - Target umum: `multi-user.target`, `graphical.target`, `rescue.target`.
  - Mengubah default target.
- Contoh perintah:
  - `systemctl get-default`
  - `sudo systemctl set-default multi-user.target`
  - `sudo systemctl isolate rescue.target`

### Timer sebagai pengganti cron (Exam 102 — 107.2)

- Konsep:
  - Unit pair `*.service` dan `*.timer`.
  - Waktu berbasis `OnCalendar=` dan `OnBootSec=`.
- Contoh:

```bash
sudo systemctl list-timers
sudo systemctl enable backup.timer --now
```

### Waktu sistem & timezone (Exam 102 — 108.1, 107.3)

- Konsep:
  - Perbedaan waktu lokal vs UTC.
  - Sinkronisasi NTP dengan `chrony` atau `systemd-timesyncd`.
- Contoh perintah:
  - `timedatectl status`
  - `sudo timedatectl set-timezone Asia/Jakarta`
  - `chronyc sources` (bila menggunakan chrony)

## Materi
1. [systemd Basics](01-systemd-basics.md)
2. [Service Management](02-service-management.md)
3. [Timer & Target](03-timer-target.md)
4. [Custom Unit](04-custom-unit.md)

## Lab
- [Lab 07: Service Management](lab-07-service-management.md)
- Lab umum services & boot: [lab-07](../../labs/lab-07/README.md)

## Evaluasi
- [Quiz 07](quiz-07.md)
- Quiz LPIC-style terkait: [Quiz 07 Services](../../assessments/quizzes/quiz-07-services.md)

## Proyek Terkait

- [Proyek 1: Web Server Production](../../projects/project-01-web-server/README.md) — manajemen service web/database dengan systemd.
- [Proyek 5: High Availability](../../projects/project-05-high-availability/README.md) — kontrol service pada node cluster.
