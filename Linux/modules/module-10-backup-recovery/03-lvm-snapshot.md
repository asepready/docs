# LVM Snapshot Backup

## Ringkasan

lvcreate -s snapshot. Mount snapshot, rsync/tar, umount, lvremove. Consistency untuk database (flush + snapshot).
