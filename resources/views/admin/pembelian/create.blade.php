@extends('admin.layout.layout')
@section('content')

<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- Horizontal Form -->
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Form Tambah Pembelian</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<form class="form-horizontal" method="post" action="{{'/ProsesTambahPembelian_admin'}}" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">ID Pembelian</label>
						<div class="col-sm-10">
							<input type="text" id="id_pembelian" name="id_pembelian" class="form-control" value="{{ old('id_pembelian') }}" placeholder="ID Pembelian" required autocomplete="id_pembelian" autofocus>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">ID Supplier</label>
						<div class="col-sm-10">
							<select class="form-control" name="id_supplier">
								<option>-- Pilih ID Supplier --</option>
								@foreach($supplier as $data)
								<option value="{{$data->id_supplier}}">{{$data->id_supplier}}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">ID Produk</label>
						<div class="col-sm-10">
							<select class="form-control" name="product_id">
								<option>-- Pilih ID Produk --</option>
								@foreach($produk as $data)
								<option value="{{$data->product_id}}">{{$data->product_id}}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Jumlah</label>
						<div class="col-sm-10">
							<input type="text" id="jumlah" name="jumlah" class="form-control" value="{{ old('jumlah') }}" placeholder="Jumlah" required autocomplete="jumlah" >
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Harga satuan</label>
						<div class="col-sm-10">
							<input type="text" id="harga_satuan" name="harga_satuan" class="form-control" value="{{ old('harga_satuan') }}" placeholder="Harga satuan" required autocomplete="harga_satuan" >
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Total</label>
						<div class="col-sm-10">
							<input type="text" id="total" name="total" class="form-control" value="{{ old('total') }}" placeholder="Total" required autocomplete="total" >
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