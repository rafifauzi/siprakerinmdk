<?php
include 'includes/koneksi.php';
$query="SELECT nama_siswa, kelas, username, pass FROM tb_siswa JOIN tb_user ON tb_siswa.nis=tb_user.username ORDER BY kelas";
$result=mysql_query($query) or die(mysql_error());
$query1="SELECT nama_guru, username, pass, aktif FROM tb_guru JOIN tb_user ON tb_guru.kode_guru=tb_user.username ORDER BY nama_guru";
$result1=mysql_query($query1) or die(mysql_error());
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3 align="center">Akun Siswa</h3>
	<div style="height: 300px; overflow-x: scroll; margin-top: 20px;">
	<table border="1" width="500" align="center" style="border-collapse: collapse;">
		<tr align="center">
			<td>nama</td>
			<td>kelas</td>
			<td>username</td>
			<td>password</td>
		</tr>
		<?php
			while ($h=mysql_fetch_array($result)) { ?>
			<tr align="center">				
				<td><?php echo $h['nama_siswa'];?></td>
				<td><?php echo $h['kelas'];?></td>
				<td><?php echo $h['username'];?></td>
				<td><?php echo $h['pass'];?></td>
			</tr>
			<?php
			}
		?>
	</table>
	</div>
	<h3 align="center">Akun Guru</h3>
	<div style="height: 200px; overflow-x: scroll; margin-top: 20px;">
	<table border="1" width="500" align="center" style="border-collapse: collapse;">
		<tr align="center">
			<td>nama</td>
			<td>username</td>
			<td>password</td>
			<td>status</td>
		</tr>
		<?php
			while ($h=mysql_fetch_array($result1)) { 
				if ($h['aktif']=='1') {
					$status='Aktif';
				}else{
					$status='Tidak Aktif';
				}
			?>
			<tr align="center">				
				<td><?php echo $h['nama_guru'];?></td>
				<td><?php echo $h['username'];?></td>
				<td><?php echo $h['pass'];?></td>
				<td><?php echo $status;?></td>
			</tr>
			<?php
			}
		?>
	</table>
	</div>
</body>
</html>