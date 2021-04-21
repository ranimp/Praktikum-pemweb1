<?php
require("function.php");
$id_pegawai=$_GET["update"];
$data=show("SELECT * FROM tb_pegawai WHERE id_pegawai =$id_pegawai");
if(isset($_POST["ubah"])){
    if(update($_GET>0)){
        echo "<script>
        alert('data berhasil diupdate');
        document.location.href='index.php';
        </script>";
    }
    else{
        echo"<script>
        alert('data gagal diupdate');
        document.location.href='index.php';</script>";
    }
}?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport"content="width=device-width,initial-scale=1.0">
<title>Update</title>
</head>
<body>
<a href="index.php">home</a>
<form action=""method="POST">
    <?php 
    foreach($data as $d){
    ?>
        <ul>
            <li>
                <label for="id_pegawai">id_pegawai</label>
                <input type="text"name="id_pegawai"id="id_pegawai"value=<?php echo $d["id_pegawai"];?>readonly>
            </li>
            <li>
                <label for="nama">nama</label>
                <input type="text"name="nama"id="nama"value=<?php echo $d["nama"];?>>
            </li>
            <li>
                <label for="id_department">id_department</label>
                <input type="text"name="id_department"id="id_department"value=<?php echo $d["id_department"];?>>
            </li>
            <li>
                <button type="submit"name="ubah">update</button>
            </li>
        </ul>
        <?php
    }?>
</form>
</body>
</html>