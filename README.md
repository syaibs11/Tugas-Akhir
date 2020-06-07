# Perpustakaan IPB

### Requirements
**Pls install this requirements before**

1. [XAMPP](https://www.apachefriends.org/index.html)
2. [Composer](https://getcomposer.org/Composer-Setup.exe)
3. [Git](https://git-scm.com/)
4. Text Editor (Notepad++ or Visual Studio Code or sublime, etc)

### Bagaimana cara menggunakan repository ini?

1. Git clone project ini, Clone repository ada 2 cara :
   - Cara pertama. Download langsung saja raw dari repository nya berupa .zip
![Untitled](https://user-images.githubusercontent.com/34140863/83843800-f5f50b00-a72f-11ea-83ba-05c18bd8115f.png)
   - Cara kedua. **Dianjurkan menggunakan yang ini**. Buka Git Bash pada folder kalian untuk project ini. setelah itu masukkan perintah `git clone https://github.com/marisanrbt/project2.git`
   
![like this](https://user-images.githubusercontent.com/34140863/83843423-21c3c100-a72f-11ea-8273-e78bb1562e7c.png)
   
   **Note :** Pastikan kalian telah memiliki akun Github juga
 
2. Nyalakan XAMPP nya 

![Xammp](https://user-images.githubusercontent.com/34140863/83844414-24271a80-a731-11ea-8439-f936ddd143e6.png)

3. Setelah itu buka project yang telah kalian clone mneggunakan text editor kalian. yang akan saya contohkan menggunakan visual studio code. Buka terminal

![terminal](https://user-images.githubusercontent.com/34140863/83844351-05288880-a731-11ea-9253-89c6632b28b4.png)

4. Masukkan perintah `composer install` . Pada step ini membutuhkan koneksi internet
5. Jika sudah berhasil masukkan perintah `php artisan migrate`. Fungsi ini untuk secara otomatis membuat database di XAMPP kalian
6. Happy Coding!

### Cara lihat hasil kodingannya gimana ya?
1. Buka terminal
2. Ketikkan perintah `php artisan serve`
3. Buka broser kalian, buka [localhost:8000](http://localhost:8000/)

### Saya mau ngoding, tapi nanti setelah selesai dan saya push saya akan menimpah kerjaan teman saya dong? bagaimana cara agar tidak mengacaukannya?

1. Ketika kalian clone dari master usahakan bikin branch baru.
2. Caranya setelah kalian clone buka terminal pada repository tersebut (bisa menggunakan visual studio code), lalu masukkan perintah `git checkout -b [nama branch]` 
3. Untuk mengecek kalian sudah pindah ke branch kalian atau belum ketikkan `git branch`
4. Happy Coding!

### Setelah saya ngoding di branch saya, saya mau menggabungkan code saya dengan yang dibranch MASTER. Bagaimana caranya?
1. Check nama branch kalian dengan cara ketikkan `git branch` di terminal
1. Git add, git commit, dan git push dulu kerjaan kalian ke branch baru kalian. Caranya buka terminal lalu:
   * `Git add . ` 
   * `Git commit -m '[masukkan info apa yang kalian coding]`
   * `Git push origin [nama branch kalian]`
1. Setelah itu pull branch master dengan kodingan terbaru
1. Git pull dulu branch masternya, check kalian sedang di branch mana terlebih dahulu `git branch`. Jika kalian berada di branch **pribadi** dan **bukan di master**, cara pindahnya ke branch master dengan cara mengetikkan `git checkout master` lalu kalian dapat check lagi dengan perintah `git branch`. Setelah itu git pull dengan cara mengetikkan `git pull origin master` 
1. Buka github di browser, lalu pilih pull request. tekan tombol new pull request.
1. Jangan lupa tambahkan `assigness` ketika pull request agar teman kalain mengetahui ada perubahan apa yang akan masuk ke branch master

### Ketika saya pull request ada conflict bagaimana ya?
1. Buka project kalian di terminal
2. Pindah ke branch master dengan cara mengetikkan `git checkout master` 
3. Git pull pada branch master dengan mengetikkan `git pull`
4. kembali ke branch pribadi kalian dengna cara mengetikkan perintah `git checkout [nama branch kalian]'
5. Check sudah di branch pribadi atau blom dengan mengetikkan `git branch`
6. samakan kodingan di branch pribadi kita dengan branch master. caranya yaitu dengan mengetikkan `git rebase master`
7. Jika ada conflict perbaiki terlebih dahulu, pada bagian tersebut kodingannya yg bener yang mana
8. Jika sudah benar. buka terminal lalu :
   * `Git add . ` 
   * `Git commit -m '[masukkan info apa yang kalian coding]`
   * `Git push origin [nama branch kalian] -f`
9. Buka pull request lagi, lalu new request dan cek apakah masih ada conflict atau tdk, harusnya si tidak ada.
