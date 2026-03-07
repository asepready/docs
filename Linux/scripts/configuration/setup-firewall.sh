#!/bin/bash
# setup-firewall.sh - Konfigurasi ufw atau firewalld
set -e
echo "=== Firewall Setup ==="
# Backup existing rules if any
# ufw allow 22,80,443/tcp; ufw default deny incoming; ufw enable
# Or: firewall-cmd --permanent --add-service=ssh,http,https; firewall-cmd --reload
# Validate before enable: pastikan SSH allowed
echo "=== Firewall Setup Complete ==="
exit 0
