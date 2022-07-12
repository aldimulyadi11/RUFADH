@extends('admin.layout.layout')
@section('content')

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<p>
					<a href="{{'/TambahPertanyaansurvei_admin'}}" class="btn btn-success btn-sm">
						<i class="fa fa-plus"></i> Tambah Pertanyaan
					</a>
				
					
				</p>
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="5%">NO</th>
							<th width="20%">ID PERTANYAAN</th>
							<th width="15%">KATEGORI</th>
							<th width="30%">PERTANYAAN</th>
							<th>AKSI</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							@foreach($pertanyaan as $data )
							<td>{{$no++}}</td> 
							<td>{{$data->id_pertanyaan}}</td>
							<td>{{$data->kategori}}</td>
							<td>{{$data->pertanyaan}}</td>
							<td>
								<div class="btn-group">
									<a href="{{'/Edit_pertanyaan_survei_admin/'.$data->id_pertanyaan}}" class="btn btn-warning btn-sm">
										<i class="fa fa-edit"></i> Edit
									</a>
									<a href="{{'/Hapus_pertanyaan_survei_admin/'.$data->id_pertanyaan}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">
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