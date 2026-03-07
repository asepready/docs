# Lab 01: Instalasi Linux

## Tujuan
Instal Ubuntu Server 22.04 LTS atau Rocky Linux 9 di lingkungan virtual

## Langkah-langkah

### 1. Persiapan VM
```bash
# Download ISO
# Ubuntu: https://ubuntu.com/download/server
# Rocky: https://rockylinux.org/download

# Buat VM (VirtualBox)
VBoxManage createvm --name "Linux-Lab" --ostype Ubuntu_64 --register
VBoxManage modifyvm "Linux-Lab" --memory 1024 --cpus 2
VBoxManage createhd --filename Linux-Lab.vdi --size 20480
```

### 2. Boot Installer
- Mount ISO
- Boot VM
- Pilih Install (Ubuntu) atau Install Rocky Linux

### 3. Konfigurasi
- Hostname: linux-lab.local
- User: admin (dengan sudo)
- Network: DHCP atau static
- Partition: LVM atau guided
- Services: OpenSSH server (centang saat instalasi)

### 4. Verifikasi
```bash
uname -a
sudo apt update   # Ubuntu
# atau: sudo dnf update   # Rocky
ip a
systemctl status ssh
```

## Kriteria Penilaian
- [ ] Sistem boot dengan benar
- [ ] Network berfungsi
- [ ] SSH dapat diakses
- [ ] Package manager (apt/dnf) bekerja
