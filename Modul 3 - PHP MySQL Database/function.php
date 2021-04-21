<?php
$servername="localhost";
$database="departemen";
$username="root";
$password="";

$conn=mysqli_connect($servername,$username,$password,$database);
function show($query){
    global $conn;
    $result=mysqli_query($conn,$query);
    $rows=[];
    while($row=mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return$rows;
}
function insert($data){
    global $conn;
    $id_pegawai=$_POST["id_pegawai"];
    $nama=$_POST["nama"];
    $id_department=$_POST["id_department$id_department"];
    
    mysqli_query($conn,"INSERT INTO tb_pegawai VALUES('$id_pegawai','$nama','$id_department')");
    return mysqli_affected_rows($conn);
}
function delete($data){
    global $conn;
    $id_pegawai=$_GET["delete"];
    mysqli_query($conn,"DELETE FROM tb_pegawai WHERE id_pegawai=$id_pegawai");
    return mysqli_affected_rows($conn);
}
function update($data){
    global $conn;
    $id_pegawai=$_POST["id_pegawai"];
    $nama=$_POST["nama"];
    $id_department=$_POST["id_department $id_department"];
    mysqli_query($conn,"UPDATE tb_pegawai SET nama='$nama',
    id_department='$id_department'
    WHERE id_pegawai= $id_pegawai");
    return mysqli_affected_rows($conn);
}  
?>