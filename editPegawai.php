<?php
$var_tgl="";
for($i=1; $i<32;$i++){
    $var_tgl = $var_tgl."<option value='".$i."'>".$i."</option>";
}
$arrayBulan [0] = "Januari";
$arrayBulan [1] = "Februari";
$arrayBulan [2] = "Maret";
$arrayBulan [3] = "April";
$arrayBulan [4] = "Mei";
$arrayBulan [5] = "Juni";
$arrayBulan [6] = "Juli";
$arrayBulan [7] = "Agustus";
$arrayBulan [8] = "September";
$arrayBulan [9] = "Oktober";
$arrayBulan [10] = "November";
$arrayBulan [11] = "Desember";

$var_bulan="";
for($b =0; $b<12;$b++){
    $var_bulan = $var_bulan."<option value='".$b."'>".$arrayBulan[$b]."</option>";
}
$var_tahun="";
for($t=1980; $t<2011;$t++){
    $var_tahun = $var_tahun."<option value='".$t."'>".$t."</option>";
}


?>


<!DOCTYPE html>
<html>
<head>
    <title>Registrasi</title>
</head>
<body>
    <form action="infoPegawai.php" method="POST">
        <fieldset>
        <legend>FORM EDIT PEGAWAI</legend>
        <p>
            <label>NIP</label>
            <input type="text" name="nip" placeholder="NIP..." /> 
            <!-- <input type ="text" name="nama" value=" tanda buka php echo $_GET["nama] : ?>"/> -->
        </p>
        <p>
            <label>Nama</label>
            <input type="text" name="nama" placeholder="Nama..." />
        </p>
        
        <p>
            <label>Jenis kelamin:</label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" /> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" /> Perempuan</label>
        </p>
        </p>
			<label >Tanggal/Bulan/Tahun :</label>
            <select name="tanggal" >
            <?php echo $var_tgl; ?>
			</select>
			<select name="bulan" >
            <?php echo $var_bulan; ?>
			</select>
			<select name="tahun" >
            <?php echo $var_tahun; ?>
			</select>
		<p>
        <p>
            <label>Hobbi</label>
            <label><input type="checkbox" name="hobi" value="olahraga">Olahraga</label>
            <label><input type="checkbox" name="hobi" value="jalan-jalan">Jalan-jalan</label>
            <label><input type="checkbox" name="hobi" value="baca">Baca</label> <br>
            <label><input type="checkbox" name="hobi" value="seni musik">Seni Musik</label>
            <label><input type="checkbox" name="hobi" value="seni gambar">Seni Gambar</label>
            <label><input type="checkbox" name="hobi" value="lainnya">Lainnya</label>
        </p>
       
        <p>
            <label>Alamat</label>
            <textarea name="alamat"></textarea>
        </p>
        
        <p>
            <input type="submit" name="submit" value="Edit" />
            <input type="submit" name="submit" value="Batal" />
        </p>
        
        
		
        
        
        </fieldset>
    </form>
</body>
</html>