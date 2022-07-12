@extends('admin.layout.layout')
@section('content')

<div class="row">
	<div class="col-md-12">

		<!-- Profile Image -->
		<div class="card card-primary card-outline">
			<div class="card-body box-profile">
				<div class="text-center">
					@foreach($admin as $data)
					<img class="profile-user-img img-fluid img-circle"
					src="{{url('storage/'.$data->image) }}"
					alt="User profile picture">
				</div>
				
				<h3 class="profile-username text-center">{{$data->username}}</h3>

				<p class="text-muted text-center">Admin Rufadh | Rumah Fayyadh</p>

				<ul class="list-group list-group-unbordered mb-3">
					<li class="list-group-item">
						<b>Email</b> <a class="float-right">{{$data->email}}</a>
					</li>
					<li class="list-group-item">
						<b>No hp</b> <a class="float-right">{{$data->no_hp}}</a>
					</li>
					<li class="list-group-item">
						<b>Alamat</b> <a class="float-right">{{$data->alamat}}</a>
					</li>
				</ul>
				@endforeach
			</div>
			<!-- /.card-body -->
			<!-- /.card-body -->
				<div class="card-footer">
					<a href="{{'/EditAdmin/'.$data->id_admin}}">
					<button type="submit" class="btn btn-info"><i class="fa fa-edit"></i>Edit</button>
					</a>
				</div>
				<!-- /.card-footer -->
		</div>
		<!-- /.card -->
	</div>
	<!--/.col (left) -->
	<!-- right column -->


</div>
<!-- /.row -->


@endsection           