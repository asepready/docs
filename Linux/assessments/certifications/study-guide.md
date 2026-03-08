# Study Guide — Linux Administrator (LPIC-1, LPIC-2, RHCSA-relevant)

## Modul yang relevan dengan LPI & RHCSA

Materi di folder **Linux/** memetakan ke **objectives LPIC-1 (101, 102)** dan sebagian **LPIC-2 (201, 202)**. Jika fokus RHEL, modul yang sama juga mendukung persiapan **RHCSA** (Red Hat Certified System Administrator).

Pemetaan detail ke objectives LPI: **[LPIC-OBJECTIVES-MAPPING.md](LPIC-OBJECTIVES-MAPPING.md)**.

---

## Prioritas untuk LPIC-1

| Prioritas | Topik | Modul / Lab |
|-----------|--------|-------------|
| Tinggi | systemd, boot, runlevels/targets | module-01-introduction, module-07-system-services, lab-01 |
| Tinggi | Package: apt, dnf/yum, dpkg, rpm | module-02-package-management, lab-02 |
| Tinggi | GNU/Unix commands, FHS, file & permission | 01-fundamentals, lab-1.1, lab-1.3, lab-1.4 |
| Tinggi | User/group, sudo, cron/at/timers | module-03-user-management, module-11-shell-scripting, lab-03 |
| Tinggi | Jaringan: konfigurasi, troubleshooting, DNS client | module-05-network-configuration, lab-05, lab-06 |
| Tinggi | Keamanan: sudo, SSH, GPG, host security | module-09-security-hardening, configs/ssh |
| Tinggi | Logging: rsyslog, systemd journal, logrotate | module-08-monitoring-logging, lab-07 |
| Sedang | Storage: partisi, filesystem, mount, LVM dasar | module-04-storage-filesystem, lab-04 |
| Sedang | Shell scripting (environment + script sederhana) | module-11-shell-scripting, 03-scripting |
| Sedang | Firewall dasar (host security) | module-06-firewall |

---

## Prioritas untuk LPIC-2

| Prioritas | Topik | Modul / Lab |
|-----------|--------|-------------|
| Tinggi | Capacity planning, kernel, system startup | 02-sysadmin, module-07-system-services, 07-troubleshooting |
| Tinggi | Filesystem & storage lanjutan, RAID, LVM | module-04-storage-filesystem, module-10-backup-recovery, lab-04, lab-10 |
| Tinggi | DNS server, HTTP server, email, file sharing | module-12-case-studies, projects (web, mail, NAS) |
| Tinggi | System security (firewall, VPN, auth) | module-06-firewall, module-09-security-hardening, project-02-firewall-gateway |

---

## Urutan belajar disarankan (LPIC-1)

1. **01-fundamentals** + **module-01-introduction** + lab-01 (arsitektur, instalasi, CLI, FHS)  
2. **module-02-package-management** + lab-02  
3. **module-03-user-management** + lab-03  
4. **module-04-storage-filesystem** + lab-04 (partisi, mount, permission sudah di 01-fundamentals)  
5. **module-11-shell-scripting** + 03-scripting (shell environment & script dasar)  
6. **module-07-system-services** (systemd, time, cron/timers)  
7. **module-08-monitoring-logging** + lab-07  
8. **module-05-network-configuration** + lab-05, lab-06  
9. **module-06-firewall** (host security)  
10. **module-09-security-hardening** (SSH, sudo, GPG)  

Setelah itu: kerjakan **quiz** dan **practical exams** di `assessments/`, lalu latihan dari sumber resmi LPI.

---

## RHCSA (jika fokus RHEL)

Modul yang sama (fundamentals, package, user, storage, network, firewall, security, scripting, services) berlaku untuk RHCSA. Tambahkan:

- Fokus pada **RHEL/CentOS/Rocky** (dnf, firewalld, SELinux)
- **Lab environment** dengan Rocky: [labs/lab-environment](https://github.com/.../Linux/labs/lab-environment) (Vagrant Rocky)
- Materi **SELinux** di module-09-security-hardening

---

## Sumber lain di repo

- **Panduan lengkap LPIC:** [lpi-linux-prep.md](lpi-linux-prep.md)  
- **Pemetaan objectives:** [LPIC-OBJECTIVES-MAPPING.md](LPIC-OBJECTIVES-MAPPING.md)  
- **Link & referensi:** [resources.md](resources.md)  
- **Jalur belajar umum:** [LEARNING-PATH.md](../../LEARNING-PATH.md)
