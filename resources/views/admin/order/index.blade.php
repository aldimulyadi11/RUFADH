@extends('admin.layout.layout')
@section('content')

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<p>
					<a href="{{'/TambahOrder_admin'}}" class="btn btn-success btn-sm">
						<i class="fa fa-plus"></i> Tambah Order
					</a>
				</p>
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="10%">NO</th>
							<th width="10%">ID USER</th>
							<th width="10%">ID PRODUK</th>
							<th width="20%">JUMLAH BARANG</th>
							<th width="15%">TOTAL HARGA</th>
							<th width="15%">STATUS</th>
							<th>AKSI</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							@foreach($order as $data )
							<td>{{$no++}}</td> 
							<td>{{$data->id_user}}</td>
							<td>{{$data->product_id}}</td>
							<td>{{$data->jumlah_barang}}</td>
							<td>{{$data->total_harga}}</td>
							<td>{{$data->status_order}}</td>
							<td>
								<div class="btn-group">
									<a href="{{'/Detail_order_admin/'.$data->id_order}}" class="btn btn-info btn-sm">
										<i class="fa fa-book"></i> Detail
									</a>
									<a href="{{'/Edit_order_admin/'.$data->id_order}}" class="btn btn-warning btn-sm">
										<i class="fa fa-edit"></i> Edit
									</a>
									<a href="{{'/Hapus_order_admin/'.$data->id_order}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">
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