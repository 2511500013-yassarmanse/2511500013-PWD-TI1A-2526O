<!DOCTYPE html>
<<<<<<< HEAD
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judul Halaman</title>
    <link rel="stylesheet" href="style.css">
    <style>
       
    </style>
</head>

<body>
    <header>
        <h1>Ini Header</h1>
        <button class="menu-toggle" id="menuToggle" aria-label="Toggle navigation">
            &#9776;
        </button>
        <nav>
            <ul>
                <li><a href="#home">Beranda</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="home">
            <h2>Selamat Datang</h2>
            <?php
            echo "hallo dunia!<br>";
            echo "perkenalkan nama saya dimas daffah";
            ?>
            <p>Ini contoh paragraf HTML.</p>
        </section>
        
<section id="ipk">
    <h2>Nilai Saya</h2>

    <?php
    // ==========================
    // Data Mata Kuliah
    // ==========================
    $namaMatkul1 = "Kalkulus";
    $namaMatkul2 = "Logika Informatika";
    $namaMatkul3 = "Pengantar Teknik Informatika";
    $namaMatkul4 = "Jaringan Komputer";
    $namaMatkul5 = "Pemrograman Web Dasar";

    $sksMatkul1 = 4;
    $sksMatkul2 = 2;
    $sksMatkul3 = 3;
    $sksMatkul4 = 3;
    $sksMatkul5 = 3;

    $nilaiHadir1 = 90; $nilaiTugas1 = 85; $nilaiUTS1 = 80; $nilaiUAS1 = 70;
    $nilaiHadir2 = 70; $nilaiTugas2 = 80; $nilaiUTS2 = 82; $nilaiUAS2 = 87;
    $nilaiHadir3 = 95; $nilaiTugas3 = 80; $nilaiUTS3 = 75; $nilaiUAS3 = 85;
    $nilaiHadir4 = 88; $nilaiTugas4 = 79; $nilaiUTS4 = 70; $nilaiUAS4 = 90;
    $nilaiHadir5 = 79; $nilaiTugas5 = 80; $nilaiUTS5 = 90; $nilaiUAS5 = 100;

    // ==========================
    // Fungsi-fungsi
    // ==========================
    function hitungNilaiAkhir($hadir, $tugas, $uts, $uas) {
        return (0.1 * $hadir) + (0.2 * $tugas) + (0.3 * $uts) + (0.4 * $uas);
    }

    function tentukanGrade($nilaiAkhir, $hadir) {
        if ($hadir < 70) return "E";
        elseif ($nilaiAkhir >= 85) return "A";
        elseif ($nilaiAkhir >= 80) return "A-";
        elseif ($nilaiAkhir >= 75) return "B+";
        elseif ($nilaiAkhir >= 70) return "B";
        elseif ($nilaiAkhir >= 65) return "B-";
        elseif ($nilaiAkhir >= 60) return "C";
        elseif ($nilaiAkhir >= 50) return "D";
        else return "E";
    }

    function konversiMutu($grade) {
        switch($grade) {
            case "A": return 4.0;
            case "A-": return 3.7;
            case "B+": return 3.3;
            case "B": return 3.0;
            case "B-": return 2.7;
            case "C": return 2.0;
            case "D": return 1.0;
            default: return 0.0;
        }
    }

    // ==========================
    // Proses Perhitungan
    // ==========================
    $matkul = [
        [$namaMatkul1, $sksMatkul1, $nilaiHadir1, $nilaiTugas1, $nilaiUTS1, $nilaiUAS1],
        [$namaMatkul2, $sksMatkul2, $nilaiHadir2, $nilaiTugas2, $nilaiUTS2, $nilaiUAS2],
        [$namaMatkul3, $sksMatkul3, $nilaiHadir3, $nilaiTugas3, $nilaiUTS3, $nilaiUAS3],
        [$namaMatkul4, $sksMatkul4, $nilaiHadir4, $nilaiTugas4, $nilaiUTS4, $nilaiUAS4],
        [$namaMatkul5, $sksMatkul5, $nilaiHadir5, $nilaiTugas5, $nilaiUTS5, $nilaiUAS5],
    ];

    $totalBobot = 0;
    $totalSKS = 0;
    $no = 1;

    // ==========================
    // Tampilkan Output Rapi
    // ==========================
    foreach ($matkul as $m) {
        list($nama, $sks, $hadir, $tugas, $uts, $uas) = $m;

        $nilaiAkhir = hitungNilaiAkhir($hadir, $tugas, $uts, $uas);
        $grade = tentukanGrade($nilaiAkhir, $hadir);
        $mutu = konversiMutu($grade);
        $bobot = $mutu * $sks;
        $status = ($grade == "D" || $grade == "E") ? "Gagal" : "Lulus";

        $totalBobot += $bobot;
        $totalSKS += $sks;

        echo "<div style='margin-bottom:25px; border-bottom:1px solid #ccc; padding-bottom:10px;'>";
        echo "<b>Nama Mata Kuliah ke-$no</b> : $nama<br><br>";
        echo "<table style='border-collapse:collapse; width:350px;'>";
        echo "<tr><td style='width:140px;'>SKS</td><td>: $sks</td></tr>";
        echo "<tr><td>Kehadiran</td><td>: $hadir</td></tr>";
        echo "<tr><td>Tugas</td><td>: $tugas</td></tr>";
        echo "<tr><td>UTS</td><td>: $uts</td></tr>";
        echo "<tr><td>UAS</td><td>: $uas</td></tr>";
        echo "<tr><td>Nilai Akhir</td><td>: ".number_format($nilaiAkhir,2)."</td></tr>";
        echo "<tr><td>Grade</td><td>: $grade</td></tr>";
        echo "<tr><td>Angka Mutu</td><td>: ".number_format($mutu,2)."</td></tr>";
        echo "<tr><td>Bobot</td><td>: ".number_format($bobot,2)."</td></tr>";
        echo "<tr><td>Status</td><td>: $status</td></tr>";
        echo "</table>";
        echo "</div>";

        $no++;
    }

    $ipk = $totalBobot / $totalSKS;

    echo "<h3>Total Bobot = ".number_format($totalBobot,2)."</h3>";
    echo "<h3>Total SKS = $totalSKS</h3>";
    echo "<h2>IPK = ".number_format($ipk,2)."</h2>";
    ?>
