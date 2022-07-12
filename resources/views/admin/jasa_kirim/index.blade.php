@extends('admin.layout.layout')
@section('content')

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<p>
					<a href="{{'/TambahJasakirim_admin'}}" class="btn btn-success btn-sm">
						<i class="fa fa-plus"></i> Tambah Jasa kirim
					</a>
				</p>
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="10%">NO</th>
							<th width="30%">ID JASA KIRIM</th>
							<th width="40%">NAMA JASA KIRIM</th>
							<th>AKSI</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							@foreach($jasa as $data )
							<td>{{$no++}}</td> 
							<td>{{$data->id_jasa_kirim}}</td>
							<td>{{$data->nama_jasa_kirim}}</td>
							<td>
								<div class="btn-group">
									<a href="{{'/Edit_jasakirim_admin/'.$data->id_jasa_kirim}}" class="btn btn-warning btn-sm">
										<i class="fa fa-edit"></i> Edit
									</a>
									<a href="{{'/Hapus_jasakirim_admin/'.$data->id_jasa_kirim}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">
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