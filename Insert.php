<html>
<body>
<?php
include_once("db_online.php");
$insert=mysql_query("INSERT INTO tamu (id,nama,alamat,email,komentar)
		VALUES ( '1','sekolah tinggi elektronika dan 	komputer','jl. majapahit 605 semarang','info@stekom.ac.id','test.. ')");


if($insert)
{ 
echo"berhasil menyisipkan data pada tabel tamu";}
else
{echo"gagal penyisipan data";}
?>
</body>
</html>
