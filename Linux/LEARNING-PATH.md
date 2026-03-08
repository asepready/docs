# Jalur Belajar: Dari Folder Linux ke Linux Engineer

Panduan urutan belajar menggunakan seluruh materi di folder **Linux/**.  
Estimasi total: **12–16 minggu**, 10–15 jam/minggu.

Materi diselaraskan dengan standar **LPIC-1**, **LPIC-2**, dan **LPIC-3** (LPI). Pemetaan ke objectives: **[assessments/certifications/LPIC-OBJECTIVES-MAPPING.md](assessments/certifications/LPIC-OBJECTIVES-MAPPING.md)**.

---

## Ringkasan 8 Modul Utama

| # | Modul | Durasi | Fokus |
|---|--------|--------|--------|
| 1 | [01-fundamentals](modules/01-fundamentals) | 2 minggu | CLI, filesystem, user, permission, text tools |
| 2 | [02-sysadmin](modules/02-sysadmin) | 2–3 minggu | systemd, process, disk/LVM, log, package |
| 3 | [03-scripting](modules/03-scripting) | 2 minggu | Bash, cron/timer, error handling, automation |
| 4 | [04-networking](modules/04-networking) | 2 minggu | iproute2, firewall, NAT, DNS/DHCP, troubleshooting |
| 5 | [05-security](modules/05-security) | 2 minggu | SELinux/AppArmor, auditd, CIS, AIDE, SSH hardening |
| 6 | [06-cloud](modules/06-cloud) | 2 minggu | Cloud VM, Docker/Podman, Kubernetes dasar, container security |
| 7 | [07-troubleshooting](modules/07-troubleshooting) | 2 minggu | Disk/service/performance/network, runbook, post-mortem |
| 8 | [08-capstone](modules/08-capstone) | 1 minggu | Project akhir, dokumentasi, career prep |

---

## Fase 1: Fondasi (Minggu 1–2)

### Modul 1: Linux Fundamentals & CLI
- **Folder**: [modules/01-fundamentals](modules/01-fundamentals)
- **Tujuan**: Arsitektur Linux, operasi file, user/grup, permission, grep/sed/awk
- **Labs**: Lab 1.1 [Filesystem](modules/01-fundamentals/labs/lab-1.1-filesystem.md), 1.2 User, 1.3 Permission, 1.4 Text Processing
- **Materi pendukung**: [module-01-introduction](modules/module-01-introduction) (pengenalan, distro, instalasi), [module-03-user-management](modules/module-03-user-management)
- **Lab instalasi**: [labs/lab-01](labs/lab-01) — instal Ubuntu Server atau Rocky di VM

**Mulai di sini**: Baca [01-fundamentals/README.md](modules/01-fundamentals/README.md), lalu kerjakan [lab-1.1-filesystem.md](modules/01-fundamentals/labs/lab-1.1-filesystem.md).

---

## Fase 2: Administrasi Sistem (Minggu 3–5)

### Modul 2: System Administration Core
- **Folder**: [modules/02-sysadmin](modules/02-sysadmin)
- **Tujuan**: systemd, process/cgroups, disk/LVM, journald/rsyslog/logrotate, apt/dnf
- **Labs**: Lab 2.1–2.5 (systemd, process, LVM, log, package)
- **Materi pendukung**: [module-02-package-management](modules/module-02-package-management), [module-07-system-services](modules/module-07-system-services), [module-04-storage-filesystem](modules/module-04-storage-filesystem), [module-08-monitoring-logging](modules/module-08-monitoring-logging), [module-10-backup-recovery](modules/module-10-backup-recovery)
- **Labs numerik**: [labs/lab-02](labs/lab-02), [lab-04](labs/lab-04), [lab-07](labs/lab-07), [lab-10](labs/lab-10)

---

## Fase 3: Scripting & Otomasi (Minggu 6–7)

### Modul 3: Shell Scripting & Automation
- **Folder**: [modules/03-scripting](modules/03-scripting)
- **Tujuan**: Bash (set -euo pipefail, trap), cron/systemd timer, getopts, jq
- **Labs**: Lab 3.1–3.5 (Bash, error handling, backup script, monitoring, deployment)
- **Materi pendukung**: [module-11-shell-scripting](modules/module-11-shell-scripting)
- **Scripts contoh**: [scripts/](scripts) (installation, configuration, backup, utilities)

---

## Fase 4: Jaringan (Minggu 8–9)

### Modul 4: Linux Networking
- **Folder**: [modules/04-networking](modules/04-networking)
- **Tujuan**: iproute2, Netplan/nmcli, nftables/iptables, NAT, DNS/DHCP, ss/tcpdump/mtr/dig
- **Labs**: Lab 4.1–4.5; [labs/lab-05](labs/lab-05), [lab-06](labs/lab-06)
- **Materi pendukung**: [module-05-network-configuration](modules/module-05-network-configuration), [module-06-firewall](modules/module-06-firewall)
- **Proyek**: [project-02-firewall-gateway](projects/project-02-firewall-gateway)
- **Configs**: [configs/netplan](configs/netplan), [configs/nginx](configs/nginx)

---

## Fase 5: Keamanan (Minggu 10–11)

### Modul 5: Security Hardening
- **Folder**: [modules/05-security](modules/05-security)
- **Tujuan**: SELinux/AppArmor, auditd, OpenSCAP/CIS, AIDE, SSH/sudo hardening
- **Labs**: Lab 5.1–5.5; [labs/lab-09](labs/lab-09)
- **Materi pendukung**: [module-09-security-hardening](modules/module-09-security-hardening)
- **Dokumen**: [docs/security-hardening.md](docs/security-hardening.md)
- **Configs & script**: [configs/ssh](configs/ssh), [scripts/security](scripts/security)

---

## Fase 6: Cloud & Container (Minggu 12–13)

### Modul 6: Cloud & Containerization
- **Folder**: [modules/06-cloud](modules/06-cloud)
- **Tujuan**: Cloud VM (AWS/Azure/GCP), Dockerfile, Podman rootless, Kubernetes dasar, container security
- **Labs**: Lab 6.1–6.5
- **Folder kontainer**: [containers/](containers), [playbooks/](playbooks) (Ansible)
- **Proyek**: [project-01-web-server](projects/project-01-web-server), [project-05-high-availability](projects/project-05-high-availability)

---

## Fase 7: Troubleshooting & Observability (Minggu 14–15)

### Modul 7: Troubleshooting & Observability
- **Folder**: [modules/07-troubleshooting](modules/07-troubleshooting)
- **Tujuan**: Troubleshooting terstruktur (disk, service, performance, network), runbook, post-mortem
- **Labs**: Lab 7.1–7.5
- **Runbook**: [troubleshooting/](troubleshooting) (FAQ, recovery, common-issues), [tools/](tools)

---

## Fase 8: Capstone & Karier (Minggu 16)

### Modul 8: Capstone & Career Prep
- **Folder**: [modules/08-capstone](modules/08-capstone)
- **Deliverables**: Project setup, deployment, hardening, automation, monitoring, dokumentasi, presentasi
- **Checklist**: [labs/lab-checklist.md](labs/lab-checklist.md) (Module 8)
- **Karier**: [docs/career-portfolio-guide.md](docs/career-portfolio-guide.md)
- **Sertifikasi**: [assessments/certifications](assessments/certifications) — [LPIC-OBJECTIVES-MAPPING.md](assessments/certifications/LPIC-OBJECTIVES-MAPPING.md) (LPIC-1/2/3), [lpi-linux-prep.md](assessments/certifications/lpi-linux-prep.md), RHCSA, LFCS

---

## Lab Environment

- **Setup script** (jalankan di dalam VM Linux): `./scripts/setup-lab.sh`
- **Vagrant**: [labs/lab-environment](labs/lab-environment) — `vagrant up`
- **Proxmox**: [labs/lab-environment/proxmox-config.md](labs/lab-environment/proxmox-config.md)

---

## Referensi Cepat

- **Cheat sheet**: [references/cheat-sheets](references/cheat-sheets) (network, storage, systemd)
- **Glossary**: [docs/glossary.md](docs/glossary.md)
- **Kesiapan industri**: [assessments/readiness-checklist.md](assessments/readiness-checklist.md) (jika ada)
- **Quiz & ujian**: [assessments/quizzes](assessments/quizzes), [assessments/practical-exams](assessments/practical-exams)

---

## Alur Singkat

```
01-fundamentals → 02-sysadmin → 03-scripting → 04-networking
       → 05-security → 06-cloud → 07-troubleshooting → 08-capstone
```

Selesaikan setiap modul (baca materi, kerjakan lab, kerjakan proyek yang terkait) sebelum lanjut. Gunakan **LEARNING-PATH.md** ini sebagai checklist jalur belajar dari folder Linux menuju Linux Engineer.
