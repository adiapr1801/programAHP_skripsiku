<?php
include("includes/config.php");
$config = new Config();
$db = $config->getConnection();
?>
    <div class="container">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="containerku">
          <ul class="containerku">
              <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
                  <li role="presentation"><a href="data-alternatif.php">Alternatif</a></li>
                  <li role="presentation"><a href="data-kriteria.php">Kriteria</a></li>
                  <li role="presentation"><a href="nilai.php">Skala Dasar AHP</a></li>
                  <li role="presentation"><a href="nilai-awal.php">Kosistensi</a></li>
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Perbandingan <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                          <li role="presentation"><a href="analisa-kriteria.php">Kriteria</a></li>
                          <li role="presentation"><a href="analisa-alternatif.php">Alternatif</a></li>
                      </ul>
                  </li>
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Laporan <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li role="presentation"><a href="hasil-akhir.php">Hasil Akhir</a></li>
                        <li role="presentation"><a href="ranking.php">Usulan</a></li>
                      </ul>
                  </li>
          </ul>
<!-- /.navbar-collapse -->
      </div><!-- /.container -->
  </nav>
