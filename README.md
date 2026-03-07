# Proyek Pelatihan Sistem Operasi

Folder **Proyek** berisi dua program pelatihan: **BSD Engineer Training** (root) dan **Linux Engineer Training** (subfolder).

---

## 1. BSD Engineer Training (root)

### Deskripsi
Program pelatihan komprehensif untuk menjadi BSD Engineer profesional (FreeBSD, OpenBSD, NetBSD).

### Tujuan
- Menguasai administrasi sistem BSD
- Memahami keamanan dan hardening (PF, jails)
- Mampu mengimplementasikan solusi produksi

### Struktur (di root)
- **modules/** - Materi pembelajaran
- **labs/** - Latihan praktikum
- **scripts/** - Script automasi
- **configs/** - Contoh konfigurasi
- **assessments/** - Evaluasi & ujian
- **projects/** - Proyek real-world

### Quick Start (BSD)
```bash
cd labs/lab-environment
vagrant up
```

---

## 2. Linux Engineer Training

### Deskripsi
Program pelatihan komprehensif untuk menjadi Linux Engineer profesional (Ubuntu, Debian, RHEL, Rocky).

### Tujuan
- Menguasai administrasi Linux (systemd, apt/dnf, LVM)
- Jaringan (Netplan, ufw/firewalld), keamanan (SSH, fail2ban)
- Mampu mengimplementasikan solusi produksi

### Lokasi & Quick Start
```bash
cd linux-engineer-training
# Lihat README di dalam folder
cd labs/lab-environment
vagrant up
```

### Struktur (di linux-engineer-training/)
- **docs/** - Dokumentasi
- **modules/** - 12 modul (intro, package, user, storage, network, firewall, systemd, monitoring, security, backup, scripting, case studies)
- **labs/** - lab-environment + lab-01 s/d lab-12
- **scripts/** - installation, configuration, backup, monitoring, security, maintenance, utilities
- **configs/** - netplan, ufw, firewalld, rsyslog, logrotate, LVM, systemd, nginx, mysql, ssh
- **assessments/** - quizzes, practical exams, projects, certifications
- **troubleshooting/** - common issues, diagnostic tools, recovery procedures
- **references/** - cheat sheets, man pages, books, websites, videos
- **projects/** - web server, firewall gateway, NAS, mail server, high availability
- **tools/** - setup, testing, monitoring, deployment
- **assets/** - images, templates, downloads

---

## Lisensi
MIT License
