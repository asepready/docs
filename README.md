# Proyek Pelatihan Sistem Operasi

Repository ini berisi dua program pelatihan: **BSD Engineer Training** (folder `BSD/`) dan **Linux Engineer Training** (folder `Linux/`).

---

## 1. BSD Engineer Training (folder `BSD/`)

### Deskripsi
Program pelatihan komprehensif untuk menjadi BSD Engineer profesional (FreeBSD, OpenBSD, NetBSD).

### Tujuan
- Menguasai administrasi sistem BSD
- Memahami keamanan dan hardening (PF, jails)
- Mampu mengimplementasikan solusi produksi

### Struktur (isi di bawah `BSD/`)
- **docs/** - Dokumentasi
- **modules/** - Materi pembelajaran (12 modul)
- **labs/** - lab-environment + lab-01..lab-12
- **scripts/** - installation, configuration, backup, monitoring, security, maintenance, utilities
- **configs/** - rc.conf, pf, syslog, zfs, jail, nginx, mysql, ssh
- **assessments/** - quizzes, practical-exams, projects, certifications
- **troubleshooting/** - common-issues, diagnostic-tools, recovery-procedures, faq
- **references/** - cheat-sheets, man-pages, books, websites, videos
- **projects/** - project-01-web-server .. project-05-high-availability
- **tools/** - setup-tools, testing-tools, monitoring-tools, deployment-tools
- **assets/** - images, templates, videos, downloads

### Quick Start (BSD)
```bash
cd BSD/labs/lab-environment
vagrant up
```

---

## 2. Linux Engineer Training (folder `Linux/`)

### Deskripsi
Program pelatihan komprehensif untuk menjadi Linux Engineer profesional (Ubuntu, Debian, RHEL, Rocky).

### Tujuan
- Menguasai administrasi Linux (systemd, apt/dnf, LVM)
- Jaringan (Netplan, ufw/firewalld), keamanan (SSH, fail2ban)
- Mampu mengimplementasikan solusi produksi

### Struktur (isi di bawah `Linux/`)
- **docs/** - Dokumentasi
- **modules/** - 8 modul utama (01-fundamentals..08-capstone) + 12 modul (module-01-introduction..module-12-case-studies)
- **labs/** - lab-environment, lab-01..lab-12, lab-checklist.md
- **scripts/** - setup-lab.sh, progress-tracker.sh, installation, configuration, backup, monitoring, security, maintenance, utilities
- **configs/** - netplan, ufw, firewalld, rsyslog, logrotate, LVM, systemd, nginx, mysql, ssh
- **playbooks/** - Ansible automation
- **containers/** - Docker/Podman files
- **monitoring/** - Observability configs
- **security/** - Security hardening scripts
- **troubleshooting/** - common issues, diagnostic tools, recovery procedures
- **capstone/** - Project akhir
- **resources/** - Cheat sheet & referensi
- **assessments/** - quizzes, practical exams, projects, certifications
- **references/** - cheat sheets, man pages, books, websites, videos
- **projects/** - web server, firewall gateway, NAS, mail server, high availability
- **tools/** - setup, testing, monitoring, deployment
- **assets/** - images, templates, downloads

### Quick Start (Linux)
```bash
cd Linux
./scripts/setup-lab.sh
cd modules/01-fundamentals
./scripts/progress-tracker.sh
```
Atau untuk Vagrant lab environment:
```bash
cd Linux/labs/lab-environment
vagrant up
```

---

## Kesesuaian dengan Industri (Industry Readiness)

Repository ini dirancang sebagai fondasi untuk peran **Linux Engineer** dan **BSD Engineer**. Agar pembelajaran benar-benar memenuhi ekspektasi industri, selesaikan semua modul, lab, dan proyek; gunakan **checklist kesiapan** per track; dan pertimbangkan **sertifikasi** (LPI, RHCSA, LFCS, LPI BSD) serta pengalaman nyata (magang, proyek).

Detail: **[INDUSTRY-READINESS.md](INDUSTRY-READINESS.md)**.

---

## Lisensi
MIT License
