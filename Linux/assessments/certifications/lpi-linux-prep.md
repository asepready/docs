# Persiapan Sertifikasi LPI: Linux Essentials, LPIC-1, LPIC-2, LPIC-3

## Ringkasan

Panduan persiapan ujian **LPI** (Linux Professional Institute) untuk jalur:

- **Linux Essentials** — pengenalan Linux (opsional, dasar)
- **LPIC-1** — Linux Administrator (Exam 101 + 102)
- **LPIC-2** — Linux Engineer (Exam 201 + 202)
- **LPIC-3** — Specialty (300 Mixed Environments, 303 Security, 304 Virtualization & HA, 305 Virtualization & Containerization)

Materi di folder **Linux/** diselaraskan dengan **objectives resmi LPI**. Pemetaan detail: **[LPIC-OBJECTIVES-MAPPING.md](LPIC-OBJECTIVES-MAPPING.md)**.

---

## LPIC-1 (Linux Administrator)

- **Versi objectives:** 5.0  
- **Kode ujian:** 101-500, 102-500  
- **Prasyarat:** Tidak ada  
- **Syarat lulus:** Lulus kedua exam (101 dan 102). Masing-masing ±90 menit, 60 soal (multiple-choice dan isian).

### Exam 101 — Topik

| Topik | Judul |
|-------|--------|
| 101 | System Architecture (hardware, boot, runlevels/targets) |
| 102 | Linux Installation and Package Management (disk layout, boot manager, libraries, apt, RPM/YUM/DNF, virtualisasi guest) |
| 103 | GNU and Unix Commands (command line, text filters, file management, pipes, processes, regex, vi) |
| 104 | Devices, Linux Filesystems, Filesystem Hierarchy Standard (partisi, filesystem, mount, permission, link, FHS) |

### Exam 102 — Topik

| Topik | Judul |
|-------|--------|
| 105 | Shells and Shell Scripting (environment, simple scripts) |
| 106 | User Interfaces and Desktops (X11, desktop, aksesibilitas) |
| 107 | Administrative Tasks (user/group, cron/at/timers, locale) |
| 108 | Essential System Services (time/NTP, logging, MTA dasar, printing) |
| 109 | Networking Fundamentals (TCP/IP, konfigurasi jaringan, troubleshooting, DNS client) |
| 110 | Security (security admin, host security, enkripsi/SSH/GPG) |

### Modul & lab yang relevan (LPIC-1)

- **01-fundamentals** — 103, 104 (CLI, file, FHS, permission, text tools)
- **module-01-introduction** — 101, 102.1, 102.2 (arsitektur, instalasi, boot)
- **module-02-package-management** — 102.3, 102.4, 102.5
- **module-03-user-management** — 104.5, 107.1, 110.1
- **module-04-storage-filesystem** — 104.1, 104.2, 104.3
- **module-05-network-configuration** — 109.x
- **module-06-firewall** — 110.2
- **module-07-system-services** — 101.3, 107.2, 107.3, 108.1
- **module-08-monitoring-logging** — 108.2
- **module-09-security-hardening** — 110.1, 110.2, 110.3
- **module-11-shell-scripting** — 105.x
- **Labs:** lab-01 (instalasi), lab-02 (package), lab-03 (user), lab-04 (storage), lab-05–06 (network), lab-07 (logging), lab-09 (security), dll.

---

## LPIC-2 (Linux Engineer)

- **Prasyarat:** LPIC-1 aktif  
- **Syarat lulus:** Lulus exam 201 dan 202.

### Exam 201 — Topik

- **200** Capacity Planning  
- **201** Linux Kernel  
- **202** System Startup  
- **203** Filesystem and Devices  
- **204** Advanced Storage Device Administration (RAID, LVM)

### Exam 202 — Topik

- **207** Domain Name Server (DNS)  
- **208** HTTP Services  
- **209** File Sharing (Samba, NFS, FTP)  
- **210** Network Client Management  
- **211** Email Services  
- **212** System Security (firewall, VPN, authentication)

### Modul & lab yang relevan (LPIC-2)

- **02-sysadmin**, **module-04-storage-filesystem**, **module-10-backup-recovery** — 201, 203, 204  
- **module-07-system-services** — 202  
- **module-08-monitoring-logging**, **07-troubleshooting** — 200  
- **module-05-network-configuration**, **module-06-firewall**, **module-09-security-hardening** — 207, 210, 212  
- **module-12-case-studies**, **projects** (web server, firewall, mail, NAS) — 208, 209, 211  

---

## LPIC-3 (Specialty)

- **Prasyarat:** Umumnya LPIC-2 aktif (cek persyaratan resmi LPI).  
- **Jalur:** Pilih salah satu atau lebih: 300 (Mixed Environments), 303 (Security), 304 (Virtualization & HA), 305 (Virtualization & Containerization).

### Relevansi materi repo

- **300** — Samba, FreeIPA, NFS → module-12-case-studies, project NAS  
- **303** — PKI, X.509, SSL/TLS, LUKS → module-09-security-hardening, proyek web/SSL  
- **304** — Virtualization, HA cluster → 06-cloud, project-05-high-availability  
- **305** — Virtualization & container → 06-cloud, containers/, project-05-high-availability  

---

## Sumber belajar

- **Objectives resmi:** [LPIC-1 101/102](https://www.lpi.org/our-certifications/exam-101-102-objectives/), [LPIC-2 201/202](https://www.lpi.org/our-certifications/exam-201-202-objectives/)  
- **Learning materials LPI:** [LPIC-1 101](https://learning.lpi.org/en/learning-materials/101-500/), [LPIC-1 102](https://learning.lpi.org/en/learning-materials/102-500/)  
- **Di repo ini:** [resources.md](resources.md), [study-guide.md](study-guide.md), [LPIC-OBJECTIVES-MAPPING.md](LPIC-OBJECTIVES-MAPPING.md)

---

## Checklist persiapan LPIC-1

- [ ] Baca objectives resmi 101 dan 102 (PDF/wiki LPI)  
- [ ] Selesaikan modul 01-fundamentals dan module-01 s/d module-11 yang dipetakan di LPIC-OBJECTIVES-MAPPING.md  
- [ ] Kerjakan lab lab-01 s/d lab-12 yang relevan  
- [ ] Kerjakan quiz dan practical exam di assessments/  
- [ ] Latihan soal dari sumber resmi LPI atau partner (buku, kursus)  
- [ ] Daftar ujian di [LPI](https://www.lpi.org/our-certifications/getting-started/)
