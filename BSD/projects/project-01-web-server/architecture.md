# Arsitektur - Web Server

## Komponen
- Host: FreeBSD, ZFS root
- Nginx: reverse proxy / static
- PHP-FPM: aplikasi PHP
- MySQL: database
- PF: firewall (ports 80, 443, 22)
- Backup: ZFS snapshot atau rsync ke remote

## Diagram
Lihat README untuk diagram alur.
