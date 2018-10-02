<?php
    session_start();

    if(isset($_POST['nim'])){
        $nim =$_POST['nim'];
        $nama =$_POST['nama'];
        $jk =$_POST['jk'];
        $fakultas =$_POST['fakultas'];
        $prodi =$_POST['prodi'];
        $email =$_POST['email'];
        $hobi =$_POST['hobby'];
//===========================================
    $_SESSION['nim'] = $_POST['nim'];
    $_SESSION['nama'] = $_POST['nama'];
    $_SESSION['jk'] = $_POST['jk'];
    $_SESSION['fakultas'] = $_POST['fakultas'];
    $_SESSION['prodi'] = $_POST['prodi'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['hobby'] = $_POST['hobby'];
//============================================
    $foto = $_FILES['file']['name'];
    $tmp_foto = $_FILES['file']['tmp_name'];
    $dir = 'foto/';
    $target = $dir.$foto;

        $_SESSION['file'] = $target;
    if(!move_uploaded_file($tmp_foto, $target)){
    die("gagal upload");
    }
    header("location:view.php");
}
?>
