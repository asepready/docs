# Lab 1.1: Filesystem Navigation

## Objective
Memahami struktur direktori Linux dan navigasi efisien

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
```bash
# Without using mouse, complete:
1. Go to /etc, find all files containing "ssh"
2. Count total files in /var/log
3. Find largest file in /var/log
4. Create symlink: ~/lab/conf/latest -> ~/lab/conf/app.conf
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
