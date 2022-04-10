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
							<td align="center">{{$reseps->signas->signa_nama}}</td>

							<td align="center">
								<a href="/resep-racik/{{$reseps->id}}/deleteResepRacik" class="btn btn-danger btn-circle btn-sm hapusResep" title="Hapus">
									<i class="fas fa-trash"></i>
								</a>
								<button class="btn btn-primary btn-circle btn-sm" title="Edit" data-toggle="modal" data-target="#editData{{$reseps['id']}}">
									<i class="fas fa-edit"></i>
								</button>
								<button class="btn btn-success btn-circle btn-sm" title="Detail" data-toggle="modal" data-target="#detailData{{$reseps['id']}}">
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
				<h5 class="modal-title" id="exampleModalLabel">Tambah Resep Racikan</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<form action="resep-racik/addResepRacikan" method="POST" class="needs-validation" novalidate>

					@csrf

					<div class="form-group">
                        <label for="kode_resep">Kode Resep</label>
                        <input type="text" class="form-control" name="kode_resep" id="kode_resep" placeholder="Tuliskan kode resep" required>
                        <div class="invalid-feedback">Kode resep tidak valid</div>
					</div>
                    <div class="form-group">
						<label for="nama_resep">Nama Resep</label>
						<input type="text" class="form-control" name="nama_resep" id="nama_resep" placeholder="Tuliskan nama resep" required>
						<div class="invalid-feedback">Nama resep tidak valid</div>
					</div>
                    <div class="form-group">
						<label for="obatalkes_id_1">Obat/Alkes 1</label>
						<select class="form-control" name="obatalkes_id_1" id="obatalkes_id_1" required>
							<option value="" selected>Pilih Obat/Alkes</option>

							@foreach($obat as $obats)

							<option value="{{ $obats->id }}">{{ $obats->obatalkes_nama }}</option>

							@endforeach

						</select>
						<div class="invalid-feedback">Obat/alkes 1 tidak valid</div>
					</div>
                    <div class="form-group">
						<label for="qty_obat_1">Takaran Obat/Alkes 1</label>
						<input type="number" class="form-control" name="qty_obat_1" id="qty_obat_1" placeholder="Masukan takaran obat" required>
						<div class="invalid-feedback">Takaran obat/alkes 1 tidak valid</div>
					</div>
                    <div class="form-group">
						<label for="obatalkes_id_2">Obat/Alkes 2</label>
						<select class="form-control" name="obatalkes_id_2" id="obatalkes_id_2" required>
							<option value="" selected>Pilih Obat/Alkes</option>

							@foreach($obat as $obats)

							<option value="{{ $obats->id }}">{{ $obats->obatalkes_nama }}</option>

							@endforeach

						</select>
						<div class="invalid-feedback">Obat/alkes 2 tidak valid</div>
					</div>
                    <div class="form-group">
						<label for="qty_obat_2">Takaran Obat/Alkes 2</label>
						<input type="number" class="form-control" name="qty_obat_2" id="qty_obat_2" placeholder="Masukan takaran obat" required>
						<div class="invalid-feedback">Takaran obat/alkes 2 tidak valid</div>
					</div>
                    <div class="form-group">
						<label for="obatalkes_id_3">Obat/Alkes 3 <b>(opsional)</b></label>
						<select class="form-control" name="obatalkes_id_3" id="obatalkes_id_3">
							<option value="" selected>Pilih Obat/Alkes</option>

							@foreach($obat as $obats)

							<option value="{{ $obats->id }}">{{ $obats->obatalkes_nama }}</option>

							@endforeach

						</select>
						<div class="invalid-feedback">Obat/alkes 3 tidak valid</div>
					</div>
                    <div class="form-group">
						<label for="qty_obat_3">Takaran Obat/Alkes 3 <b>(opsional)</b></label>
						<input type="number" class="form-control" name="qty_obat_3" id="qty_obat_3" placeholder="Masukan takaran obat">
						<div class="invalid-feedback">Takaran obat/alkes 3 tidak valid</div>
					</div>
                    <div class="form-group">
						<label for="signa_id">Signa</label>
						<select class="form-control" name="signa_id" id="signa_id" required>
							<option value="" selected>Pilih Signa</option>

							@foreach($signa as $signas)

							<option value="{{ $signas->id }}">{{ $signas->signa_nama }}</option>

							@endforeach

						</select>
						<div class="invalid-feedback">Signa tidak valid</div>
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


