# Lab 1.1: Filesystem Navigation

## Objective
Memahami struktur direktori Linux dan navigasi efisien.

**LPIC-1 (101):** Topic 103.1 (command line), 103.3 (file management), 104.3 (mount/identify), 104.6 (links), 104.7 (FHS, find, locate). Lihat [LPIC-OBJECTIVES-MAPPING.md](../../../assessments/certifications/LPIC-OBJECTIVES-MAPPING.md).

## Tasks

### Task 1: Explore Filesystem Hierarchy
```bash
# List top-level directories
ls -la /

# Understand each directory purpose
for dir in /bin /etc /home /var /proc /sys; do
    echo "=== $dir ==="
    ls -la $dir | head -5
done
```

### Task 2: Create Lab Structure
```bash
mkdir -p ~/lab/{bin,conf,log,data,backup}
touch ~/lab/conf/{app.conf,db.conf,web.conf}
touch ~/lab/log/{app.log,error.log,access.log}
touch ~/lab/data/{users.csv,products.json}
```

### Task 3: Navigation Challenge
Kerjakan tanpa mouse (hanya keyboard + CLI):

```bash
# 1. Ke /etc, cari semua file yang namanya mengandung "ssh"
cd /etc
find . -name '*ssh*' -type f

# 2. Hitung total file di /var/log
find /var/log -type f | wc -l

# 3. Cari file terbesar di /var/log (ukuran dalam byte)
find /var/log -type f -printf '%s %p\n' 2>/dev/null | sort -n | tail -1
# alternatif: du -b
find /var/log -type f -exec du -b {} \; 2>/dev/null | sort -n | tail -1

# 4. Buat symlink: ~/lab/conf/latest -> ~/lab/conf/app.conf
ln -s ~/lab/conf/app.conf ~/lab/conf/latest
ls -la ~/lab/conf/
```

## Validation
```bash
./scripts/validate-lab1.1.sh
```

## Report Template
```
## Lab 1.1 Report
**Date:** YYYY-MM-DD
**Time Spent:** X hours

### Findings
1. Largest file in /var/log: __________
2. Total .conf files in /etc: __________
3. Challenges encountered: __________

### Screenshots
[Attach terminal screenshots]
```
