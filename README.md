# 🧠 OtakuTek

OtakuTek adalah platform blog modern yang menyajikan konten seputar **teknologi**, **anime**, dan **manhwa**, dibuat dengan Laravel 12, Livewire 3, dan TailwindCSS 4. Proyek ini ditujukan untuk komunitas pecinta teknologi dan budaya pop Jepang/Korea.

---

## ✨ Fitur Utama

### Pengguna Umum
- 🔍 Membaca artikel blog tanpa login
- 👍 Like artikel
- 💬 Komentar dan balas komentar (hanya untuk pengguna yang login)
- 🔐 Sistem otentikasi (register, login, logout)

### Admin Panel
- ✏️ CRUD Artikel, Kategori, dan Tag
- 📊 Statistik artikel (dilihat terbanyak, disukai terbanyak, dikomentari terbanyak)
- 📈 Laporan performa artikel per kategori dan individu

---

## 🛠️ Teknologi yang Digunakan

- **Laravel 12**
- **Livewire 3**
- **TailwindCSS 4**
- **MySQL**
- **Alpine.js**
- **Blade Templates**

---

## 🎨 Warna Utama (Tailwind Theme)

```
primary: '#0ea5e9',
secondary: '#d946ef',
accent: '#14b8a6'
```
## 🚀 Cara Instalasi Lokal

#### Clone repo ini:
```
git clone https://github.com/anggarasa/OtakuTek.git
cd otakutek
```

#### Install dependency PHP dan JS
```
composer install
npm install && npm run dev
```

#### Setup .env
```
cp .env.example .env
php artisan key:generate
```

#### Setup database
```
php artisan migrate --seed
```

#### Jalankan aplikasi
```
php artisan serve
```

## 🧪 Fitur yang Akan Datang
- 🖼️ Upload dan manajemen media untuk artikel

- 🔔 Notifikasi komentar terbaru

- 🔍 Pencarian artikel berdasarkan tag/kategori

## 🤝 Kontribusi
Pull request dan ide sangat diterima! Jangan ragu untuk fork dan buat perubahan.
