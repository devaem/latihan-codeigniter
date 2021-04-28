<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Data Customer
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Data Customer</li>
		</ol>
	</section>

	<section class="content">
		<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data Customer</button>
		<br>
		<?= $json; ?>

	</section>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalLabel">Form Input Data Customer</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="post" action="<?php echo base_url() . 'customer/tambah_aksi' ?>">

						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" class="form-control">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="text" name="password" class="form-control">
						</div>
						<div class="form-group">
							<label>Nama</label>
							<input type="text" name="nama" class="form-control">
						</div>
						<div class="form-group">
							<label>Umur</label>
							<input type="text" name="umur" class="form-control">
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<input type="text" name="alamat" class="form-control">
						</div>
						<div class="form-group">
							<label>Telepon</label>
							<input type="text" name="telp" class="form-control">
						</div>
						<div class="form-group">
							<label>E-Mail</label>
							<input type="text" name="email" class="form-control">
						</div>
						<div class="form-group">
							<label>Tanggal Lahir</label>
							<input type="date" name="tgl_lahir" class="form-control">
						</div>
						<div class="form-group">
							<label>Kode Pos</label>
							<input type="text" name="kode_pos" class="form-control">
						</div>
						<div class="form-group">
							<label>Nama Ibu</label>
							<input type="text" name="nama_ibu_k" class="form-control">
						</div>
						<div class="form-group">
							<label>Gender</label>
							<input type="text" name="gender" class="form-control">
						</div>
						<button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>