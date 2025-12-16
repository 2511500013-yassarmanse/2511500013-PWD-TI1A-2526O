<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "functions.php";

// Initialize variables using helper function from Session Array
$biodata = $_SESSION["biodata"] ?? [];
$contact = $_SESSION["contact"] ?? [];

// Extract biodata for form values (keeping them empty if not set)
$nim = getValue($biodata, "nim");
$nama = getValue($biodata, "nama");
$tempat_lahir = getValue($biodata, "tempat_lahir");
$tanggal_lahir = getValue($biodata, "tanggal_lahir");
$hobi = getValue($biodata, "hobi");
$pasangan = getValue($biodata, "pasangan");
$pekerjaan = getValue($biodata, "pekerjaan");
$ayah = getValue($biodata, "ayah");
$kakak = getValue($biodata, "kakak");
$adik = getValue($biodata, "adik");

// Extract contact for display
$contact_nama = getValue($contact, "nama");
$contact_email = getValue($contact, "email");
$contact_pesan = getValue($contact, "pesan");
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

    <section id="biodata">
      <h2>Biodata Sederhana Mahasiswa</h2>
      <form action="proses.php" method="POST">

        <label for="txtNim"><span>NIM:</span>
          <input type="text" id="txtNim" name="txtNim" placeholder="Masukkan NIM" value="<?= $nim ?>" required>
        </label>

        <label for="txtNmLengkap"><span>Nama Lengkap:</span>
          <input type="text" id="txtNmLengkap" name="txtNmLengkap" placeholder="Masukkan Nama Lengkap" value="<?= $nama ?>" required>
        </label>

        <label for="txtT4Lhr"><span>Tempat Lahir:</span>
          <input type="text" id="txtT4Lhr" name="txtT4Lhr" placeholder="Masukkan Tempat Lahir" value="<?= $tempat_lahir ?>" required>
        </label>

        <label for="txtTglLhr"><span>Tanggal Lahir:</span>
          <input type="text" id="txtTglLhr" name="txtTglLhr" placeholder="Masukkan Tanggal Lahir" value="<?= $tanggal_lahir ?>" required>
        </label>

        <label for="txtHobi"><span>Hobi:</span>
          <input type="text" id="txtHobi" name="txtHobi" placeholder="Masukkan Hobi" value="<?= $hobi ?>" required>
        </label>

        <label for="txtPasangan"><span>Pasangan:</span>
          <input type="text" id="txtPasangan" name="txtPasangan" placeholder="Masukkan Pasangan" value="<?= $pasangan ?>" required>
        </label>

        <label for="txtKerja"><span>Pekerjaan:</span>
          <input type="text" id="txtKerja" name="txtKerja" placeholder="Masukkan Pekerjaan" value="<?= $pekerjaan ?>" required>
        </label>

        <label for="txtNmOrtu"><span>Nama Orang Tua:</span>
          <input type="text" id="txtNmOrtu" name="txtNmOrtu" placeholder="Masukkan Nama Orang Tua" value="<?= $ayah ?>" required>
        </label>

        <label for="txtNmKakak"><span>Nama Kakak:</span>
          <input type="text" id="txtNmKakak" name="txtNmKakak" placeholder="Masukkan Nama Kakak" value="<?= $kakak ?>" required>
        </label>

         <label for="txtNmAdik"><span>Nama Adik:</span>
          <input type="text" id="txtNmAdik" name="txtNmAdik" placeholder="Masukkan Nama Adik" value="<?= $adik ?>" required>
        </label>

        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>
      </form>

    </section>

    <section id="about">
      <h2>Tentang Saya</h2>
      <?php
      // Use helper function defined in functions.php
      echo renderBiodataRow("NIM", $nim);
      echo renderBiodataRow("Nama Lengkap", $nama, "&#128526;");
      echo renderBiodataRow("Tempat Lahir", $tempat_lahir);
      echo renderBiodataRow("Tanggal Lahir", $tanggal_lahir);
      echo renderBiodataRow("Hobi", $hobi, "&#127926;");
      echo renderBiodataRow("Pasangan", $pasangan, "&hearts;");
      echo renderBiodataRow("Pekerjaan", $pekerjaan, "&copy; 2025");
      echo renderBiodataRow("Nama Orang Tua", $ayah);
      echo renderBiodataRow("Nama Kakak", $kakak);
      echo renderBiodataRow("Nama Adik", $adik);
      ?>
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

      <?php if (!empty($contact_nama)): ?>
        <br><hr>
        <h2>Yang menghubungi kami</h2>
        <p><strong>Nama :</strong> <?= $contact_nama ?></p>
        <p><strong>Email :</strong> <?= $contact_email ?></p>
        <p><strong>Pesan :</strong> <?= $contact_pesan ?></p>
      <?php endif; ?>

    </section>
  </main>

  <footer>
    <p>&copy; 2025 Yohanes Setiawan Japriadi [0344300002]</p>
  </footer>

  <script src="script.js"></script>
</body>

</html>
