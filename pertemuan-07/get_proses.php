<?php
  session_start();
 $_SESSION{"nama"} = $_get{"txtNama"};
 $_SESSION{"email"} =  $_get{"txtEmail"};
 $_SESSION{"pesan"} =  $_get{"txtPesan"};
 header(header: "Location: get.php");
?>