# Service Failures

## Ringkasan

Layanan tidak start atau crash.

## Langkah Umum
- service foo status, /var/log
- rc.conf: foo_enable="YES"
- Dependency: cek rc.d script
- Permission dan path
