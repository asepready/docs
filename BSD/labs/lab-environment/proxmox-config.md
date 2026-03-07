# Konfigurasi Proxmox untuk Lab BSD

## Ringkasan

- Buat VM: Other → FreeBSD
- BIOS: Default (SeaBIOS)
- Disk: scsi/sata, 20 GB+
- CPU: 2 cores
- Memory: 1024 MB+
- Network: bridge vmbr0
- CD/DVD: upload ISO FreeBSD dan gunakan untuk instalasi

## Setelah instalasi

Eject CD, boot dari disk. Konfigurasi network sesuai jaringan Proxmox.
