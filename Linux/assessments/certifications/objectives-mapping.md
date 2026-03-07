# Pemetaan Objectives Sertifikasi Linux

Dokumen ini memetakan objectives utama **RHCSA**, **LPIC-1**, dan **LFCS** ke modul, lab, dan asesmen di repository Linux Engineer Training. Gunakan untuk persiapan ujian setelah menyelesaikan materi terkait.

Lihat juga: [study-guide.md](study-guide.md), [resources.md](resources.md).

---

## RHCSA (Red Hat Certified System Administrator)

| Area / Objective | Modul | Lab | Quiz / Exam |
|------------------|--------|-----|-------------|
| Understand and use essential tools (shell, redirection, grep, SSH, tar, permissions, man) | 01-fundamentals, module-01 | Lab 1.1–1.5 | quiz-01 |
| Manage software (repositories, dnf/yum) | module-02 (package management) | Lab 2.5, lab-02-install-packages | quiz-02 |
| Create simple shell scripts (conditionals, loops, I/O) | 03-scripting, module-11 | Lab 3.1–3.5, lab-11-create-scripts | quiz-11 |
| Operate running systems (boot, targets, processes, services, logging) | module-02, module-07 (systemd) | Lab 2.1, 2.4, lab-07 | quiz-02, quiz-07 |
| Configure local storage (partitions, LVM) | module-04 (storage) | Lab 2.3, lab-04-lvm-setup | quiz-04 |
| Create and configure file systems (ext4, xfs, NFS, mount) | module-04 | lab-04-lvm-setup | quiz-04 |
| Deploy and maintain systems (scheduling, services, bootloader) | module-07 | Lab 2.1, 3.1 (cron), lab-07 | quiz-07 |
| Manage basic networking (IPv4/IPv6, hostname, firewall) | module-04 (networking), module-06 (firewall) | Lab 4.1–4.5, lab-05-network-setup, lab-06 | quiz-05, quiz-06 |
| Manage users and groups | module-03 (user management) | Lab 1.2, 1.3, lab-03-create-users | quiz-03 |
| Manage security and firewall (firewalld, SSH) | module-09 (security), module-06 | Lab 5.5, lab-06 | quiz-09, exam-02 |

---

## LPIC-1 / Linux Essentials

| Topic | Modul | Lab | Quiz / Exam |
|-------|--------|-----|-------------|
| System Architecture (hardware, boot) | module-01 | lab-01-install-linux | quiz-01 |
| Linux Installation & Package Management (apt, dnf) | module-02 | lab-02-install-packages, Lab 2.5 | quiz-02 |
| GNU and Unix Commands (CLI, files, text, shell) | 01-fundamentals, module-01 | Lab 1.1–1.5 | quiz-01 |
| Devices, Linux Filesystems, FHS | module-04 | Lab 2.3, lab-04-lvm-setup | quiz-04 |
| Shells and Shell Scripting | 03-scripting, module-11 | Lab 3.1–3.5, lab-11 | quiz-11 |
| Administrative Tasks (users, jobs, logging, time) | module-03, module-07 | Lab 1.2, 2.1, 2.4, lab-03, lab-07 | quiz-03, quiz-07 |
| Essential System Services (systemd, networking) | module-07, module-05 (network) | Lab 2.1, lab-05, lab-07 | quiz-05, quiz-07 |
| Networking Fundamentals (TCP/IP, firewall, DNS) | module-05, module-06 | Lab 4.1–4.5, lab-05, lab-06 | quiz-05, quiz-06 |
| Security (permissions, SSH, encryption) | module-09 | Lab 5.5, lab-06 | quiz-09, exam-02 |

---

## LFCS (Linux Foundation Certified System Administrator)

LFCS bersifat distro-agnostic; objectives overlap dengan RHCSA dan LPIC-1. Gunakan pemetaan berikut:

| Keterampilan | Modul | Lab | Ujian Praktik |
|--------------|--------|-----|----------------|
| Essential commands, files, FHS | 01-fundamentals, module-01, module-04 | Lab 1.1–1.5, lab-04 | exam-01 |
| User/group management | module-03 | lab-03-create-users | exam-01 |
| Package management | module-02 | lab-02, Lab 2.5 | exam-01 |
| Storage (partitions, LVM, filesystems) | module-04 | lab-04-lvm-setup | exam-01, exam-03 |
| Services & process management (systemd) | module-07 | lab-07, Lab 2.1 | exam-01 |
| Networking & firewall | module-05, module-06 | lab-05, lab-06 | exam-02 |
| Security (SSH, firewall, permissions) | module-09, module-06 | Lab 5.5, lab-06 | exam-02 |
| Scripting & automation | module-11, 03-scripting | lab-11, Lab 3.x | exam-03 |

---

## Cara Menggunakan

1. Selesaikan modul dan lab yang tercantum untuk objective yang akan diujikan.
2. Kerjakan quiz dan practical exam terkait untuk validasi.
3. Untuk RHCSA: fokus RHEL/Rocky (dnf, firewalld, systemd); materi repo mencakup dasar yang sama.
4. Untuk LPIC-1: gunakan kombinasi modul 01-fundamentals..08-capstone dan module-01..module-12 sesuai daftar di atas.
