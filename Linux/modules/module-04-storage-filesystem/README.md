# Modul 4: Storage & Filesystem

## Durasi
4 jam

## LPIC-1 Alignment (Objectives)

Modul ini menyelaraskan materi dengan **Exam 101** (Topic 102 & 104):

| LPIC-1 | Objective | Cakupan di modul ini |
|--------|-----------|----------------------|
| 102.1 | Design hard disk layout | Partisi, layout filesystem, swap |
| 104.1 | Create partitions and filesystems | `fdisk`, `parted`, `mkfs`, `mkswap` |
| 104.2 | Maintain the integrity of filesystems | `fsck`, `e2fsck`, `df`, `du` (awareness) |
| 104.3 | Control mounting and unmounting of filesystems | `mount`, `umount`, `fstab`, UUID/label |
| 104.5–104.7 | Permissions, links, FHS | Dukung konsep via contoh path & mount |

## Tujuan Pembelajaran
- Partisi, LVM (pv, vg, lv)
- Filesystem ext4, xfs, mount, fstab
- Swap dan quota

## Ringkasan Konsep & Contoh Perintah

### Partisi & layout disk (Exam 101 — 102.1, 104.1)

- Konsep:
  - Skema partisi MBR vs GPT (gambaran).
  - Pemisahan `/`, `/home`, `/var`, `/boot`, `swap` untuk server.
  - Mapping perangkat: `/dev/sda`, `/dev/nvme0n1`, partisi `sda1`, `sda2`, dst.
- Contoh perintah:
  - Tinjau disk: `lsblk -f`, `sudo fdisk -l`, `sudo parted -l`
  - Buat partisi (latihan di lab): `sudo fdisk /dev/sda`, `sudo parted /dev/sda`
  - Buat filesystem: `sudo mkfs.ext4 /dev/sda1`, `sudo mkfs.xfs /dev/sdb1`

### LVM (Logical Volume Manager)

- Konsep:
  - PV (physical volume), VG (volume group), LV (logical volume).
  - Kelebihan: resize fleksibel, snapshot (dibahas juga di modul backup).
- Contoh perintah:
  - Inisialisasi: `sudo pvcreate /dev/sdb1`, `sudo vgcreate vgdata /dev/sdb1`
  - Buat LV: `sudo lvcreate -L 10G -n lvdata vgdata`
  - Info: `sudo pvs`, `sudo vgs`, `sudo lvs`

### Filesystem, mount & fstab (Exam 101 — 104.2, 104.3)

- Konsep:
  - Mount point sebagai *attachment point* filesystem.
  - `fstab` untuk mount otomatis saat boot.
  - Penggunaan label dan UUID untuk menghindari perubahan nama device.
- Contoh perintah:
  - Mount manual: `sudo mount /dev/sdb1 /mnt/data`
  - Unmount: `sudo umount /mnt/data`
  - Cek penggunaan disk: `df -h`, `du -sh /var/log`
  - Lihat UUID: `blkid`, `lsblk -f`
  - Entri `fstab` (contoh):

```fstab
UUID=xxxx-xxxx  /data   ext4   defaults,noatime   0  2
```

### Swap & quota (ringkasan)

- Swap:
  - Konsep area swap untuk mendukung memori fisik.
  - Perintah: `sudo mkswap /dev/sdX2`, `sudo swapon /dev/sdX2`, `free -h`
- Quota:
  - Konsep pembatasan penggunaan disk per user/group.
  - Awareness tools: `edquota`, `repquota` (detail praktik di lab/lanjutan).
## Materi
1. [Disk & Partitions](01-disk-partitions.md)
2. [LVM](02-lvm.md)
3. [Filesystem & Mount](03-filesystem-mount.md)
4. [Swap & Quota](04-swap-quota.md)

## Lab
- [Lab 04: LVM Setup](lab-04-lvm-setup.md)
- Lab umum storage: [lab-04](../../labs/lab-04/README.md)

## Evaluasi
- [Quiz 04](quiz-04.md)
- Quiz LPIC-style terkait: [Quiz 04 Storage](../../assessments/quizzes/quiz-04-storage.md)

## Proyek Terkait

- [Proyek 3: NAS Storage](../../projects/project-03-nas-storage/README.md) — desain LVM/RAID dan share.
- [Proyek 5: High Availability](../../projects/project-05-high-availability/README.md) — storage untuk cluster/replication.
