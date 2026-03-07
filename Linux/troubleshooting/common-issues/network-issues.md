# Network Issues

## Ringkasan

Tidak dapat koneksi, tidak resolve DNS, routing gagal.

## Langkah Umum
- ip a, ip route, ss -tuln
- ping gateway dan DNS (8.8.8.8)
- Netplan/NetworkManager, resolv.conf
- ufw/firewalld (jangan blok keluar jika salah konfigurasi)
