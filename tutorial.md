Setelah meng-clone project Laravel dari GitHub, ikuti langkah-langkah berikut untuk menjalankannya di lokal:

### 1. Clone Repository
Clone project Laravel ke komputer lokal:
```bash
git clone https://github.com/username/repository-name.git
```

### 2. Masuk ke Folder Project
Masuk ke direktori project:
```bash
cd repository-name
```

### 3. Install Dependensi
Instal semua dependensi menggunakan Composer:
```bash
composer install
```

### 4. Buat File `.env`
Copy file `.env.example` menjadi `.env`:
```bash
cp .env.example .env
```

### 5. Atur Konfigurasi Database
Buka file `.env` dan sesuaikan konfigurasi database sesuai pengaturan lokal Anda:
```dotenv
DB_DATABASE=nama_database
DB_USERNAME=username_database
DB_PASSWORD=password_database
```

### 6. Generate Application Key
Generate application key Laravel:
```bash
php artisan key:generate
```

### 7. Migrasi dan Seeding Database (Opsional)
Jika project membutuhkan tabel dan data awal, jalankan migrasi dan seeder:
```bash
php artisan migrate --seed
```

### 8. Jalankan Server Laravel
Jalankan server lokal Laravel:
```bash
php artisan serve
```

Server akan berjalan di `http://127.0.0.1:8000`. Anda bisa membuka alamat ini di browser untuk melihat project Laravel.

### 9. (Opsional) Install Dependensi Frontend
Jika project menggunakan frontend (seperti Laravel Mix), Anda perlu menginstall dependensi menggunakan `npm` atau `yarn`:
```bash
npm install
```

Lalu compile asset frontend:
```bash
npm run dev
```

Sekarang project Laravel Anda seharusnya sudah dapat dijalankan dengan baik di lokal.