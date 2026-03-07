# Lab 06: Langkah

1. ufw: ufw allow 22, ufw allow 80,443/tcp, ufw default deny incoming, ufw enable
2. Atau firewalld: firewall-cmd --permanent --add-service=ssh,http,https; --reload
3. Verifikasi: ufw status / firewall-cmd --list-all
4. Pastikan SSH tetap dapat diakses
