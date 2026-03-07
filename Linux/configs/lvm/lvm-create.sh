#!/bin/bash
# lvm-create.sh - Contoh create LV (sesuaikan device)
# pvcreate /dev/sdb1
# vgcreate vg0 /dev/sdb1
# lvcreate -L 10G -n lv_data vg0
# mkfs.ext4 /dev/vg0/lv_data
# mount /dev/vg0/lv_data /mnt/data
echo "Sesuaikan device dan jalankan perintah di atas"
