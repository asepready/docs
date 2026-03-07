# Disk Problems

## Ringkasan

Disk penuh, I/O error, filesystem read-only, LVM tidak aktif.

## Langkah Umum
- df -h, du, lsblk
- dmesg | grep -i error
- fsck (ext4), xfs_repair (xfs)
- vgchange -ay (aktifkan VG)
- SMART: smartctl (jika tersedia)
