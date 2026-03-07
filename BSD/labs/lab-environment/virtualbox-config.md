# Konfigurasi VirtualBox untuk Lab BSD

## Ringkasan

- Buat VM baru, tipe FreeBSD (64-bit)
- RAM minimal 1024 MB, 2 CPU disarankan
- Network: NAT atau Bridged sesuai kebutuhan
- Storage: VDI dinamis, minimal 20 GB
- Mount ISO FreeBSD untuk instalasi pertama

## Langkah

1. New VM → FreeBSD (64-bit)
2. Memory: 1024 MB atau lebih
3. Create virtual disk → VDI, dynamically allocated, 20 GB+
4. Settings → Storage → mount ISO
5. Start dan ikuti installer FreeBSD
