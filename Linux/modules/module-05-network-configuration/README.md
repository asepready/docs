# Modul 5: Network Configuration

## Durasi
4 jam

## LPIC-1 Alignment (Objectives)

Modul ini menyelaraskan materi dengan **Exam 102** Topic 109 (Networking Fundamentals):

| LPIC-1 | Objective | Cakupan di modul ini |
|--------|-----------|----------------------|
| 109.1 | Fundamentals of internet protocols | IPv4/IPv6, TCP/UDP, port (overview di materi) |
| 109.2 | Persistent network configuration | Netplan, NetworkManager, `ip` |
| 109.3 | Basic network troubleshooting | `ping`, `traceroute`, `ip`, `ss` |
| 109.4 | Configure client side DNS | `resolv.conf`, `/etc/hosts`, `dig`, `host` |

## Tujuan Pembelajaran
- Konfigurasi interface: Netplan (Ubuntu), nmcli, ip
- VLAN, bridge, routing
- DNS dan resolv.conf

## Ringkasan Konsep & Contoh Perintah

### Konfigurasi interface & IP address

- Konsep:
  - Interface fisik vs virtual (VLAN, bridge).
  - IPv4 vs IPv6, CIDR, default gateway.
- Contoh perintah:
  - `ip addr show`, `ip link show`
  - `sudo ip addr add 192.168.10.10/24 dev eth0`
  - `sudo ip route add default via 192.168.10.1`

### Netplan & NetworkManager (Exam 102 — 109.2)

- Konsep:
  - Netplan sebagai layer deklaratif pada Ubuntu Server.
  - NetworkManager (`nmcli`) pada desktop/server tertentu.
- Contoh:
  - Edit `/etc/netplan/*.yaml` lalu `sudo netplan apply`
  - `nmcli device status`
  - `nmcli connection show`, `nmcli connection add ...`

### Troubleshooting jaringan (Exam 102 — 109.3)

- Konsep:
  - Alur troubleshooting: cek IP → gateway → DNS → port/service.
- Contoh perintah:
  - `ping 8.8.8.8`, `ping google.com`
  - `traceroute 8.8.8.8` atau `tracepath`
  - `ss -tulpn` untuk melihat port terbuka

### DNS client (Exam 102 — 109.4)

- Konsep:
  - Urutan resolusi nama: `/etc/hosts`, DNS, dll. (dikendalikan oleh `nsswitch.conf`).
  - Peran `/etc/resolv.conf` atau konfigurasi resolver modern.
- Contoh perintah:
  - `getent hosts example.com`
  - `dig example.com`
  - `host example.com`

## Materi
1. [Interface Config](01-interface-config.md)
2. [VLAN & Bridge](02-vlan-bridge.md)
3. [Routing](03-routing.md)
4. [DNS Configuration](04-dns-configuration.md)

## Lab
- [Lab 05: Network Setup](lab-05-network-setup.md)
- Lab umum jaringan: [lab-05](../../labs/lab-05/README.md) dan [lab-06](../../labs/lab-06/README.md)

## Evaluasi
- [Quiz 05](quiz-05.md)
- Quiz LPIC-style terkait: [Quiz 05 Network](../../assessments/quizzes/quiz-05-network.md)

## Proyek Terkait

- [Proyek 2: Firewall Gateway](../../projects/project-02-firewall-gateway/README.md) — routing, NAT, dan desain jaringan.
- [Proyek 5: High Availability](../../projects/project-05-high-availability/README.md) — konfigurasi VIP dan network failover.
