<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Data Table Berita
		</h1>
		<br>
		<a href="<?= base_url();?>c_admin/tambah_siswa" class="btn btn-primary fa fa-plus"> Tambah Data Siwa</a>
		<!-- <a href="tambah_olahraga" class="btn btn-primary fa fa-plus"> Tambah Berita Olahraga</a> -->

	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Hover Data Table</h3>
					</div>

					<!-- alert simpan data -->
					<?php if ($this->session->flashdata('success')):?>
					<div id="pesan" class="alert alert-success" role="alert">
						<strong><?=$this->session->flashdata('success');
						?></strong>
					</div>
					<?php endif;?>
					<!-- aler hapus data -->
					<?php if ($this->session->flashdata('danger')):?>
					<div id="pesan" class="alert alert-danger" role="alert">
						<strong><?=$this->session->flashdata('danger');
						?></strong>
					</div>
					<?php endif; ?>
					<div class="box-body">
						<table id="example2" class="table table-bordered table-hover wrap">
							<thead>
								<tr style="background-color: rgb(75, 120, 218); ">
									<th>No</th>
									<th>Nik</th>
									<th>Nama</th>
									<th>Alamat</th>
									<th>Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>No Hp</th>
                                    <th>Agama</th>
                                    <th>Image</th>
                                    <th>Tanggal</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
           					 foreach ($tb_siswa as $value): ?>
								<tr>
									<td><?= $no++ ?></td>
                                    <td><?=$value['nik']; ?></td>
                                    <td><?=$value['nama']; ?></td>
                                    <td><?=$value['alamat']; ?></td>
                                    <td><?=$value['tgl_lahir']; ?></td>
                                    <td><?=$value['jenis_kelamin']; ?></td>
                                    <td><?=$value['no_hp']; ?></td>
                                    <td><?=$value['agama']; ?></td>
                                    <td><img style="width: 100px;height: 100px; border-radius:50%"
                                    src="<?=base_url();?>assets/images/<?=$value['image'];?>"></td>
                                    
                                    <td><?=$value['tanggal']; ?></td>
									<td>
										<a href="<?php echo base_url(); ?>c_admin/edit_siswa/<?php echo $value['id_siswa']; ?>"
											class="btn btn-info btn-xs"> <i class="fa fa-wrench"></i>Edit </a>

											<a href="<?php echo base_url(); ?>c_admin/edit_/<?php echo $value['id_siswa']; ?>"
											class="btn btn-warning btn-xs"> <i class="fa fa-car"></i> Detils</a>
										
											<a href="<?php echo base_url(); ?>c_admin/delete_siswa/<?php echo $value['id_siswa']; ?>"
											class="btn btn-danger btn-xs"> <i class="fa fa-trash">Delete</i> </a>
									</td>
								</tr>
								<?php endforeach; ?>
							</tbody>

						</table>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->


			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
