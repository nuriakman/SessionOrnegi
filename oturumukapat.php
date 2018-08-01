<?php

  @session_start();

  $_SESSION["GirisYapti"] = 0;

  // Alternatif yazılımı:
  unset( $_SESSION["GirisYapti"] );

  echo "Oturum kapatıldı...";

?>

<br><br><a href="index.php">Geri dön...</a>
