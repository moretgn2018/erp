<html>
<head>
	<style>
	.gg {
    border:1px solid;
    }
	</style>
	<title><?= $title[0]['aplikasi'].' '.$title[0]['title_page'].' - '.$title[0]['title_page2'] ?></title>
</head>
<body>
	<h3 align="left"><?= strtoupper($val[0]['cabang']['val2'][0]['text'])?><br><?= $val[0]['cabang']['val2'][0]['alamat']?>, <?= $val[0]['cabang']['val2'][0]['kota']['val3'][0]['text']?><br>
      Telp. <?php 
      for($i=0; $i < count($val[0]['cabang']['val2'][0]['telp']); $i++)
      {
        if($i == count($val[0]['cabang']['val2'][0]['telp'])-1)
        {
          echo $val[0]['cabang']['val2'][0]['telp'][$i];
        }
        else
        {
          echo $val[0]['cabang']['val2'][0]['telp'][$i].', ';
        }
      }
      ?></h3>
	<h3 align="center"><u>JADWAL PRODUKSI</u></h3>
	<table border="0" width="50%">
  		<tr>
  			<td align="left" width="10%">Periode</td>
			<td width="3%">:</td>
			<td><?= $val[0]['jadwal_produksi_periode'] ?></td>
  		</tr>
  		<tr>
  			<td align="left">Shift</td>
			<td width="3%">:</td>
			<td><?= $val[0]['jadwal_produksi_shift'] ?></td>
  		</tr>
	</table>
	<br>
	Bahan Mentah
	<table border="1" width="100%" rules="all" cellpadding="5">
		<tr>
			<td align="center">No</td>
			<td align="center">Artikel</td>
			<td align="center">Nama Barang</td>
			<td align="center">No Seri</td>
			<td align="center">Qty</td>
			<td align="center">Satuan</td>
		</tr>
		<?php
			$no = 1;
			$total = 0;
			foreach ($val2 as $barang => $itemBarang) {
				echo '<tr align="left">';
	        	echo '<td align="center">'.$no.'</td>';
	        	echo '<td>'.$itemBarang['barang_kode'].'</td>';
	        	echo '<td align="center">'.$itemBarang['barang_nama'].'</td>';
	        	echo '<td align="center">'.$itemBarang['jadwal_produksi_awaldet_no_seri'].'</td>';
	        	echo '<td align="center">'.$itemBarang['jadwal_produksi_awaldet_qty'].'</td>';
	        	echo '<td align="center">'.$itemBarang['satuan_nama'].'</td>';
	        	echo '</tr>';
	        	$no++;
			}
		?>
	</table>
	<br>
	Barang Jadi
	<table border="1" width="100%" rules="all" cellpadding="5">
		<tr>
			<td align="center">No</td>
			<td align="center">Artikel</td>
			<td align="center">Nama Barang</td>
			<td align="center">Total</td>
			<td align="center">Satuan</td>
			<td align="center">Keterangan</td>
		</tr>
		<?php
			$no = 1;
			$total = 0;
			foreach ($val3 as $barang => $itemBarang) {
				echo '<tr align="left">';
	        	echo '<td align="center">'.$no.'</td>';
	        	echo '<td>'.$itemBarang['barang_kode'].'</td>';
	        	echo '<td align="center">'.$itemBarang['barang_nama'].'</td>';
	        	echo '<td align="center">'.$itemBarang['jadwal_produksi_akhirdet_total'].'</td>';
	        	echo '<td align="center">'.$itemBarang['satuan_nama'].'</td>';
	        	echo '<td align="center">'.$itemBarang['jadwal_produksi_akhirdet_keterangan'].'</td>';
	        	echo '</tr>';
	        	$no++;
			}
		?>
	</table>
	<br>
	<table border="1" width="40%" rules="all" align="left">
  		<tr>
			<td align="center" width="20%">Disetujui</td>
			<td align="center" width="20%">Dibuat</td>
  		</tr>
		<tr align="center">
			<td height="8%"></td>
			<td><?= $val[0]['jadwal_produksi_created_by'] ?></td>
  		</tr>
		<tr>
			<td align="center">Mgr Operasional</td>
			<td align="center">Kabag PPIC dan QC</td>
  		</tr>
	</table>
 </body>
</html>