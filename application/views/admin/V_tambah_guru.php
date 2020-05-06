<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">

	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<!-- < column -->
            <div class="col-md-6 col-sm-12 col-xs-12">
				
				<!-- Horizontal Form -->
				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title">Input Data Guru</h3>
		
					</div>
					<!-- <php echo validation_errors;?> -->

					<!-- form start -->
					<?php if ($this->session->flashdata('error')):?>
						<div class="alert alert-danger" role="alert">
							<strong><?=$this->session->flashdata('error');
							?></strong>
						</div>
					<?php endif;?>
					<form class="form-horizontal" action="<?=base_url();?>C_admin/save_guru" method="post" enctype="multipart/form-data" >
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

					
						<!-- <div class="box-body">
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
						</div> -->

                        <div class="box-body">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Pangkat</label>
								<div class="col-sm-10 col-md-6">
									<input type="text" name="pangkat" class=" form-control"required id="inputEmail3"
										placeholder="Input Pangkat">
								</div>
							</div>
						</div>
					
						<div class="box-body">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Pendidikan</label>
								<div class="col-sm-10 col-md-6">
									<input type="text" name="Pendidikan" class=" form-control"required id="inputEmail3"
										placeholder="Input Pendidikan">
								</div>
                            </div>
                            </div>
                            </div>
							</div>

                            <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title"></h3>
		
					</div>
							<div class="box-body">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Jabatan</label>
								<div class="col-sm-10 col-md-6">
									<input type="text" name="jabatan" class=" form-control"required id="inputEmail3"
										placeholder="Input Jabatan">
								</div>
                            </div>
							</div>
							
							<div class="box-body">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
								<div class="col-sm-10 col-md-6">
									<input type="text" name="alamat" class=" form-control"required id="inputEmail3"
										placeholder="Input Alamat">
								</div>
                            </div>
							</div>
							
							<div class="box-body">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">No Hp</label>
								<div class="col-sm-10 col-md-6">
									<input type="text" name="no_hp" class=" form-control"required id="inputEmail3"
										placeholder="Input Telepon">
								</div>
                            </div>
							</div>
							<div class="box-body">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">E-mail</label>
								<div class="col-sm-10 col-md-6">
									<input type="text" name="email" class=" form-control"required id="inputEmail3"
										placeholder="Input Email">
								</div>
                            </div>
                            </div>
                            <!-- <div class="box-body">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Jabtan</label>
								<div class="col-sm-10 col-md-6">
									<select name="agama" class="form-control"required id="jabatan">
										<option value="0">--Pilih Jabatan--</option>
										<option>Islam</option>
										<option>Kristen</option>
										<option>Khatolik</option>
										<option>Hindu</option>
										<option>Budha</option>
									</select>

								</div>
							</div>
						</div> -->
                            <div class="box-body">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Image</label>
								<div class="col-sm-10 col-md-6">
									<input type="file" name="image" class="form-control" required >
								</div>
							</div>
<br><br>
						<div class="form-group">
							<div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                            <a href="v_guru" class="btn btn-primary fa fa-reply-all">Back</a>
								<button type="submit" class="btn btn-success btn-sm"><i class="fa fa-save"></i>Save</button>
								
									
							
							</div>
				
					</form>
				</div>
			</div>
	</section>
</div>
