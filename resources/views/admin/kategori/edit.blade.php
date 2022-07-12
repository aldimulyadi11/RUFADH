@extends('admin.layout.layout')
@section('content')

<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- Horizontal Form -->
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Form Edit Kategori</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			@foreach($kategori as $data)
			<form class="form-horizontal" method="post" action="{{'/ProsesEditKategori_admin/'.$data->category_id}}" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">ID Kategori</label>
						<div class="col-sm-10">
							<input type="text" id="category_id" name="category_id" class="form-control" value="{{ $data->category_id }}" placeholder="ID Kategori" required autocomplete="category_id" autofocus readonly="">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Nama Kategori</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="nama_kategori" placeholder="Nama Kategori" value="{{ $data->nama_kategori }}">
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
			@endforeach
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