<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">

	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<!-- < column -->
			<div class="col-md-12">
				
				<!-- Horizontal Form -->
				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title">Input Data Siswa</h3>
		
					</div>
					<!-- <php echo validation_errors;?> -->

					<!-- form start -->
					<?php if ($this->session->flashdata('error')):?>
						<div class="alert alert-danger" role="alert">
							<strong><?=$this->session->flashdata('error');
							?></strong>
						</div>
					<?php endif;?>
					<form class="form-horizontal" action="<?=base_url();?>C_admin/save_siswa" method="post" enctype="multipart/form-data" >
						<div class="box-body">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Nik</label>
								<div class="col-sm-10 col-md-6">
									<input type="text" name="nik" class=" form-control" required id="inputEmail3"
										placeholder="Nik">
										

								</div>
							</div>
						</div>

						<div class="box-body">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
								<div class="col-sm-10 col-md-6">
									<input type="text" name="nama" class=" form-control"required id="inputEmail3"
										placeholder="Nama">
								</div>
							</div>
						</div>


						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Tgl lahir</label>
							<div class="col-sm-10 col-md-6">

								<div class="input-group date">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									<input type="text" name="tgl_lahir" class="form-control pull-right"required id="datepicker"
										placeholder="Tgl lahir">
								</div>
							</div>
						</div>

					
						<div class="box-body">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Jenis Kelamin</label>
								<div class="col-sm-10 col-md-6">
									<select name="jenis_kelamin" class="form-control"required id="agama">
										<option value="0">--Pilih Jenis Kelamin--</option>
										<option>Laki-Laki</option>
										<option>Perempuan</option>
									
									</select>

								</div>
							</div>
						</div>

                        <div class="box-body">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
								<div class="col-sm-10 col-md-6">
									<input type="text" name="alamat" class=" form-control"required id="inputEmail3"
										placeholder="Alamat">
								</div>
							</div>
						</div>
					
						<div class="box-body">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">No Hp</label>
								<div class="col-sm-10 col-md-6">
									<input type="text" name="no_hp" class=" form-control"required id="inputEmail3"
										placeholder="No Hp">
								</div>
                            </div>
                            </div>
                            <div class="box-body">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Agama</label>
								<div class="col-sm-10 col-md-6">
									<select name="agama" class="form-control"required id="agama">
										<option value="0">--Pilih Agama--</option>
										<option>Islam</option>
										<option>Kristen</option>
										<option>Khatolik</option>
										<option>Hindu</option>
										<option>Budha</option>
									</select>

								</div>
							</div>
						</div>
                            <div class="box-body">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Image</label>
								<div class="col-sm-10 col-md-6">
									<input type="file" name="image" class="form-control" required >
								</div>
							</div>

						<div class="form-group">
							<div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                            <a href="v_siswa" class="btn btn-primary fa fa-reply-all">Back</a>
								<button type="submit" class="btn btn-success btn-sm"><i class="fa fa-save"></i>Save</button>
								
									
							
							</div>
					</form>
				</div>
			</div>
	</section>
</div>
