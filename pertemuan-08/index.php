<?php
session_start();

$sesnama = "";
if (isset($_SESSION["sesnama"])):
  $sesnama = $_SESSION["sesnama"];
endif;

$sesemail = "";
if (isset($_SESSION["sesemail"])):
  $sesemail = $_SESSION["sesemail"];
endif;

$sespesan = "";
if (isset($_SESSION["sespesan"])):
  $sespesan = $_SESSION["sespesan"];
endif;
?>

<!DOCTYPE html>
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



  <section id="form_profil">
    <h2>pendafataran profil pengunjung</h2>
    <form action="form_profil_proses.php" method="POST">
    <label for="nim">
      <span>NIM:</span>
      <input type="text" id="nim" name="nim" placeholder="isi NIM" required>
</label>

<label for="nama lengkap">
  <span>nama lengkap:</span>
  <input type ="text" id="nim" name ="nama lengkap" placeholder="isi nama lengkap" required>
</label>

<label for ="tempat lahir">
  <span>tempat lahir :</span>
  <input type="text" id="tempat lahir" name="tempat lahir" placeholder="isi tempat lahir" required>
</label>

<label for ="tanggal lahir">
  <span>tanggal lahir :</span>
  <input type="text" id="tanggal lahir" name="tanggal lahir" placeholder="isi tanggal lahir" required>
</label>

<label for ="hobi">
  <span>hobi :</span>
  <input type="text" id="hobi" name="hobi" placeholder="isi hobi" required>
</label>

<label for ="pasangan">
  <span>pasangan :</span>
  <input type="text" id="pasangan" name="pasangan" placeholder="isi pasangan" required>
</label>

<label for ="pekerjaan">
  <span>pekerjaan :</span>
  <input type="text" id="pekerjaan" name="pekerjaan" placeholder="isi pekerjaan" required>
</label>

<label for ="nama orang tua">
  <span>nama orang tua :</span>
  <input type="text" id="nama orang tua" name="nama orang tua" placeholder="isi nama orang tua" required>
</label>

<label for ="nama kakak">
  <span>nama kakak :</span>
  <input type="text" id="nama kakak" name="nama kakak" placeholder="isi nama kakak" required>
</label>

<label for ="nama adik">
  <span>nama adik :</span>
  <input type="text" id="nama adik" name="nama adik" placeholder="isi nama adik" required>
</label>

    <button type="submit">kirim</button>
    <button type="reset">batal</button>
    </form>
  </section>









    <section id="about">
      <?php
      $nim = 2511500010;
      $NIM = '0344300002';
      $nama = "Say'yid Abdullah";
      $Nama = 'Al\'kautar Benyamin';
      $tempat = "Jebus";
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
      <p><strong>Tempat Lahir:</strong> <?php echo $tempat; ?></p>
      <p><strong>Tanggal Lahir:</strong> 03 april 2007</p>
      <p><strong>Hobi:</strong> bermain game dan bermain raket &#127926;</p>
      <p><strong>Pasangan:</strong> Belum ada &hearts;</p>
      <p><strong>Pekerjaan:</strong> mahasiswa &copy; 2025</p>
      <p><strong>Nama Orang Tua:</strong> denymanse dan aminah</p>
      <p><strong>Nama Kakak:</strong> tidak ada </p>
      <p><strong>Nama Adik:</strong> <?php echo $sespesan ?></p>
    </section>

    <section id="contact">
      <h2>Kontak Kami</h2>
      <form action="proses.php" method="POST">

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

      <?php if (!empty($sesnama)): ?>
        <br><hr>
        <h2>Yang menghubungi kami</h2>
        <p><strong>Nama :</strong> <?php echo $sesnama ?></p>
        <p><strong>Email :</strong> <?php echo $sesemail ?></p>
        <p><strong>Pesan :</strong> <?php echo $sespesan ?></p>
      <?php endif; ?>



    </section>
  </main>

  <footer>
    <p>&copy; 2025 Yassar manse [2511500013]</p>
  </footer>

  <script src="script.js"></script>
</body>

</html>