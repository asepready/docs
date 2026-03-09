# Modul 9: Security Hardening

## Durasi
4 jam

## LPIC-1 Alignment (Objectives)

Modul ini menyelaraskan materi dengan **Exam 102** Topic 110 (Security) dan menjadi jembatan awal ke LPIC-2/3 Security:

| LPIC-1 | Objective | Cakupan di modul ini |
|--------|-----------|----------------------|
| 110.1 | Perform security administration tasks | Audit, password policy (chage), SSH hardening |
| 110.2 | Setup host security | Disable service tidak perlu, hardening daemon, update otomatis |
| 110.3 | Securing data with encryption | SSH keys, port forwarding (dibahas juga di modul SSH) |

## Tujuan Pembelajaran
- SSH hardening, fail2ban
- SELinux (RHEL) atau AppArmor (Ubuntu)
- Audit (auditd), update otomatis

## Ringkasan Konsep & Contoh Perintah

### SSH hardening (Exam 102 — 110.3)

- Konsep:
  - Login berbasis key vs password.
  - Pembatasan akses root dan user tertentu.
- Contoh perintah:
  - Generate key: `ssh-keygen -t ed25519`
  - Copy key: `ssh-copy-id user@server`
  - Konfigurasi: `/etc/ssh/sshd_config` (mis. `PermitRootLogin no`, `PasswordAuthentication no`)
  - Reload service: `sudo systemctl reload sshd`

### Policy & audit

- Konsep:
  - Audit log untuk aktivitas sensitif.
  - Password aging dan kebijakan akun.
- Contoh perintah:
  - `chage -l username`
  - `sudo chage -M 90 username`
  - `sudo ausearch -k login-failed` (contoh rule auditd, detail di materi)

### Mandatory Access Control (SELinux/AppArmor)

- Konsep:
  - Perbedaan DAC vs MAC.
  - Mode enforcing/permissive/disabled (SELinux) atau profile AppArmor.
- Contoh perintah:
  - SELinux: `getenforce`, `setenforce 0`, `sestatus`
  - AppArmor: `aa-status`, `aa-enforce`, `aa-complain`

### Update & patching

- Konsep:
  - Pentingnya patch rutin untuk keamanan.
- Contoh:
  - Debian/Ubuntu: `sudo apt update && sudo apt upgrade`
  - RHEL/CentOS: `sudo dnf upgrade`

## Materi
1. [SSH Hardening](01-ssh-hardening.md)
2. [SELinux / AppArmor](02-selinux-apparmor.md)
3. [auditd](03-auditd.md)
4. [Automated Updates](04-automated-updates.md)

## Lab
- [Lab 09: Harden System](lab-09-harden-system.md)
- Lab umum keamanan: [lab-09](../../labs/lab-09/README.md)

## Evaluasi
- [Quiz 09](quiz-09.md)
- Quiz LPIC-style terkait: [Quiz 09 Security](../../assessments/quizzes/quiz-09-security.md)

## Proyek Terkait

- [Proyek 1: Web Server Production](../../projects/project-01-web-server/README.md) — hardening web server & SSH.
- [Proyek 2: Firewall Gateway](../../projects/project-02-firewall-gateway/README.md) — hardening host gateway.
- [Proyek 4: Mail Server](../../projects/project-04-mail-server/README.md) — hardening layanan mail dan TLS.
