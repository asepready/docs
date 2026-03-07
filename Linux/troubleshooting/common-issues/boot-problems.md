# Boot Problems

## Ringkasan

Sistem tidak boot atau stuck saat boot (GRUB, initramfs, systemd).

## Langkah Umum
- Recovery mode / single user (GRUB advanced options)
- journalctl -b -1 (boot sebelumnya)
- fsck, mount, periksa fstab
- Hardware: disk, RAM (memtest)
