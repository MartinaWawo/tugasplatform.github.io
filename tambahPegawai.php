<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="databasebaru";
$port="3306";
// koneksi ke dbms
$conn=mysqli_connect("localhost","root","","databasebaru");
//$conn = new mysqli($servername, $username, $password,$database,$port);

//cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])){
    //ambil data dari tiap elemen dalam form
    $id=$_POST["id"];
    $username=$_POST["username"];
    $password=$_POST["password"];
    $akses=$_POST["akses"];

    //query insert data
    $query="INSERT INTO admin
    VALUES
    ('$id','$username','$password','$akses')";
    mysqli_query($conn, $query);

}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Registrasi</title>
</head>
<body>
    <!--
     <form action="infoPegawai.php" method="POST"> 
-->
        <form action="daftarPegawai.php" METHOD="POST">
        <fieldset>
        <legend>FORM TAMBAH USER</legend>
        <p>
            <label>ID</label>
            <input type="text" name="id" placeholder="NIP..." /> 
            <!-- <input type ="text" name="nama" value=" tanda buka php echo $_GET["nama] : ?>"/> -->
        </p>
        <p>
            <label>USERNAME</label>
            <input type="text" name="username" placeholder="Nama..." />
        </p>
        <p>
            <label>PASSWORD</label>
            <input type="text" name="password" placeholder="Nama..." />
        </p>
        <p>
            <label>Akses</label>
            <option value="admin">Admin</option>
            <option value="peserta">Peserta</option>
            <option value="manager">Manager</option>
           
        </p>
        <p>
            <button type="submit" name="submit">Tambah Data</button>
        </p>
       
    
        
        
		
        
        
        </fieldset>
    </form>
</body>
</html>