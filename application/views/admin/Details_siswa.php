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

						<div class="container">
							<div class="col-md-6 col-md-offset-2">
								<h3>Details Data Siswa</h3>
								<hr />
								<form action="<?php echo base_url();?>/c_admin/details_siswa/<?=$details['id_siswa'] ?>"
									method="post" enctype="multipart/form-data">

									<label>Foto</label>
									<br />
									<td><img style="width: 120px;height: 120px;"
											src="<?=base_url();?>assets/images/<?=$details['image'];?>"></td>
									<br>
									<br>
									<label>Nik</label>
									<input disabled type="text" name="nik" value="<?= $details['nik']; ?>"
										class="form-control">
									<label>Nama</label>
									<input disabled type="text" name="nama" value="<?= $details['nama']; ?>"
										class="form-control">

									<label>Alamat</label>
									<input disabled type="text" name="alamat" value="<?= $details['alamat']; ?>"
										class="form-control">

									<label>Tanggal Lahir</label>
									<input disabled type="text" name="tgl_lahir" value="<?= $details['tgl_lahir']; ?>"
										class="form-control">

									<label>Jenis Kelamin</label>
									<input disabled type="text" name="jenis_kelamin"
										value="<?= $details['jenis_kelamin']; ?>" class="form-control">

									<label>Telepon</label>
									<input disabled type="text" name="no_hp" value="<?= $details['no_hp']; ?>"
										class="form-control">

									<label>Agama</label>
									<input disabled type="text" name="agama" value="<?= $details['agama']; ?>"
										class="form-control">
									<br>


								</form>
								<a href="<?= base_url();?>C_admin/V_siswa/"
									class="btn btn-primary fa fa-reply-all">Back</a>
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
