# Disk Problems

## Ringkasan

Disk penuh, I/O error, filesystem corrupt.

## Langkah Umum
- df -h, du
- zpool status / gpart list
- fsck (UFS), zpool clear (ZFS)
- Periksa SMART jika tersedia
