@extends('admin.layout.layout')
@section('content')

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<p>
					<a href="{{'/TambahPembelian_admin'}}" class="btn btn-success btn-sm">
						<i class="fa fa-plus"></i> Tambah Pembelian
					</a>
				</p>
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="5%">NO</th>
							<th width="15%">ID SUPPLIER</th>
							<th width="15%">ID PRODUK</th>
							<th width="15%">JUMLAH</th>
							<th width="15%">HARGA SATUAN</th>
							<th width="15%">TOTAL</th>
							<th>AKSI</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							@foreach($pembelian as $data )
							<td>{{$no++}}</td> 
							<td>{{$data->id_supplier}}</td>
							<td>{{$data->product_id}}</td>
							<td>{{$data->jumlah}}</td>
							<td>{{$data->harga_satuan}}</td>
							<td>{{$data->total}}</td>
							<td>
								<div class="btn-group">
									<a href="{{'/Edit_pembelian_admin/'.$data->id_pembelian}}" class="btn btn-warning btn-sm">
										<i class="fa fa-edit"></i> Edit
									</a>
									<a href="{{'/Hapus_pembelian_admin/'.$data->id_pembelian}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">
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