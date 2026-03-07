#!/bin/bash
#===============================================================================
# Script: progress-tracker.sh
# Description: Track learning progress across modules
# Usage: ./scripts/progress-tracker.sh [--view|--update MODULE|--reset]
#===============================================================================

set -euo pipefail
readonly PROGRESS_FILE="${HOME}/.linux-engineer-progress.json"

# Initialize progress file
init_progress() {
    if [[ ! -f "$PROGRESS_FILE" ]]; then
        cat > "$PROGRESS_FILE" << 'EOF'
{
    "started_date": "",
    "last_updated": "",
    "modules": {
        "01-fundamentals": {"status": "pending", "completion": 0, "labs_completed": []},
        "02-sysadmin": {"status": "pending", "completion": 0, "labs_completed": []},
        "03-scripting": {"status": "pending", "completion": 0, "labs_completed": []},
        "04-networking": {"status": "pending", "completion": 0, "labs_completed": []},
        "05-security": {"status": "pending", "completion": 0, "labs_completed": []},
        "06-cloud": {"status": "pending", "completion": 0, "labs_completed": []},
        "07-troubleshooting": {"status": "pending", "completion": 0, "labs_completed": []},
        "08-capstone": {"status": "pending", "completion": 0, "labs_completed": []}
    },
    "certifications": [],
    "notes": ""
}
EOF
    fi
}

# View progress
view_progress() {
    init_progress
    
    echo "========================================"
    echo "  Linux Engineer Learning Progress"
    echo "========================================"
    echo ""
    
    if command -v jq &> /dev/null; then
        jq -r '
            .modules | to_entries[] |
            "\(.key): \(.value.status) (\(.value.completion)%)"
        ' "$PROGRESS_FILE"
    else
        cat "$PROGRESS_FILE"
    fi
}

# Update module progress
update_progress() {
    local module="$1"
    local completion="$2"
    local status="$3"
    local lab="$4"
    
    init_progress
    
    local timestamp=$(date -Iseconds)
    
    if command -v jq &> /dev/null; then
        local temp_file=$(mktemp)
        
        jq --arg module "$module" \
           --argjson comp "$completion" \
           --arg status "$status" \
           --arg lab "$lab" \
           --arg ts "$timestamp" \
           '.last_updated = $ts |
            .modules[$module].completion = $comp |
            .modules[$module].status = $status |
            .modules[$module].labs_completed += [$lab]' \
           "$PROGRESS_FILE" > "$temp_file" && mv "$temp_file" "$PROGRESS_FILE"
        
        echo "✓ Updated: $module -> $status ($completion%)"
    else
        echo "⚠ jq not installed, manual update required"
        echo "Edit: $PROGRESS_FILE"
    fi
}

# Reset progress
reset_progress() {
    read -p "Are you sure you want to reset all progress? (y/N): " confirm
    if [[ "$confirm" =~ ^[Yy]$ ]]; then
        rm -f "$PROGRESS_FILE"
        init_progress
        echo "✓ Progress reset successfully"
    else
        echo "✗ Reset cancelled"
    fi
}

# Show help
show_help() {
    cat << EOF
Usage: $0 [OPTION]

Options:
  --view              View current progress
  --update MODULE     Update module progress
  --reset             Reset all progress
  --help              Show this help message

Examples:
  $0 --view
  $0 --update 01-fundamentals 50 in-progress lab-1.1
  $0 --reset

EOF
}

# Main
main() {
    case "${1:-}" in
        --view)
            view_progress
            ;;
        --update)
            if [[ $# -lt 5 ]]; then
                echo "Error: --update requires MODULE COMPLETION STATUS LAB"
                exit 1
            fi
            update_progress "$2" "$3" "$4" "$5"
            ;;
        --reset)
            reset_progress
            ;;
        --help|-h)
            show_help
            ;;
        *)
            view_progress
            ;;
    esac
}

main "$@"