<!-- Modal Edit Data -->
@foreach($resep as $reseps)
<div class="modal fade" id="editData{{$reseps['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Resep Racikan</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<form action="{{$reseps->id}}/updateResepRacikan" method="POST" class="needs-validation" novalidate>
					
                    @csrf
					
					<div class="form-group">
                        <label for="kode_resep">Kode Resep</label>
                        <input type="text" class="form-control" name="kode_resep" id="kode_resep" value="{{$reseps['kode_resep']}}" readonly>
                        <div class="invalid-feedback">Kode resep tidak valid</div>
					</div>
                    <div class="form-group">
						<label for="nama_resep">Nama Resep</label>
						<input type="text" class="form-control" name="nama_resep" id="nama_resep" value="{{$reseps['nama_resep']}}" required>
						<div class="invalid-feedback">Nama resep tidak valid</div>
					</div>
                    <div class="form-group">
						<label for="obatalkes_id_1">Obat/Alkes 1</label>
						<select class="form-control" name="obatalkes_id_1" id="obatalkes_id_1" required>
							<option value="{{$reseps['obatalkes_id_1']}}" selected>{{ !empty($reseps->obats1) ? $reseps->obats1['obatalkes_nama']:'' }}</option>

							@foreach($obat as $obats)

							<option value="{{ $obats->id }}">{{ $obats->obatalkes_nama }}</option>

							@endforeach

						</select>
						<div class="invalid-feedback">Obat/alkes 1 tidak valid</div>
					</div>
                    <div class="form-group">
						<label for="qty_obat_1">Takaran Obat 1</label>
						<input type="number" class="form-control" name="qty_obat_1" id="qty_obat_1" value="{{$reseps['qty_obat_1']}}" required>
						<div class="invalid-feedback">Takaran obat 1 tidak valid</div>
					</div>
                    <div class="form-group">
						<label for="obatalkes_id_1">Obat/Alkes 2</label>
						<select class="form-control" name="obatalkes_id_2" id="obatalkes_id_2" required>
							<option value="{{$reseps['obatalkes_id_2']}}" selected>{{ !empty($reseps->obats2) ? $reseps->obats2['obatalkes_nama']:'' }}</option>

							@foreach($obat as $obats)

							<option value="{{ $obats->id }}">{{ $obats->obatalkes_nama }}</option>

							@endforeach

						</select>
						<div class="invalid-feedback">Obat/alkes 2 tidak valid</div>
					</div>
                    <div class="form-group">
						<label for="qty_obat_2">Takaran Obat 2</label>
						<input type="number" class="form-control" name="qty_obat_2" id="qty_obat_2" value="{{$reseps['qty_obat_2']}}" required>
						<div class="invalid-feedback">Takaran obat 2 tidak valid</div>
					</div>
                    <div class="form-group">
						<label for="obatalkes_id_3">Obat/Alkes 3</label>
						<select class="form-control" name="obatalkes_id_3" id="obatalkes_id_3">
							<option value="{{$reseps['obatalkes_id_3']}}" selected>{{ !empty($reseps->obats3) ? $reseps->obats3['obatalkes_nama']:'' }}</option>

							@foreach($obat as $obats)

							<option value="{{ $obats->id }}">{{ $obats->obatalkes_nama }}</option>

							@endforeach

						</select>
						<div class="invalid-feedback">Obat/alkes 3 tidak valid</div>
					</div>
                    <div class="form-group">
						<label for="qty_obat_3">Takaran Obat 3</label>
						<input type="number" class="form-control" name="qty_obat_3" id="qty_obat_3" value="{{$reseps['qty_obat_3']}}">
						<div class="invalid-feedback">Takaran obat 3 tidak valid</div>
					</div>
                    <div class="form-group">
						<label for="signa_id">Signa</label>
						<select class="form-control" name="signa_id" id="signa_id" required>
							<option value="{{$reseps['signa_id']}}" selected>{{ !empty($reseps->signas) ? $reseps->signas['signa_nama']:'' }}</option>

							@foreach($signa as $signas)

							<option value="{{ $signas->id }}">{{ $signas->signa_nama }}</option>

							@endforeach

						</select>
						<div class="invalid-feedback">Signa tidak valid</div>
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary">Simpan Perubahan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endforeach

<!-- Modal Detail Data -->
@foreach($resep as $reseps)
<div class="modal fade" id="detailData{{$reseps['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Detail Resep</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">

				<div class="form-group row">
					<p class=" col-sm-4 font-weight-bold">Kode Resep</p>
					<div class="col-sm-8">
						<p>: {{$reseps->kode_resep}}</p>
					</div>
				</div>
				<div class="form-group row">
					<p class=" col-sm-4 font-weight-bold">Nama Resep</p>
					<div class="col-sm-8">
						<p>: {{$reseps->nama_resep}}</p>
					</div>
				</div>
				<div class="form-group row">
					<p class=" col-sm-4 font-weight-bold">Komposisi Obat</p>
					<div class="col-sm-8">
						<p>: {{$reseps->obats1->obatalkes_nama}} ({{$reseps->qty_obat_1}} g)</p>
						<p>: {{$reseps->obats2->obatalkes_nama}} ({{$reseps->qty_obat_2}} g)</p>
						{{-- <p>: {{$reseps->obats3->obatalkes_nama}} ({{$reseps->qty_obat_3}} g)</p> --}}
						@if ($reseps->obats3 != NULL)
							<p>: {{$reseps->obats3->obatalkes_nama}} ({{$reseps->qty_obat_3}} g)</p>
						@else
							<p></p>
						@endif
					</div>
				</div>
				<div class="form-group row">
					<p class=" col-sm-4 font-weight-bold">Aturan Pakai</p>
					<div class="col-sm-8">
						<p>: {{$reseps->signas->signa_nama}}</p>
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
