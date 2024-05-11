<<?php
if (isset($_POST['update'])){
    include_once('config.php');
    $id = $_POST['id'];
    $nip = $_POST['nip'];
    $name = $_POST['name'];
    $pob = $_POST['pob'];
    $dob = $_POST['dob'];
    $foto = $_POST['foto'];
    $phone = $_POST['phone'];

    $sql = "UPDATE guru SET nip='$nip', name='$name', pob='$pob', dob='$dob', foto='$foto', phone='$phone' WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header ('location: index.php?m=guru&s=view');
    } else {
        include "index.php?m=guru&s=view";
        echo '<script language="JavaScript">';
        echo 'alert("Data Gagal Diupdate.")';
        echo '</script>';    
    }
}
?>

