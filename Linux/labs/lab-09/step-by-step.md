# Lab 09: Langkah

1. Generate SSH key di client; copy ke server (ssh-copy-id)
2. Edit /etc/ssh/sshd_config: PermitRootLogin no, PasswordAuthentication no
3. systemctl restart sshd; tes login dengan key
4. Install fail2ban; konfigurasi jail untuk sshd
