# Service Failures

## Ringkasan

Layanan tidak start atau crash (systemd).

## Langkah Umum
- systemctl status unit
- journalctl -u unit -n 50
- Dependency: systemctl list-dependencies
- Permission, path, port already in use (ss -tuln)
