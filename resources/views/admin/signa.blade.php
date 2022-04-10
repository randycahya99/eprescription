@extends('layout.main')

@section('title','E-Prescription - Master Data Signa')

@section('container')

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
			<h6 class="m-0 font-weight-bold text-primary float-left">Data Signa</h6>
			{{-- <button type="button" class="btn  btn-sm btn-primary" data-toggle="modal" data-target="#tambahData" title="Tambah">
				Tambah
			</button> --}}
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th width="20">No</th>
							<th width="150">Kode</th>
							<th>Aturan Pakai</th>
							<th width="80">Aksi</th>
						</tr>
					</thead>

					<tbody>
						@foreach($signa as $signas)
						<tr>
							<td align="center">{{$loop->iteration}}</td>
							<td align="center">{{$signas->signa_kode}}</td>
							<td align="center">{{$signas->signa_nama}}</td>

							<td align="center">
								{{-- <a href="/resep-racik/{{$signas->id}}/deleteResepRacik" class="btn btn-danger btn-circle btn-sm hapusFoto" title="Hapus">
									<i class="fas fa-trash"></i>
								</a>
								<button class="btn btn-primary btn-circle btn-sm" title="Edit" data-toggle="modal" data-target="#editData{{$signas['id']}}">
									<i class="fas fa-edit"></i>
								</button> --}}
								<button class="btn btn-success btn-sm" title="Detail" data-toggle="modal" data-target="#detailData{{$signas['id']}}">
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


<!-- Modal Detail Data -->
@foreach($signa as $signas)
<div class="modal fade" id="detailData{{$signas['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Detail Signa</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">

				<div class="form-group row">
					<p class=" col-sm-4 font-weight-bold">Kode Signa</p>
					<div class="col-sm-8">
						<p>: {{$signas->signa_kode}}</p>
					</div>
				</div>
				<div class="form-group row">
					<p class=" col-sm-4 font-weight-bold">Nama Signa</p>
					<div class="col-sm-8">
						<p>: {{$signas->signa_nama}}</p>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
@endforeach

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
