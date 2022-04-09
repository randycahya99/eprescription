@extends('layout.main')

@section('title','E-Prescription - Resep Racikan')

@section('container')

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
			<h6 class="m-0 font-weight-bold text-primary float-left">Resep Obat Racik</h6>
			<button type="button" class="btn  btn-sm btn-primary" data-toggle="modal" data-target="#tambahData" title="Tambah">
				Tambah
			</button>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th width="20">No</th>
							<th width="200">Kode Resep</th>
							<th width="200">Resep</th>
							<th>Aturan Penggunaan</th>
							<th width="80">Aksi</th>
						</tr>
					</thead>

					<tbody>
						@foreach($resep as $reseps)
						<tr>
							<td align="center">{{$loop->iteration}}</td>
							<td align="center">{{$reseps->kode_resep}}</td>
							<td align="center">{{$reseps->nama_resep}}</td>
							<td align="center">{{$reseps->signa}}</td>

							<td align="center">
								<a href="/resep-racik/{{$reseps->id}}/deleteResepRacik" class="btn btn-danger btn-circle btn-sm hapusFoto" title="Hapus">
									<i class="fas fa-trash"></i>
								</a>
								<button class="btn btn-primary btn-circle btn-sm" title="Edit" data-toggle="modal" data-target="#editData{{-- {{$reseps['id']}} --}}">
									<i class="fas fa-edit"></i>
								</button>
								<button class="btn btn-success btn-circle btn-sm" title="Detail" data-toggle="modal" data-target="#detailData{{-- {{$reseps['id']}} --}}">
									<i class="fas fa-eye"></i>
								</button>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


<!-- Modal Tambah Data -->
<div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Foto Slider</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<form action="foto-slider/addFotoSlider" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>

					@csrf

					<div class="form-group">
						<div class="custom-file">
							<input type="file" class="custom-file-input" name="foto" id="foto" required>
							<label class="custom-file-label" for="foto">Pilih foto slider...</label>
							<div class="invalid-feedback">Foto tidak valid</div>
						</div>
					</div>
					{{-- <div class="form-group">
						<label class="form-label">Pilih Foto Slider</label>
						<input type="file" name="foto" id="foto" class="form-control" required>
						<div class="invalid-feedback">Foto tidak valid</div>
					</div> --}}
                    <div class="form-group">
						<label>Judul</label>
						<textarea rows="3" name="judul" id="judul" class="form-control" placeholder="Masukan judul" required></textarea>
						<div class="invalid-feedback">Judul tidak valid</div>
					</div>
					<div class="form-group">
						<label>Deskripsi</label>
						<textarea rows="3" name="deskripsi" id="deskripsi" class="form-control" placeholder="Masukan deskripsi" required></textarea>
						<div class="invalid-feedback">Deskripsi tidak valid</div>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary">Tambah</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection


<script src="{{asset('assets/admin/vendor/jquery/jquery.min.js')}}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

<!-- SCRIPT VALIDASI FORM -->
<script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
