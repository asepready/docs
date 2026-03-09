# Modul 6: Firewall

## Durasi
4 jam

## LPIC-1 Alignment (Objectives)

Modul ini terutama mendukung **Exam 102** Topic 110 (Security), khususnya host firewall dan pemeriksaan layanan:

| LPIC-1 | Objective | Cakupan di modul ini |
|--------|-----------|----------------------|
| 110.2 | Setup host security | Firewall host: ufw, firewalld, iptables/nftables |
| 110.1 | Perform security administration tasks | Discover open ports (dengan firewall & tools jaringan) |

## Tujuan Pembelajaran
- ufw (Ubuntu/Debian), firewalld (RHEL), iptables/nftables
- Rules, NAT, port forwarding

## Ringkasan Konsep & Contoh Perintah

### Konsep dasar firewall

- Konsep:
  - Kebijakan default (default policy): deny vs allow.
  - Perbedaan input/output/forward chain dan zone (firewalld).

### ufw (Ubuntu/Debian)

- Contoh perintah:
  - `sudo ufw status verbose`
  - `sudo ufw enable`
  - `sudo ufw allow ssh`
  - `sudo ufw allow 80/tcp`
  - `sudo ufw deny from 10.0.0.0/8`

### firewalld (RHEL/Fedora)

- Konsep:
  - Zones (`public`, `internal`, `dmz`) dan service.
- Contoh perintah:
  - `sudo firewall-cmd --get-active-zones`
  - `sudo firewall-cmd --add-service=http --permanent`
  - `sudo firewall-cmd --reload`

### iptables/nftables (overview)

- Contoh:
  - `sudo iptables -L -v -n`
  - `sudo nft list ruleset`

NAT dan port forwarding dibahas rinci di berkas materi masing-masing.

## Materi
1. [ufw & firewalld](01-ufw-firewalld.md)
2. [iptables](02-iptables.md)
3. [nftables](03-nftables.md)
4. [NAT & Forwarding](04-nat-forwarding.md)

## Lab
- [Lab 06: Firewall Config](lab-06-firewall-config.md)
- Lab umum terkait firewall & network: [lab-06](../../labs/lab-06/README.md)

## Evaluasi
- [Quiz 06](quiz-06.md)
- Quiz LPIC-style terkait: [Quiz 06 Firewall](../../assessments/quizzes/quiz-06-firewall.md)

## Proyek Terkait

- [Proyek 2: Firewall Gateway](../../projects/project-02-firewall-gateway/README.md) — studi kasus penerapan rules di lingkungan nyata.
