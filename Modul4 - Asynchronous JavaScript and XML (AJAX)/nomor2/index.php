<?php 
  include('connect.php'); 
  $qpemilih = mysqli_query($koneksi, "SELECT id AS 'id',Nama_Pemilih AS 'Nama_Pemilih' FROM suara;"); 
  $rpemilih = mysqli_fetch_all($qpemilih, MYSQLI_ASSOC); 
  $qsuara = mysqli_query($koneksi, "SELECT Pilihan AS 'Pilihan',COUNT(Pilihan) AS 'Jumlah' FROM suara GROUP BY Pilihan;"); 
  $rsuara = mysqli_fetch_all($qsuara, MYSQLI_ASSOC); 
?> 
<!DOCTYPE html> 
<html lang="en"> 
  <head> 
    <title>Pemilu</title> 
  </head> 
  <body> 
    <h1>Pemilihan Presiden Mahasiswa</h1> 
    <form action="insertSuara.php" method="POST"> 
      <label>id Pemilih</label><br/> 
      <input type="text" name="id"/> 
      <br/><br/> 
      <label>Nama Pemilih</label><br/> 
      <input type="text" name="Nama_Pemilih"/> 
      <br/><br/> 
      <label>Pilihan</label><br></br> 
      <label>1</label> 
      <button type="submit" name="Pilihan" value="Paslon1">Paslon 1</button> 
      <br/><br/> 
      <label>2</label> 
      <button type="submit" name="Pilihan" value="Paslon2">Paslon 2</button> 
      <br/><br/> 
      <label>3</label> 
      <button type="submit" name="Pilihan" value="Paslon3">Paslon 3</button> 
      <br/><br/> 
      <label>4</label> 
      <button type="submit" name="Pilihan" value="Paslon4">Paslon 4</button> 
      <br/><br/> 
      <label>5</label> 
      <button type="submit" name="Pilihan" value="Paslon5">Paslon 5</button> 
      <br/><br/> 
    </form> 
    <br/><br/> 
    <b>HASIL</b> 
    <br><br> 
    <table border="1"> 
      <thead> 
        <th>Nama</th> 
        <th>Jumlah</th> 
      </thead> 
      <tbody> 
      <?php foreach ($rsuara as $vsuara) { ?> 
      <tr> 
      <td><?= $vsuara['Pilihan'] ?></td> 
      <td><?= $vsuara['Jumlah']?></td> 
      </tr> 
      <?php } ?> 
      </tbody> 
    </table> 
      <br></br> 
      <b>NAMA YANG SUDAH MEMILIH</b> 
      <br><br> 
    <table border="1"> 
      <thead> 
        <th>id Pemilih</th> 
        <th>Nama Pemilih</th> 
      </thead> 
      <tbody> 
        <?php foreach ($rpemilih as $vpemilih) { ?> 
        <tr> 
        <td><?= $vpemilih['id'] ?></td> 
        <td><?= $vpemilih['Nama_Pemilih']?></td> 
        </tr> 
        <?php } ?> 
      </tbody> 
    </table> 
    <br></br> 
  </body> 
</html>
