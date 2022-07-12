@extends('admin.layout.layout')
@section('content')

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<p>
					<a href="{{'/TambahSurvei_admin'}}" class="btn btn-success btn-sm">
						<i class="fa fa-plus"></i> Tambah Survei
					</a>
				
					<a href="{{'/Pertanyaansurvei_admin'}}" class="btn btn-info btn-sm">
						<i class="fa fa-list"></i> Pertanyaan Survei
					</a>
				</p>
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="5%">NO</th>
							<th width="10%">ID USER</th>
							<th width="15%">STATUS</th>
							<th width="25%">TEMPAT TANGGAL LAHIR</th>
							<th width="15%">ID PERTANYAAN</th>
							<th width="15%">ISI SURVEI</th>
							<th>AKSI</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							@foreach($survei as $data )
							<td>{{$no++}}</td> 
							<td>{{$data->id_user}}</td>
							<td>{{$data->status}}</td>
							<td>{{$data->tempat_lahir}}-{{$data->tgl_lahir}}</td>
							<td>{{$data->id_pertanyaan}}</td>
							<td>{{$data->isi_survei}}</td>
							<td>
								<div class="btn-group">
									<a href="{{'/Edit_survei_admin/'.$data->id_survei}}" class="btn btn-warning btn-sm">
										<i class="fa fa-edit"></i> Edit
									</a>
									<a href="{{'/Hapus_survei_admin/'.$data->id_survei}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">
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