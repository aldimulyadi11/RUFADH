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
			@foreach($produk as $data)
			<form class="form-horizontal" method="post" action="{{'/ProsesEditProduk_admin/'.$data->product_id}}" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">ID Produk</label>
						<div class="col-sm-10">
							<input type="text" id="product_id" name="product_id" class="form-control" value="{{ $data->product_id }}" placeholder="ID Produk" required autocomplete="id_supplier" autofocus readonly="">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">ID Kategori</label>
						<div class="col-sm-10">
							
							<select class="form-control" name="category_id">
								<option>-- Pilih ID Kategori --</option>
								@foreach($kategori as $data2)
								<option value="{{$data2->category_id}}"  @if($data->category_id==$data2->category_id) selected @endif>{{$data2->nama_kategori}}</option>
								@endforeach
							</select>
							
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Nama Produk</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" value="{{ $data->nama_produk }}" name="nama_produk" placeholder="Nama Produk">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Lokasi</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="3" name="location" placeholder="Lokasi">{{ $data->location }}</textarea>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Stok</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" value="{{ $data->stok }}" name="stok" placeholder="Stok">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Harga</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" value="{{ $data->price }}" name="price" placeholder="Harga">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Promo</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="promo" value="{{ $data->promo}}" placeholder="Promo">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Deskripsi</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="3" name="deskripsi" placeholder="Deskripsi">{{ $data->deskripsi }}</textarea>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Status</label>
						<div class="col-sm-10">
							
							<select class="form-control" name="status">
								<option>-- Pilih Status --</option>
								<option @if($data->status=='Tersedia') selected @endif>Tersedia</option>
								<option @if($data->status=='Tidak tersedia') selected @endif>Tidak tersedia</option>
							</select>
							
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Foto</label>
						<div class="col-sm-10">
							<input type="file" class="custom-file-input" name="foto" id="customFile">
							<label class="custom-file-label" for="customFile">Choose file</label>
						</div>
					</div>
					<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
						<div class="file-upload-inner ts-forms">
							<div class="input prepend-big-btn">
								<img src="{{url('storage/'.$data->image) }}" alt="" width="100" height="130" />
							</div>
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