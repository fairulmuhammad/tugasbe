
// $username_aplikasi = "admin";
// $password_aplikasi = "admingile";

// $username_input = @$_POST["username"];
// $password_input =@$_POST["password"];

// #echo "username input :". $username_input;

// #echo "password input :". $password_input;

// if($username_input == $username_aplikasi and $password_input == $password_aplikasi)
// {
//     echo "anda berhasil masuk";
// }else {
//     echo '<script>alert("username atau password salah")</script>';
//     return;
// }
<?php
include "/xampp/htdocs/tugas-be/week5/testing/test2/config/config.php";
$nim = $_POST['nim'];
$password = md5($_POST['password']);

if (!empty($nim)&& !empty($password)){
    $query = mysqli_query($sambung,"select * from testbe where nim = '$nim' and password = '$password'");

    $result = mysqli_num_rows($query);

        if($result>0){
            // header("location:../4/auth/dashboard.php");
            // 
            // echo 'berhasil';
            session_start();
            $_SESSION['nim'] = $nim;

            $_SESSION["akses"] = true;
            header("location:../config/dashboard1.php");
            // echo 'berhasil';

        }else{
            header("location:../login.php?app=gagal");
            // echo "raiso cok";
        }
}else {
    header("location:../login.php?app=error");
}
?>