</section>

        <section id="about">
            <?php
            $nim = 2511500013;
            $NIM = 2511500018;
            $nama = "yassar'manse";
            $NAMA = "manse\yassar'";
            $lahir = "pangkalpinang/";
            $LAHIR = "bangka belitung";
            $tanggal = "3 april 2007'";
            $TANGGAL = "3 april  2007";
            $hobi = "bermain raket  dan game";
            $HOBI = "bermain raket  dan game";
            $pasangan = "belum ada?";
            $PASANGAN = "belum ada";
            $pekerjaan = "tidak bekerja'";
            $PEKERJAAN = "tidak bekerja";
            $orangtua = "bapak deny mane dan ibu aminah'";
            $ORANGTUA = "bapak deny manse dan ibu aminah";
            $kakak = "tidak ada'";
            $KAKAK = "tidak ada";
            $adik = "tidak ada'";
            $ADIK = "tidak ada'";  
            ?>
            <h2>Tentang Saya</h2>
            <p><strong>NIM:</strong>
            <?php
            echo $nim; 
            ?>
            <p><strong>Nama Lengkap:</strong> 
            <?php
            echo $nama;
            ?>&#128526;</p>
            <p><strong>Tempat Lahir:</strong> 
            <?php
            echo $lahir; 
            ?>
            <p><strong>Tanggal Lahir:</strong>
            <?php
            echo $tanggal; 
            ?>
            <p><strong>Hobi:</strong> 
            <?php
            echo $hobi; 
            ?>
            <p><strong>Pasangan:</strong> 
            <?php
            echo $pasangan; 
            ?> &hearts;</p>
            <p><strong>Pekerjaan:</strong> 
            <?php
            echo $pekerjaan; 
            ?> &copy;</p>
            <p><strong>Nama Orang Tua:</strong> 
            <?php
            echo $orangtua; 
            ?>
            <p><strong>Nama Kakak:</strong> 
            <?php
            echo $kakak; 
            ?>
            <p><strong>Nama Adik:</strong> 
            <?php
            echo $adik; 
            ?>
        </section>

        <section id="contact" class="container">
            <h2>Kontak Saya</h2>
            <form action="" method="get">
                <label for="txtNama"><span>Nama:</span>
                    <input type="text" id="txtNama" name="txtNama" placeholder="Masukkan nama" required
                        autocomplete="name">
                </label>

                <label for="txtEmail"><span>Email:</span>
                    <input type="email" id="txtEmail" name="txtEmail" placeholder="Masukkan email" required
                        autocomplete="email">
                </label>

                <label for="txtPesan"><span>Pesan:</span>
                    <textarea name="txtPesan" id="txtPesan" rows="4" placeholder="Tulis pesan anda..."
                        required></textarea>
                    <small id="charCount">0/200 karakter</small>
                </label>

                <button type="submit">Kirim</button>
                <button type="reset">Batal</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 yassarmanse [2511500013]</p>
    </footer>
