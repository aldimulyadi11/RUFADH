@extends('admin.layout.layout')
@section('content')

<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- Horizontal Form -->
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Form Edit Survei</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			@foreach($survei as $data)
			<form class="form-horizontal" method="post" action="{{'/ProsesEditSurvei_admin/'.$data->id_survei}}" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">ID Survei</label>
						<div class="col-sm-10">
							<input type="text" id="id_survei" name="id_survei" class="form-control" value="{{ $data->id_survei }}" placeholder="ID Survei" required autocomplete="id_survei" autofocus readonly="">
						</div>
					</div>


					<div class="form-group row">
						<label class="col-sm-2 col-form-label">ID User</label>
						<div class="col-sm-10">
							<select class="form-control" name="id_user">
								<option>-- Pilih User --</option>
								@foreach($user as $data2)
								<option value="{{$data2->user_id}}" @if($data->id_user==$data2->user_id) selected @endif>{{$data2->user_id}}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Status</label>
						<div class="col-sm-10">
							<input type="text" id="status" name="status" class="form-control" value="{{$data->status}}" placeholder="Hubungan dengan user" required>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Tempat lahir</label>
						<div class="col-sm-10">
							<input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" value="{{$data->tempat_lahir}}" placeholder="Tempat lahir" required>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Tanggal lahir</label>
						<div class="col-sm-10">
							<input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" value="{{$data->tgl_lahir}}" placeholder="Tanggal lahir" required>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">ID Pertanyaan</label>
						<div class="col-sm-10">
							<select class="form-control" name="id_pertanyaan">
								<option>-- Pilih ID Pertanyaan --</option>
								@foreach($pertanyaan as $data2)
								<option value="{{$data2->id_pertanyaan}}" @if($data->id_pertanyaan==$data2->id_pertanyaan) selected @endif>{{$data2->id_pertanyaan}}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Isi Survei</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="3" name="isi_survei" placeholder="Isi Survei">{{$data->isi_survei}}</textarea>
						</div>
					</div>

					
				</div>

				<!-- /.card-body -->
				<div class="card-footer">
					<button type="submit" class="btn btn-info">Simpan</button>
					<button type="reset" class="btn btn-default float-right">Reset</button>
				</div>
				<!-- /.card-footer -->
			</form>
			@endforeach
		</div>
		<!-- /.card -->

	</div>
	<!--/.col (left) -->
	<!-- right column -->

</div>
<!--/.col (right) -->
</div>
<!-- /.row -->

@endsection