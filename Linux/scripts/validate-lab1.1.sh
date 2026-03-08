#!/usr/bin/env bash
#===============================================================================
# Validasi Lab 1.1: Filesystem Navigation
# Cek struktur ~/lab, file conf/log/data, dan symlink latest -> app.conf
# Usage: ./scripts/validate-lab1.1.sh  atau  sudo bash /linux-repo/scripts/validate-lab1.1.sh
#===============================================================================

set -euo pipefail

readonly RED='\033[0;31m'
readonly GREEN='\033[0;32m'
readonly YELLOW='\033[1;33m'
readonly NC='\033[0m'

pass=0
fail=0

# Lab dir: jika dijalankan dengan sudo, cek home user yang memanggil (vagrant/labuser)
if [[ -n "${SUDO_USER:-}" ]]; then
    LAB_HOME=$(getent passwd "$SUDO_USER" | cut -d: -f6)
else
    LAB_HOME="${HOME:-}"
fi
LAB_DIR="${LAB_HOME}/lab"

echo "=========================================="
echo "  Lab 1.1 Validation (Filesystem)"
echo "=========================================="
echo "Lab directory: $LAB_DIR"
echo ""

check_ok() {
    echo -e "${GREEN}[OK]${NC} $*"
    ((pass++)) || true
}

check_fail() {
    echo -e "${RED}[FAIL]${NC} $*"
    ((fail++)) || true
}

# Task 2: direktori
[[ -d "$LAB_DIR" ]] && check_ok "~/lab exists" || check_fail "~/lab missing (mkdir -p ~/lab/...)"
[[ -d "$LAB_DIR/bin" ]] && check_ok "~/lab/bin exists" || check_fail "~/lab/bin missing"
[[ -d "$LAB_DIR/conf" ]] && check_ok "~/lab/conf exists" || check_fail "~/lab/conf missing"
[[ -d "$LAB_DIR/log" ]] && check_ok "~/lab/log exists" || check_fail "~/lab/log missing"
[[ -d "$LAB_DIR/data" ]] && check_ok "~/lab/data exists" || check_fail "~/lab/data missing"
[[ -d "$LAB_DIR/backup" ]] && check_ok "~/lab/backup exists" || check_fail "~/lab/backup missing"

# Task 2: file conf
[[ -f "$LAB_DIR/conf/app.conf" ]] && check_ok "conf/app.conf exists" || check_fail "conf/app.conf missing"
[[ -f "$LAB_DIR/conf/db.conf" ]] && check_ok "conf/db.conf exists" || check_fail "conf/db.conf missing"
[[ -f "$LAB_DIR/conf/web.conf" ]] && check_ok "conf/web.conf exists" || check_fail "conf/web.conf missing"

# Task 2: file log
[[ -f "$LAB_DIR/log/app.log" ]] && check_ok "log/app.log exists" || check_fail "log/app.log missing"
[[ -f "$LAB_DIR/log/error.log" ]] && check_ok "log/error.log exists" || check_fail "log/error.log missing"
[[ -f "$LAB_DIR/log/access.log" ]] && check_ok "log/access.log exists" || check_fail "log/access.log missing"

# Task 2: file data
[[ -f "$LAB_DIR/data/users.csv" ]] && check_ok "data/users.csv exists" || check_fail "data/users.csv missing"
[[ -f "$LAB_DIR/data/products.json" ]] && check_ok "data/products.json exists" || check_fail "data/products.json missing"

# Task 3.4: symlink latest -> app.conf
if [[ -L "$LAB_DIR/conf/latest" ]]; then
    target=$(readlink "$LAB_DIR/conf/latest")
    if [[ -f "$LAB_DIR/conf/app.conf" ]] && [[ "$target" == *"app.conf" ]]; then
        check_ok "symlink conf/latest -> app.conf"
    else
        check_fail "symlink conf/latest should point to app.conf (currently: $target)"
    fi
else
    check_fail "conf/latest symlink missing (ln -s ~/lab/conf/app.conf ~/lab/conf/latest)"
fi

echo ""
echo "------------------------------------------"
echo -e "Result: ${GREEN}$pass passed${NC}, ${RED}$fail failed${NC}"
if [[ $fail -eq 0 ]]; then
    echo "Lab 1.1 validation passed."
    exit 0
else
    echo "Fix the failed checks and run again."
    exit 1
fi
