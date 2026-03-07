# Rescue Mode

## Ringkasan

Boot dari USB/live, mount root, chroot untuk perbaikan. Atau GRUB advanced options → recovery mode.

## Langkah
1. Boot dari media live atau pilih recovery di GRUB
2. Mount root: mount /dev/vg0/lv_root /mnt (sesuaikan)
3. Mount proc/sys/dev: mount --bind /dev /mnt/dev; mount --bind /proc /mnt/proc; mount --bind /sys /mnt/sys
4. chroot /mnt
5. Perbaiki (fsck, edit fstab, reset password)
6. exit; umount; reboot
