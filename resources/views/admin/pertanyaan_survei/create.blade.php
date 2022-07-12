@extends('admin.layout.layout')
@section('content')

<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- Horizontal Form -->
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Form Tambah Pertanyaan</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<form class="form-horizontal" method="post" action="{{'/ProsesTambahPertanyaansurvei_admin'}}" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">ID Pertanyaan</label>
						<div class="col-sm-10">
							<input type="text" id="id_pertanyaan" name="id_pertanyaan" class="form-control" value="{{ old('id_pertanyaan') }}" placeholder="ID Pertanyaan" required autocomplete="id_pertanyaan" autofocus>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Kategori</label>
						<div class="col-sm-10">
							<input type="text" id="kategori" name="kategori" class="form-control" value="{{ old('kategori') }}" placeholder="Kategori" required autocomplete="kategori" autofocus>
						</div>
					</div>

					
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Pertanyaan</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="3" name="pertanyaan" placeholder="Pertanyaan"></textarea>
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