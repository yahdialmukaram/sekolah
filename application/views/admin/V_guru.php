<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Data Table Berita
		</h1>
		<br>
		<a href="<?= base_url();?>c_admin/v_tambah_guru" class="btn btn-primary fa fa-plus"> Tambah Data Guru</a>

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
								<tr style="background-color: rgba(54, 71, 26, 0.336);">
									<th>No</th>
									<th>Nip</th>
                                    <th>Nama</th>
                                    <th>Image</th>
									<th>Tanggal Lahir</th>
									<th>Pangkat/Gol</th>
									<th>Pendidikan</th>
									<th>Jabatan</th>
                                    <th>Alamat</th>
                                    <th>No Telepon</th>
                                    <th>E-mail</th>
                                    <th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
           					 foreach ($tb_guru as $value): ?>
								<tr>
									<td><?= $no++ ?></td>
                                    <td><?=$value['nip']; ?></td>
                                    <td><?=$value['nama']; ?></td>
                                    <td><img style="width: 100px;height: 100px; border-radius:50%"
                                    src="<?=base_url();?>assets/images/<?=$value['image'];?>"></td>
                                    
									<td><?=$value['tgl_lahir']; ?></td>
                                    <td><?=$value['pangkat']; ?></td>
                                    <td><?=$value['pendidikan']; ?></td>
                                    <td><?=$value['jabatan']; ?></td>
                                    <td><?=$value['alamat']; ?></td>
                                    <td><?=$value['no_hp']; ?></td>
                                    <td><?=$value['email']; ?></td>
                                    							
                                   <td>
										<a href="<?php echo base_url(); ?>c_admin/edit_berita/<?php echo $value['id_guru']; ?>"
											class="btn btn-info btn-xs"> <i class="fa fa-wrench"></i> </a>
										<a href="<?php echo base_url(); ?>c_admin/delete_guru/<?php echo $value['id_guru']; ?>"
											class="btn btn-danger btn-xs"> <i class="fa fa-trash"></i> </a>
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
