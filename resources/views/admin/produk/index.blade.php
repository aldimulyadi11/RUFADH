@extends('admin.layout.layout')
@section('content')

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<p>
					<a href="{{'/TambahProduk_admin'}}" class="btn btn-success btn-sm">
						<i class="fa fa-plus"></i> Tambah Produk
					</a>
				</p>
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="10%">NO</th>
							<th width="20%">NAMA PRODUK</th>
							<th width="20%">GAMBAR</th>
							<th width="10%">HARGA</th>
							<th width="10%">STATUS</th>
							<th>AKSI</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							@foreach($produk as $data )
							<td>{{$no++}}</td> 
							<td>{{$data->nama_produk}}</td>
							<td><img src="{{url('storage/'.$data->image) }}" alt="" width="100" height="130" ></td>
							<td>{{$data->price}}</td>
							<td>{{$data->status}}</td>
							<td>
								<div class="btn-group">
									<a href="{{'/Detail_produk_admin/'.$data->product_id}}" class="btn btn-info btn-sm">
										<i class="fa fa-book"></i> Detail
									</a>
									<a href="{{'/Edit_produk_admin/'.$data->product_id}}" class="btn btn-warning btn-sm">
										<i class="fa fa-edit"></i> Edit
									</a>
									<a href="{{'/Hapus_produk_admin/'.$data->product_id}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">
										<i class="fa fa-trash"></i> Hapus
									</a>
								</div>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
	</div>
	<!-- /.col -->
</div>
<!-- /.row -->

@endsection