<html>
<body>
<?php
include_once("db_online.php");
$update=mysql_query("update tamu set nama = 'STEKOM SEMARANG' where id = 1");

if($update)
{echo"berhasil mengupdate data pada tabel tamu";}
else
{echo"gagal mengupdate data";}
?>
</body>
</html>

