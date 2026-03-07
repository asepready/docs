# Proyek 1: Web Server Production (Linux)

## Deskripsi
Bangun web server production-ready dengan Ubuntu/Rocky: Nginx, PHP-FPM atau Node, MySQL/PostgreSQL, SSL, firewall.

## Requirements
- Ubuntu 22.04 LTS atau Rocky Linux 9
- Nginx + PHP-FPM (atau Node) + MySQL/PostgreSQL
- ufw atau firewalld
- Optional: Let's Encrypt (certbot)
- Backup dan monitoring

## Arsitektur
```
[Internet] --> [Firewall] --> [Nginx] --> [PHP-FPM/Node] --> [MySQL/PostgreSQL]
                                     |
                             [LVM/Storage]
                                     |
                             [Backup]
```

## Deliverables
1. Sistem berfungsi penuh
2. Dokumentasi konfigurasi
3. Script deployment
4. Test plan & results
5. Backup & recovery procedure

## Timeline
- Minggu 1: Setup dasar, package, LVM
- Minggu 2: Nginx, app, database
- Minggu 3: SSL, hardening
- Minggu 4: Testing & dokumentasi

## Evaluasi
- Fungsionalitas: 40%
- Keamanan: 30%
- Dokumentasi: 20%
- Best Practices: 10%
