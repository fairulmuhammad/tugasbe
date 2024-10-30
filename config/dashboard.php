<?php
#add file config
require "./config.php";
#start php session
session_start();
#take user status accses
$akses = @$_SESSION["akses"];

#check if user has an accses
if ($akses != true){
    #ketika aksesnya false maka dilempar ke login
    header("location:./login.php?error=Halaman Dashboard Harus Login");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="../style.css" />
    <title>Sistem Login Sederhana</title>
</head>
<body>
    <div style="display: flex; justify-content: space-between; align-items: center; padding: 10px;">
        <h1 style="margin: 0;">Dashboard</h1>
        <a href="proses_logout.php" style="text-decoration: none; color: red; ">log out</a>
    </div>
    <?php
        $sql = "select * from testbe";
        $query = mysqli_query($sambung,$sql)
    ?>

        <table border=1>
            <thead>
                <tr>
                    <th>nomor</th>
                    <th>nim</th>
                    <th>email</th>
                    <th>signupPassword</th>
                    <th>password</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $nomor = 1;
                    while($datauser = mysqli_fetch_array($query))
                    {
                        echo "<tr>";
                        echo "<td>". $nomor ."</td>";
                        echo "<td>". $datauser["nim"] . "</td>";
                        echo "<td>". $datauser["email"] . "</td>";
                        echo "<td>". $datauser["signupPassword"] . "</td>";
                        echo "<td>". $datauser["password"] . "</td>";
                        echo "</tr>";

                        $nomor++;
                    }
                ?>
            </tbody>
        </table>
</body>
</html>