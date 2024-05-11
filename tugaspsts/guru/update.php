<?php
if (isset($_POST['update'])){
    include_once('config.php');
    $id = $_POST['id'];
    $nip = $_POST['nip'];
    $name = $_POST['name'];
    $pob = $_POST['pob'];
    $dob = $_POST['dob'];
    $foto = $_POST['foto'];
    $phone = $_POST['phone'];
    $subjek_id = $_POST['subjek_id'];

    $sql = "UPDATE guru SET nip ='$nip', name ='$name', pob ='$pob', dob ='$dob', foto ='$foto', phone ='$phone', subjek_id ='$subjek_id' WHERE id= '$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: index.php?m=guru&s=view');
    } else {
        echo '<script language="JavaScript">';
        echo 'alert("Data Gagal Diupdate.")';
        echo 'window.location.href = "index.php?m=guru&s=view";';
        echo '</script>';
    }
}
?>

