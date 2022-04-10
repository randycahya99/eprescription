@extends('layout.main')

@section('title','E-Prescription - Master Data Obat & Alkes')

@section('container')

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
			<h6 class="m-0 font-weight-bold text-primary float-left">Data Obat & Alkes</h6>
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
							<th width="150">Kode Obat</th>
							<th width="200">Nama Obat</th>
							<th width="150">Stok</th>
							<th width="80">Aksi</th>
						</tr>
					</thead>

					<tbody>
						@foreach($obat as $obats)
						<tr>
							<td align="center">{{$loop->iteration}}</td>
							<td align="center">{{$obats->obatalkes_kode}}</td>
							<td align="center">{{$obats->obatalkes_nama}}</td>
							<td align="center">{{$obats->stok}}</td>

							<td align="center">
								<a href="/resep-racik/{{$obats->id}}/deleteResepRacik" class="btn btn-danger btn-circle btn-sm hapusFoto" title="Hapus">
									<i class="fas fa-trash"></i>
								</a>
								<button class="btn btn-primary btn-circle btn-sm" title="Edit" data-toggle="modal" data-target="#editData{{-- {{$obats['id']}} --}}">
									<i class="fas fa-edit"></i>
								</button>
								<button class="btn btn-success btn-circle btn-sm" title="Detail" data-toggle="modal" data-target="#detailData{{-- {{$obats['id']}} --}}">
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
