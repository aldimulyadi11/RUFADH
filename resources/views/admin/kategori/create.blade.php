@extends('admin.layout.layout')
@section('content')

<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- Horizontal Form -->
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Form Tambah Supplier</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<form class="form-horizontal" method="post" action="{{'/ProsesTambahKategori_admin'}}" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">ID Kategori</label>
						<div class="col-sm-10">
							<input type="text" id="id_kategori" name="id_kategori" class="form-control" value="{{ old('id_kategori') }}" placeholder="ID Kategori" required autocomplete="id_supplier" autofocus>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Nama Kategori</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="nama_kategori" placeholder="Nama Kategori">
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