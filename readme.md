![Contoh Gambar](../soal.jpg)

---

# Konversi Nilai Angka ke Huruf

Menggunakan serangkaian pernyataan if dan elseif untuk memeriksa dalam rentang mana nilai tersebut berada.
Jika nilai berada dalam rentang yang ditentukan, fungsi mengembalikan huruf yang sesuai (A, B, C, D, E).
Jika nilai di luar rentang 0-100, fungsi mengembalikan "Nilai tidak valid".

| Nilai Angka | Nilai Huruf |
|-------------|-------------|
| 80 s/d 100  | A           |
| 70 s/d 79   | B           |
| 60 s/d 69   | C           |
| 50 s/d 59   | D           |
| 0 s/d 49    | E           |

## Kode PHP


## Penjelasan Kode

1. **Mendefinisikan Nilai**
   ```php
   $nilai = 85;
   ```
   - Nilai angka yang akan dikonversi ke huruf disimpan dalam variabel `$nilai`.

2. **Fungsi `konversiNilai`**
   ```php
   function konversiNilai($nilai) {
       if ($nilai >= 80 && $nilai <= 100) {
           return 'A';
       } elseif ($nilai >= 70 && $nilai <= 79) {
           return 'B';
       } elseif ($nilai >= 60 && $nilai <= 69) {
           return 'C';
       } elseif ($nilai >= 50 && $nilai <= 59) {
           return 'D';
       } elseif ($nilai >= 0 && $nilai <= 49) {
           return 'E';
       } else {
           return 'Nilai tidak valid';
       }
   }
   ```
   - **Tujuan:** Fungsi ini mengonversi nilai angka ke huruf berdasarkan rentang yang sudah ditentukan.
   - **Parameter:** Fungsi ini menerima satu parameter, yaitu nilai angka yang akan dikonversi.


3. **Mengonversi dan Menampilkan Hasil**
   ```php
   $nilaiHuruf = konversiNilai($nilai);
   echo "Nilai angka: $nilai<br>";
   echo "Nilai huruf: $nilaiHuruf";
   ```
   - Fungsi `konversiNilai` dipanggil dengan argumen `$nilai`, dan hasilnya disimpan dalam variabel `$nilaiHuruf`.
   - Menggunakan `echo` untuk menampilkan nilai angka dan nilai huruf yang sudah dikonversi.


Kode PHP ini bertujuan untuk mengonversi nilai angka menjadi huruf sesuai dengan ketentuan yang diberikan. 