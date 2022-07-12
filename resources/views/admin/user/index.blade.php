@extends('admin.layout.layout')
@section('content')

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<p>
					<a href="{{'/TambahUser_admin'}}" class="btn btn-success btn-sm">
						<i class="fa fa-plus"></i> Tambah User
					</a>
				</p>
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="10%">NO</th>
							<th width="15%">NAMA USER</th>
							<th width="20%">EMAIL</th>
							<th width="15%">FOTO</th>
							<th width="20%">ALAMAT</th>
							<th>AKSI</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							@foreach($user as $data )
							<td>{{$no++}}</td> 
							<td>{{$data->nama}}</td>
							<td>{{$data->email}}</td>
							<td><img src="{{url('storage/'.$data->image) }}" alt="" width="100" height="130" ></td>
							<td>{{$data->alamat}}</td>
							<td>
								<div class="btn-group">
									<a href="{{'/Edit_user_admin/'.$data->user_id}}" class="btn btn-warning btn-sm">
										<i class="fa fa-edit"></i> Edit
									</a>
									<a href="{{'/Hapus_user_admin/'.$data->user_id}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">
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