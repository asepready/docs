# Pemetaan Materi Linux ke Standar LPIC-1, LPIC-2, LPIC-3

Dokumen ini memetakan modul dan lab di folder **Linux/** ke **objectives resmi LPI** (Linux Professional Institute) untuk LPIC-1, LPIC-2, dan LPIC-3. Gunakan sebagai acuan agar materi selaras dengan sertifikasi.

**Referensi resmi:**
- [LPIC-1 Exam 101 & 102 Objectives](https://www.lpi.org/our-certifications/exam-101-102-objectives/) (Versi 5.0, 101-500 / 102-500)
- [LPIC-2 Exam 201 & 202 Objectives](https://www.lpi.org/our-certifications/exam-201-202-objectives/)
- [LPIC-3 Overview](https://www.lpi.org/our-certifications/) (300, 303, 304, 305)

---

## LPIC-1: Linux Administrator (101 + 102)

*Prasyarat: tidak ada. Lulus 101 dan 102 untuk sertifikasi LPIC-1.*

### Exam 101

| Topik LPI | Objective | Deskripsi Singkat | Modul / Lab di Repo |
|-----------|-----------|-------------------|----------------------|
| **101** System Architecture | 101.1 | Hardware: sysfs, udev, dbus, lsusb, lspci, lsmod, modprobe, /dev, /proc, /sys | module-01-introduction, 01-fundamentals |
| | 101.2 | Boot: systemd, SysVinit, journalctl, dmesg, bootloader, UEFI/BIOS | module-01-introduction, lab-01 |
| | 101.3 | Runlevels/targets, shutdown, reboot, systemctl, telinit | module-07-system-services |
| **102** Linux Installation & Package Management | 102.1 | Design hard disk layout: partisi, LVM, /boot, swap, ESP | lab-01 (objectives), module-04-storage-filesystem |
| | 102.2 | Boot manager: GRUB 2, grub-mkconfig, grub-install | module-01-introduction |
| | 102.3 | Shared libraries: ldd, ldconfig, /etc/ld.so.conf | 02-sysadmin / module-02-package-management |
| | 102.4 | Debian package: apt, apt-get, dpkg, sources.list | module-02-package-management, lab-02 |
| | 102.5 | RPM/YUM/DNF/Zypper | module-02-package-management, lab-02 |
| | 102.6 | Linux as virtualization guest, cloud-init | 06-cloud, module-10-backup-recovery (opsional) |
| **103** GNU and Unix Commands | 103.1 | Command line, history, environment, PATH, man, which, type | 01-fundamentals, lab-1.1 |
| | 103.2 | Text filters: cat, cut, sort, uniq, grep, sed, head, tail, wc, tr | 01-fundamentals (lab-1.4 text processing) |
| | 103.3 | File management: cp, mv, rm, mkdir, find, tar, cpio, dd | 01-fundamentals, lab-1.1 |
| | 103.4 | Streams, pipes, redirects, xargs, tee | 01-fundamentals |
| | 103.5 | Processes: ps, top, kill, jobs, bg, fg, nohup, screen, tmux | 02-sysadmin, module-07-system-services |
| | 103.6 | Process priorities: nice, renice | 02-sysadmin |
| | 103.7 | Regular expressions, grep, sed | 01-fundamentals (lab-1.4) |
| | 103.8 | vi/vim editing, EDITOR | 01-fundamentals |
| **104** Devices, Linux Filesystems, FHS | 104.1 | Partitions, filesystems: fdisk, gdisk, parted, mkfs, mkswap, Btrfs basics | module-04-storage-filesystem, lab-04 |
| | 104.2 | Integrity: fsck, e2fsck, xfs_repair, df, du | module-04-storage-filesystem, troubleshooting |
| | 104.3 | Mount/umount, fstab, labels/UUID, systemd mount units | module-04-storage-filesystem, lab-1.1 |
| | 104.5 | Permissions, ownership: chmod, chown, chgrp, umask, suid/sgid/sticky | module-03-user-management, 01-fundamentals (lab-1.3) |
| | 104.6 | Hard and symbolic links: ln, ls | 01-fundamentals, lab-1.1 |
| | 104.7 | FHS, locate, find, which, whereis, updatedb | 01-fundamentals, lab-1.1-filesystem |

### Exam 102

| Topik LPI | Objective | Deskripsi Singkat | Modul / Lab di Repo |
|-----------|-----------|-------------------|----------------------|
| **105** Shells and Shell Scripting | 105.1 | Shell environment: .bashrc, .profile, alias, functions, PATH | module-11-shell-scripting, 03-scripting |
| | 105.2 | Simple scripts: shebang, test, if/for/while, command substitution | module-11-shell-scripting, 03-scripting |
| **106** User Interfaces and Desktops | 106.1 | X11, xorg.conf, DISPLAY, xhost, xauth | (Opsional; bisa skip jika fokus server) |
| | 106.2 | Desktop environments, VNC, RDP, Spice | (Opsional) |
| | 106.3 | Accessibility | (Opsional) |
| **107** Administrative Tasks | 107.1 | User/group: useradd, usermod, userdel, groupadd, passwd, chage, /etc/passwd, /etc/shadow, /etc/group, getent, /etc/skel | module-03-user-management, lab-03 |
| | 107.2 | cron, at, systemd timers | module-11-shell-scripting, 03-scripting, module-07-system-services |
| | 107.3 | Locale, timezone: LANG, LC_*, timedatectl, tzselect | module-07-system-services |
| **108** Essential System Services | 108.1 | System time: NTP, chrony, ntpd, timedatectl, hwclock | module-07-system-services, module-08-monitoring-logging |
| | 108.2 | Logging: rsyslog, systemd journal, journalctl, logrotate | module-08-monitoring-logging, lab-07 |
| | 108.3 | MTA basics: postfix/sendmail, forwarding, aliases | module-12-case-studies (mail), assessments |
| | 108.4 | CUPS, printing | (Opsional untuk fokus server) |
| **109** Networking Fundamentals | 109.1 | TCP/IP, IPv4/IPv6, UDP, TCP, ICMP, ports, CIDR | module-05-network-configuration, 04-networking |
| | 109.2 | Persistent config: NetworkManager, nmcli, hostnamectl, /etc/hosts, resolv.conf | module-05-network-configuration, lab-05 |
| | 109.3 | Troubleshooting: ip, ss, ping, traceroute, route | module-05-network-configuration, 04-networking, lab-05, lab-06 |
| | 109.4 | Client DNS: getent, dig, host, nsswitch, resolv.conf | module-05-network-configuration |
| **110** Security | 110.1 | Security admin: sudo, who/w/last, ulimit, nmap, netstat, chage, find (suid/sgid) | module-03-user-management, module-09-security-hardening |
| | 110.2 | Host security: TCP wrappers, shadow passwords, disable unused services | module-09-security-hardening |
| | 110.3 | Encryption: SSH keys, ssh-agent, GPG, port forwarding | module-09-security-hardening, configs/ssh |

---

## LPIC-2: Linux Engineer (201 + 202)

*Prasyarat: LPIC-1 aktif.*

### Exam 201

| Topik LPI | Cakupan | Modul / Lab di Repo |
|-----------|---------|----------------------|
| **200** Capacity Planning | CPU, memory, disk I/O, network I/O, prediksi kebutuhan | module-08-monitoring-logging, 07-troubleshooting |
| **201** Linux Kernel | Komponen kernel, kompilasi, modul, runtime | 02-sysadmin, 07-troubleshooting |
| **202** System Startup | SysVinit, systemd, recovery, bootloader alternatif | module-07-system-services, lab-01 |
| **203** Filesystem and Devices | Operasi filesystem lanjutan | module-04-storage-filesystem, module-10-backup-recovery |
| **204** Advanced Storage | RAID, LVM lanjutan | module-04-storage-filesystem, module-10-backup-recovery (LVM snapshot), lab-04, lab-10 |

### Exam 202

| Topik LPI | Cakupan | Modul / Lab di Repo |
|-----------|---------|----------------------|
| **207** DNS | Konfigurasi DNS, zone, keamanan DNS | 04-networking, module-05-network-configuration (client); untuk server DNS perlu materi tambahan |
| **208** HTTP Services | Web server (Apache/nginx) | projects/project-01-web-server, configs/nginx |
| **209** File Sharing | Samba, NFS, FTP | module-12-case-studies (NAS, file sharing) |
| **210** Network Client Management | DHCP, PAM, LDAP dasar | module-05-network-configuration |
| **211** Email Services | MTA, MDA, IMAP/POP3 | module-12-case-studies (mail-server), project-04-mail-server |
| **212** System Security | Firewall, VPN, authentication | module-06-firewall, module-09-security-hardening, project-02-firewall-gateway |

---

## LPIC-3: Specialty (300, 303, 304, 305)

*Prasyarat: LPIC-2 aktif (kecuali bila LPI mengatur lain).*

### 300: Mixed Environments (Samba & Linux Identity)

| Topik | Cakupan | Modul / Lab di Repo |
|-------|---------|----------------------|
| 301–305 | Samba (dasar, AD, share, client), FreeIPA, NFS | module-12-case-studies, project NAS; FreeIPA/NFS perlu materi dedikasi |

### 303: Security

| Topik | Cakupan | Modul / Lab di Repo |
|-------|---------|----------------------|
| 331.1 | Sertifikat X.509, PKI, OpenSSL, Let's Encrypt, ACME | module-09-security-hardening (encryption), bisa perlu modul PKI/TLS |
| 331.2 | Sertifikat untuk enkripsi, signing, auth; Apache mod_ssl, SSL/TLS | project web server, nginx/SSL |
| 331.3 | Encrypted filesystems: LUKS, dm-crypt, Clevis | module-09-security-hardening (SELinux/AppArmor), bisa perlu lab LUKS |

### 304: Virtualization & High Availability (v2)

| Topik | Cakupan | Modul / Lab di Repo |
|-------|---------|----------------------|
| 330 | Virtualization (Xen, KVM, libvirt) | 06-cloud, lab-environment (Vagrant/VirtualBox) |
| 334–335 | HA cluster management, HA storage | project-05-high-availability |

### 305: Virtualization & Containerization

| Topik | Cakupan | Modul / Lab di Repo |
|-------|---------|----------------------|
| 351.x | Virtualization (Xen, QEMU/KVM), containers | 06-cloud, containers/, project-05-high-availability |

---

## Ringkasan Penggunaan

1. **Persiapan LPIC-1**: Ikuti modul **01-fundamentals**, **module-01-introduction**, **module-02-package-management**, **module-03-user-management**, **module-04-storage-filesystem**, **module-05-network-configuration**, **module-06-firewall**, **module-07-system-services**, **module-08-monitoring-logging**, **module-09-security-hardening**, **module-11-shell-scripting**, dan lab **lab-01** s/d **lab-12** sesuai tabel di atas.
2. **Persiapan LPIC-2**: Selesaikan LPIC-1 lalu gunakan **module-04-storage-filesystem**, **module-08-monitoring-logging**, **module-10-backup-recovery**, **module-12-case-studies**, **projects** (web server, firewall, mail, NAS, HA), serta materi kernel/boot dan DNS/HTTP/email jika tersedia.
3. **Persiapan LPIC-3**: Pilih jalur (300 / 303 / 304 / 305) dan gabungkan **module-09-security-hardening**, **module-12-case-studies**, **06-cloud**, **project-05-high-availability**, serta materi Samba/PKI/HA/container sesuai exam yang diambil.

Materi di repo ini **bukan pengganti** objectives resmi LPI. Selalu gunakan [exam objectives](https://www.lpi.org/our-certifications/exam-101-102-objectives/) sebagai acuan utama dan lengkapi dengan sumber resmi LPI (learning materials, buku, lab) untuk persiapan ujian.

---

## Gap & Backlog Materi (Untuk Fase Berikutnya)

Bagian ini mencatat objektif LPI yang **belum memiliki modul dedikasi** atau baru tercakup secara parsial di repo ini. Gunakan sebagai backlog pengembangan modul/lab berikutnya.

### LPIC-1

- **106 User Interfaces and Desktops**
  - 106.1 Install and configure X11
  - 106.2 Graphical Desktops
  - 106.3 Accessibility
  - Saat ini hanya disentuh ringan (atau di-skip) karena fokus utama kurikulum adalah server headless. Dapat ditambahkan modul khusus desktop bila dibutuhkan.
- **108.4 Manage printers and printing**
  - Belum ada modul khusus CUPS/printing; hanya disebut sekilas di materi troubleshooting.

### LPIC-2

- **DNS server lanjutan (207)**
  - Server DNS authoritative/recursive (Bind, dnsmasq) baru disentuh singkat di networking; belum ada modul server DNS penuh.
- **Email services lanjutan (211)**
  - Detail konfigurasi Postfix/Dovecot sebagian dibahas di proyek Mail Server dan case studies, namun belum ada modul teori terstruktur.
- **File sharing (209)**
  - Samba/NFS diperkenalkan di proyek NAS, namun belum ada modul konsep mendalam (ACL Windows, domain integration, dsb.).

### LPIC-3 (Garis Besar)

- **Security (303)** — PKI/TLS, LUKS, hardening lanjutan
  - Dasar-dasar tersedia di `module-09-security-hardening` dan proyek web/HA, tetapi belum cukup untuk cakupan penuh LPIC-3 303.
- **Virtualization & HA (304/305)**
  - `06-cloud`, `project-05-high-availability` dan beberapa lab sudah relevan, namun dokumentasi modul untuk KVM/libvirt, cluster manager, dan container orchestration masih bisa diperdalam.

Area-area di atas adalah kandidat prioritas bila kurikulum diperluas ke persiapan LPIC-2/LPIC-3 yang lebih komprehensif.
