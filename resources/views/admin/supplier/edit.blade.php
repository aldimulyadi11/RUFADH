@extends('admin.layout.layout')
@section('content')

<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- Horizontal Form -->
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Form Edit Supplier</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			@foreach($supplier as $data)
			<form class="form-horizontal" method="post" action="{{'/ProsesEditSupplier/'.$data->id_supplier}}" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">ID Supplier</label>
						<div class="col-sm-10">
							<input type="text" id="id_supplier" name="id_supplier" class="form-control" value="{{ $data->id_supplier }}" placeholder="ID Supplier" required autocomplete="id_supplier" autofocus readonly="">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Nama Supplier</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="nama_supplier" placeholder="Nama Supplier" value="{{ $data->nama_supplier }}">
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