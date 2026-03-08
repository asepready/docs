# Mulai Praktek — Modul 01: Linux Fundamentals

Lakukan praktik di **lingkungan Linux**: WSL (Windows), VM (Vagrant), atau mesin Linux langsung.

**Panduan lingkungan untuk semua modul:** [ENVIRONMENT-LAB.md](../../ENVIRONMENT-LAB.md) (di root folder Linux).

---

## Langkah 0: Siapkan lingkungan

Pilih salah satu:

- **WSL (Windows):** Buka terminal WSL (Ubuntu), lalu `cd` ke folder repo (mis. `/mnt/c/docs/Linux` atau path Anda).
- **VM Vagrant:** Dari `Linux/labs/lab-environment` jalankan `vagrant up` lalu `vagrant ssh`. Di dalam VM, repo ada di **`/linux-repo`**. Setup sekali: `cd /linux-repo && sudo bash scripts/setup-lab.sh`.
- **Linux langsung:** Buka terminal di mesin Linux, `cd` ke folder `Linux`.

Detail lengkap: [labs/lab-environment/README.md](../../labs/lab-environment/README.md).

---

## Langkah 1: Lab 1.1 — Filesystem Navigation

### Task 1: Jelajah FHS
```bash
ls -la /

for dir in /bin /etc /home /var /proc /sys; do
    echo "=== $dir ==="
    ls -la $dir | head -5
done
```

### Task 2: Buat struktur lab
```bash
mkdir -p ~/lab/{bin,conf,log,data,backup}
touch ~/lab/conf/{app.conf,db.conf,web.conf}
touch ~/lab/log/{app.log,error.log,access.log}
touch ~/lab/data/{users.csv,products.json}
```

### Task 3: Tantangan CLI
```bash
# 1. File yang namanya mengandung "ssh" di /etc
cd /etc && find . -name '*ssh*' -type f

# 2. Jumlah file di /var/log
find /var/log -type f | wc -l

# 3. File terbesar di /var/log (byte)
find /var/log -type f -printf '%s %p\n' 2>/dev/null | sort -n | tail -1

# 4. Symlink latest -> app.conf
ln -s ~/lab/conf/app.conf ~/lab/conf/latest
ls -la ~/lab/conf/
```

### Validasi
Dari **root folder Linux** (di VM: `/linux-repo`; di host: folder yang berisi `scripts/`):
```bash
cd /path/to/Linux    # atau: cd /linux-repo (di VM)
bash scripts/validate-lab1.1.sh
```
Jika semua **[OK]**, Lab 1.1 lulus. Lihat [ENVIRONMENT-LAB.md](../../ENVIRONMENT-LAB.md) untuk validasi lab lain.

---

## Langkah 2: Isi laporan (opsional)

Gunakan template di [labs/lab-1.1-filesystem.md](labs/lab-1.1-filesystem.md) (bagian Report Template) atau contoh [lab-1.1-report-example.md](labs/lab-1.1-report-example.md). Isi: tanggal, waktu, largest file di /var/log, total file .conf di /etc, kendala.

---

## Lanjut ke lab berikutnya

- **Lab 1.2:** User Management — materi: [module-03-user-management](../../modules/module-03-user-management); daftar lab: [labs/lab-checklist.md](../../labs/lab-checklist.md)
- **Lab 1.3:** Permission Exercise — [README modul](README.md)
- **Lab 1.4:** Text Processing Challenge — [README modul](README.md)

Materi lengkap Lab 1.1: [labs/lab-1.1-filesystem.md](labs/lab-1.1-filesystem.md). Lingkungan yang sama dipakai untuk semua modul: [ENVIRONMENT-LAB.md](../../ENVIRONMENT-LAB.md).
