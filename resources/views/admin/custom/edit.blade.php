@extends('admin.layout.layout')
@section('content')

<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- Horizontal Form -->
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Form Edit Custom</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			@foreach($custom as $data)
			<form class="form-horizontal" method="post" action="{{'/ProsesEditCustom_admin/'.$data->id_custom}}" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">ID Custom</label>
						<div class="col-sm-10">
							<input type="text" id="id_custom" name="id_custom" class="form-control" value="{{ $data->id_custom }}" placeholder="ID Custom" required autocomplete="id_order" autofocus readonly="">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">ID Produk</label>
						<div class="col-sm-10">
							<select class="form-control" name="product_id">
								<option>-- Pilih Produk --</option>
								@foreach($produk as $data2)
								<option value="{{$data2->product_id}}"  @if($data->product_id==$data2->product_id) selected @endif>{{$data2->product_id}}</option>
								@endforeach
							</select>
						</div>
					</div>

					 <div class="form-group row">
						<label class="col-sm-2 col-form-label">Deskripsi</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="3" name="description" placeholder="Deskripsi">{{$data->description}}</textarea>
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