<!DOCTYPE html>
<html>
<head>
  <h3>Pertemuan Ke 2</h3>
  <h4>Membuat halaman Web Sederhana</h4>
  <title>Pemrograman Berorientasi Objek</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      background: #0000;
    }
    h1, h2 {
      color: #545554;
    }
    h3, h4 {
      color: #0033FF;
    }
    h5 {
      color: #FF0000;
    }
    table {
      border-collapse: collapse;
      width: 30%;
    }
    th, td {
      border: 1px solid #7a7a7a;
      padding: 8px;
      text-align: left;
    }
    tr:nth-child(even) {
      background-color: #a0f0f5;
    }
  </style>
</head>
<body>
  <p>Pemrograman berorientasi objek (Inggris: object-oriented programming disingkat OOP) merupakan paradigma pemrograman berdasarkan konsep "objek", yang dapat berisi data, dalam bentuk field atau dikenal juga sebagai atribut; serta kode, dalam bentuk fungsi/prosedur atau dikenal juga sebagai method.</p>

  <center><h2>Bahasa Pemrograman Yang Mendukung PBO</h2></center>
  <ul>
    <li>Visual Foxpro</li>
    <li>Java</li>
    <li>C++</li>
    <li>Pascal (bahasa pemrograman)</li>
    <li>SIMULA</li>
    <li>Smalltalk</li>
    <li>Ruby</li>
    <li>Python</li>
    <li>PHP</li>
    <li>TypeScript</li>
    <li>C#</li>
    <li>Delphi</li>
    <li>Eiffel</li>
    <li>Perl</li>
    <li>Adobe Flash AS 3.0</li>
  </ul>

  <center>
    <h1>Tabel Kategori Produk</h1>  
    <table>
      <tr>
        <th>No</th>
        <th>Kategori Produk</th>
        <th>Nama Produk</th>
      </tr>
      <tr>
        <td>1</td>
        <td>Bumbu Dapur</td>
        <td>Garam</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Bumbu Dapur</td>
        <td>Cabe</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Bumbu Dapur</td>
        <td>Lengkuas</td>
      </tr>
      <tr>
        <td>4</td>
        <td>Bumbu Dapur</td>
        <td>Terasi</td>
      </tr>
      <tr>
        <td>5</td>
        <td>Sembako</td>
        <td>Beras</td>
      </tr>
      <tr>
        <td>6</td>
        <td>Sembako</td>
        <td>Minyak Goreng</td>
      </tr>
      <tr>
        <td>7</td>
        <td>Sembako</td>
        <td>Gula Pasir</td>
      </tr>
    </table>

    <h1>Tabel Produk</h1>
    <table>
      <tr>
        <th>No</th>
        <th>Produk</th>
        <th>Stok</th>
        <th>Harga</th>
      </tr>
      <tr>
        <td>1</td>
        <td>Garam</td>
        <td>10</td>
        <td>7000</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Cabe</td>
        <td>10</td>
        <td>25000</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Lengkuas</td>
        <td>10</td>
        <td>12000</td>
      </tr>
      <tr>
        <td>4</td>
        <td>Terasi</td>
        <td>10</td>
        <td>35000</td>
      </tr>
      <tr>
        <td>5</td>
        <td>Beras</td>
        <td>10</td>
        <td>13000</td>
      </tr>
    </table>

    <img src="IMG_3563.JPG" width="100" height="180">
    <h2>Dibuat Oleh Iim Abdul Karim</h2>
    <p>mahasiswa informatika semester 3</p>
    <p>Universitas Peradaban</p>
    <h1>Pemrograman Berorientasi Objek</h1>
  </center>
<h3>Pertemuan Ke 3</h3>
<h4>membuat kelas 'Buah' dengan Property 'nama' dan 'Warna'</h4>
  <?php
  class Buah {
      public $warna;
      function set_name($nama) {
      $this->nama = $nama;
  }
      function get_name() { return $this->nama;
  }
  }
        $apel = new Buah();
        $pisang = new Buah(); $apel->set_name('Apel');
        $pisang->set_name('Pisang');
        echo $apel->get_name();
        echo "<br>";
        echo $pisang->get_name();
  ?>

  <h4>membuat kelas 'Mobil' dengan Object 'Toyota' property 'Warna'dan 'Tahun'</h4>
  <?php
  class Mobil {
      public $merek;
      public $warna;
      public $tahun;

      public function __construct($merek, $warna, $tahun) {
          $this->merek = $merek;
          $this->warna = $warna;
          $this->tahun = $tahun;
      }

      public function info() {
          return "Mobil: $this->merek, Warna: $this->warna, Tahun: $this->tahun";
      }
  }
  $toyota = new Mobil("Toyota", "Biru Metalik", 2023);
  echo "<p>" . $toyota->info() . "</p>";
  ?>
