# BSD Engineer Training Program

## Deskripsi
Program pelatihan komprehensif untuk menjadi BSD Engineer profesional.

## Tujuan
- Menguasai administrasi sistem BSD (FreeBSD, OpenBSD, NetBSD)
- Memahami keamanan dan hardening sistem
- Mampu mengimplementasikan solusi produksi

## Struktur
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

## Quick Start

Dari dalam folder BSD:
```bash
cd labs/lab-environment
vagrant up
```

Dari root repo:
```bash
cd BSD/labs/lab-environment
vagrant up
```

## Lisensi
MIT License
