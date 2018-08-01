<?php

  @session_start();

  if($_SESSION["GirisYapti"] == 1) {
    echo "GİRİŞ YAPMIŞ";
  } else {
    echo "HENÜZ GİRİŞ YAPMAMIŞ!";
  }

 ?>
<br><br><a href="index.php">Geri dön...</a>
