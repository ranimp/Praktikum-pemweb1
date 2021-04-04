<!DOCTYPE html>
<html>
  <body>
    <div class="judul" style="text-align: center;">
    <h2> Modul 1 - PHP </h2>
    <p>Rani Meliyana Putri</p >
    <p>11191062</p>
    </div>
  </body>
</html>
<?php
    $listnama= ["Hamsi", "Harmina", "Helmi", "Adi", "Rani"];
    function vokal($nama) {
        $a = substr_count($nama, "a");
        $i = substr_count($nama, "i");
        $u = substr_count($nama, "u");
        $e = substr_count($nama, "e");
        $o = substr_count($nama, "o");   
        
        $jumlah = ($a + $i + $u + $e + $o);

        return $jumlah;
    }
    function konsonan($nama) {
        $all = strlen($nama);
        $a = substr_count($nama, "a");
        $i = substr_count($nama, "i");
        $u = substr_count($nama, "u");
        $e = substr_count($nama, "e");
        $o = substr_count($nama, "o");   
        
        $jumlah = $all - ($a + $i + $u + $e + $o);

        return $jumlah;
    }
?>
<?php foreach ($listnama as $listnama) : ?>
    <?php 
    echo "<ul>";
    echo "<li> Nama : $listnama </li>";
    echo "<li> Jumlah kata : " .str_word_count($listnama) ."</li>";
    echo "<li> Jumlah huruf : " .strlen($listnama);
    echo "<li> Kebalikan : " .strrev($listnama);
    echo "<li> Jumlah huruf konsonan : " .konsonan($listnama);
    echo "<li> Jumlah huruf vokal : " .vokal($listnama); 
    echo "</ul>";
    ?>
<?php endforeach; ?>