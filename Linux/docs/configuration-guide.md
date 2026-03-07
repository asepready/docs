# Panduan Konfigurasi

## Ringkasan

Panduan konfigurasi sistem Linux: systemd, jaringan (Netplan/nmcli), firewall (iptables/nftables/firewalld), storage (LVM, ext4/xfs), dan layanan aplikasi.

## Topik

1. systemd: unit files, enable/start, dependencies
2. Konfigurasi jaringan: Netplan (Ubuntu), NetworkManager, /etc/network/interfaces
3. Firewall: ufw, iptables, nftables, firewalld
4. Storage: fstab, LVM, mount
5. Konfigurasi layanan (Nginx, PostgreSQL, dll.)

## File Konfigurasi Penting

- `/etc/systemd/system/` - unit custom
- `/etc/netplan/`, `/etc/sysconfig/network-scripts/` - network
- `/etc/fstab` - filesystem
- `/etc/ssh/sshd_config` - SSH

Lihat juga folder **configs/** untuk contoh konfigurasi.
