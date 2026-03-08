# Merge branch saat ini ke main (Windows / PowerShell)
# Jalankan dari root repo: .\Linux\scripts\git\merge-to-main.ps1
# Atau dari Linux: pwsh -File scripts/git/merge-to-main.ps1

$ErrorActionPreference = "Stop"
$branch = git rev-parse --abbrev-ref HEAD
if ($branch -eq "main") {
    Write-Host "Sudah di main. Push saja: git push origin main"
    exit 0
}

Write-Host "Merging branch '$branch' ke main..."
git checkout main
git pull origin main
git merge $branch -m "Merge branch '$branch' into main"
git push origin main
Write-Host "Selesai. Kembali ke branch '$branch'"
git checkout $branch
