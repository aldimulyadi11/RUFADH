@extends('admin.layout.layout')
@section('content')

<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- Horizontal Form -->
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Form Tambah Voucher</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<form class="form-horizontal" method="post" action="{{'/ProsesTambahVoucher_admin'}}" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">ID Voucher</label>
						<div class="col-sm-10">
							<input type="text" id="voucher_id" name="voucher_id" class="form-control" value="{{ old('voucher_id') }}" placeholder="ID Voucher" required autocomplete="voucher_id" autofocus>
						</div>
					</div>

					
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Kode</label>
						<div class="col-sm-10">
							<input type="text" id="code" name="code" class="form-control" value="{{ old('code') }}" placeholder="Kode" required autocomplete="code">
						</div>
					</div>


					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Deskripsi</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="3" name="deskripsi" placeholder="Deskripsi"></textarea>
						</div>
					</div>

					
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Jumlah</label>
						<div class="col-sm-10">
							<input type="text" id="amount" name="amount" class="form-control" value="{{ old('amount') }}" placeholder="Jumlah" required autocomplete="amount">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Status</label>
						<div class="col-sm-10">
							
							<select class="form-control" name="status">
								<option>-- Pilih Status --</option>
								<option value="Tersedia">Tersedia</option>
								<option value="Tidak tersedia">Tidak tersedia</option>
							</select>
							
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