@extends('admin.layout.layout')
@section('content')

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<p>
					<a href="{{'/TambahTransaksi_admin'}}" class="btn btn-success btn-sm">
						<i class="fa fa-plus"></i> Tambah Transaksi
					</a>
				</p>
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="10%">NO</th>
							<th width="15%">ID TRANSAKSI</th>
							<th width="15%">ID USER</th>
							<th width="15%">ID ORDER</th>
							<th width="15%">TOTAL</th>
							<th width="15%">STATUS</th>
							<th>AKSI</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							@foreach($transaksi as $data )
							<td>{{$no++}}</td> 
							<td>{{$data->id_transaksi}}</td>
							<td>{{$data->user_id}}</td>
							<td>{{$data->id_order}}</td>
							<td>{{$data->total}}</td>
							<td>{{$data->status}}</td>
							<td>
								<div class="btn-group">
									<a href="{{'/Edit_transaksi_admin/'.$data->id_transaksi}}" class="btn btn-warning btn-sm">
										<i class="fa fa-edit"></i> Edit
									</a>
									<a href="{{'/Hapus_transaksi_admin/'.$data->id_transaksi}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">
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