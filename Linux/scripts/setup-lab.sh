#!/usr/bin/env bash
#===============================================================================
# Script: setup-lab.sh
# Description: Setup Linux Engineer learning lab environment
# Supported: Ubuntu/Debian (apt), Rocky Linux / RHEL / CentOS / AlmaLinux (dnf)
# Usage: sudo ./scripts/setup-lab.sh  or  sudo bash /linux-repo/scripts/setup-lab.sh
#===============================================================================

set -euo pipefail
readonly SCRIPT_NAME="$(basename "$0")"
readonly LOG_FILE="/var/log/${SCRIPT_NAME%.sh}.log"

# Colors for output
readonly RED='\033[0;31m'
readonly GREEN='\033[0;32m'
readonly YELLOW='\033[1;33m'
readonly NC='\033[0m' # No Color

# Logging function
log() {
    local level="$1"
    shift
    local message="$*"
    local timestamp=$(date '+%Y-%m-%d %H:%M:%S')
    echo -e "${timestamp} [${level}] ${message}" | tee -a "$LOG_FILE"
}

info() { log "INFO" "$@"; }
warn() { log "${YELLOW}WARN${NC}" "$@"; }
error() { log "${RED}ERROR${NC}" "$@"; }
success() { log "${GREEN}SUCCESS${NC}" "$@"; }

# Check root privilege
check_root() {
    if [[ $EUID -ne 0 ]]; then
        error "Script must be run as root"
        exit 1
    fi
}

# Enable EPEL on RHEL/Rocky/CentOS/Alma (for lynis etc.)
enable_epel_if_needed() {
    [[ ! -f /etc/os-release ]] && return 0
    local id version_id
    id=$(grep -E ^ID= /etc/os-release | cut -d= -f2 | tr -d '"')
    version_id=$(grep -E ^VERSION_ID= /etc/os-release | cut -d= -f2 | tr -d '"')
    if [[ "$id" == "rhel" || "$id" == "rocky" || "$id" == "centos" || "$id" == "almalinux" ]]; then
        if ! rpm -q epel-release &>/dev/null; then
            info "Enabling EPEL repository (Rocky/RHEL/CentOS/Alma)..."
            if ! dnf install -y -q epel-release 2>/dev/null; then
                # Fallback: install EPEL from Fedora (e.g. Rocky 9)
                local ver="${version_id%%.*}"
                dnf install -y -q "https://dl.fedoraproject.org/pub/epel/epel-release-latest-${ver}.noarch.rpm" 2>/dev/null || true
            fi
        fi
    fi
}

# Install required packages (Ubuntu/Debian and Rocky/RHEL/CentOS/Alma)
install_packages() {
    info "Installing required packages..."
    
    if command -v apt &> /dev/null; then
        apt update -qq
        apt install -y -qq \
            git vim htop tree jq \
            net-tools dnsutils tcpdump \
            apache2-utils sysstat iotop \
            lynis aide auditd
    elif command -v dnf &> /dev/null; then
        # Rocky Linux, RHEL, CentOS, AlmaLinux, Fedora
        enable_epel_if_needed
        dnf install -y -q \
            git vim-enhanced htop tree jq \
            net-tools bind-utils tcpdump \
            httpd-tools sysstat iotop \
            aide audit
        # lynis from EPEL (optional if EPEL not available)
        dnf install -y -q lynis 2>/dev/null || warn "lynis not installed (EPEL may be unavailable)"
    else
        error "Package manager not supported (need apt or dnf)"
        exit 1
    fi
    
    success "Packages installed"
}

# Create lab user
create_lab_user() {
    local username="labuser"
    local home_dir="/home/${username}"
    
    if id "$username" &>/dev/null; then
        warn "User $username already exists"
        return 0
    fi
    
    info "Creating lab user: $username"
    useradd -m -s /bin/bash -c "Linux Engineer Lab User" "$username"
    
    # Add to sudo group
    if grep -q "wheel" /etc/group; then
        usermod -aG wheel "$username"
    else
        usermod -aG sudo "$username"
    fi
    
    # Create lab directories
    mkdir -p "${home_dir}/lab"/{bin,conf,log,data,backup}
    chown -R "${username}:${username}" "${home_dir}/lab"
    
    success "Lab user created"
}

# Setup lab directories
setup_lab_dirs() {
    info "Setting up lab directories..."
    
    local lab_dirs=(
        "/lab/projects"
        "/lab/backups"
        "/lab/logs"
        "/lab/configs"
        "/lab/scripts"
    )
    
    for dir in "${lab_dirs[@]}"; do
        if [[ ! -d "$dir" ]]; then
            mkdir -p "$dir"
            chmod 755 "$dir"
            info "Created: $dir"
        fi
    done
    
    success "Lab directories setup complete"
}

# Configure sudo with logging
configure_sudo() {
    info "Configuring sudo logging..."
    
    local sudo_config="/etc/sudoers.d/lab-logging"
    
    if [[ -f "$sudo_config" ]]; then
        warn "Sudo config already exists"
        return 0
    fi
    
    cat > "$sudo_config" << 'EOF'
# Lab user sudo logging
Defaults logfile="/var/log/sudo-lab.log"
Defaults log_input, log_output
Defaults iolog_dir="/var/log/sudo-io"
EOF
    
    chmod 440 "$sudo_config"
    success "Sudo logging configured"
}

# Setup bash aliases
setup_aliases() {
    info "Setting up bash aliases..."
    
    local alias_file="/etc/profile.d/lab-aliases.sh"
    
    cat > "$alias_file" << 'EOF'
# Linux Engineer Lab Aliases
alias ll='ls -lah --color=auto'
alias la='ls -A --color=auto'
alias lt='tree -L 2'
alias ..='cd ..'
alias ...='cd ../..'
alias grep='grep --color=auto'
alias fgrep='fgrep --color=auto'
alias egrep='egrep --color=auto'
alias history='history 1'
alias h='history | grep'
alias myip='curl -s ifconfig.me'
alias ports='ss -tulpn'
alias disk='df -hT'
alias mem='free -hm'
alias cpu='top -bn1 | head -20'
EOF
    
    chmod 644 "$alias_file"
    success "Bash aliases configured"
}

# Main function
main() {
    echo "========================================"
    echo "  Linux Engineer Lab Setup"
    echo "========================================"
    echo ""
    
    check_root
    install_packages
    create_lab_user
    setup_lab_dirs
    configure_sudo
    setup_aliases
    
    echo ""
    success "Lab setup completed successfully!"
    echo ""
    echo "Next steps:"
    echo "1. Logout and login as labuser"
    echo "2. Run: cd ~/lab && ls -la"
    echo "3. Start Module 1: cd linux-engineer-training/modules/01-fundamentals"
    echo ""
}

# Entry point
main "$@"
