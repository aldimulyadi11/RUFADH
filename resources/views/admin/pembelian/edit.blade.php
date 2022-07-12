@extends('admin.layout.layout')
@section('content')

<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- Horizontal Form -->
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Form Edit Pembelian</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			@foreach($pembelian as $data)
			<form class="form-horizontal" method="post" action="{{'/ProsesEditPembelian_admin/'.$data->id_pembelian}}" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">ID Pembelian</label>
						<div class="col-sm-10">
							<input type="text" id="id_pembelian" name="id_pembelian" class="form-control" value="{{ $data->id_pembelian }}" placeholder="ID Pembelian" required autocomplete="id_pembelian" autofocus readonly="">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">ID Supplier</label>
						<div class="col-sm-10">
							<select class="form-control" name="id_supplier">
								<option>-- Pilih ID Supplier --</option>
								@foreach($supplier as $data2 )
								<option value="{{$data2->id_supplier}}" @if($data->id_supplier==$data2->id_supplier) selected @endif>{{$data2->id_supplier}}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">ID Produk</label>
						<div class="col-sm-10">
							<select class="form-control" name="product_id">
								@foreach($produk as $data2)
								<option value="{{$data2->product_id}}"  @if($data->product_id==$data2->product_id) selected @endif>{{$data2->product_id}}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Jumlah</label>
						<div class="col-sm-10">
							<input type="text" id="jumlah" name="jumlah" class="form-control" value="{{ $data->jumlah}}" placeholder="Jumlah" required autocomplete="jumlah" >
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Harga satuan</label>
						<div class="col-sm-10">
							<input type="text" id="harga_satuan" name="harga_satuan" class="form-control" value="{{ $data->harga_satuan }}" placeholder="Harga satuan" required autocomplete="harga_satuan" >
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Total</label>
						<div class="col-sm-10">
							<input type="text" id="total" name="total" class="form-control" value="{{ $data->total }}" placeholder="Total" required autocomplete="total" >
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