<?php
#add file config
require "./config.php";
#start php session
session_start();
#take user status accses
$akses = @$_SESSION["akses"];

#check if user has an accses
if ($akses != true) {
    #ketika aksesnya false maka dilempar ke login
    header("location:../login.php?error=Halaman Dashboard Harus Login");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="testDashboard.css"
        </head>

<body>
    <div class="container">
        <div
            style="
            background-color: #f6c6fa;
            height: 10vh;
            display: flex;
            justify-content: space-between;
            padding: 0 20px;
            color: aliceblue;
            text-align: center;
        ">
            <img src="/tugas-be/tugas/test1/assets/logo-amikom.png" style="width: 10cm" />
            <div
                style="
                background-color: red;
                width: 107px;
                height: 35px;
                margin-top: 20px;
                border-radius: 5px;
                justify-content: center;
                display: flex;
            ">
                <a
                    style="color: white; text-decoration: none; margin-top: 7px"
                    href="proses_logout.php">
                    log out
                </a>
            </div>
        </div>
        <div style="display: flex">
            <div
                style="
                background-color: #7146a3;
                height: 90vh;
                width: 15vw;
                justify-content: flex-start;
                align-items: center;
                display: flex;
                flex-direction: column;
            ">
                <img
                    src="/tugas-be/tugas/test1/assets/WhatsApp Image 2024-06-22 at 22.02.09_02b86005.jpg"
                    alt="avatar"
                    style="
                    border-radius: 50%;
                    width: 100px;
                    height: 100px;
                    margin-top: 20px;
                    margin-bottom: 20px;
                    " />

                <a class="btn5" href="/dashboardMain/dashboard_main.html">Dashboard</a>
                <a class="btn5" href="/profile/profile.html">Profile</a>
                <button class="dropdown-btn">
                    Input Data
                    <i
                        class="fa fa-caret-down"
                        style="float: right; padding-right: 8px"></i>
                </button>
                <div
                    class="dropdown-container"
                    style="
                    display: none;
                    background-color: #fbd0fc;
                    padding-left: 2px;
                    width: 15vw;
            ">
                    <a class="btn-child" href="/inputData/kehadiran/kehadiran.html">Kehadiran</a>
                    <a class="btn-child" href="/inputData/tugas/tugas.html">Tugas</a>
                    <a class="btn-child" href="/inputData/responsi/responsi.html">Responsi</a>
                    <a class="btn-child" href="/inputData/UTS/uts.html">UTS</a>
                    <a class="btn-child" href="/inputData/UAS/uas.html">UAS</a>
                </div>
                <button
                    class="dropdown-btn"
                    style="
                    padding: 6px 8px 6px 16px;
                    text-decoration: none;
                    font-size: 20px;
                    color: #ffffff;
                    display: block;
                    border: none;
                    background: none;
                    width: 100%;
                    text-align: left;
                    cursor: pointer;
                    outline: none;
            ">
                    Rekapitulasi
                    <i
                        class="fa fa-caret-down"
                        style="float: right; padding-right: 8px"></i>
                </button>
                <div
                    class="dropdown-container"
                    style="
                    display: none;
                    background-color: #fbd0fc;
                    padding-left: 2px;
                    width: 15vw;
            ">
                    <a
                        class="btn-child"
                        href="/rekapitulasiData/kehadiran/kehadiran.html">Kehadiran</a>
                    <a class="btn-child" href="/rekapitulasiData/tugas/tugas.html">Tugas</a>
                    <a class="btn-child" href="/rekapitulasiData/responsi/responsi.html">Responsi</a>
                    <a class="btn-child" href="/rekapitulasiData/UTS/uts.html">UTS</a>
                    <a class="btn-child" href="/rekapitulasiData/UAS/uas.html">UAS</a>
                </div>
            </div>
            <div
                style="
            background-color: white;
            height: 90vh;
            width: 85vw;
            display: flex;
            /* justify-content: center; */
            flex-direction: column;
            ">
                <div style="margin-top: 20px; margin-left: 50px">
                    <p style="font-size: 40px">Dashboard</p>
                </div>
                <!-- QR and Active Status -->
                <div
                    style="
                    background-color: rgb(255, 255, 255);
                    height: 20%;
                    width: 90%;
                    margin-top: 50px;
                    margin-left: 50px;
                    display: flex;
                    flex-direction: row;
                    ">
                    <div style="width: 60%; margin-left: 10px">
                        <img
                            src="/tugas-be/tugas/test1/assets/Qr-Code-Background-PNG.png"
                            alt="avatar"
                            style="width: 100px; height: 100px; margin-top: 20px" />
                    </div>
                    <div
                        style="
                        width: 40%;
                        margin-top: 20px;
                        background-color: #b4ceaf;
                        border-radius: 5px;
                        ">
                        <p
                            style="
                            margin-bottom: 5px;
                            margin-top: 5px;
                            font-weight: bold;
                            font-size: large;
                            margin-left: 15px;
                        ">
                            Status
                        </p>
                        <p style="margin-bottom: 0,5px; color: green; margin-left: 15px">
                            &#10003; Active
                        </p>
                        <!-- php
                        if (isset($_SESSION['nim'])) {
                        $nim = $_SESSION['nim'];
                        echo $nim;
                        }
                        ?> -->
                        <!-- <p style="margin-bottom: 5px; color: #616161; margin-left: 15px">
                            Muhammad Fairul
                        </p> -->
                        
                        <?php
                        // Pastikan session sudah dimulai
                        

                        // Memeriksa apakah session 'nim' ada
                        if (isset($_SESSION['nim'])) {
                            $nim_pengguna = $_SESSION['nim'];
                            echo "<p style='margin-bottom: 5px; color: #616161; margin-left: 15px'>$nim_pengguna</p>";
                        } else {
                            echo "<p style='margin-bottom: 5px; color: #616161; margin-left: 15px'>NIM tidak ditemukan</p>";
                        }
                        ?>

                        <!-- <p style="margin-bottom: 5px; color: #616161; margin-left: 15px">
                            Dosen
                        </p> -->
                    </div>
                </div>
                    <div style="
                        background-color: rgb(255, 255, 255);
                        height: 10%;
                        width: 90%;
                        margin-top: 20px;
                        margin-left: 50px;"
                        >
                        
                        <h2>Tambah Data</h2>
                        <a href="./proses_tambahData.php" class="tambah-btn">Tambah Data</a>
                    </div>
                <!-- personal information section-->
                <!-- margin-left: 50px;
                display: flex;
                flex-direction: row; -->
                <?php
                $sql = "select * from testbe";
                $query = mysqli_query($sambung, $sql)
                ?>
                <div
                    style="
                    background-color: rgb(255, 255, 255);
                    height: 30%;
                    width: 90%;
                    margin-top: 20px;
                    margin-left: 50px;
                    ">
                    <table style="border-collapse: collapse; width: 100%">
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Hashed Password</th>
                            <th>Action</th>
                        </tr>
                        <!-- <tr>
                            <td>1</td>
                            <td style="text-align: center">Senin, 10:00 - 11:00</td>
                            <td style="text-align: center">Pemrograman Web</td>
                            <td style="text-align: center">05.01.03</td>
                            <td style="text-align: center; align-items: center">
                                <img src="/tugas-be/tugas/test1/assets/three-dots-icon-size_16.png" />
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td style="text-align: center">Selasa, 10:00 - 11:00</td>
                            <td style="text-align: center">Pemrograman Web</td>
                            <td style="text-align: center">01.04.03</td>
                            <td style="text-align: center; align-items: center">
                                <img src="/tugas-be/tugas/test1/assets/three-dots-icon-size_16.png" />
                            </td>
                        </tr> -->
                        <?php
                        $nomor = 1;
                        while ($datauser = mysqli_fetch_array($query)) {
                            echo "<tr>";
                            echo "<td style='text-align: center; padding: 8px;'>" . $nomor . "</td>";
                            echo "<td style='text-align: center; padding: 8px;'>" . $datauser['nim'] . "</td>";
                            echo "<td style='text-align: center; padding: 8px;'>" . $datauser['email'] . "</td>";
                            echo "<td style='text-align: center; padding: 8px;'>" . $datauser['signupPassword'] . "</td>";
                            echo "<td style='text-align: center; padding: 8px;'>" . $datauser['password'] . "</td>";
                            echo "<td><a href='./update_form.php?nim=$datauser[nim]'>Update</a></td>";
                            echo "<td>";
                            echo "<a href ='./proses_delete.php?nim=$datauser[nim]'onclick=\"return confirm('Apakah Anda yakin ingin menghapus?')\">Delete</a>";
                            echo "</td>";
                            echo "</tr>";

                            $nomor++;
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- <script>
        // JavaScript remains unchanged
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }
    </script> -->
</body>

</html>