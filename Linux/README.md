# Linux Engineer Learning Project

## Overview
Proyek pembelajaran komprehensif untuk transisi dari NetAdmin/SecAdmin menjadi Linux Engineer.

## Tujuan
- Menguasai Linux System Administration
- Implementasi Security Hardening
- Automation dengan Bash & Ansible
- Cloud & Containerization Basics
- Troubleshooting & Observability

## Struktur Folder
Struktur di bawah ini mengacu pada isi folder `Linux/` di repository.

- **docs/** - Dokumentasi
- **modules/** - 8 modul utama (01-fundamentals..08-capstone) + 12 modul (module-01-introduction..module-12-case-studies)
- **labs/** - lab-environment, lab-01..lab-12, lab-checklist.md
- **scripts/** - setup-lab.sh, progress-tracker.sh, installation, configuration, backup, monitoring, security, maintenance, utilities
- **configs/** - netplan, ufw, firewalld, rsyslog, logrotate, LVM, systemd, nginx, mysql, ssh
- **playbooks/** - Ansible automation
- **containers/** - Docker/Podman files
- **monitoring/** - Observability configs
- **security/** - Security hardening scripts
- **troubleshooting/** - Runbook & guides
- **capstone/** - Project akhir
- **resources/** - Cheat sheet & referensi
- **assessments/** - quizzes, practical exams, projects, certifications
- **references/** - cheat sheets, man pages, books, websites, videos
- **projects/** - web server, firewall gateway, NAS, mail server, high availability
- **tools/** - setup, testing, monitoring, deployment
- **assets/** - images, templates, downloads

## Quick Start

Dari root repo: `cd Linux` lalu jalankan perintah di bawah (atau gunakan path `Linux/...`).

Dari dalam folder Linux:
```bash
# 1. Setup lab environment
./scripts/setup-lab.sh

# 2. Start Module 1
cd modules/01-fundamentals
cat README.md

# 3. Track progress
./scripts/progress-tracker.sh
```

Vagrant lab environment:
```bash
cd Linux/labs/lab-environment
vagrant up
```

## Estimasi Waktu
- Total: 12-16 Minggu
- Commitment: 10-15 jam/minggu
- Level: Fundamental → Intermediate → Advanced

## Kesiapan Industri

Selesaikan semua modul, lab, proyek, dan capstone; gunakan **[assessments/readiness-checklist.md](assessments/readiness-checklist.md)** untuk menilai kesiapan. Pertimbangkan sertifikasi **LFCS**, **RHCSA**, atau **LPIC-1**; siapkan portfolio dengan panduan **[docs/career-portfolio-guide.md](docs/career-portfolio-guide.md)**. Lihat **[ROADMAP.md](ROADMAP.md)** untuk timeline dan **[INDUSTRY-READINESS.md](../INDUSTRY-READINESS.md)** (root) untuk panduan lengkap.

## Contact
- Email: your-email@example.com
- GitHub: your-username
- LinkedIn: your-profile

## License
MIT License - Free for personal learning use
