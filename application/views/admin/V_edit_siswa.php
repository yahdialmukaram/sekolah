<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>

		</h1>

	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-info">
					<div class="box-header">
						<h3 class="box-title"></h3>
						<!-- <a href="C_admin/V_berita/" class="btn btn-primary">Back</a> -->
						<div class="container">
							<div class="col-md-8 col-md-offset-2">
								<h3>Portal Berita</h3>
								<hr />
								<form action="<?php echo base_url();?>c_admin/update/<?=$edit['id'] ?>"
									method="post" enctype="multipart/form-data">
									<input type="text" name="judul" value="<?= $edit['nik']; ?>" class="form-control"
										placeholder="Judul berita" required /><br />

										<input type="text" name="judul" value="<?= $edit['nama']; ?>" class="form-control"
										placeholder="Judul berita" required /><br />
								
										<input type="text" name="alamat" value="<?= $edit['alamat']; ?>" class="form-control"
										placeholder="Judul berita" required /><br />
								
										<input type="text" name="tgl_lahir" value="<?= $edit['tgl_lahir']; ?>" class="form-control"
										placeholder="Judul berita" required /><br />
								
										<input type="text" name="jenis_kelamin" value="<?= $edit['jenis_kelamin']; ?>" class="form-control"
										placeholder="Judul berita" required /><br />
								
										<input type="text" name="no_hp" value="<?= $edit['no_hp']; ?>" class="form-control"
										placeholder="Judul berita" required /><br />

										<input type="text" name="agama" value="<?= $edit['agama']; ?>" class="form-control"
										placeholder="Judul berita" required /><br />
								
										<input type="text" name="tanggal" value="<?= $edit['tanggal']; ?>" class="form-control"
										placeholder="Judul berita" required /><br />
								
								

									<input type="file" name="filefoto" value="<?= $edit['image'];?>" ><br>
									<button class="btn btn-primary btn-btn-xs" type="submit">Simpan</button>
								</form>
							</div>
						</div>
						<!-- tools box -->

					</div>
					<!-- /.box -->


				</div>
				<!-- /.col-->
			</div>
			<!-- ./row -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
