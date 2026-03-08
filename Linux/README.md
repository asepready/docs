# Linux Engineer Learning Project

## Overview
Proyek pembelajaran komprehensif untuk transisi dari NetAdmin/SecAdmin menjadi Linux Engineer.

## Tujuan
- Menguasai Linux System Administration (selaras **LPIC-1**, **LPIC-2**, **LPIC-3**)
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

## Mulai Belajar (Jalur Lengkap)

**Panduan urutan belajar dari folder ini**: [LEARNING-PATH.md](LEARNING-PATH.md) — 8 modul (12–16 minggu), dari fundamentals sampai capstone & karier. Mulai dari **Modul 1** [modules/01-fundamentals](modules/01-fundamentals).

---

## Setup Environment Lab

Lingkungan lab bisa disiapkan dengan **Vagrant (VM)** atau di **mesin Linux** yang sudah ada.

### Prasyarat

| Opsi | Kebutuhan |
|------|-----------|
| **Vagrant** (Windows/Mac/Linux) | [Vagrant](https://www.vagrantup.com/), [VirtualBox](https://www.virtualbox.org/) (atau provider lain), 2 GB RAM, 10 GB disk |
| **Linux langsung** | Ubuntu 22.04+, Rocky 9+, atau distro serupa (Debian/RHEL family) |

### Opsi A: Vagrant + VirtualBox (Windows, Linux, *BSD)

- **Host:** Windows, Linux, atau *BSD (FreeBSD)  
- **Guest:** Ubuntu 22.04 LTS (default) atau Rocky Linux 9  
- **Provider:** VirtualBox  

Panduan lengkap instalasi per platform: **[labs/lab-environment/README.md](labs/lab-environment/README.md)**.

1. Dari **root repo** (atau dari folder `Linux`):
   ```bash
   cd Linux/labs/lab-environment
   vagrant up              # Ubuntu (default)
   vagrant up rocky        # atau Rocky Linux
   ```
2. Masuk ke VM:
   ```bash
   vagrant ssh             # Ubuntu
   vagrant ssh rocky       # jika pakai Rocky
   ```
3. Di dalam VM, materi repo ada di `/linux-repo`. Jalankan setup:
   ```bash
   cd /linux-repo
   sudo ./scripts/setup-lab.sh
   ```

### Opsi B: Mesin Linux yang sudah ada

Jalankan dari **folder Linux** di mesin Linux (perlu root):

```bash
cd Linux
sudo ./scripts/setup-lab.sh
```

Script akan:
- Menginstal paket: `git`, `vim`, `htop`, `tree`, `jq`, `net-tools`, `dnsutils`/`bind-utils`, `tcpdump`, `sysstat`, `iotop`, `lynis`, `aide`, `auditd`
- Membuat user `labuser` (sudo) dan direktori `~/lab`
- Membuat direktori sistem lab: `/lab/projects`, `/lab/backups`, `/lab/logs`, `/lab/configs`, `/lab/scripts`
- Mengatur sudo logging dan alias bash untuk lab

### Verifikasi

Setelah setup (di dalam VM atau mesin Linux):

```bash
# Cek user & direktori lab
id labuser
ls -la /home/labuser/lab

# Cek tools
which vim htop tree jq; ss -tulpn | head -3
```

### Quick Start (setelah environment siap)

Dari **folder Linux** (di dalam VM atau mesin Linux):

```bash
# 1. Mulai Modul 1
cd modules/01-fundamentals
cat README.md

# 2. Jalankan lab pertama
cat labs/lab-1.1-filesystem.md

# 3. Lacak progress
./scripts/progress-tracker.sh
```

## Estimasi Waktu
- Total: 12-16 Minggu
- Commitment: 10-15 jam/minggu
- Level: Fundamental → Intermediate → Advanced

## Kesiapan Industri & Sertifikasi LPIC

Selesaikan semua modul, lab, proyek, dan capstone; gunakan **[assessments/readiness-checklist.md](assessments/readiness-checklist.md)** untuk menilai kesiapan. Materi ini diselaraskan dengan standar **LPIC-1**, **LPIC-2**, dan **LPIC-3** (LPI). Pemetaan ke objectives resmi: **[assessments/certifications/LPIC-OBJECTIVES-MAPPING.md](assessments/certifications/LPIC-OBJECTIVES-MAPPING.md)**. Panduan persiapan: **[assessments/certifications/lpi-linux-prep.md](assessments/certifications/lpi-linux-prep.md)**. Pertimbangkan juga **LFCS**, **RHCSA**; siapkan portfolio dengan **[docs/career-portfolio-guide.md](docs/career-portfolio-guide.md)**. Lihat **[ROADMAP.md](ROADMAP.md)** dan **[INDUSTRY-READINESS.md](../INDUSTRY-READINESS.md)** (root) untuk panduan lengkap.

## Contact
- Email: your-email@example.com
- GitHub: your-username
- LinkedIn: your-profile

## License
MIT License - Free for personal learning use
