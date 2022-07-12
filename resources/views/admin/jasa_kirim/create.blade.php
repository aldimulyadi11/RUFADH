@extends('admin.layout.layout')
@section('content')

<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- Horizontal Form -->
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Form Tambah Jasa kirim</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<form class="form-horizontal" method="post" action="{{'/ProsesTambahJasakirim_admin'}}" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">ID Jasa kirim</label>
						<div class="col-sm-10">
							<input type="text" id="id_jasa_kirim" name="id_jasa_kirim" class="form-control" value="{{ old('id_jasa_kirim') }}" placeholder="ID Jasa kirim" required autocomplete="id_jasa_kirim" autofocus>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Nama Jasa kirim</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="nama_jasa_kirim" placeholder="Nama Jasa kirim">
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