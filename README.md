# laravel_ilhamputra0601


# Soal B : Laravel

# info:
# pada bagian config->database.php
    cari bagian connections=>[
         mysql
        =>[
  saya merubah 
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
  
 # menghapus mb4 menjadi 
   'charset' => 'utf8',
  'collation' => 'utf8_unicode_ci',
  karena saya menggunakan wampp
  
 # user login adalah
  username : laravel
  password :12345
  
  # pada bagian pasien saya menggunakan faker
  dengan format number harus benar 10-12 angka
 ketika update dan faker terkadang suka random
