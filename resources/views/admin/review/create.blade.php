@extends('admin.layout.layout')
@section('content')

<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- Horizontal Form -->
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Form Tambah Review</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<form class="form-horizontal" method="post" action="{{'/ProsesTambahReview_admin'}}" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">ID Review</label>
						<div class="col-sm-10">
							<input type="text" id="review_id" name="review_id" class="form-control" value="{{ old('review_id') }}" placeholder="ID Review" required autocomplete="review_id" autofocus>
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
						<label class="col-sm-2 col-form-label">Review</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="3" name="text" placeholder="Review"></textarea>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Rating</label>
						<div class="col-sm-10">
							<input type="text" id="rating" name="rating" class="form-control" value="{{ old('rating') }}" placeholder="1-10" required autocomplete="rating" autofocus>
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