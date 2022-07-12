@extends('admin.layout.layout')
@section('content')

<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- Horizontal Form -->
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Form Edit Admin</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			@foreach($admin as $data)
			<form class="form-horizontal" method="post" action="{{'/ProsesEditAdmin/'.$data->id_admin}}" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">ID Admin</label>
						<div class="col-sm-10">
							<input type="text" id="id_admin" name="id_admin" class="form-control" value="{{ $data->id_admin }}" placeholder="ID Admin" required autocomplete="id_admin" autofocus readonly="">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Username</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="username" placeholder="Username" value="{{ $data->username }}">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">No hp</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" value="{{ $data->no_hp }}" name="no_hp" placeholder="No hp">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Alamat</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="3" name="alamat" placeholder="Alamat">{{ $data->alamat }}</textarea>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" name="email" placeholder="Email" value="{{ $data->email }}">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Password</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" name="password" placeholder="******" value="{{$data->password}}">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Foto</label>
						<div class="col-sm-10">
							<input type="file" class="custom-file-input" name="foto" id="customFile" value="{{'$data->image'}}">
							<label class="custom-file-label" for="customFile">Choose file</label>
						</div>
					</div>
					<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
						<div class="file-upload-inner ts-forms">
							<div class="input prepend-big-btn">
								<img src="{{url('storage/'.$data->image) }}" alt="" width="100" height="130" />
							</div>
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