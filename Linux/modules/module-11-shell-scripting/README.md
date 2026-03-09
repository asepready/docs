# Modul 11: Shell Scripting

## Durasi
4 jam

## LPIC-1 Alignment (Objectives)

Modul ini menyelaraskan materi dengan **Exam 102** Topic 105 (Shells and Shell Scripting):

| LPIC-1 | Objective | Cakupan di modul ini |
|--------|-----------|----------------------|
| 105.1 | Customize and use the shell environment | Variabel, environment, alias (awareness) |
| 105.2 | Customize or write simple scripts | Struktur script, `if`, `for`, `while`, exit code |

## Tujuan Pembelajaran
- Bash scripting: variable, condition, loop
- Automasi dan error handling
- Best practice (set -e, trap)

## Ringkasan Konsep & Contoh Perintah

### Lingkungan shell (Exam 102 — 105.1)

- Konsep:
  - Perbedaan shell login vs non-login, interactive vs non-interactive (dibahas singkat di materi).
  - Variabel lokal vs environment (`export`), file konfigurasi `.bashrc`, `.profile`.
- Contoh perintah:
  - Melihat variabel: `echo "$PATH"`, `env`, `set`
  - Membuat variabel: `NAME="student"`, `export EDITOR=vim`
  - Alias & fungsi sederhana:

```bash
alias ll='ls -lah'
my_ip() { ip -4 addr show dev eth0; }
```

### Struktur dasar script (Exam 102 — 105.2)

- Konsep:
  - Shebang `#!/bin/bash` dan izin eksekusi.
  - Argumen `$0`, `$1`, `$#`, dan exit code `$?`.
- Contoh:

```bash
#!/bin/bash
NAME="$1"
echo "Hello, $NAME"
exit 0
```

- Eksekusi:
  - `chmod +x hello.sh`
  - `./hello.sh world` atau `bash hello.sh world`

### Kondisi, loop, dan error handling

- Konsep:
  - Tes kondisi `[ ]` / `[[ ]]`, blok `if/elif/else`.
  - Loop `for`, `while`, dan penggunaan `set -e` (dibahas di materi lanjutan).
- Contoh perintah:

```bash
if [ -f /etc/os-release ]; then
  echo "Linux detected"
fi

for user in alice bob; do
  echo "Create home for $user"
done
```

Rincian praktik ada di file materi dan lab.

## Materi
1. [Bash Basics](01-bash-basics.md)
2. [Automation Scripts](02-automation-scripts.md)
3. [Error Handling](03-error-handling.md)

## Lab
- [Lab 11: Create Scripts](lab-11-create-scripts.md)
- Lab umum scripting: [lab-11](../../labs/lab-11/README.md)

## Evaluasi
- [Quiz 11](quiz-11.md)
- Quiz LPIC-style terkait: [Quiz 11 Scripting](../../assessments/quizzes/quiz-11-scripting.md)

## Proyek Terkait

- [Proyek 1: Web Server Production](../../projects/project-01-web-server/README.md) — automasi deployment & maintenance dengan script.
- [Proyek 5: High Availability](../../projects/project-05-high-availability/README.md) — script failover & health check sederhana.
