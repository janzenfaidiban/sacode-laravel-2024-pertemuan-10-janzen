# SaCode - Belajar Laravel 

## 📚 GIT COMMANDS

Download atau cloning branch dari remote github.com
```
git clone <branch-name>
```

Kirim local ke remote
```
git push origin <branch-name>
```

Mengambil perubahan dari remote 
```
git pull origin <branch-name>
```

atau bisa tulis saja ```git pull```

Membuat branch baru di local
```
git checkout -m <branch-name>
```
atau membuat branch baru dan langsung masuk ke dalam branch tersebut
```
git switch -c <branch-name>
```

Menampilkan daftar branch di local
```
git branch
```

Verifikasi branch yang sudah dibuat dan branch yang ada di remote
```
git branch -a
```

Push branch baru dari local ke remote
```
git push origin <branch-name>
```
atau set defaul git push ke origin / remote
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
Cara untuk menghapus branch
```
git branch --delete <branchname>
```

## Contributors

<ol>
    <li>Janzen Faidiban<li>
    <li>...<li>
    <li>...<li>
    <li>...<li>
    <li>...<li>
    <li>...<li>
    <li>...<li>
</ol>