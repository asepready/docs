# Kesesuaian dengan Industri (Industry Readiness)

Dokumen ini menjelaskan bagaimana program pelatihan di repository ini diselaraskan dengan kebutuhan industri dan langkah konkret agar lulusan siap untuk peran Linux/BSD Engineer.

---

## Apa itu "Industry Ready"?

**Industry ready** berarti Anda memiliki:

1. **Keterampilan teknis** yang sesuai dengan lowongan (administrasi sistem, jaringan, keamanan, scripting, container dasar).
2. **Bukti yang dapat ditunjukkan**: lab yang selesai, proyek yang terdokumentasi, ujian praktik yang lulus, dan (opsional) sertifikasi resmi.
3. **Kesiapan untuk langkah berikutnya**: mengikuti ujian sertifikasi, melamar pekerjaan, atau wawancara teknis.

Repository ini memberikan **fondasi kurikulum dan praktik**. Agar benar-benar memenuhi ekspektasi industri, Anda harus **menyelesaikan** semua modul, lab, dan proyek, lalu melengkapi dengan **sertifikasi** dan **pengalaman nyata** (magang, proyek, atau kontribusi).

---

## Peran yang Relevan

Materi di repo ini selaras dengan peran berikut:

| Peran | Deskripsi singkat | Track |
|-------|-------------------|--------|
| **Linux System Administrator** | Administrasi server Linux (RHEL, Ubuntu, Debian), systemd, LVM, jaringan, keamanan. | Linux |
| **BSD System Administrator** | Administrasi FreeBSD/OpenBSD/NetBSD, PF, ZFS, jails, rc/scripts. | BSD |
| **Junior SRE / DevOps (dasar)** | Operasi sistem, monitoring, scripting, container dasar; landasan untuk CI/CD dan cloud. | Linux (utama), BSD |

**Keterampilan yang biasanya diminta industri** (dan tercakup di materi):

- Instalasi dan konfigurasi sistem
- Manajemen pengguna, grup, dan permission
- Package management (apt, dnf, pkg)
- Jaringan: konfigurasi interface, firewall, NAT, DNS
- Storage: partisi, LVM (Linux), ZFS (BSD)
- Service management: systemd (Linux), rc.d (BSD)
- Keamanan: SSH hardening, firewall, audit
- Backup dan recovery
- Scripting (Bash) dan automation dasar (Ansible di Linux)
- Monitoring dan logging
- Troubleshooting dan dokumentasi (runbook)

---

## Apa yang Repository Ini Berikan

| Aset | BSD | Linux |
|------|-----|--------|
| **Modul teori** | 12 modul (module-01..module-12) | 8 modul (01-fundamentals..08-capstone) + 12 modul (module-01..module-12) |
| **Lab** | lab-environment, lab-01..lab-12 | lab-environment, lab-checklist (Module 1–8) |
| **Proyek** | project-01 (web server) .. project-05 (high availability) | project-01..04 + Capstone (Module 8) |
| **Ujian praktik** | exam-01 (basic admin), exam-02 (network/security), exam-03 (advanced) | exam-01, exam-02, exam-03 |
| **Sertifikasi** | Pemetaan ke LPI BSD Specialist (702-100) | Pemetaan ke LPIC-1, RHCSA, LFCS |
| **Checklist kesiapan** | [BSD/assessments/readiness-checklist.md](BSD/assessments/readiness-checklist.md) | [Linux/assessments/readiness-checklist.md](Linux/assessments/readiness-checklist.md) |
| **Panduan karier & portfolio** | — | [Linux/docs/career-portfolio-guide.md](Linux/docs/career-portfolio-guide.md) |
| **Roadmap** | [BSD/ROADMAP.md](BSD/ROADMAP.md) | [Linux/ROADMAP.md](Linux/ROADMAP.md) |

---

## Apa yang Masih Perlu di Luar Repository

- **Sertifikasi resmi**: LPI (LPIC-1, Linux Essentials, BSD Specialist), Red Hat (RHCSA, RHCE), LFCS. Materi repo mempersiapkan; ujian dan biaya di luar repo.
- **Pengalaman nyata**: magang, proyek internal, homelab, atau kontribusi open source.
- **Cloud & CI/CD (opsional)**: untuk role SRE/DevOps, pelajari tambahan AWS/GCP/Azure dan pipeline (GitHub Actions, GitLab CI). Lihat subsection [Industry extensions (cloud / CI-CD)](#industry-extensions-cloud--ci-cd) di bawah.

---

## Langkah Konkret

1. **Selesaikan semua modul + lab + proyek** untuk track yang Anda pilih (BSD dan/atau Linux).
2. **Gunakan readiness checklist** per track: [BSD](BSD/assessments/readiness-checklist.md), [Linux](Linux/assessments/readiness-checklist.md).
3. **Persiapkan sertifikasi** dengan pemetaan objectives: [BSD](BSD/assessments/certifications/objectives-mapping.md), [Linux](Linux/assessments/certifications/objectives-mapping.md).
4. **Bangun portfolio** (terutama Linux): dokumentasikan proyek dan capstone di GitHub; gunakan [Linux/docs/career-portfolio-guide.md](Linux/docs/career-portfolio-guide.md).

Setelah checklist terpenuhi dan (opsional) sertifikasi/pengalaman ditambah, Anda dapat menganggap diri siap untuk lamaran kerja atau wawancara teknis sesuai tujuan Anda.

---

## Industry Extensions (cloud / CI-CD)

Untuk lowongan yang meminta dasar cloud atau CI/CD (SRE, DevOps):

- **Cloud**: Pelajari dasar EC2/VPC/IAM (AWS), atau setara GCP/Azure. Ini melengkapi **Linux Module 6 (Cloud & Containerization)**. Sumber: dokumentasi resmi AWS/GCP, kursus gratis (AWS Skillbuilder, dll.).
- **CI/CD**: Dasar GitHub Actions atau GitLab CI (build, test, deploy sederhana). Tidak ada modul khusus di repo; pelajari di luar dan gabungkan dengan skill scripting dan deployment dari materi.

Ini bersifat pelengkap; penyelesaian penuh materi BSD/Linux di repo tetap fondasi utama untuk industry readiness.