<h3>Pertemuan Ke 4</h3>
<h4>Konstruktor dan Dekstruktor</h4>
  <?php
  class Orang{
      public $nama;
      public $tinggi;
      public $warna;

    public function __construct($nama, $tinggi, $warna) {
      $this->nama = $nama;
      $this->tinggi = $tinggi;
      $this->warna = $warna;
}

  public function __destruct() {
      echo "mahasiswa tersebut bernama {$this->nama} Tinggi badan {$this->tinggi} dan berwarna {$this->warna}";
      echo "<br>";
      }
}
$zidan = new Orang("Zidan", 169, "Sawo Matang");
$yoga  = new Orang("Yoga", 169, "Putih");
$vian = new Orang("Vian", 165, "Sawo Matang");
?>

<h3>Pertemuan Ke 5</h3>
<h4>Konstanta dan Abstrak</h4>
<li>Konstanta</li>
<?php
  class komputer {
    const DOLLAR = '12000';
}
    echo "Harga dollar saat ini = Rp. ".komputer::DOLLAR;
?>

<li>Abstrak</li>
<?php
abstract class ParentClass {
    abstract protected function prefixName($name);
}

class ChildClass extends ParentClass {
    public function prefixName($name, $separator = " ", $greet = "Dear") {
        $prefix = "";

        if ($name == "Ahmad Sulistiyo") {
            $prefix = "Mr";
        } elseif ($name == "Siti Aisyah") {
            $prefix = "Miss";
        }

        return "{$greet}{$separator}{$prefix}{$separator}{$name}";
    }
}
$class = new ChildClass;

echo $class->prefixName("Ahmad Sulistiyo") . "<br>";
echo $class->prefixName("Siti Aisyah") . "<br>";
?>
<h3>Pertemuan Ke 7</h3>
<h4>Penjelasan CRUD</h4>
<center><img src="gambar\Koneksi.png" width="600" height="450"></center>
<li>Menghubungkan ke Database: Kode ini mengatur koneksi ke server MySQL untuk berinteraksi dengan database iim_pbo2024.</li>
<li>Memastikan Koneksi Valid: Memastikan bahwa tidak ada masalah saat menghubungkan ke database.</li>
<li>Jika gagal, menampilkan pesan error dan menghentikan eksekusi.</li>

<center><img src="gambar\Index.png" width="600" height="450"></center>
<li>Mengambil data dari database dan menampilkannya dalam tabel.</li>
<li>Memberikan antarmuka yang responsif dan modern menggunakan Bootstrap.</li>
<li>Menyediakan navigasi untuk menambah, mengedit, dan menghapus data.</li>
<li>Menyertakan efek visual untuk meningkatkan pengalaman pengguna.</li>

<center><img src="gambar\View.png" width="600" height="450"></center>
<li>Mengambil data dari tabel tbl_barang menggunakan query SQL.</li>
<li>Menampilkan data dalam format tabel HTML, termasuk kolom seperti id_barang, nama_barang, stok, harga_beli, dan harga_jual.</li>
<li>Menangani kondisi jika tidak ada data yang ditemukan dengan menampilkan pesan.</li>
<li>Menutup koneksi database setelah proses selesai.</li>

<center><img src="gambar\Edit_data.png" width="600" height="450"></center>
<li>Mengambil data spesifik dari tabel tbl_barang berdasarkan id_barang yang diterima melalui URL.</li>
<li>Menampilkan data yang diambil dalam form agar pengguna dapat mengedit.</li>
<p>Memproses data edit:</p>
<li>Memperbarui data di tabel tbl_barang dengan data baru yang dikirim melalui form.</li>
<li>Mengarahkan kembali ke halaman utama jika proses berhasil.</li>
<p>Keamanan:</p>
<li>Menggunakan prepared statements untuk mencegah serangan SQL Injection.</li>
<li>Desain Responsif: Memanfaatkan Bootstrap untuk tampilan yang user-friendly.</li>

<center><img src="gambar\Tambah_data.png" width="600" height="450"></center>
<P>Menambahkan Data Baru:</P>
<li>Menerima data dari form input.</li>
<li>Menyimpan data tersebut ke tabel tbl_barang dalam database.</li>
<p>Validasi Input:</p>
<li>Semua input wajib diisi (required).</li>
<p>Desain Interaktif:</p>
<li>Formulir dirancang dengan gaya modern dan responsif menggunakan Bootstrap dan CSS.</li>
<p>Navigasi:</p>
<li>Pengguna diarahkan kembali ke halaman utama setelah data berhasil disimpan.</li>
</body>
</html>