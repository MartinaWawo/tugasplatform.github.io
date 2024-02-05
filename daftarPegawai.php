
<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Pegawai</title>
        <style>
            tr:nth-child(even){
                background-color: burlywood;
            }
        </style>
</head>
<body>
        <form action="tambahPegawai.php" method="POST">
        <p>
            <input type="submit" name="submit" value="Tambah" />
        </p>
    <table border=1>
        <tr>
            <td>NO</td>
            <td>ID</td>
            
            <td>USERNAME</td>
             <td>PASSWORD</td>
             <td>AKSES</td>
        </tr>
        
        <?php
        $arrPegawai[0][0] = "1";
        $arrPegawai[0][1] = "01";
        $arrPegawai[0][2] = "Imelda Putri";
        $arrPegawai[0][3] = "putriimel";
        $arrPegawai[0][4] = "Admin";
        $arrPegawai[1][0] = "2";
        $arrPegawai[1][1] = "02";
        $arrPegawai[1][2] = "Pratama Andika";
        $arrPegawai[1][3] = "andikapra";
        $arrPegawai[1][4] = "Peserta";
        $arrPegawai[2][0] = "3";
        $arrPegawai[2][1] = "03";
        $arrPegawai[2][2] = "Sheila Putri";
        $arrPegawai[2][3] = "putrishe";
        $arrPegawai[2][4] = "Pelanggan";
        $arrPegawai[3][0] = "4";
        $arrPegawai[3][1] = "04";
        $arrPegawai[3][2] = "Viktor Setia";
        $arrPegawai[3][3] = "setia";
        $arrPegawai[3][4] = "pelanggan";

        ?>
            
       
           
           
        
        
        <?php
        for($i=0; $i<4; $i++){
            
            
        ?>

        <tr>
            <td><?php echo $arrPegawai[$i][0]; ?></td>
            <td><?php echo $arrPegawai[$i][1]; ?></td>
            <td><?php echo $arrPegawai[$i][2]; ?></td>
            <td><?php echo $arrPegawai[$i][3]; ?></td>
            
            
              
            <td><a href="editPegawai.php?blnlahir=Mei&nama=
            <?php echo $arrPegawai[$i][1]; ?>"></a>
            <a href="editPegawai.php?blnlahir=Mei&nama=


            <?php echo $arrPegawai[$i][1]; ?>">
            <img src="image/edit.png" width="35"></a>
            <a href="editPegawai.php?blnlahir=Mei&nama=
            <?php echo $arrPegawai[$i][1]; ?>">
            <img src="image/view.png" width="35"></a>
            <a href="infoPegawai.php?blnlahir=Mei&nama=
            <?php echo $arrPegawai[$i][1]; ?>">
            <img src="image/Hapus.png" width="35"></a>
            
            </td>
            
            
        </tr>
        <?php
        }
        ?>


    </table>
    </form>
</body>
</html>