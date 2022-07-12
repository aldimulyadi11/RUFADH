@extends('admin.layout.layout')
@section('content')

<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- Horizontal Form -->
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Form Tambah User</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<form class="form-horizontal" method="post" action="{{'/ProsesTambahUser_admin'}}" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">ID User</label>
						<div class="col-sm-10">
							<input type="text" id="id_user" name="id_user" class="form-control" value="{{ old('id_user') }}" placeholder="ID User" required autocomplete="id_user" autofocus>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Nama User</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="nama_user" placeholder="Nama User">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Username</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="username" placeholder="Username">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Password</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" name="password" placeholder="Password">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" name="email" placeholder="Email">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Alamat</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="3" name="alamat" placeholder="Alamat lengkap, jl/ no.rumah/ rt/rw/ Desa/ Kabupaten/Kota/ Kode pos"></textarea>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Foto</label>
						<div class="col-sm-10">
							<input type="file" class="custom-file-input" name="foto" id="customFile">
							<label class="custom-file-label" for="customFile">Choose file</label>
						</div>
					</div>

				
				</div>

				<!-- /.card-body -->
				<div class="card-footer">
					<button type="submit" class="btn btn-info">Simpan</button>
					<button type="reset" class="btn btn-default float-right">Reset</button>
				</div>
				<!-- /.card-footer -->
			</form>
		</div>
		<!-- /.card -->

	</div>
	<!--/.col (left) -->
	<!-- right column -->

</div>
<!--/.col (right) -->
</div>
<!-- /.row -->

@endsection