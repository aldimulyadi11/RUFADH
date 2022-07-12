@extends('admin.layout.layout')
@section('content')

<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- Horizontal Form -->
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Form Edit Transaksi</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			@foreach($transaksi as $data)
			<form class="form-horizontal" method="post" action="{{'/ProsesEditTransaksi_admin/'.$data->id_transaksi}}" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">ID Transaksi</label>
						<div class="col-sm-10">
							<input type="text" id="id_transaksi" name="id_transaksi" class="form-control" value="{{ $data->id_transaksi }}" placeholder="ID Transaksi" required autocomplete="id_transaksi" autofocus readonly="">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">ID User</label>
						<div class="col-sm-10">
							<select class="form-control" name="user_id">
								<option>-- Pilih User --</option>
								@foreach($user as $data2)
								<option value="{{$data2->user_id}}"  @if($data->user_id==$data2->user_id) selected @endif>{{$data2->user_id}}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">ID Order</label>
						<div class="col-sm-10">
							<select class="form-control" name="id_order">
								<option>-- Pilih Order --</option>
								@foreach($order as $data2)
								<option value="{{$data2->id_order}}"  @if($data->id_order==$data2->id_order) selected @endif>{{$data2->id_order}}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Total</label>
						<div class="col-sm-10">
							<input type="text" id="total" name="total" class="form-control" value="{{ $data->total }}" placeholder="Total" required autocomplete="total">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Status</label>
						<div class="col-sm-10">
							<input type="text" id="status" name="status" class="form-control" value="{{ $data->status }}" placeholder="Status" required autocomplete="status">
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