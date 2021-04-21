<?php
require("function.php");
$data=show("SELECT * FROM tb_pegawai");
if(isset($_GET["delete"])){
    if(delete($_GET>0)){
        echo"<script>
        alert('data berhasil dihapus');
        document.location.href='index.php';
        </script>";
    }
    else{
        echo"<script>
        alert('data gagal dihapus');
        document.location.href='index.php';
        </script>";}
    }
?>
<!DOCTYPEhtml>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width,initial-scale=1.0">
    <title>Modul3</title>
</head>
<body>
<table border="1">
    <tr>
        <td>id_pegawai</td>
        <td>nama</td>
        <td>id_department</td>
        <td>aksi</td>
    </tr>
    <?php foreach($data as $d){
    ?>
    <tr>
        <td><?php echo $d["id_pegawai"];?></td>
        <td><?php echo $d["nama"];?></td>
        <td><?php echo $d["id_department"];?></td>
        <td>
            <form action=""method="GET">
                <button type="submit"name="delete"value=<?php echo $d["id_pegawai"];?>>Hapus</button>
            </form>
            <form action="update.php"method="GET">
                <button type="submit"name="update"value=<?php echo $d["id_pegawai"];?>>Ubah</button>
            </form>
        </td>
    </tr>
    <?php
    }?>
</table>
<form action="insert.php">
    <button>Tambahkan Data</button>
</form>
</body>
</html>  
