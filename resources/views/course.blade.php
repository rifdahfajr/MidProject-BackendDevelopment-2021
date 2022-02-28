<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>course</title>
</head>
<body>
    @include("header")
    @yield('navbar')
    <section class="course">
        <h1 class="section-title">Course</h1>
        <div class="container">
            <h3>Klik untuk menuju materi</h3>
            <div class="card">
                    <div class="card-description">
                        <div class="description-info">
                            <a href="#phyton">
                                <button class="btn-course" style="margin-left: 40px;">
                                    {{-- <img src="/photo/python.png" alt=""> --}}
                                    {{-- <br>Python --}}
                                    <h3 class="description-title">Phyton</h3>
                                </button>
                            </a>
                            <a href="#c">
                                <button class="btn-course">
                                    {{-- <img src="/photo/css.png" alt=""> --}}
                                    {{-- <br>CSS --}}
                                    <h3 class="description-title">C</h3>
                                </button>
                            </a>
                            <a href="#c++">
                                <button class="btn-course">
                                    {{-- <img src="/photo/css.png" alt=""> --}}
                                    {{-- <br>CSS --}}
                                    <h3 class="description-title">C++</h3>
                                </button>
                            </a>
                            <a href="#java">
                                <button class="btn-course">
                                    {{-- <img src="/photo/css.png" alt=""> --}}
                                    {{-- <br>CSS --}}
                                    <h3 class="description-title">Java</h3>
                                </button>
                            </a>

                        </div>
                    </div>
            </div>
        </div>

    </section>
    <section id="phyton">
        <div class="container">
            <div class="card">
                    <div class="card-description">
                        <h3 class="description-title">Phyton</h3>
                        <div class="description-info">
                            <p>
                                Python adalah bahasa pemrograman yang populer. Bahasa pemrograman ini dibuat oleh Guido van Rossum dan dikenalkan sejak tahun 1991. Sebelum memulai untuk belajar Python dasar, akan lebih baik untuk memahami dulu apa itu Python dan bagaimana cara kerjanya.

                            Python termasuk bahasa pemrograman yang mudah untuk dipelajari. Sampai saat ini bahasa pemrograman Python hampir dipakai di segala bidang seperti game, sistem berbasis web, dan bahkan dapat membuat mesin pencari sendiri. Jadi secara umum, bahasa pemrograman ini dipakai dalam pengembangan website, pengembangan software, matematika, dan system scripting.

                            Supaya lebih dalam mengenal Python, artikel ini akan menjelaskan apa saja yang perlu diketahui ketika belajar Python pemula. Apa saja sebenarnya yang dapat dilakukan dengan Python?
                            Hal Apa yang Dapat Dilakukan Dengan Python

                            Sebelum belajar Phyton lebih jauh, Anda harus mengetahui apa saja yang bisa dilakukan dengan bahasa pemrograman ini.

                            </p>
                            <p>
                                Berikut ini beberapa hal yang dapat Anda lakukan menggunakan Python:

                            Python dapat menjadi salah satu bahasa pemrograman untuk membangun server ketika Anda membuat website.
                            Ketika Anda membutuhkan proses pembuatan prototipe atau pengembangan perangkat lunak siap produksi, Python dapat Anda andalkan.
                            Python dapat digunakan untuk membuat workflow di dalam pengembangan perangkat lunak.
                            Python dimanfaatkan untuk membaca dan memodifikasi sebuah file di dalam pembangunan sistem database.
                            Python memungkinkan Anda untuk menangani big data dan menjalankan pemrosesan matematika yang komplek.
                            </p>
                            <p>
                                Manfaat Belajar Python

                                Meskipun ada banyak sekali bahasa pemrograman di luar sana, akan tetapi saya merekomendasikan Anda untuk belajar Python. Tentu juga ada beberapa kelebihan yang perlu Anda ketahui. Jika dibandingkan dengan bahasa pemrograman lain, berikut kelebihan bahasa pemrograman Python:

                                Python memiliki sintaksis yang sederhana dan lebih mirip dengan Bahasa Inggris.
                                Python dapat berjalan di berbagai macam sistem operasi.
                                Python berjalan di dalam sistem interpreter, artinya bahasa baris kode bahasa pemrograman ini akan segera dieksekusi setelah ditulis.
                                Python dapat diperlakukan dengan cara prosedural, cara berorientasi objek atau cara fungsional.
                                Python memiliki sintaks yang memungkinkan pengembang untuk menulis program dengan ringkas daripada bahasa pemrograman lain.
                            </p>
                            <p>
                                Cara Menginstall dan Menggunakan Python

                                Seperti yang sudah dijelaskan di atas, Python dapat bekerja di berbagai macam sistem operasi (Windows, Arch, Linux, Raspberry Pi, dan lain sebagainya). Supaya dapat belajar Python, Anda tidak perlu menginstall program apa pun. Sebab sebagian besar sistem operasi sudah terinstall compiler Python di dalamnya. Untuk mengeceknya Anda dapat mengetikkan perintah di bawah ini ke dalam terminal atau CMD Anda:

                                $ python –versionPython 3.7.1
                                Jika sistem operasi Anda belum terdapat Python di dalamnya, Anda dapat mengunduh versi Python terbaru melalui halaman ini. Setelah terinstall, Anda dapat melakukan percobaan seperti mencetak teks atau semacamnya.  Di bawah ini adalah contoh penggunaan Python di salah satu sistem operasi:
                                Python memang sangat sederhana dibandingkan dengan bahasa pemrograman yang lain. Anda tidak perlu membuat ini itu untuk membuat program “Hello World”. Bahkan tagline dari pengembang bahasa pemrograman ini adalah membuat pengguna Python dapat bekerja lebih cepat dan efektif.
                            </p>

                            <p>
                                Cara Membuat Program Python

                                Sesudah Anda memastikan Python sudah terinstall dengan baik di perangkat. Langkah selanjutnya adalah melakukan percobaan beberapa eksekusi program Python. Namun sebelum itu akan lebih baik jika mengetahui terlebih dahulu apa saja komponen yang terdapat di dalam Python.

                                Sintaks

                                Python sintaks dapat dieksekusi langsung dengan mengetikkannya di Command Line. Selain itu, Anda dapat membuat file Python di dalam server menggunakan ekstensi .py dan menjalankannya menggunakan Command Line.

                                >>> print(“Hello, World!”)Hello, World!
                                Atau jika langsung menggunakan Terminal atau CMD:

                                $ python filePython.py
                                Komentar

                                Sama seperti bahasa pemrograman lainnya, Python juga memiliki kode untuk menjadikan baris program menjadi komentar. Anda dapat menggunakan tanda pagar ‘#’ untuk menjadikan baris kode di Python menjadi komentar.

                                # Ini adalah baris komentar di Python.print(“Hello, World!”)
                                Python Identitations

                                Berbeda dengan bahasa pemrograman lainnya, jika Anda menulis dalam bahasa Python, indentasi –penempatan kalimat atau baris kode– sangat diperhatikan. Python menggunakan indentasi untuk mengindikasikan baris kode.

                                if 9 > 2:      print(“Sembilan lebih besar daripada dua!”)
                                Namun ketika baris kode dituliskan menjadi satu kolom atau dalam tab yang sama, maka program akan menjadi error. Di bawah ini adalah contoh penulisan yang menghasilkan error.

                                if 9 > 2:print(“Sembilan lebih besar daripada dua!”)
                                Variabel

                                Python juga memiliki Variabel, tidak berbeda dengan bahasa pemrograman lainnya. Variabel ini digunakan untuk proses penyimpanan dan bekerja dengan berbagai tipe data.

                                Python sendiri punya standar pendeklarasian variabel. Variabel di Python dapat berupa nama singkat (seperti x dan y tadi) atau nama yang lebih mendeskripsikan seperti umur, nama, alamat, dan lain sebagainya. Aturan penamaan variabel di Python seperti:

                                Variabel tidak bisa diawali dengan angka,
                                Variabel harus diawali dengan huruf, atau karakter garis bawah (underscore),
                                Variabel hanya bisa mengandung karakter alfa-numerik dan karakter garis bawah,
                                Variabel di Python case-sensitive
                                Namun berbeda dengan bahasa pemrograman lainnya, Python tidak memerlukan inisiasi variabel untuk mendeklarasikan variabel. Ini berarti sebuah variabel terbuat ketika pertama kali Anda menambahkan nilai ke dalamnya.

                                Contohnya ketika Anda ingin membuat variabel ‘x’ dan ‘y’, Anda tinggal memasukkan nilainya langsung seperti di bawah ini:

                                x = 10y = “Budi”
                                print(x)print(y)
                                Perintah di atas akan mengisi variabel ‘x’ dengan nilai ‘5’ dan ‘y’ dengan nilai ‘Budi’. Jadi proses penyusunan baris kode lebih ringkas.

                                Kemudahan lainnya, Anda tidak perlu mendefinisikan tipe variabel. Python secara otomatis akan memberikan tipe variabel sesuai dengan nilai yang diberikan pada variabel tersebut. Misalnya pada contoh di bawah ini:

                                x = 10 # x bertipe integery = “Budi” # y bertipe string
                                Booleans

                                Setelah mempelajari variabel bekerja, di bagian ini Anda akan belajar tentang Booleans. Jika Variabel dapat menyimpan bilangan dengan satu tipe data, booleans juga digunakan untuk menyimpan sebuah tipe data, tapi tipe data yang berbeda.

                                Tipe data di Booleans hanya ‘benar’ atau ‘salah’. Jadi ini mirip dengan saklar lampu, hanya memiliki dua nilai. Anda dapat menggunakan booleans seperti contoh di bawah ini:

                                a = Trueb = False
                                Number

                                Ketika Anda belajar Python number, ada tiga tipe numerik variabel di Python, yaitu int, float, dan complex. Anda mungkin tidak akan pernah menuliskan tipe variabel di setiap pendeklarasiannya, karena (seperti yang sudah dijelaskan di atas) Python sudah menginisiasi tipe variabel ketika Anda menambahkan nilai ke dalamnya.

                                Int, float, dan complex mempunyai range yang berbeda. Int atau bilangan integer adalah bilangan bulat positif atau negatif, tanpa desimal, dengan panjang tak terbatas. Float atau ‘angka floating point’ adalah angka, positif atau negatif, yang mengandung satu atau lebih desimal. Sedangkan complex adalah bilangan kompleks yang ditulis dengan “j” sebagai bagian dari imajiner.

                                Sebagai contoh, di bawah ini adalah tiga tipe numerik variabel yang berbeda:

                                x = 1    # inty = 2.8  # floatz = 1j   # complex
                                Jadi Python akan mengenali dan membedakan tipe setiap variabel pada saat Anda mengisinya dengan sebuah nilai. Sedangkan untuk mengetahui tipe setiap variabel Anda dapat menggunakan fungsi type():

                                print(type(x))print(type(y))print(type(z))
                                String

                                Ketika ingin belajar Python string, Anda hanya perlu menambahkan tanda kutip tunggal atau tanda kutip ganda di antara nilai variabel yang ingin ditambahkan. Misalnya saja ketika Anda ingin menambahkan string “Budi” ke dalam variabel x maka yang perlu Anda lakukan adalah mendeklarasikannya seperti di bawah ini:

                                x = “Budi”# Ataux = ’Budi’
                                # “Budi” sama artinya dengan ‘Budi’.
                                Sama seperti bahasa pemrograman lainnya, string dalam Python adalah array byte yang mewakili karakter unicode. Namun, Python tidak memiliki tipe data karakter sehingga satu karakter hanyalah string dengan panjang 1. Ketika Anda ingin mengakses satu karakter di dalam string, yang perlu Anda gunakan adalah menggunakan tanda kurung kotak.

                                Di bawah ini adalah contoh mengambil karakter kedua pada sebuah string.

                                a = “Hello, World!”print(a[1])
                                Contoh baris kode di atas akan menampilkan karakter ‘H’ karena untuk penulisan di dalam bahasa pemrograman, karakter pertama berposisi 0 (yang disini adalah huruf H), sedangkan karakter kedua berposisi 1. Anda dapat mencobanya seperti di bawah ini:

                                belajar phyton
                                Ketika Anda ingin mengambil sebuah karakter dari posisi 3 sampai dengan 6 maka baris kode yang Anda gunakan seperti di bawah ini:

                                a = “Hello, World!”print(a[3:6])
                                Selain perintah di atas, masih ada banyak fungsi string lain seperti: len() digunakan untuk menghitung panjang string, lower() menghasilkan string dengan huruf kecil, upper() menghasilkan string dengan huruf besar, replace() untuk mengganti nilai di dalam variabel string, dan split() untuk memisahkan string berdasarkan tanda baca tertentu.

                                Operator

                                Bagian terakhir dari pengenalan komponen Python adalah Operator. Selama melakukan proses coding Anda pasti akan membutuhkan operator untuk membuat sebuah alur logika, penghitungan angka, atau yang lainnya.

                                Operator ini bekerja untuk melakukan operasi pada variabel dan nilai.  Dalam bahasa pemrograman Python, terdapat beberapa grup dari operator, seperti operator aritmatika, penugasan (assignment), pembanding (comparison), logika (logical), identitas (identity), keanggotaan (membership), dan bitwise.

                                Di antara operator lainnya, operator aritmatika sering digunakan. Operator aritmatika ini mengandung beberapa operator. Di bawah ini adalah daftar operator aritmatika secara lengkapnya:
                            </p>
                            <h3>Sumber: Niagahoster</h3>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <section id="c">
        <div class="container">
            <div class="card">
                    <div class="card-description">
                        <h3 class="description-title">C</h3>
                        <div class="description-info">
                            <p>
                                Bahasa pemrograman C biasaya dipelajari pada jurusan teknik informatika.

                                Bahasa C memang bagus untuk memperkenalkan konsep pemrograman bagi pemula yang belum pernah coding.

                                Usia bahasa pemrograman C memang cukup tua, namun masih digunakan hingga saat ini.

                                Berikut ini adalah statistik penggunaan bahasa pemrograman menurut survey StackOverflow.
                                Bahasa pemrograman C memang tidak menempati urutan pertama.

                                Tapi perlu kamu ketahui…

                                Bahasa C banyak menginspirasi bahasa-bahasa pemrograman yang lain seperti Java, Javascript, C++, C#, PHP, dsb.

                                Bahasa-bahasa tersebut memiliki sintaks yang hampir sama dengan bahasa C.

                                Bahkan C sampai dijuluki “God’s programming language”…
                            </p>
                            <p>
                                Apa itu Bahasa Pemrograman C?

                                C (dibaca /si:/ seperti membaca huruf C dalam bahasa inggris) adalah sebuah bahasa pemrograman gerneral-purpose dan imprative yang mendukung pemrograman terstruktur dan rekursif. 2

                                General-purpose artinya bisa digunakan untuk membuat program apa saja. Impreative artinya bahasa yang menggunakan statament. 3

                                Sejarah Singkat Bahasa Pemrograman C

                                Bahasa pemrograman C adalah bahasa pemrograman yang dibuat oleh Dennis Ritchie pada tahun 1969–1973 di Bell Labs.

                                Awal mula kemunculan bahasa pemrograman C dimulai saat pengembangan sistem operasi Unix oleh Dennis Ritchie dan Ken Thompson.
                            </p>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <section id="c++">
        <div class="container">
            <div class="card">
                    <div class="card-description">
                        <h3 class="description-title">C++</h3>
                        <div class="description-info">
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, culpa voluptate. Est corporis voluptatum repellendus rem debitis perspiciatis, enim voluptates fugit molestias dicta accusantium cupiditate ipsum, aut hic molestiae laboriosam.
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <section id="java">
        <div class="container">
            <div class="card">
                    <div class="card-description">
                        <h3 class="description-title">Java</h3>
                        <div class="description-info">
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, culpa voluptate. Est corporis voluptatum repellendus rem debitis perspiciatis, enim voluptates fugit molestias dicta accusantium cupiditate ipsum, aut hic molestiae laboriosam.
                        </div>
                    </div>
            </div>
        </div>
    </section>
</body>
<style>
    .container{
      padding: 25px;
      display: -ms-grid;
      /* grid-template-columns: 25% 25% 25%; */
      grid-template-columns: repeat(3, 25%);
      grid-column-gap: 20px;
      grid-row-gap: 20px;
      justify-content: center;
      width: 100%;
      flex-wrap: wrap;
      align-items: center;
    }
    .card{
      width: 100%;
      background-color: #FBE9FF;
      border-radius: 10px;
      padding: 10px;
      /* transition: transform 1s ease-in-out; */
}
.btn-course {
    width: 240px;
    height: 144px;
    border-radius: 30px;
    margin-left: 60px;
    background-color: #853699;
    font-size: 25px;
    font-family: 'Inter',
        sans-serif;
    color: #fff;
    border-style: none;
}
</style>
</html>
