#!/usr/bin/env bash
# Merge branch saat ini ke main (Bash / Linux)
# Usage: dari root repo -> ./Linux/scripts/git/merge-to-main.sh

set -euo pipefail
BRANCH=$(git rev-parse --abbrev-ref HEAD)

if [[ "$BRANCH" == "main" ]]; then
  echo "Sudah di main. Push saja: git push origin main"
  exit 0
fi

echo "Merging branch '$BRANCH' ke main..."
git checkout main
git pull origin main
git merge "$BRANCH" -m "Merge branch '$BRANCH' into main"
git push origin main
echo "Selesai. Kembali ke branch '$BRANCH'"
git checkout "$BRANCH"
