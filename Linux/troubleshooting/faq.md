# FAQ - Troubleshooting Linux

## Umum
- **Q: Sistem tidak boot?** A: Coba recovery mode, journalctl -b -1, cek fstab dan disk.
- **Q: Tidak bisa SSH?** A: Cek systemctl status ssh; ufw/firewalld; network (ip a).
- **Q: Package install gagal?** A: apt update / dnf check; cek DNS dan repository; proxy jika ada.
- **Q: Layanan tidak start?** A: systemctl status unit; journalctl -u unit.

## Lebih Lanjut
Lihat subfolder common-issues, diagnostic-tools, recovery-procedures.
