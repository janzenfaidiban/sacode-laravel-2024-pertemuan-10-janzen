# SaCode - Belajar Laravel 

## 📚 GIT COMMANDS

Download atau cloning branch dari remote github.com
```
git clone <branch-name>
```

Copy dan buat file ```.env``` baru
```
cp .env.example .env
```

Konfigurasi menghubungkan database di dalam file ```.env```
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sacode_laravel_2024_pertemuan_6_janzen
DB_USERNAME=root
DB_PASSWORD=root
```

Install composer
```
composer install
```

Membuat key aplikasi yang baru 
```
php artisan key:generate
```

Jalankan migrasi database
```
php artisan migrate
```

Jika kita sudah migrate sebelumnya pada project yang sama, kita bisa gunakan ```migrate:fresh```

```
php artisan migrate:fresh 
```

Jika ingin jalankan migrasi sekalian dengan seeder
```
php artisan migrate:fresh --seed
```

Jalankan project laravel di server artisan dan web browser
```
php artisan serve
```

Kirim perubahan yang dibuat local ke remote sesuai branch tertentu
```
git push origin <branch-name>
```

Mengambil perubahan dari remote sesuai branch tertentu
```
git pull origin <branch-name>
```

atau bisa tulis saja ```git pull``` tetapi pastikan dulu kita sudah ada di branch yang tepat

Menampilkan daftar branch di local
```
git branch
```

Menampilkan daftar branch di remote
```
git branch -a
```

Membuat branch baru di local
```
git checkout -m <branch-name>
```
atau membuat branch baru dan langsung masuk atau berpindah ke dalam branch tersebut
```
git switch -c <branch-name>
```

tetapkan defaul git push ke origin / remote
```
git push --set-upstream origin <branch-name>
```

Menggabungkan perubahan dari branch <b>main</b> ke branch <b>dev-name</b>. 
Pindah dulu ke branch ```dev-name```
```
git checkout dev-name
```
Gabungkan perubahan dari branch lain, sebagai contoh branch main ke branch yang sedang aktif menggunakan perintah ```merge```
```
git merge main
```
Hapus branch di local
```
git branch --delete <branchname>
```

Hapus branch di remote
```
git push --delete origin <nama-branch>
```
