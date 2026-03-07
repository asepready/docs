# Pemetaan Objectives LPI BSD Specialist (702-100)

Dokumen ini memetakan objectives resmi **LPI 702-100 (BSD Specialist)** ke modul, lab, dan asesmen di repository BSD Engineer Training. Gunakan untuk persiapan ujian setelah menyelesaikan materi terkait.

Lihat juga: [study-guide.md](study-guide.md), [resources.md](resources.md), [practice-exam-702-100.md](practice-exam-702-100.md).

---

## Topic 711: BSD Installation and Software Management

| Objective | Berat | Modul | Lab | Quiz / Exam |
|-----------|-------|--------|-----|-------------|
| 711.1 BSD Operating System Installation (install/upgrade FreeBSD, NetBSD, OpenBSD) | 3 | module-01-introduction | lab-01-install-freebsd | quiz-01 |
| 711.2 BSD Software and Package Management (pkg, ports, compile from source) | 4 | module-02-package-management | lab-02-install-packages | quiz-02 |
| 711.3 BSD System Startup Configuration (boot, rc.d, rc.conf, services) | 3 | module-07-system-services | lab-07-service-management | quiz-07 |
| 711.4 Hardware Configuration (kernel modules, dmesg, devices) | 2 | module-01, module-04-storage-filesystem | lab-01, lab-04-zfs-setup | quiz-01, quiz-04 |
| 711.5 BSD Kernel Parameters and System Security Level (sysctl, securelevel) | 2 | module-09-security-hardening | — | quiz-09 |

---

## Topic 712: Storage Devices and BSD Filesystems

| Objective | Berat | Modul | Lab | Quiz / Exam |
|-----------|-------|--------|-----|-------------|
| 712.1 BSD Partitioning and Disk Labels (disklabel, fdisk) | 2 | module-04-storage-filesystem | lab-04-zfs-setup | quiz-04 |
| 712.2 Create File Systems and Maintain Integrity (UFS, ZFS, fsck, zpool) | 1 | module-04 (03-zfs-basics, 04-zfs-advanced) | lab-04-zfs-setup | quiz-04 |
| 712.3 Control Mounting and Unmounting (mount, fstab, ZFS mount) | 2 | module-04 | lab-04-zfs-setup | quiz-04 |
| 712.4 Manage File Permissions and Ownership (chmod, chown, umask, SUID/SGID) | 3 | module-03-user-management | lab-03-create-users | quiz-03 |
| 712.5 Hard and Symbolic Links (ln) | 1 | module-03, module-04 | lab-03 | quiz-03 |
| 712.6 Find Files and BSD Directory Layout (find, locate, which, whereis, hier) | 2 | module-03, module-01 | lab-03 | quiz-03 |

---

## Topic 713: Basic BSD System Administration

| Objective | Berat | Modul | Lab | Quiz / Exam |
|-----------|-------|--------|-----|-------------|
| 713.1 Manage User Accounts and Groups | 3 | module-03-user-management | lab-03-create-users | quiz-03 |
| 713.2 Automate System Administration (scheduling jobs, cron) | 2 | module-07-system-services | lab-07 (periodic, cron) | quiz-07 |
| 713.3 Maintain System Time | 1 | module-07 | — | quiz-07 |
| 713.4 System Logging | 2 | module-08-monitoring-logging | lab-08, syslog config | quiz-08 |
| 713.5 Mail Transfer Agents Basics | 1 | module-12-case-studies (mail server) | — | quiz-12 |
| 713.6 Manage Printing and Print Jobs | 1 | — | — | (referensi eksternal) |
| 713.7 Manage User Sessions | 1 | module-03 | lab-03 | quiz-03 |

---

## Topic 714: Basic BSD Network Administration

| Objective | Berat | Modul | Lab | Quiz / Exam |
|-----------|-------|--------|-----|-------------|
| Network configuration (interfaces, routing, VLAN) | — | module-05-network-configuration | lab-05-network-setup | quiz-05 |
| PF firewall, NAT, redirection | — | module-06-pf-firewall | lab-06-firewall-config | quiz-06 |
| DNS configuration | — | module-05 (04-dns-configuration) | lab-05 | quiz-05 |

---

## Topic 715: Basic Unix Skills

| Objective | Modul | Lab | Quiz / Exam |
|-----------|--------|-----|-------------|
| CLI, shell, text processing, scripting | module-11-shell-scripting | lab-11-create-scripts | quiz-11 |
| Troubleshooting, backup, recovery | module-10-backup-recovery, module-12 | lab-10-backup-setup | quiz-10, quiz-12 |

---

## Ujian Praktik Repo vs LPI 702-100

| Asesmen Repo | Topik yang Tercover |
|--------------|---------------------|
| exam-01-basic-admin | 711 (install, pkg), 712 (storage, permissions), 713 (users, services) |
| exam-02-network-security | 714 (network, PF), 711.5 (security level), 713.4 (logging) |
| exam-03-advanced-admin | 712 (ZFS), 713 (automation, logging), 715 (scripting, backup) |

Selesaikan modul 1–12 dan lab terkait, lalu gunakan [practice-exam-702-100.md](practice-exam-702-100.md) untuk latihan format ujian (60 soal, 90 menit).
