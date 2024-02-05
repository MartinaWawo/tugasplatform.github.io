<html>
<body>
    <h1>INFORMASI PEGAWAI</h1>
    <tr>
<td>NIP <?php echo $_POST["nip"]; ?></td>
<td> Nama <?php echo $_POST["nama"]; ?></td>
<td> Jenis Kelamin  <?php echo $_POST["jk"]; ?></td>
<td> Tanggal Lahir <?php echo $_POST["tanggal"].$_POST["bulan"].$_POST["tahun"]; ?></td>
<td>Hobbi  <?php echo $_POST["hobi"]; ?></td>
<td>Alamat  <?php echo $_POST["alamat"]; ?></td>
 

</tr>
<input type="submit" name="submit" value="OK" />
</body>
</html>