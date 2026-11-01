# CampusChat

Aplikasi chat sederhana untuk lingkungan kampus, dibuat dengan **PHP Native** (tanpa framework dan tanpa database).

## Tujuan Aplikasi
Menyediakan ruang obrolan sederhana agar mahasiswa dapat saling bertukar informasi seputar perkuliahan (jadwal, tugas, pengumuman) secara cepat dalam satu tempat.

## Pengguna Sasaran
- Mahasiswa dalam satu kelas / angkatan
- Ketua kelas atau asisten dosen yang ingin menyebarkan informasi

## Fitur Versi Awal (v1.0)
1. **Masuk dengan nama** – pengguna cukup mengisi nama (disimpan di session).
2. **Kirim pesan** – pengguna menulis dan mengirim pesan ke ruang obrolan umum.
3. **Lihat daftar pesan** – semua pesan tampil beserta nama pengirim dan waktu.

## Teknologi
- PHP 8 (native)
- HTML + CSS
- Penyimpanan data: file JSON (`data/messages.json`)

## Cara Menjalankan
1. Pastikan PHP 8 sudah terpasang (atau gunakan Laragon/XAMPP).
2. Clone / salin folder proyek:
   ```bash
   git clone <url-repository> campuschat
   cd campuschat
   ```
3. Jalankan server bawaan PHP:
   ```bash
   php -S localhost:8000
   ```
   Atau letakkan folder di `www` Laragon lalu buka `http://campuschat.test`.
4. Buka `http://localhost:8000` di browser.

## Struktur Folder
```
campuschat/
├── assets/          # file CSS
├── data/            # penyimpanan pesan (JSON)
├── docs/            # dokumen rencana & bukti git
├── includes/        # fungsi bantu PHP
├── index.php        # halaman masuk (isi nama)
├── chat.php         # halaman ruang obrolan
├── logout.php       # keluar
└── README.md
```

## Anggota Tim
| No | Nama |
|----|------|
| 1 | Winda Redsonia |