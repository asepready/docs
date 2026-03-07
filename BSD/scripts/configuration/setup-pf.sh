#!/bin/sh
# setup-pf.sh - Konfigurasi PF Firewall

set -e

echo "=== PF Firewall Setup ==="

# Backup konfigurasi lama
[ -f /etc/pf.conf ] && cp /etc/pf.conf /etc/pf.conf.backup.$(date +%Y%m%d)

# Copy konfigurasi baru
cp /path/to/configs/pf/pf.conf.basic /etc/pf.conf

# Enable PF
sysrc pf_enable="YES"
sysrc pflog_enable="YES"

# Validate syntax
pfctl -nf /etc/pf.conf

# Load rules
pfctl -f /etc/pf.conf

# Verify
pfctl -s info

echo "=== PF Setup Complete ==="
