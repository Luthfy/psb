<?php

	require_once 'config/koneksi.php';

	$katakunci = $_GET['katakunci'];
	$kategori = $_GET['kategori'];

	if($katakunci == ""){

		$query = $koneksi->query("select * from KatalogBuku where penulis = '$katakunci'");

	}else{

	switch ($kategori) {
		case 'penulis':
			$query = $koneksi->query("select * from KatalogBuku where penulis like '%$katakunci%' ");
			break;
		case 'judul':
			$query = $koneksi->query("select * from KatalogBuku where judul like '%$katakunci%' ");
			break;

		default:
			# code...
			break;
	}

}

?>
<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel">Hasil Pencarian</h4>
		</div>
		<div class="modal-body">
			<table class="table table-hover">
				<tr>
					<th>No</th>
					<th>Judul</th>
					<th>Penulis</th>
					<th>Kode Rak</th>
					<th width='100px'>Detail</th>
				</tr>
				<?php $i = 1;  while ($hasil = $query->fetch_array()) : ?>
				<tr>
					<td><?php echo $i++; ?></td>
					<td><?php echo $hasil['judul']; ?></td>
					<td><?php echo $hasil['penulis']; ?></td>
					<td><?php echo $hasil['Kode_Rak']; ?></td>
					<td><button class="btn btn-danger" onclick="detailRak('<?php echo $hasil['Posisi_Buku']; ?>')">Detail</button>	</td>
				</tr>
				<?php endwhile; ?>
			</table>
		</div>
	</div>
</div>
<script type="text/javascript">
	function detailRak ($argument) {
		alert($argument);
	}
</script>