</body>
<script src="script.js"></script>
=======
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Judul Halaman</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h1>Ini Header</h1>
    <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation">
      &#9776;
    </button>
    <nav>
      <ul>
        <li><a href="#home">Beranda</a></li>
        <li><a href="#about">Tentang</a></li>
        <li><a href="#contact">Kontak</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section id="home">
      <h2>Selamat Datang</h2>
      <?php
      echo "halo dunia!<br>";
      echo "nama saya hadi";
      ?>
      <p>Ini contoh paragraf HTML.</p>
    </section>

    <section id="about">
      <?php
      $nim = 2511500010;
      $NIM = '0344300002';
      $nama = "Say'yid Abdullah";
      $Nama = 'Al\'kautar Benyamin';
      ?>
      <h2>Tentang Saya</h2>
      <p><strong>NIM:</strong>
        <?php
        echo $NIM;
        ?>
      </p>
      <p><strong>Nama Lengkap:</strong>
        <?php
        echo $Nama;
        ?> &#128526;
      </p>
      <p><strong>Tempat Lahir:</strong> Pangkalpinang</p>
      <p><strong>Tanggal Lahir:</strong> 1 Januari 2000</p>
      <p><strong>Hobi:</strong> Memasak, coding, dan bermain musik &#127926;</p>
      <p><strong>Pasangan:</strong> Belum ada &hearts;</p>
      <p><strong>Pekerjaan:</strong> Dosen di ISB Atma Luhur &copy; 2025</p>
      <p><strong>Nama Orang Tua:</strong> Bapak Setiawan dan Ibu Maria</p>
      <p><strong>Nama Kakak:</strong> Antonius Setiawan</p>
      <p><strong>Nama Adik:</strong> Christina Setiawan</p>
    </section>

    <section id="contact">
      <h2>Kontak Kami</h2>
      <form action="" method="GET">

        <label for="txtNama"><span>Nama:</span>
          <input type="text" id="txtNama" name="txtNama" placeholder="Masukkan nama" required autocomplete="name">
        </label>

        <label for="txtEmail"><span>Email:</span>
          <input type="email" id="txtEmail" name="txtEmail" placeholder="Masukkan email" required autocomplete="email">
        </label>

        <label for="txtPesan"><span>Pesan Anda:</span>
          <textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis pesan anda..." required></textarea>
          <small id="charCount">0/200 karakter</small>
        </label>


        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>
      </form>
    </section>
  </main>

  <footer>
    <p>&copy; 2025 Yohanes Setiawan Japriadi [0344300002]</p>
  </footer>

  <script src="script.js"></script>
</body>

>>>>>>> a132a9e8f4373bb594d498faf6a21418759f18e3
</html>