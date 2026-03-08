# Environment Lab — Praktek Semua Modul

Dokumen ini adalah **referensi tunggal** untuk menyiapkan lingkungan praktek Linux. Satu lingkungan dipakai untuk **seluruh modul** (01-fundamentals, 02-sysadmin, 03-scripting, dan seterusnya).

---

## Langkah 0: Pilih lingkungan

Pilih salah satu:

| Opsi | Keterangan |
|------|------------|
| **WSL (Windows)** | Buka terminal WSL (Ubuntu), `cd` ke folder repo (mis. `/mnt/c/docs/Linux` atau path Anda). |
| **VM Vagrant** | Dari folder `Linux/labs/lab-environment` jalankan `vagrant up` lalu `vagrant ssh`. Di dalam VM, repo ada di **`/linux-repo`**. |
| **Linux langsung** | Buka terminal di mesin Linux, `cd` ke folder `Linux` (root repo). |

Panduan lengkap VM (Vagrant + VirtualBox): **[labs/lab-environment/README.md](labs/lab-environment/README.md)**.

---

## Setup sekali (wajib)

### Di VM Vagrant

Setelah `vagrant ssh`:

```bash
cd /linux-repo
sudo bash scripts/setup-lab.sh
```

Lalu login sebagai `labuser` (atau tetap pakai `vagrant`) dan mulai praktek.

### Di WSL atau mesin Linux

Dari **root folder Linux** (yang berisi `scripts/`):

```bash
cd /path/to/Linux   # atau di WSL: cd /mnt/c/docs/Linux
sudo bash scripts/setup-lab.sh
```

Script akan menginstal paket, membuat user `labuser`, direktori `/lab/...` dan `~/lab`, serta alias. Setelah itu semua modul siap dipakai.

---

## Path praktek per modul

Lingkungan yang sama dipakai untuk setiap modul. Dari **root repo** (di VM: `/linux-repo`, di host: folder `Linux`):

| Modul | Folder materi | Contoh mulai praktek |
|-------|----------------|----------------------|
| **1** – Fundamentals | `modules/01-fundamentals` | `cd modules/01-fundamentals` lalu baca [MULAI-PRAKTIK.md](modules/01-fundamentals/MULAI-PRAKTIK.md) |
| **2** – System Admin | `modules/02-sysadmin` | `cd modules/02-sysadmin` |
| **3** – Scripting | `modules/03-scripting` | `cd modules/03-scripting` |
| **4** – Networking | `modules/04-networking` | `cd modules/04-networking` |
| **5** – Security | `modules/05-security` | `cd modules/05-security` |
| **6** – Cloud | `modules/06-cloud` | `cd modules/06-cloud` |
| **7** – Troubleshooting | `modules/07-troubleshooting` | `cd modules/07-troubleshooting` |
| **8** – Capstone | `modules/08-capstone` | `cd modules/08-capstone` |

**Di dalam VM** (repo di `/linux-repo`):

```bash
cd /linux-repo/modules/01-fundamentals   # Modul 1
cd /linux-repo/modules/02-sysadmin      # Modul 2
cd /linux-repo/modules/03-scripting     # Modul 3
# ... dan seterusnya
```

---

## Validasi lab

Script validasi (mis. Lab 1.1) harus dijalankan dari **root repo** (folder yang berisi `scripts/`):

- **Di VM:** root repo = `/linux-repo`
- **Di WSL/Linux:** root repo = path ke folder `Linux`

Contoh:

```bash
cd /linux-repo   # atau: cd /path/to/Linux
bash scripts/validate-lab1.1.sh
```

Jika semua **[OK]**, lab tersebut lulus.

---

## Ringkasan

1. Siapkan lingkungan (WSL / Vagrant / Linux) — lihat [labs/lab-environment/README.md](labs/lab-environment/README.md) untuk Vagrant.
2. Jalankan **sekali**: `sudo bash scripts/setup-lab.sh` dari root repo.
3. Untuk tiap modul: `cd modules/<nama-modul>` dan ikuti README / MULAI-PRAKTIK modul tersebut.
4. Validasi lab: dari root repo jalankan `bash scripts/validate-lab*.sh`.

Satu environment untuk **semua modul**.
