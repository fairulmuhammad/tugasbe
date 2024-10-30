<?php
//memulai session
session_start();

require"./config.php";
//mengambil value akses
$akses = @$_SESSION['akses'];
//cek akses
if ($akses != true){
    //jiika tidak memiliki akses lempar ke login
    header("location:./login.php");

}else{
        //jika punya akses, ambil value user dengan get
        $nim = @$_GET["nim"];
        //validasi untuk get user
    if(empty($nim)){
        //lempar ke dashboard ketika username kosong
        header("location:./dashboard1.php");
    }
    //proses penghapusan data
    $query = "DELETE FROM  testbe WHERE nim = '$nim'";
    //
    mysqli_query($sambung,$query);
    //setelah berhasil mengahpus lempar ke dashboard
    header("location:./dashboard1.php");


}

?>

<!-- <//
include("../config.php");

if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $query = mysqli_query($sambung,$query);
    if (mysqli_num_rows($query) == 0) {
        $query = mysqli_query($sambung,$query);
    }
    $query = mysqli_query($sambung,$query);
    if (mysqli_num_rows($query) == 0) {
        $query = mysqli_query($sambung,$query);
    }
}


?>

<
include("../config.php");

if (isset($_POST["edit"])){
    $nim = $_POST["nim"];

    $sql = "update dosen set nik_mhs="nim" where nik_mhs="nim";
    $query = mysqli_query($sambung,$sql);

    if($query){
        header("location:./dashboard1.php");
        
    }else {
        die "gagal";
    }
} else{
 die("akses dilarang");
}
?> -->
