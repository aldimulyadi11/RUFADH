@extends('admin.layout.layout')
@section('content')

<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- Horizontal Form -->
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Form Tambah Transaksi</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<form class="form-horizontal" method="post" action="{{'/ProsesTambahTransaksi_admin'}}" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">ID Transaksi</label>
						<div class="col-sm-10">
							<input type="text" id="id_transaksi" name="id_transaksi" class="form-control" value="{{ old('id_transaksi') }}" placeholder="ID Transaksi" required autocomplete="id_transaksi" autofocus>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">ID User</label>
						<div class="col-sm-10">
							<select class="form-control" name="user_id">
								<option>-- Pilih ID User --</option>
								@foreach($user as $data)
								<option value="{{$data->user_id}}">{{$data->user_id}}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">ID Order</label>
						<div class="col-sm-10">
							<select class="form-control" name="id_order">
								<option>-- Pilih ID Order --</option>
								@foreach($order as $data)
								<option value="{{$data->id_order}}">{{$data->id_order}}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Total</label>
						<div class="col-sm-10">
							<input type="text" id="total" name="total" class="form-control" value="{{ old('total') }}" placeholder="Total" required autocomplete="total" >
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Status</label>
						<div class="col-sm-10">
							<input type="text" id="status" name="status" class="form-control" value="{{ old('status') }}" placeholder="Status" required autocomplete="status" >
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