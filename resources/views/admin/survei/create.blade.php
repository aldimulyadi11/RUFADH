@extends('admin.layout.layout')
@section('content')

<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- Horizontal Form -->
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Form Tambah Survei</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<form class="form-horizontal" method="post" action="{{'/ProsesTambahSurvei_admin'}}" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">ID Survei</label>
						<div class="col-sm-10">
							<input type="text" id="id_survei" name="id_survei" class="form-control" value="{{ old('id_survei') }}" placeholder="ID Survei" required autocomplete="id_survei" autofocus>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">ID User</label>
						<div class="col-sm-10">
							<select class="form-control" name="id_user">
								<option>-- Pilih ID User --</option>
								@foreach($user as $data)
								<option value="{{$data->user_id}}">{{$data->user_id}}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Status</label>
						<div class="col-sm-10">
							<input type="text" id="status" name="status" class="form-control" value="{{ old('status') }}" placeholder="Hubungan dengan user" required>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Tempat lahir</label>
						<div class="col-sm-10">
							<input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" value="{{ old('tempat_lahir') }}" placeholder="Tempat lahir" required>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Tanggal lahir</label>
						<div class="col-sm-10">
							<input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" value="{{ old('tgl_lahir') }}" placeholder="Tanggal lahir" required>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">ID Pertanyaan</label>
						<div class="col-sm-10">
							<select class="form-control" name="id_pertanyaan">
								<option>-- Pilih ID Pertanyaan --</option>
								@foreach($pertanyaan as $data)
								<option value="{{$data->id_pertanyaan}}">{{$data->id_pertanyaan}}</option>
								@endforeach
							</select>
						</div>
					</div>

					

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Isi Survei</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="3" name="isi_survei" placeholder="Isi Survei"></textarea>
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