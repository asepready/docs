# Lab Environment — Vagrant + VirtualBox

Lingkungan lab untuk memulai praktek Linux Engineer. Satu konfigurasi untuk semua host dan pilihan guest.

| | |
|--|--|
| **Host** | Windows 10/11, Linux (Ubuntu/Debian/Fedora/Arch), *BSD (FreeBSD) |
| **Guest** | Ubuntu 22.04 LTS atau Rocky Linux 9 |
| **Provider** | VirtualBox only |

## Prasyarat

| Komponen   | Versi / catatan |
|-----------|------------------|
| **Vagrant** | 2.2+ ([vagrantup.com](https://www.vagrantup.com/)) |
| **VirtualBox** | 6.1+ / 7.x ([virtualbox.org](https://www.virtualbox.org/)) |

Per VM: 1 GB RAM, 2 vCPU, disk dinamis. Materi repo disinkronkan ke `/linux-repo` di dalam guest.

---

## Instalasi per platform (host)

### Windows

1. **VirtualBox**
   - Unduh installer dari [virtualbox.org](https://www.virtualbox.org/wiki/Downloads).
   - Jalankan installer, ikuti wizard. Reboot jika diminta.
   - Pastikan **VirtualBox Extension Pack** diinstal jika pakai USB/PCI passthrough (opsional).

2. **Vagrant**
   - Unduh dari [vagrantup.com](https://www.vagrantup.com/downloads).
   - Jalankan installer (PATH akan ditambahkan).
   - Buka **PowerShell** atau **Command Prompt** (baru), cek:
     ```powershell
     vagrant --version
     ```

3. **Enable Virtualization**
   - BIOS/UEFI: pastikan **VT-x** (Intel) atau **AMD-V** aktif.

---

### Linux

**Debian / Ubuntu:**
```bash
# VirtualBox
sudo apt update
sudo apt install -y virtualbox virtualbox-ext-pack

# Vagrant (official HashiCorp repo)
wget -O- https://apt.releases.hashicorp.com/gpg | sudo gpg --dearmor -o /usr/share/keyrings/hashicorp-archive-keyring.gpg
echo "deb [signed-by=/usr/share/keyrings/hashicorp-archive-keyring.gpg] https://apt.releases.hashicorp.com $(lsb_release -cs) main" | sudo tee /etc/apt/sources.list.d/hashicorp.list
sudo apt update && sudo apt install -y vagrant

vagrant --version
```

**Fedora / RHEL:**
```bash
# VirtualBox
sudo dnf install -y VirtualBox

# Vagrant
sudo dnf install -y dnf-plugins-core
sudo dnf config-manager --add-repo https://rpm.releases.hashicorp.com/fedora/$releasever/$basearch/stable
sudo dnf install -y vagrant
```

**Arch:**
```bash
sudo pacman -S virtualbox vagrant
# Load module: sudo modprobe vboxdrv
```

---

### FreeBSD (*BSD)

```bash
# VirtualBox (OSE)
sudo pkg update
sudo pkg install -y virtualbox-ose

# Vagrant
sudo pkg install -y vagrant

# Load kernel module (tambah ke /boot/loader.conf jika perlu)
sudo kldload vboxdrv
```

**Catatan:** OpenBSD sebagai host untuk Vagrant/VirtualBox kurang umum; gunakan FreeBSD, Linux, atau Windows.

---

## Penggunaan

### 1. Masuk ke folder lab

Dari **root repo** (atau dari folder `Linux`):

```bash
# Windows (PowerShell / Git Bash)
cd Linux\labs\lab-environment

# Linux / *BSD / Git Bash
cd Linux/labs/lab-environment
```

### 2. Pilih guest distro dan jalankan VM

| Perintah | Guest | Keterangan |
|----------|--------|------------|
| `vagrant up` | **Ubuntu** 22.04 | Default (primary) |
| `vagrant up rocky` | **Rocky Linux** 9 | Guest alternatif |

Box akan diunduh sekali saat pertama kali (ubuntu/jammy64 atau generic/rocky9). Provider: **VirtualBox**.

```bash
# Mulai Ubuntu (default)
vagrant up

# Atau mulai Rocky Linux
vagrant up rocky
```

### 3. SSH ke VM

```bash
# Masuk ke VM Ubuntu (primary)
vagrant ssh

# Masuk ke VM Rocky (jika yang dipakai rocky)
vagrant ssh rocky
```

### 4. Di dalam VM: setup lab

Materi repo ada di `/linux-repo`:

```bash
cd /linux-repo
sudo ./scripts/setup-lab.sh
```

Lalu mulai praktek (misalnya Modul 1):

```bash
cd /linux-repo/modules/01-fundamentals
cat README.md
```

### Perintah Vagrant berguna

| Perintah        | Fungsi                    |
|-----------------|---------------------------|
| `vagrant up`    | Jalankan VM default (ubuntu) |
| `vagrant up rocky` | Jalankan VM Rocky Linux |
| `vagrant halt`  | Matikan VM                |
| `vagrant halt rocky` | Matikan VM rocky |
| `vagrant destroy` | Hapus VM (data hilang)  |
| `vagrant ssh`   | SSH ke VM default        |
| `vagrant ssh rocky` | SSH ke VM rocky     |
| `vagrant status`| Status semua VM           |
| `vagrant reload`| Restart VM (setelah ubah Vagrantfile) |

---

## Troubleshooting

- **"VBoxManage not found"**  
  Pastikan VirtualBox terinstal dan ada di PATH. Di Windows, buka terminal baru setelah instal.

- **VT-x/AMD-V disabled**  
  Aktifkan virtualisasi di BIOS/UEFI.

- **Synced folder error di Windows**  
  Pastikan Git Bash atau WSL dipakai untuk `vagrant up` jika path panjang; atau jalankan PowerShell **Run as Administrator** sekali untuk symlink.

- **FreeBSD: vboxdrv failed**  
  Load module: `sudo kldload vboxdrv`. Jika gagal, cek kompatibilitas kernel dan baca [VirtualBox on FreeBSD](https://wiki.freebsd.org/VirtualBox).

---

## File terkait

- [Vagrantfile](Vagrantfile) — definisi VM (VirtualBox)
- [virtualbox-config.md](virtualbox-config.md) — konfigurasi manual VirtualBox tanpa Vagrant
