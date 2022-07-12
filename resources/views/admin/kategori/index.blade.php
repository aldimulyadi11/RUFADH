@extends('admin.layout.layout')
@section('content')

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<p>
					<a href="{{'/TambahKategori_admin'}}" class="btn btn-success btn-sm">
						<i class="fa fa-plus"></i> Tambah Kategori
					</a>
				</p>
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="10%">NO</th>
							<th width="30%">ID KATEGORI</th>
							<th width="40%">NAMA KATEGORI</th>
							<th>AKSI</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							@foreach($kategori as $data )
							<td>{{$no++}}</td> 
							<td>{{$data->category_id}}</td>
							<td>{{$data->nama_kategori}}</td>
							<td>
								<div class="btn-group">
									<a href="{{'/Edit_kategori_admin/'.$data->category_id}}" class="btn btn-warning btn-sm">
										<i class="fa fa-edit"></i> Edit
									</a>
									<a href="{{'/Hapus_kategori_admin/'.$data->category_id}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">
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