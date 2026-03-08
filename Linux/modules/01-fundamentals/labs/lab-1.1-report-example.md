# Lab 1.1 Report (Contoh)

**Date:** 2025-03-08  
**Time Spent:** ~0.5 hours  

## Findings

1. **Largest file in /var/log:**  
   `92274688` bytes — `/var/log/journal/.../system@....journal` (file journal systemd).

2. **Total .conf files in /etc:**  
   (Isi sendiri: `find /etc -name '*.conf' -type f | wc -l`)

3. **Challenges encountered:**  
   - Beberapa direktori di `/var/log` (mis. `private`, `samba`) memerlukan root, sehingga `find` memberi "Permission denied"; hitungan file tetap didapat (58 file tanpa akses root).
   - Symlink: gunakan path absolut atau pastikan `~/lab/conf/app.conf` ada sebelum `ln -s`.

## Screenshots

Lampirkan tangkapan layar terminal untuk Task 1, 2, dan 3.

## Checklist

- [x] Task 1: Explore filesystem hierarchy
- [x] Task 2: Create ~/lab structure (bin, conf, log, data, backup)
- [x] Task 3.1: Find files containing "ssh" in name under /etc
- [x] Task 3.2: Count files in /var/log
- [x] Task 3.3: Largest file in /var/log
- [x] Task 3.4: Symlink ~/lab/conf/latest -> app.conf
