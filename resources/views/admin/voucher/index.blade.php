@extends('admin.layout.layout')
@section('content')

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<p>
					<a href="{{'/TambahVoucher_admin'}}" class="btn btn-success btn-sm">
						<i class="fa fa-plus"></i> Tambah Voucher
					</a>
				</p>
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="5%">NO</th>
							<th width="15%">ID VOUCHER</th>
							<th width="15%">KODE</th>
							<th width="20%">DESKRIPSI</th>
							<th width="15%">JUMLAH</th>
							<th width="10%">STATUS</th>
							<th>AKSI</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							@foreach($voucher as $data )
							<td>{{$no++}}</td> 
							<td>{{$data->voucher_id}}</td>
							<td>{{$data->code}}</td>
							<td>{{$data->deskripsi}}</td>
							<td>{{$data->amount}}</td>
							<td>{{$data->status}}</td>
							<td>
								<div class="btn-group">
									<a href="{{'/Edit_voucher_admin/'.$data->voucher_id}}" class="btn btn-warning btn-sm">
										<i class="fa fa-edit"></i> Edit
									</a>
									<a href="{{'/Hapus_voucher_admin/'.$data->voucher_id}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">
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