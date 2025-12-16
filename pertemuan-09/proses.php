<?php
session_start();

// Check which form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // --- Handling Biodata Form ---
    // We check if one of the unique fields of biodata exists
    if (isset($_POST["txtNim"])) {
        // Store all biodata fields in an Associative Array
        $biodata = [
            "nim" => $_POST["txtNim"] ?? "",
            "nama" => $_POST["txtNmLengkap"] ?? "",
            "tempat_lahir" => $_POST["txtT4Lhr"] ?? "",
            "tanggal_lahir" => $_POST["txtTglLhr"] ?? "",
            "hobi" => $_POST["txtHobi"] ?? "",
            "pasangan" => $_POST["txtPasangan"] ?? "",
            "pekerjaan" => $_POST["txtKerja"] ?? "",
            "ayah" => $_POST["txtNmOrtu"] ?? "",
            "kakak" => $_POST["txtNmKakak"] ?? "",
            "adik" => $_POST["txtNmAdik"] ?? ""
        ];

        // Save the entire array into Session
        $_SESSION["biodata"] = $biodata;
    }

    // --- Handling Contact Form ---
    if (isset($_POST["txtPesan"])) {
        $contact = [
            "nama" => $_POST["txtNama"] ?? "",
            "email" => $_POST["txtEmail"] ?? "",
            "pesan" => $_POST["txtPesan"] ?? ""
        ];
        
        $_SESSION["contact"] = $contact;
    }
}

// Redirect back to index
header("location: index.php");
exit();
?>