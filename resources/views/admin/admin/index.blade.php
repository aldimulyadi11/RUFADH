@extends('admin.layout.layout')
@section('content')

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<p>
					<a href="{{'/TambahAdmin'}}" class="btn btn-success btn-sm">
						<i class="fa fa-plus"></i> Tambah Admin
					</a>
				</p>
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="10%">NO</th>
							<th width="15%">ID ADMIN</th>
							<th width="20%">USERNAME</th>
							<th width="20%">EMAIL</th>
							<th width="15%">FOTO</th>
							<th>AKSI</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							@foreach($admin as $adm )
							<td>{{$no++}}</td> 
							<td>{{$adm->id_admin}}</td>
							<td>{{$adm->username}}</td>
							<td>{{$adm->email}}</td>
							<td><img src="{{url('storage/'.$adm->image) }}" alt="" width="100" height="130" ></td>
							<td>
								<div class="btn-group">
									<a href="{{'/EditAdmin/'.$adm->id_admin}}" class="btn btn-warning btn-sm">
										<i class="fa fa-edit"></i> Edit
									</a>
									<a href="{{'/HapusAdmin/'.$adm->id_admin}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">
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