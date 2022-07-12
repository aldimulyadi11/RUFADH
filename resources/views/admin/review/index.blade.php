@extends('admin.layout.layout')
@section('content')

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<p>
					<a href="{{'/TambahReview_admin'}}" class="btn btn-success btn-sm">
						<i class="fa fa-plus"></i> Tambah Review
					</a>
				</p>
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="10%">NO</th>
							<th width="15%">ID PRODUK</th>
							<th width="10%">ID USER</th>
							<th width="25%">REVIEW</th>
							<th width="20%">RATING</th>
							<th>AKSI</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							@foreach($review as $data )
							<td>{{$no++}}</td> 
							<td>{{$data->product_id}}</td>
							<td>{{$data->id_user}}</td>
							<td>{{$data->text}}</td>
							<td>{{$data->rating}}</td>
							<td>
								<div class="btn-group">
									<a href="{{'/Edit_review_admin/'.$data->review_id}}" class="btn btn-warning btn-sm">
										<i class="fa fa-edit"></i> Edit
									</a>
									<a href="{{'/Hapus_review_admin/'.$data->review_id}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">
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