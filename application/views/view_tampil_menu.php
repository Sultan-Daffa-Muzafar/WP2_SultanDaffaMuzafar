<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Tampil Data Matakuliah</title>
        <style>
            img{
                width: 300px;
            }
        </style>
	</head>
	<body>
		<center>
			<table>
				<tr>
					<th colspan="3">Tampil Data Mata Kuliah</th>
				</tr>
				<tr>
					<td colspan="3">
						<hr />
					</td>
				</tr>
				<tr>
					<th>Kode Menu</th>
					<th>:</th>
					<td>
						<?= $kode; ?>
					</td>
				</tr>
				<tr>
					<td>Nama Menu</td>
					<td>:</td>
					<td>
						<?= $menu; ?>
					</td>
				</tr>
				<tr>
					<td>Harga</td>
					<td>:</td>
					<td>
						<?= $harga; ?>
					</td>
				</tr>
				<tr>
					<td>Gambar</td>
					<td>:</td>
					<td>
                    <img src="<?= base_url('');?>/assets/IMAGE/<?= $file ?>"  alt="">
					</td>
				</tr>
				<tr>
					<td colspan="3" align="center">
						<a
							href="<?= base_url('menu'); 
        ?>">Kembali</a>
					</td>
				</tr>
			</table>
		</center>
	</body>
</html>
