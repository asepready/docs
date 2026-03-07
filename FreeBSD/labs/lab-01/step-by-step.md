# Lab 01: Instalasi FreeBSD

## Tujuan
Instal FreeBSD 14.0 di lingkungan virtual

## Langkah-langkah

### 1. Persiapan VM
```bash
# Download ISO
fetch https://download.freebsd.org/...

# Buat VM (VirtualBox)
VBoxManage createvm --name "FreeBSD-Lab" --register
```

### 2. Boot Installer
- Mount ISO
- Boot VM
- Pilih Install

### 3. Konfigurasi
- Hostname: bsd-lab.local
- Network: DHCP
- Partition: ZFS
- Services: sshd, ntpd

### 4. Verifikasi
```bash
uname -a
pkg update
ifconfig
```

## Kriteria Penilaian
- [ ] Sistem boot dengan benar
- [ ] Network berfungsi
- [ ] SSH dapat diakses
- [ ] Package manager bekerja
