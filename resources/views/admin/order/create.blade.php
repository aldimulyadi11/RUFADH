@extends('admin.layout.layout')
@section('content')

<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- Horizontal Form -->
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Form Tambah Order</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<form class="form-horizontal" method="post" action="{{'/ProsesTambahOrder_admin'}}" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">ID Order</label>
						<div class="col-sm-10">
							<input type="text" id="review_id" name="review_id" class="form-control" value="{{ old('review_id') }}" placeholder="ID Order" required autocomplete="review_id" autofocus>
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
						<label class="col-sm-2 col-form-label">ID User</label>
						<div class="col-sm-10">
							<select class="form-control" name="id_user">
								<option>-- Pilih ID User --</option>
								@foreach($user as $data)
								<option value="{{$data->user_id}}">{{$data->user_id}}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Jumlah barang</label>
						<div class="col-sm-10">
							<input type="text" id="jumlah_barang" name="jumlah_barang" class="form-control" value="{{ old('jumlah_barang') }}" placeholder="Jumlah barang" required autocomplete="jumlah_barang">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Metode Pembayaran</label>
						<div class="col-sm-10">
							<input type="text" id="payment_method" name="payment_method" class="form-control" value="{{ old('payment_method') }}" placeholder="Metode Pembayaran" required autocomplete="payment_method">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Kode Pembayaran</label>
						<div class="col-sm-10">
							<input type="text" id="payment_code" name="payment_code" class="form-control" value="{{ old('payment_code') }}" placeholder="Kode Pembayaran" required autocomplete="payment_code">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Total Harga</label>
						<div class="col-sm-10">
							<input type="text" id="total_harga" name="total_harga" class="form-control" value="{{ old('total_harga') }}" placeholder="Total Harga" required autocomplete="total_harga">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Status Order</label>
						<div class="col-sm-10">
							<input type="text" id="status_order" name="status_order" class="form-control" value="{{ old('status_order') }}" placeholder="Status Order" required autocomplete="status_order">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Jasa kirim</label>
						<div class="col-sm-10">
							<select class="form-control" name="id_jasa_kirim">
								<option>-- Pilih Jasa kirim --</option>
								@foreach($jasa as $data)
								<option value="{{$data->id_jasa_kirim}}">{{$data->nama_jasa_kirim}}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">No Resi</label>
						<div class="col-sm-10">
							<input type="text" id="no_resi" name="no_resi" class="form-control" value="{{ old('no_resi') }}" placeholder="No Resi" required autocomplete="no_resi">
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