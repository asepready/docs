# Panduan Karier dan Portfolio — Linux Engineer

Panduan singkat untuk menampilkan hasil belajar (capstone, proyek) di resume/CV, GitHub, dan wawancara teknis. Target: lamaran kerja untuk peran Linux System Administrator, Junior SRE, atau DevOps dasar.

---

## Menampilkan Proyek di Resume / CV

Gunakan bullet points yang spesifik dan berorientasi hasil. Contoh untuk **Capstone** atau **Project 01 (Web Server)**:

- **Deployed a production-like web stack** (Nginx + app backend) on Linux with systemd, documented runbook and recovery steps.
- **Configured firewall (ufw/firewalld) and SSH hardening**; applied CIS-inspired baselines and maintained change documentation.
- **Automated deployment and backup** using Bash and Ansible; reduced manual steps and documented procedures for handover.

Untuk **Project 02 (Firewall Gateway)**:

- **Designed and implemented a firewall gateway** with NAT and port forwarding; documented rules and troubleshooting steps.

Untuk **Project 03 (Backup)**:

- **Implemented backup and retention strategy** (e.g. rsync/tar/cron); tested restore and documented recovery time objectives.

Sesuaikan dengan proyek yang benar-benar Anda selesaikan; sebut tool (systemd, LVM, Nginx, Ansible) dan outcome (runbook, automation, security hardening).

---

## Menyiapkan Repo GitHub untuk Rekruter

1. **README**: Satu paragraf ringkas: apa proyek ini, stack (OS, web server, firewall, automation), dan bagaimana menjalankan/deploy (langkah singkat atau link ke runbook).
2. **Runbook / docs**: File Markdown yang menjelaskan: cara deploy, cara rollback, cara cek kesehatan layanan, dan kontak/rujukan jika ada.
3. **Struktur jelas**: Folder untuk configs, scripts, dan dokumentasi; hindari repo berantakan tanpa penjelasan.
4. **License**: Tambah LICENSE (mis. MIT) agar terlihat serius.

Rekruter sering melihat: apakah Anda bisa mendokumentasikan pekerjaan teknis dan apakah konfigurasi/script bisa diikuti orang lain.

---

## Topik Wawancara Teknis dan Pemetaan ke Modul

| Topik | Modul / Materi |
|-------|-----------------|
| systemd (service, unit, target, journal) | Module 2, Module 7 — [module-07-system-services](../modules/module-07-system-services/) |
| LVM (PV, VG, LV, resize) | Module 2, Module 4 — [module-04-storage-filesystem](../modules/module-04-storage-filesystem/) |
| Firewall (iptables, nftables, ufw, firewalld) | Module 4, Module 6 — [module-06-firewall](../modules/module-06-firewall/) |
| SSH hardening (keys, config, fail2ban) | Module 5 — [module-09-security-hardening](../modules/module-09-security-hardening/) |
| Permissions (ugo, rwx, umask, SUID) | Module 1, Module 3 — [module-03-user-management](../modules/module-03-user-management/) |
| Package management (apt, dnf, repo) | Module 2 — [module-02-package-management](../modules/module-02-package-management/) |
| Networking (ip, routing, DNS, netplan) | Module 4 — [module-05-network-configuration](../modules/module-05-network-configuration/) |
| Logging (journald, rsyslog, logrotate) | Module 7, Module 8 — [module-08-monitoring-logging](../modules/module-08-monitoring-logging/) |
| Bash scripting (conditionals, loops, error handling) | Module 3 — [module-11-shell-scripting](../modules/module-11-shell-scripting/) |
| Troubleshooting (disk full, service down, performance) | Module 7 — [07-troubleshooting](../modules/07-troubleshooting/) |

Gunakan modul dan lab sebagai bahan cerita: "Saya mengerjakan X di lab Y dan mendokumentasikannya di proyek Z."

---

## Soft Skill yang Sering Dicari

- **Komunikasi insiden**: Bisa menjelaskan masalah, langkah yang sudah diambil, dan rencana perbaikan (runbook/post-mortem).
- **Dokumentasi**: Konfigurasi dan prosedur terdokumentasi agar tim lain bisa maintain.
- **Kerja tim**: Kolaborasi dengan developer atau tim ops (ticket, handover, standar).

Sediakan satu dua contoh dari pengalaman magang, proyek, atau dari capstone (mis. "Saya menulis runbook dan membagi dengan tim").

---

## Ringkasan

1. Tulis resume/CV dengan bullet points proyek yang spesifik dan berorientasi hasil.
2. Siapkan repo GitHub dengan README, runbook, dan struktur yang rapi.
3. Siapkan wawancara teknis dengan memetakan topik ke modul dan siap bercerita tentang lab serta proyek yang Anda selesaikan.
4. Tunjukkan soft skill lewat dokumentasi dan contoh komunikasi insiden atau kerja tim.

Untuk checklist kesiapan lengkap: [assessments/readiness-checklist.md](../assessments/readiness-checklist.md). Untuk kesesuaian dengan industri: [INDUSTRY-READINESS.md](../../INDUSTRY-READINESS.md) (root).
