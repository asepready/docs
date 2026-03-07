# Single-User Mode

## Ringkasan

Boot ke single-user (boot -s) untuk perbaikan filesystem atau konfigurasi tanpa layanan jaringan.

## Langkah
1. Boot -s atau pilih single user di loader
2. Mount filesystem (mount -u /; mount -a)
3. Lakukan perbaikan (fsck, edit fstab)
4. exit untuk lanjut multi-user
